//check for session project
$(document).ready( function(){
  window.sessionStorage;
  if (sessionStorage.projectDesktop == null) {
    console.log('no project generated')
  } else {
    //desktop
    document.getElementById("rand-project-2").innerHTML = sessionStorage.projectDesktop;
    $('#rand-prj-container-2').removeClass('hidden');
  }

  if (sessionStorage.projectMobile == null) {
    console.log('no project generated')
  } else {
    //desktop
    document.getElementById("rand-project").innerHTML = sessionStorage.projectMobile;
    $('#rand-prj-container').removeClass('hidden');
  }
});

//Create two arrays for projects, businesses and names
var projectArray = ['Logo','Website','Flyer','Brochure','Poster','Business Card','Animated Video','Postcard','Illustration','T-Shirt Design'];

var companyArray = ['Leisure Center', 'Primary School', 'Construction', 'Fish Mongers', 'Retirement Home',
'Film Makers', 'Supermarket', 'Taxis and Transport', 'Coffee', 'Attorneys at Law',
 'Pluming', 'Bakery', 'Butler Farm', 'Cricket Club', 'Car Wash',
 'Airport', 'Design Agency', 'Radio', 'Electrical Engineers', 'Zoo',
 'Trains', 'Mechanics', 'Dental Care', 'Computer Repair'];

 var nameArray = ['Brindley Cliff', 'Queensway', 'Mills Grange', 'Port Vay', 'Beech Tree', 'Briggs',
 'Morales', 'Norris', 'Whittaker', 'Carlson & Smith', 'Rockatansky' ,'Castle North' ,'Waddingham' ,'WW' ,'Selborne' ,'Hubble' ,
'One Wave', 'Elton Royd', 'High Woodlands', 'Fast Track', 'Allendale', 'Smile', 'Beresford'];

//variables containing general formating text
var displayOne = ['Your project is a'];
var displayTwo = ['for'];

function getProject() {
//get two random values from each arrays
  var project = projectArray[Math.floor(Math.random() * projectArray.length)];
  var company = companyArray[Math.floor(Math.random() * companyArray.length)];
  var name = nameArray[Math.floor(Math.random() * nameArray.length)];
//print random variables and formating text to page
  //mobile
  $('#rand-prj-container').removeClass('hidden');
  //desktop
  $('#rand-prj-container-2').removeClass('hidden');
  //mobile
  document.getElementById("projectResult").innerHTML = project;
  document.getElementById("companyResult").innerHTML = company;
  document.getElementById("nameResult").innerHTML = name;
  document.getElementById("displayOne").innerHTML = displayOne;
  document.getElementById("displayTwo").innerHTML = displayTwo;

  //desktop
  document.getElementById("projectResult-2").innerHTML = project;
  document.getElementById("companyResult-2").innerHTML = company;
  document.getElementById("nameResult-2").innerHTML = name;
  document.getElementById("displayOne-2").innerHTML = displayOne;
  document.getElementById("displayTwo-2").innerHTML = displayTwo;

  //mobile
  var projectMobile = document.getElementById("rand-project").innerHTML;
  //desktop
  var projectDesktop = document.getElementById("rand-project-2").innerHTML;

  sessionStorage.projectmobile = projectMobile;
  sessionStorage.projectDesktop = projectDesktop;

  console.log(sessionStorage.project);
};
