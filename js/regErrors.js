  var errList = document.getElementById('errorDisplay');
  var errListIn = document.getElementById('errorDisList');
  
  var errList2 = document.getElementById('errorDisplay2');
  var errListIn2 = document.getElementById('errorDisList2');
  
  var error1=document.getElementById("error1");
  var error2=document.getElementById("error2");
  var error3=document.getElementById("error3");
  var error4=document.getElementById("error4");
  var error5=document.getElementById("error5");
  var error6=document.getElementById("error6");
  var error7=document.getElementById("error7");
  
  var conerror1=document.getElementById("conerror1");
  var conerror2=document.getElementById("conerror2");
  var conerror3=document.getElementById("conerror3");
  var conerror4=document.getElementById("conerror4");
  var conerror5=document.getElementById("conerror5");
  var conerror6=document.getElementById("conerror6");
  var conerror7=document.getElementById("conerror7");
  
  function showError(errVariable, errTxt) {
errVariable.className = "formerror"; 
errListIn.innerHTML = errListIn.innerHTML + errTxt;
}

  function showError2(errVariable2, errTxt2) {
errVariable2.className = "formerror"; 
errListIn2.innerHTML = errListIn2.innerHTML + errTxt2;
}