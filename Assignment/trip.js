const trip = {
  bill: [124, 48, 268, 180, 42],
  tip: function calculateTips(bill, tip) {
    if (bill > 0 && bill < 50) {
      tip = 0.2 * bill;
      return tip;
    } else if (bill >= 50 && bill < 200) {
      tip = 0.15 * bill;
      return tip;
    } else if (bill > 200) {
      tip = 0.1 * bill;
      return tip;
    }
  },
};
console.log(trip.tip);
