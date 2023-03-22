function calculateAge(birthYear) {
  return 2023 - birthYear;
}
console.log(calculateAge(1963));
function retirement(year, firstName) {
  var age = calculateAge(year);
  var retire = 65 - age;
  console.log(firstName + " retires in " + retire + " years");
}
retirement(1970, "Ademefun");
