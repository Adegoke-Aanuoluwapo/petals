function calculateTips(bill, tip) {
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
}
console.log(calculateTips(48));
console.log(calculateTips(124));
console.log(calculateTips(268));

const tip = [];
tip[0] = calculateTips(48);
tip[1] = calculateTips(124);
tip[2] = calculateTips(268);
console.log("The tips paid John's family are:");
console.log(tip);
const bill = [];
bill[0] = 124;
bill[1] = 48;
bill[2] = 268;
console.log("The final amount paid John's family are:");
const amt = [];
amt[0] = tip[0] + bill[0];
amt[1] = tip[1] + bill[1];
amt[2] = tip[2] + bill[2];
console.log(amt);
