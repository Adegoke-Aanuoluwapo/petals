var teamJohn = [89, 120, 103];
var teamMike = (116, 94, 123);

function avJohn(arr) {
  let sum = 0;
  for (let a of arr) sum += a;
  return sum;
}
console.log("The average of John's's team is ", avJohn([89, 120, 103]) / 3);

function avTeamMike(bar) {
  let sum = 0;
  for (let b of bar) sum += b;
  return sum;
}
console.log("The average of Mike's team is ", avTeamMike([116, 94, 123]) / 3);

var teamMary = [97, 134, 105];

function avTeamMary(car) {
  let sum = 0;
  for (let c of car) sum += c;
  return sum;
}
console.log("The average of Mary's team is ", avTeamMary([97, 134, 105]) / 3);
