
// $( document ).ready(function() {
//   console.log('ok');

function nextValidate(n) {
  var validNo = document.getElementById('Postleitzahl').value ;
  console.log('validate:'+validNo);
    // var delayInMilliseconds = 1000; //1 second
if(validNo=='')
{
  document.getElementById('Postleitzahl').style.backgroundColor='#F8DDDD';
}else{
// setTimeout(function() {
    $('.tab').addClass('dismiss');

setTimeout(function () { 
    $('.tab').removeClass('dismiss');
}, 200);

    // $('.tab').toggleClass('dismiss');
  
//   n.preventDefault();
 

  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  console.log(currentTab);
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    // document.getElementById("regForm").submit();
    return false;
  }

  // Otherwise, display the correct tab:
  showTab(currentTab);
  // setProgressBar(++current);
// }, delayInMilliseconds);

}
}

function nextPrev(n) {
    // var delayInMilliseconds = 1000; //1 second

// setTimeout(function() {
    $('.tab').addClass('dismiss');

setTimeout(function () { 
    $('.tab').removeClass('dismiss');
}, 200);

    // $('.tab').toggleClass('dismiss');
  
//   n.preventDefault();
 

  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  console.log(currentTab);
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    return false;
  }

  // Otherwise, display the correct tab:
  showTab(currentTab);

}


function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
  return valid; // return the valid status
}
   function animation(){
    var valid = document.getElementById('postal').value ;
    console.log('validate:'+valid);
      // var delayInMilliseconds = 1000; //1 second
  if(valid=='')
  {
    document.getElementById('postal').style.backgroundColor='#F8DDDD';
    }else{


     showTab(6);
var delayInMilliseconds = 3000;
var x=document.getElementsByClassName("tab");

var i;
for (i = 0; i < x.length; i++) {
    x[i].style.display = 'none';
    document.getElementById("progress-bar-wrapper").style.display = 'block';
}
document.getElementById("tab-animate").style.display = 'block';
setTimeout(function() {
  


      document.getElementById("tab-animate").style.display = 'none';
      document.getElementById("tab-form").style.display = "block"
      document.getElementById("progress-bar-wrapper").style.display = 'block';
 

 }, delayInMilliseconds);
}
}
// });