import config
import csv
import utils
import MySQLdb
from datetime import datetime 

# return the list of files within the directory
def getCsvFileName( directory ):
	files = os.listdir( directory )
	return files

def convert2SqlDate( li ):
	print "@@@ convert2SqlDate invoked. li : " + str(li)
	# Convert li[1] to lowercase before using it as dictionary key
	days_in_months = {	
				"jan" : 31, "january" : 31,
				# feb is missing as its number of days depends on the year (leap year or not)
				"mar" : 31, "march" : 31,
				"apr" : 30, "april" : 30,
				"may" : 31,
				"jun" : 30, "june" : 30,
				"jul" : 31, "july" : 31,
				"aug" : 31, "august" : 31,
				"sep" : 30, "sept" : 30, "september" : 30,
				"oct" : 31, "october" : 31,
				"nov" : 30, "november" : 30,
				"dec" : 31, "december" : 31
			}

	month_serial_no = {
						"jan" : 01, "january" : 01,
						"feb" : 02, "february" : 02,
						"mar" : 03, "march" : 03,
						"apr" : 04, "april" : 04,
						"may" : 05,
						"jun" : 06, "june" : 06,
						"jul" : 07, "july" : 07,
						"aug" : 8, "august" : 8,
						"sep" : 9, "sept" : 9, "september" : 9,
						"oct" : 10, "october" : 10,
						"nov" : 11, "november" : 11,
						"dec" : 12, "december" : 12
					}

	if li[2] % 4 == 0 :
		days_in_months["feb"] = 29
		days_in_months["february"] = 29
	else:
		days_in_months["feb"] = 28
		days_in_months["february"] = 28

	date = str(li[2]) + "-" + str( month_serial_no[str(li[1].lower())] )
	
	if int(li[0]) > days_in_months[str(li[1].lower())]:
		li[0] = days_in_months[str(li[1].lower())]
	
	date = date + "-" + str( li[0] )

	return date


def formatIfDate( item ):
	# print " @@@@ formatIfDate invoked"
	try:
		li = item.split("/")
		for i in range(0, len(li) ):
			li[i] = li[i].strip()

		month_list = [	"jan", "january", "feb", "february", "mar", "march", "apr", "april", "may", "jun", \
						"june", "jul", "july", "aug", "august", "sep", "sept", "september", "oct", "october", \
						"nov", "november", "dec", "december" ]

		if ( len(li) == 2 or len(li) == 3 ):
			if li[1].lower() in month_list :
				if li[0].isdigit() and int(li[0]) <= 31:	# changes go in here
					li[0] = int(li[0])
					
					try:
						if not ( li[2].isdigit() and len(li[2]) == 4 ) :
							return item
					except:
						li.append(datetime.now().year)
						print li

					ret = convert2SqlDate( li )
					print "ret : "+ret
					return ret
	except:
		# pass
		print "@@@@ exception caught"

	return item 		# returns the item if the string is not date


def sanitizeInput( arr ):
	for i in range(0, len(arr) ):
		if arr[i].lower() == 'y' or arr[i].lower() == "yes":
			arr[i] = '1'
		elif arr[i].lower() == 'n' or arr[i].lower() == "no":
			arr[i] = '0'
		arr[i] = formatIfDate( arr[i].strip() )

	return arr

# converts python list to string
def list2Str( li ):
	if len(li) <= 0:
		return "()"
	elif len(li) == 1:
		return "(" + str(li[0]) + ")"

	ret = "( " + str(li[0])
	for i in li[1:]:
		ret = ret + ", " + str(i)
	ret = ret + ")"
	
	return ret

# converts list of values to string for sql insert queries
def valuesList2Str( li ):
	if len(li) <= 0:
		return "()"
	elif len(li) == 1:
		return "('" + str(li[0]) + "')"

	ret = "( '" + str(li[0]) + "'"
	for i in li[1:]:
		ret = ret + ", " + "'" + str(i) + "'"
	ret = ret + ")"
	
	return ret

# commits query to db
def executeQuery( query ):
	db = MySQLdb.connect( config.host, config.user, config.password, config.db )

	cur = db.cursor()
	try:
		cur.execute( query )
		db.commit()
		cur.close()
		db.close()
		return True
	except:
		db.rollback()
		cur.close()
		db.close()
		return False

# prepares the query from list and pushes it for db insertion
def push2Db( tablename, attributelist, valueslist ):
	attributestring = list2Str(attributelist)
	valuestring = valuesList2Str(valueslist)

	query = "INSERT INTO "+ tablename + attributestring +" VALUES"+valuestring
	print query
	# UNCOMMENT AFTER TESTING.
	ret = executeQuery( query )

	return ret

def readCsv( filename ):
	linecount = 0
	
	with open( config.parent_dir+"/"+filename, "r+" ) as inputfile :
		reader = csv.reader( inputfile )

		for row in reader:
			print "entered loop"
			linecount += 1
			print "******************  LINE NUMBER : "+str(linecount)+"  ******************"
			if linecount <= 4 or linecount == 6 :
				continue

			# Line #5 contains the overall project timeline. It treats the overall project as a lineItem.
			# Create a special lineItem name to represent/identify the whole project  (especially in the DB)
			if linecount == 5:
				pass

			# CALL THE PUSH TO DB FUNCTION FOR EACH OF THE TABLE FIELDS BELOW
			if linecount >= 7:
				lineitem_name = row[1]
				print "Line Item Name : "+lineitem_name
				
				BRDRequirementsRawValues = row[2:16]
				print "BRDRequirement fields : "+str(BRDRequirementsRawValues)
				BRDRequirementsValues = sanitizeInput(BRDRequirementsRawValues)
				print push2Db(config.tblBRDRequirements, config.BRDRequirementsAttrs, BRDRequirementsValues)
				print "post sanitization of fields : " + str( BRDRequirementsValues )
				print "\n"

				TechDevNeedRawValues = row[16:24]
				print "TechDevNeed fields : "+str(TechDevNeedRawValues)
				TechDevNeedValues = sanitizeInput(TechDevNeedRawValues)
				print push2Db(config.tblTechDevNeed, config.TechDevNeedAttrs, TechDevNeedValues)
				print "post sanitization of fields : " + str( TechDevNeedValues )
				print "\n"

				ContentNeedRawValues = row[24:32]
				print "ContentNeed fields : "+str(ContentNeedRawValues)
				ContentNeedValues = sanitizeInput(ContentNeedRawValues)
				push2Db(config.tblContentNeed, config.ContentNeedAttrs, ContentNeedValues)
				print "post sanitization of fields : " + str( sanitizeInput(ContentNeedRawValues) )
				print "\n"

				TrainingNCommunicationPlanRawValues = row[32:43]
				print "TrainingNCommunicationPlan fields : "+str(TrainingNCommunicationPlanRawValues)
				TrainingNCommunicationPlanValues = sanitizeInput(TrainingNCommunicationPlanRawValues)
				push2Db(config.tblTrainingNCommunicationPlan, config.TrainingNCommunicationPlanAttrs, TrainingNCommunicationPlanValues)
				print "post sanitization of fields : " + str( TrainingNCommunicationPlanValues )
				print "\n"

				CapabilitiesEnhancementRawValues = row[43:46]
				print "CapabilitiesEnhancement fields : "+str(CapabilitiesEnhancementRawValues)
				CapabilitiesEnhancementValues = sanitizeInput(CapabilitiesEnhancementRawValues)
				push2Db(config.tblCapabilitiesEnhancement, config.CapabilitiesEnhancementAttrs, CapabilitiesEnhancementValues)
				print "post sanitization of fields : " + str( CapabilitiesEnhancementValues )
				print "\n"

				CostBenefitRawValues = row[46:51]
				print "CostBenefit fields : "+str(CostBenefitRawValues)
				CostBenefitValues = sanitizeInput(CostBenefitRawValues)
				push2Db(config.tblCostBenefit, config.CostBenefitAttrs, CostBenefitValues)
				print "post sanitization of fields : " + str( CostBenefitValues )
				print "\n"

				RiskMitigationPlanRawValues = row[51:65]
				print "RiskMitigationPlan fields : "+str(RiskMitigationPlanRawValues)
				RiskMitigationPlanValues = sanitizeInput(RiskMitigationPlanRawValues)
				push2Db(config.tblRiskMitigationPlan, config.RiskMitigationPlanAttrs, RiskMitigationPlanValues)
				print "post sanitization of fields : " + str( RiskMitigationPlanValues )
				print "\n"

				GoLivePlanRawValues = row[65:72]
				print "GoLivePlan fields : "+str(GoLivePlanRawValues)
				GoLivePlanValues = sanitizeInput(GoLivePlanRawValues)
				push2Db(config.tblGoLivePlan, config.GoLivePlanAttrs, GoLivePlanValues)
				print "post sanitization of fields : " + str( GoLivePlanValues )
				print "\n"

				ClosureRawValues = row[72:74]
				print "Closure fields : "+str(ClosureRawValues)
				ClosureValues = sanitizeInput(ClosureRawValues)
				push2Db(config.tblClosure, config.ClosureAttrs, ClosureValues)
				print "post sanitization of fields : " + str( ClosureValues )
				print "\n"

		print "Loop ends"

# fname = getCsvFileName(config.parent_dir)
# if len(fname) == 1:
# 	readCsv( fname[1] )

readCsv("GTM_Template_csv.csv")
