function Square() {
  val = document.getElementById("square-input").value;
  square = Number(val) * Number(val);

  output = document.getElementById("square-output");
  output.value = square;
}
btn1 = document.getElementById("square-button");
btn1.addEventListener("click", Square);
function Half() {
  ave = parseFloat(document.getElementById("half-input").value);
  half = ave / 2;
  halfOutput = document.getElementById("half-output").value;
  halfOutput = half;
}
btn2 = document.getElementById("half-button");
btn2.addEventListener("click", Half);
function Area() {
  num = document.getElementById("");
}
