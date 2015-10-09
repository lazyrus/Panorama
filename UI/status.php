<!DOCTYPE html>
<html>
	<head>
		<title>Panorama</title>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/npm.js"></script>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>

	<body>

			<div style="margin: 2%"><button class="btn"> < HOME</button></div>
        	<h1>Project Name</h1>


        	<div>
        		<nav class="navbar navbar-default">
		        	<ul class="nav nav-tabs">
		        		<li class="active"><a>BRD Requirements</a></li>
		        		<li><a>Tech Dev Need</a></li>
		        		<li><a>Content Need</a></li>
		        		<li><a>Training & Communication Plan</a></li>
		        		<li><a>Capabilities Enhancement</a></li>
		        		<li><a>Cost Benefit</a></li>
		        		<li><a>Risk Mitigation Plan</a></li>
		        		<li><a>Go Live Plan</a></li>
		        		<li><a>Closure</a></li>
		        	</ul>
	        	</nav>
	        </div>

	    <!-- BRD Requirement table -->
        <div class="module-tabs" id="brd-requirement" style="margin: 0px">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="BRD Ref Number">BRD Ref Number</th>
			        <th title="BRD Date">BRD Date</th>
			        <th title="Approved">Approved</th>
			        <th title="Approved by">Approved by</th>
			        <th title="Approval date">Approval date</th>
			        <th title="Stakeholders">Stakeholders</th>
			        <th title="Stakeholder Biz Units">Stakeholder BU</th>
			        <th title="Expected Impact Biz Units">Expected Impact BU</th>
			        <th title="Stakeholders Approved">Stkhld App..</th>
			        <th title="Stk App Date">Stk App Date</th>
			        <th title="Responsible">Resp..</th>
			        <th title="Accountable">Acc..</th>
			        <th title="Consulted">Consulted</th>
			        <th title="Informed">Infd..</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>420</td>
			        <td>12-June-2015</td>
			        <td>Y</td>
			        <td>Random Guy</td>
			        <td>13-June</td>
			        <td>BC, MC</td>
			        <td>MD, BD</td>
			        <td>SD</td>
			        <td>Y</td>
			        <td>21-Jun</td>
			        <td>NaMo</td>
			        <td>MaMo</td>
			        <td>KaMo</td>
			        <td>Komodo</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>500</td>
			        <td>14-June-2015</td>
			        <td>Y</td>
			        <td>Another Random Guy</td>
			        <td>16-June</td>
			        <td>BC, MC</td>
			        <td>MD, BD</td>
			        <td>SD</td>
			        <td>Y</td>
			        <td>20-Jun</td>
			        <td>Bhak</td>
			        <td>Jaa na be</td>
			        <td>Kya be</td>
			        <td>Dongo</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>32</td>
			        <td>14-June-2015</td>
			        <td>Y</td>
			        <td>Random Guy again</td>
			        <td>20-June</td>
			        <td>MC, BC</td>
			        <td>BD, MD</td>
			        <td>SD</td>
			        <td>Y</td>
			        <td>21-Jun</td>
			        <td>Al</td>
			        <td>Lorem</td>
			        <td>Ipsum</td>
			        <td>Randum</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>

	    <!-- Tech Dev Need table -->
        <div class="module-tabs" id="tech-dev-need" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Tech Requirement">Tech Req..</th>
			        <th title="Development Time Estimate">Dev Time Est..</th>
			        <th title="Development Start Date">Dev Start Date</th>
			        <th title="Development End Date">Dev End Date</th>
			        <th title="Responsible">Resp..</th>
			        <th title="Accountable">Acc..</th>
			        <th title="Consulted">Consulted</th>
			        <th title="Informed">Infd..</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Y</td>
			        <td>2 months</td>
			        <td>13-June</td>
			        <td>21-Jun</td>
			        <td>NaMo</td>
			        <td>MaMo</td>
			        <td>KaMo</td>
			        <td>Komodo</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Y</td>
			        <td>Bahut din</td>
			        <td>16-June</td>
			        <td>20-Jun</td>
			        <td>Bhak</td>
			        <td>Jaa na be</td>
			        <td>Kya be</td>
			        <td>Dongo</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Y</td>
			        <td>Random Guy again</td>
			        <td>20-June</td>
			        <td>21-Jun</td>
			        <td>Al</td>
			        <td>Lorem</td>
			        <td>Ipsum</td>
			        <td>Randum</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Content Need table -->
        <div class="module-tabs" id="content-need" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Content Creation Required">Content Creation Req..</th>
			        <th title="Content Created By">Content Created By</th>
			        <th title="Content Approval By">Content Approval By</th>
			        <th title="Content Approved">Content Approved</th>
			        <th title="Responsible">Resp..</th>
			        <th title="Accountable">Acc..</th>
			        <th title="Consulted">Consulted</th>
			        <th title="Informed">Infd..</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Y</td>
			        <td>Koi To hai</td>
			        <td>Ye bhi koi hai</td>
			        <td>Y</td>
			        <td>NaMo</td>
			        <td>MaMo</td>
			        <td>KaMo</td>
			        <td>Komodo</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Y</td>
			        <td>Ek Banda</td>
			        <td>Ek aur banda</td>
			        <td>N</td>
			        <td>Bhak</td>
			        <td>Jaa na be</td>
			        <td>Kya be</td>
			        <td>Dongo</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>Mrs Incredible</td>
			        <td>Y</td>
			        <td>Al</td>
			        <td>Lorem</td>
			        <td>Ipsum</td>
			        <td>Randum</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Training & Communication Plan table-->
        <div class="module-tabs" id="training-n-communication-plan" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Communicated to End User">Communicated to User</th>
			        <th title="Internal Business Users communicated">Internal BU comm..</th>
			        <th title="Communication Sent Date">Communication Sent Date</th>
			        <th title="Training Required">Training Required</th>
			        <th title="Training Provided">Training Provided</th>
			        <th title="Training Initiation Date">Training Start Date</th>
			        <th title="Training Completion Date">Training End Date</th>
			        <th title="Responsible">Resp..</th>
			        <th title="Accountable">Acc..</th>
			        <th title="Consulted">Consulted</th>
			        <th title="Informed">Infd..</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Y</td>
			        <td>Koi To hai</td>
			        <td>20-June</td>
			        <td>Y</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>20-June</td>
			        <td>NaMo</td>
			        <td>MaMo</td>
			        <td>KaMo</td>
			        <td>Komodo</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Y</td>
			        <td>Ek Banda</td>
			        <td>20-June</td>
			        <td>N</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>20-June</td>
			        <td>Bhak</td>
			        <td>Jaa na be</td>
			        <td>Kya be</td>
			        <td>Dongo</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>20-June</td>
			        <td>N</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>20-June</td>
			        <td>Al</td>
			        <td>Lorem</td>
			        <td>Ipsum</td>
			        <td>Randum</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Capabilities Enhancement table -->
        <div class="module-tabs" id="capabilities-enhancement" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Capability Enhancement">Capability Enhancement</th>
			        <th title="Capability Enhancement Impact Areas">Capability Enhancement Impact Areas</th>
			        <th title="Capability Enhancement Measurement">Capability Enhancement Measurement</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Y</td>
			        <td>Koi To hai</td>
			        <td>Ye bhi koi hai</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Y</td>
			        <td>Ek Banda</td>
			        <td>Ek aur banda</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>Mrs Incredible</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Cost Benefit table -->
        <div class="module-tabs" id="cost-benefit" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Checked By">Checked By</th>
			        <th title="Cost Assigned to Biz Units">Cost Assigned to BU</th>
			        <th title="Pass On By">Pass On By</th>
			        <th title="Cost Approval">Cost Approval</th>
			        <th title="Approved By">Approved By</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Mr Incredible</td>
			        <td>Y</td>
			        <td>Flash</td>
			        <td>Y</td>
			        <td>Mrs Incredible</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Mr Incredible</td>
			        <td>Y</td>
			        <td>Ek Banda</td>
			        <td>Y</td>
			        <td>Ek aur banda</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Bhangi</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>Y</td>
			        <td>Mrs Incredible</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Risk Mitigation Plan table-->
        <div class="module-tabs" id="risk-mitigation-plan" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Pre Launch Check List">Pre Launch Check List</th>
			        <th title="UAT Required">UAT reqd</th>
			        <th title="UAT Conducted By">UAT Conducted By</th>
			        <th title="UAT Date">UAT Date</th>
			        <th title="Vetted by Stakeholders">Vetted by Stakeholders</th>
			        <th title="Feedback Taken From">Feedback Taken From</th>
			        <th title="Feedback">Feedback</th>
			        <th title="Feedback Incorporated">Feedback Incorporated</th>
			        <th title="Feedback Incorporation Date">Feedback Incorporation Date</th>
			        <th title="Final UAT">Final UAT </th>
			        <th title="UAT Conducted By">UAT Conducted By</th>
			        <th title="Final Sign Off">Final Sign Off</th>
			        <th title="GTM Sign Off">GTM Sign Off</th>
			        <th title="SVP Sign Off">SVP Sign Off</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>Lambi Si checklist</td>
			        <td>Y</td>
			        <td>Koi To hai</td>
			        <td>20-June</td>
			        <td>Y</td>
			        <td>Chutiye Log</td>
			        <td>Bhasad</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>Kuch Bhi</td>
			        <td>NaMo</td>
			        <td>Y</td>
			        <td>Y</td>
			        <td>Y</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>Another checklist</td>
			        <td>Y</td>
			        <td>Ek Banda</td>
			        <td>20-June</td>
			        <td>N</td>
			        <td>Chutiye Log</td>
			        <td>Bhasad</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>Kuch Bhi</td>
			        <td>NaMo</td>
			        <td>Y</td>
			        <td>Y</td>
			        <td>Y</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>Lorem Ipsum Randum</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>20-June</td>
			        <td>N</td>
			        <td>The Incredibles</td>
			        <td>SOS</td>
			        <td>Y</td>
			        <td>20-June</td>
			        <td>Lorem</td>
			        <td>Ipsum</td>
			        <td>Y</td>
			        <td>Y</td>
			        <td>Y</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Go Live Plan table -->
        <div class="module-tabs" id="go-live-plan" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Launch Date">Launch Date</th>
			        <th title="Post Launch Support Needed">Post Launch Support Needed</th>
			        <th title="Post Launch Support Provided By">Post Launch Support Provided By</th>
			        <th title="Program Status">Program Status</th>
			        <th title="Post Launch Risk Assessment Done">Post Launch Risk Assessment Done</th>
			        <th title="Post Launch Risk Assessment Done By">Post Launch Risk Assessment Done By</th>
			        <th title="Remarks">Remarks</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>12-July-2023</td>
			        <td>Y</td>
			        <td>Koi To hai</td>
			        <td>Fucked Up</td>
			        <td>Y</td>
			        <td>NaMo</td>
			        <td>Doldrums</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>12-July-2023</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>Duh!!</td>
			        <td>Y</td>
			        <td>Mrs Incredible</td>
			        <td>Huh Waht!!</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>12-July-2023</td>
			        <td>Y</td>
			        <td>Mr Incredible</td>
			        <td>Lorem</td>
			        <td>Y</td>
			        <td>Mah Nigga</td>
			        <td>Randum!!</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>


	    <!-- Closure table -->
        <div class="module-tabs" id="closure" style="margin: 0px; display: none">

	        <table class='table table-bordered table-condensed'>
	            <thead>
			      <tr class="info">
			        <th title="Line Items">Line Items</th>
			        <th title="Program Closure Date">Program Closure Date</th>
			        <th title="Program Closure Comment">Program Closure Comment</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td class="warning">PHOENIX</td>
			        <td>12-July-2023</td>
			        <td>Doldrums</td>
			      </tr>
			      <tr>
			        <td class="warning">Stakeholder's Meet</td>
			        <td>12-July-2023</td>
			        <td>Huh Waht!!</td>
			      </tr>
			      <tr>
			        <td class="warning">ORM Escalation Management</td>
			        <td>12-July-2023</td>
			        <td>Randum!!</td>
			      </tr>
			    </tbody>
	        </table>

	        <button class="btn btn-primary" style="margin-left: 48%">EDIT</button>
	    </div>

	</body>
</html>

<?php

?>