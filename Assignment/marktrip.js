tip = [];
bills = [77, 375, 110, 45];
john_bill = [124, 48, 268, 180, 42];
function tipping(bill, tip) {
  this.bill = [];
  this.tips = [];
  this.finalBill = [];
  let percent;
  this.bills.forEach((bill, index) => {
    if (bill < 100) {
      percent = 0.2;
    } else if (bill >= 100 && bill < 300) {
      percent = 0.1;
    } else if (bill > 300) {
      percent = 0.25;
    }
    this.tip[index] = percent * bill;
    this.finalBill[index] = bill + percent * bill;
  });
}

console.log(tipping(), finalBill);
function average(calculate_average) {
  arrays = [];
  var sum = 0;

  for (let i = 0; i < arrays.length; i++) {
    sum = sum + arrays[i];
  }
  return sum / arrays.length;
}
console.log(average(bills));
console.log(average(john_bill));
