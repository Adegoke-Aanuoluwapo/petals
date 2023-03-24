john = {
  bills: [124, 48, 268, 180, 42],
  calcTips: function (tip, index) {
    this.tips = [];
    let percentage;
    let sum = 0;

    this.finalBill = [];
    this.bills.forEach((bill, index) => {
      if (bill < 50) {
        percentage = 0.2;
      } else if (bill >= 50 && bill < 200) {
        percentage = 0.15;
      } else {
        percentage = 0.1;
      }
      this.tips[index] = bill * percentage;
      this.finalBill[index] = bill + bill * percentage;
    });
  },
};
john.calcTips();
console.log(john.tips, john.finalBill);

mark = {
  bills: [77, 375, 110, 45],
  calcTips: function (tip, index) {
    this.tips = [];
    let percentage;
    let sum = 0;

    this.finalBill = [];
    this.bills.forEach((bill, index) => {
      if (bill < 100) {
        percentage = 0.2;
      } else if (bill >= 100 && bill < 300) {
        percentage = 0.1;
      } else {
        percentage = 0.25;
      }
      this.tips[index] = bill * percentage;
      this.finalBill[index] = bill + bill * percentage;
    });
  },
};
mark.calcTips();
console.log(mark.tips, mark.finalBill);
function calcAve(arr) {
  sum = Array.from(arr).reduce((a, b) => a + b, 0);
  average = sum / arr.length;
  return average;
}
if (calcAve(mark.tips) > calcAve(john.tips)) {
  console.log("marks family paid the higher tips of " + calcAve(mark.tips));
} else {
  console.log("John's family paid the higher tips " + calcAve(john.tips));
}
