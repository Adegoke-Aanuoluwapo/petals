let first = [...document.querySelectorAll(".list li:first-child")];
let last = [...document.querySelectorAll(".list li:last-child")];
console.log(first);
first.forEach((el) => (el.innerHTML = "First"));
last.forEach((el) => (el.innerHTML = "Last"));

console.log(first, last);
// items = document.getElementsByClassName(".list");
// console.log(items);
// items[0].innerHTML = "first";
// x[2].innerHTML = "last";
// x[3].innerHTML = "first";
// x[5].innerHTML = "last";
// x[6].innerHTML = "first";
// x[8].innerHTML = "last";
