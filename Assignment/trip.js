const trip = {
  bills: [124, 48, 268, 180, 42],
  calculateTips: function () {
    this.tips = [];
    this.finalBill = [];
    let percentage;
    this.bills.forEach((bill, index) => {
      if (bill < 50) {
        percentage = 0.2;
      } else if (bill >= 50 && bill < 200) {
        percentage = 0.15;
      } else if (bill > 200) {
        percentage = 0.1;
      }

      this.tips[index] = bill * percentage;
      this.finalBill[index] = bill + bill * percentage;
    });
  },
};

trip.calculateTips();
console.log(trip.tips, trip.finalBill);

// for (let i of trip.bills) {
//   let arr = trip.tips(i);
//   console.log(arr);
// }
function tip(bill) {}
