// let msg = document.getElementById("message");
// msg.addEventListener("click", (event) => {
//   console.log("clicked");
// });
// let textBox = document.getElementById("message");
// textBox.addEventListener("keydown", (event) => {
//   console.log(`key=${event.key}, code=${event.code}`);
// });
let form = document.getElementById("signup");
console.log(form);
const name = form.elements["name"];
console.log(name);
const email = form.elements["email"];
console.log(email);
const button = form.elements["btn"];
console.log(button);
let fullName = name.value;
function showMessage(input, message, type) {
  const msg = input.parentNode.querySelector("small");
  input.className = type ? "success" : "error";
  return type;
}
function showError(input, message) {
  return showMessage(input, message, false);
}
function showSuccess(input) {
  return showMessage(input, message, true);
}
function hasValue(input, message) {
  if (input.value.trim() === "") {
    return showError(input, message);
  }
  return showSuccess(input);
}
