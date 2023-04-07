const first = document.querySelector("p");
console.log(first);
const second = document.querySelector("#second");
console.log(second);
const third = document.querySelector("#third");
console.log(third);
const fourth = document.querySelector("#fourth");
console.log(fourth);
const par = [...document.querySelectorAll("p")];
console.log(par);
fourth.textContent = "Fourth Paragraph";
for (let con of par) {
  console.log(`${par}= ${par.textContent}`);
}
//Setting an attribute
first.setAttribute("secured", "true");
second.setAttribute("secured", "false");
third.setAttribute("position", "three");
fourth.setAttribute("number", "four");

////Number 2
first.style.color = "green";
first.style.background = "pink";
second.style.fontSize = "24px";
third.style.fontFamily = "verdana";
par.forEach((el) => {
  el.firstElement.style.color = "green";
});
par.forEach((el) => {
  el.thirdElementSibling.style.color = "green";
});
