var teamJohn = [89, 120, 103];
var teamMike = [116, 94, 123];

var teamMary = [97, 134, 105];

console.log("The average of Mary's team is ", average(teamMary));

console.log("The average of John's's team is ", average(teamJohn));

console.log("The average of Mike's team is ", average(teamMike));

function average(arr) {
  sum = Array.from(arr).reduce((a, b) => a + b, 0);
  return sum / 3;
}
if (average(teamJohn) > average(teamMike)) {
  console.log(
    "Bravo, John's team has the highest scores among the duo",
    average(teamJohn)
  );
} else {
  console.log(
    "Bravo, Mike's team has the highest scores among the duo",
    average(teamMike)
  );
}

if (
  average(teamJohn) > average(teamMike) &&
  average(teamJohn) > average(teamMary)
) {
  console.log("Bravo, John's team has the highest scores", average(teamJohn));
} else if (
  average(teamMike) > average(teamJohn) &&
  average(teamMike) > average(teamMary)
) {
  console.log("Bravo, Mike's team has the highest scores", average(teamMike));
} else {
  console.log("Bravo, Mary's team has the highest scores", average(teamMary));
}
