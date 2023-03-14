// var firstName = "John";
// console.log(firstName);
// var lastName = "Olatunde";
// var age = 28;
// console.log(
//   "Your name is ",
//   firstName + " " + lastName,
//   "and your age is " + age
// );
// firstName = prompt("Please enter your firstName");
// age = prompt("Please enter your age");
// alert(firstName + "how are you, I could see you are " + age + "years old");
// let person = {
//   firstName: "John",
//   lastName: "Doe",
// };
// console.log(person.firstName);
// let address = {
//   "building no": 3960,
//   street: "North 1st street",
//   state: "CA",
//   country: "USA",
// };
// console.log(address["building no"]);
// console.log(address.state);
// console.log(address["street"]);
// let person = {
//   name: "John",
//   age: 25,
// };
// person.ssn = "123-45-6789";
// person.name = "John Doe";
// person.complexion = "black";
// let person = {
//   name: "John",
//   age: 25,
// };

// let member = person;

// member.age = 26;

// console.log(person);
// console.log(member);
let mountains = ["Everest", "Fuji", "Nanga Parbat"];

console.log(mountains[0]); // 'Everest'
console.log(mountains[1]); // 'Fuji'
console.log(mountains[2]); // 'Nanga Parbat'
mountains[2] = "K2";
console.log(mountains);
let seas = ["Black Sea", "Caribbean Sea", "North Sea", "Baltic Sea"];
seas.push("Red Sea");

console.log(seas);
seas = ["Black Sea", "Caribbean Sea", "North Sea", "Baltic Sea"];
seas.push("Red Sea");
console.log(seas);
seas.unshift("Dead Sea");

console.log(seas);
const lastElement = seas.pop();
console.log(lastElement);
const firstElement = seas.shift();

console.log(firstElement);
let index = seas.indexOf("North Sea");

console.log(index);
