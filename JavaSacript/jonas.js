// function calculateAge(birthYear) {
//   return 2023 - birthYear;
// }
// console.log(calculateAge(1963));
// function retirement(year, firstName) {
//   var age = calculateAge(year);
//   var retire = 65 - age;
//   if (retire > 0) {
//     console.log(firstName + " retires in " + retire + " years");
//   } else {
//     console.log(firstName + "  has retired");
//   }
// }
// retirement(1970, "Ademefun");
// retirement(1997, "Ojindo");
// retirement(1956, "Alade");
// var whatDoYouDo = function (job, firstName) {
//   switch (job) {
//     case "teacher":
//       return firstName + " You have chosen the best profession in life";
//     case "drive":
//       return firstName + " Drives in Lisbon";
//     case "designer":
//       return firstName + "designs beautiful website ";

//     default:
//       return firstName + " does something else";
//   }
// };
// console.log(whatDoYouDo("teacher", "Agunbiade"));
function calculateTips(bill, tip) {
  this.tips = [];
  this.bills = [124, 48, 268];
  let percentage;
  this.finalbill = [];
  this.bills.forEach((bill, index) => {
    if (bill < 50) {
      percentage = 0.2;
    } else if (bill >= 50 && bill <= 200) {
      percentage = 0.15;
    } else if (bill > 200) {
      percentage = 0.1;
    }
    this.tips[index] = bill * percentage;
    this.finalbill[index] = bill + bill * percentage;
  });
}
calculateTips();
console.log(tips);
console.log(finalbill);
