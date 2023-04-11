function Square() {
  val = document.getElementById("square-input").value;
  square = Number(val) * Number(val);

  output = document.getElementById("square-output");
  output.value = square;
}
btn1 = document.getElementById("square-button");
btn1.addEventListener("click", Square);
function Half() {
  valu = document.getElementById("half-input").value;
  half = parseFloat(valu) / 2;
  halfOutput = document.getElementById("half-output");
  halfOutput.value = half;
}
btn2 = document.getElementById("half-button");
btn2.addEventListener("click", Half);
function Area() {
  num = document.getElementById("area-input").value;
  area = (Number(num) * 22) / 7;
  areaOut = document.getElementById("area-output");
  areaOut.value = area;
}
btn4 = document.getElementById("area-button");
btn4.addEventListener("click", Area);
function Fraction() {
  frac = document.getElementById("percent1-input").value;
  fraction = parseFloat(frac) / 100;
}
