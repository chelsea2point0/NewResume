var bio = {
	"name" : "Chelsea Schaefer",
	"role" : "Web Developer",
	"contacts" : {
		"mobile" : "508-797-2424",
		"email" : "chelseajoyschaefer@gmail.com",
		"github" : "chelsea2point0",
		"twitter" : "@chels_schaefer",
		"location" : "795 Elm Street, Manchester, NH 03101"
	},
	"skills" : [
		"HTML/CSS", " JavaScript", " Training", "Customer Service", "Attention to Detail"
		]
};

var education = {
	"schools": [
	{
		"name": "Nashua Community College",
		"city": "Nashua, NH",
		"degree": "Certificate",
		"major": "Internet Application Development",
		"dates": "August 2015 - December 2015",
		"url": "http://www.nashuacc.edu",
		"location": "Nashua Community College, Nashua, New Hampshire"
	},
	{
		"name": "Assumption College",
		"city": "Worcester, MA",
		"degree": "Master of Arts",
		"major": "School Counseling",
		"dates": "September 2010 - May 2012",
		"url": "http://www.assumption.edu",
		"location": "Assumption College, Worcester, MA"
	},
	{
		"name": "University of New Hampshire",
		"city": "Durham, NH",
		"degree": "Bachelor of Arts",
		"major": "Psychology",
		"dates": "September 2006 - May 2010",
		"url": "http://www.unh.edu",
		"location": "University of New Hampshire, 105 Main Street, Durham, NH"
	}
	]
};

var work = {
	"jobs": [
	{
		"employer": "REB/PAC Business Products",
		"title": "Web Developer",
		"dates": "July 2015 - August 2015",
		"location": "Pine Hill Road, Weare, NH",
		"description": "Contract position to update client's website. Maintained original webpage content but created a more visually appealing, user-friendly version using HTML, CSS, bootstrap and jQuery."
	},
	{
		"employer": "Southern New Hampshire University",
		"title": "Lead Training Manager",
		"dates": "September 2014 - June 2015",
		"location": "33 South Commercial St, Manchester, NH",
		"description": "Responsible for managing a team of 5 Training Managers and 1 Quality Assurance Manager for the Academic Advising staff. Designed, developed, and updated training manuals and job aids for both new and current Academic Advisors."
	},
	{
		"employer": "Southern New Hampshire University",
		"title": "Training Manager",
		"dates": "July 2013 - August 2014",
		"location": "South Commercial St, Manchester, NH",
		"description": "Responsible for design and delivery of onboarding training to all Academic Advising staff. Collaborated with leadership team to ensure that training topics and methods aligned with department goals. Also maintained training materials and created training videos."	
	},	
	{
		"employer": "Southern New Hampshire University",
		"title": "Academic Advisor",
		"dates": "June 2012 - July 2013",
		"location": "South Commercial St, Manchester, NH",
		"description": "Provided Academic Advising services to new students within Liberal Arts undergraduate degree programs. Recommended and registered students for courses based upon degree requirements. Assisted with study skills and connecting students with academic resources for success."
	}
	]
};


function locationizer(work_obj) {
	var locationArray = [];

	for (job in work_obj.jobs) {
		var newLocation = work_obj.jobs[job].location;
		locationArray.push(newLocation);
	}

	return locationArray;
}

// map
$("#map-div").append(googleMap);




