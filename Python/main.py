import config
import csv

def getcsvfilename( directoryname ):
	files = os.listdir( directoryname )
	return files

def readcsv( filename ):
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

# fname = getcsvfilename(config.parent_dir)
# if len(fname) == 1:
# 	readcsv( fname[1] )

readcsv("GTM_Template_csv.csv")
