
const employeePayRate = 10.50;

function payCalculator(){

  var employeeHours1 = parseInt(document.getElementById("employeeInput1").value);
  var employeeHours2 = parseInt(document.getElementById("employeeInput2").value);
  var employeeHours3 = parseInt(document.getElementById("employeeInput3").value);
  var employeeHours = [employeeHours1, employeeHours2, employeeHours3];
  var employeeGrossPay = [employeeHours.length];

  for (var i = 0; i < employeeHours.length; i++){
    employeeGrossPay[i] = calculator(employeeHours[i]);
  }
  for (var i = 0; i < employeeGrossPay.length; i++){
    var j = i + 1;
    document.writeln("<h1>Employee number " + j + "'s pay this week is $" + employeeGrossPay[i].toFixed(2));
  }
}
function calculator (hours){
  if (hours > 40){
    var overtimeHours = hours - 40;
    return overtimeHours * 1.5 * employeePayRate + employeePayRate * 40;
  }
  else {
    return employeePayRate * hours;
  }
}
