let input = document.getElementById("tbuser");
console.log(input);
let output = document.querySelector("#tbuser");
console.log(output);
let button = document.getElementById("btn1");
console.log(btn1);
const out1 = document.getElementById("output1");

function fun1() {
  out1.innerHTML = input.value;
}
btn1.addEventListener("click", fun1);
