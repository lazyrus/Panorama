import config
import csv

# return the list of files within the directory
def getCsvFileName( directory ):
	files = os.listdir( directory )
	return files

# converts python list to string to be appended to mysql query
def list2Str( li ):
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
def push2Db( tablename, datalist ):
	sqlstring = list2Str(datalist)

	query = "INSERT INTO "+ tablename +" VALUES"+sqlstring
	ret = executeQuery( query )

	return ret

def readCsv( filename ):
	linecount = 0
	
	with open( config.parent_dir+"/"+filename, "r+" ) as inputfile :
		reader = csv.reader( inputfile )

		print inputfile
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
				
				BRDRequirementsList = row[2:16]
				print "BRDRequirement fields : "+str(BRDRequirementsList)

				TechDevNeedList = row[16:24]
				print "TechDevNeed fields : "+str(TechDevNeedList)

				ContentNeedList = row[24:32]
				print "ContentNeed fields : "+str(ContentNeedList)

				TrainingNCommunicationPlanList = row[32:43]
				print "TrainingNCommunicationPlan fields : "+str(TrainingNCommunicationPlanList)

				CapabilitiesEnhancementList = row[43:46]
				print "CapabilitiesEnhancement fields : "+str(CapabilitiesEnhancementList)

				CostBenefitList = row[46:51]
				print "CostBenefit fields : "+str(CostBenefitList)

				RiskMitigationPlanList = row[51:65]
				print "RiskMitigationPlan fields : "+str(RiskMitigationPlanList)

				GoLivePlanList = row[65:72]
				print "GoLivePlan fields : "+str(GoLivePlanList)

				ClosureList = row[72:74]
				print "Closure fields : "+str(ClosureList)

		print "Loop ends"

# fname = getCsvFileName(config.parent_dir)
# if len(fname) == 1:
# 	readCsv( fname[1] )

readCsv("GTM_Template_csv.csv")
