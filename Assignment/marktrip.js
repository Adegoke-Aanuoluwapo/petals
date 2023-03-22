tip = [];
bills = [77, 375, 110, 45];
function tipping(bill, tip) {
  this.bill = [];
  this.tip = [];
  this.percent = percent;
  this.bills.forEach((bill, index) => {
    if (bill < 100) {
      percent = 0.2;
      tip = percent * bill;
    } else if (bill >= 100 && bill < 300) {
      percent = 0.1;
      tip = percent * bill;
    } else if (bill > 300) {
      percent = 0.25;
      tip = percent * bill;
    }
    this.tip[index] = percent * bill;
    this.finalBill[index] = bill + percent * bill;
  });
}
