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
// let mountains = ["Everest", "Fuji", "Nanga Parbat"];

// console.log(mountains[0]); // 'Everest'
// console.log(mountains[1]); // 'Fuji'
// console.log(mountains[2]); // 'Nanga Parbat'
// mountains[2] = "K2";
// console.log(mountains);
// let seas = ["Black Sea", "Caribbean Sea", "North Sea", "Baltic Sea"];
// seas.push("Red Sea");

// console.log(seas);
// seas = ["Black Sea", "Caribbean Sea", "North Sea", "Baltic Sea"];
// seas.push("Red Sea");
// console.log(seas);
// seas.unshift("Dead Sea");

// console.log(seas);
// const lastElement = seas.pop();
// console.log(lastElement);
// const firstElement = seas.shift();

// console.log(firstElement);
// let index = seas.indexOf("North Sea");

// console.log(index);
// console.log(Array.isArray(seas));
// let result = 10 + "20";
// console.log(result);
// let energy = {
//   valueOf() {
//     return 100;
//   },
// };

// let currentEnergy = energy - 10;
// console.log(currentEnergy);

// currentEnergy = energy + 100;
// console.log(currentEnergy);

// currentEnergy = energy / 2;
// console.log(currentEnergy);

// currentEnergy = energy * 1.5;
// console.log(currentEnergy);

// let remainder = 5 % -2;
// console.log(remainder); // 1

// remainder = 5 % 2;
// console.log(remainder); // 1

// remainder = 10 % Infinity;
// console.log(remainder); // 10
// num = 17;
// function isOdd(num) {
//   return num % 2;
// }

// console.log(num);
// function say(a, b) {
//   return a * b;
// }
// let result = say(45, 30);
// console.log("Results:", result);
// function add() {
//   let sum = 0;
//   for (let i = 0; i < arguments.length; i++) {
//     sum += arguments[i];
//   }
//   return sum;
// }
// function add(a, b) {
//   return a + b;
// }
// function av

// console.log(add(2, 5, 7, 8));
// console.log(add(3, 5, 7, 1, 4, 76, 4, 8));
// showMe();
// function showMe() {
//   console.log("an hoisting example");
// }
// function add(a, b) {
//   return a + b;
// }
// let sum = add;
// function average(a, b, fn) {
//   return fn(a, b) / 2;
// }
// let result = average(10, 20, sum);
// console.log(result);
// let resturant1 = $124;
// let resturant2 = $48;
// let resturant1 = $268;
// function tip() {
//   return;
// }
//  if (bill >)
// let circles = [10, 20, 30];
// let areas = [];
// let area = 0;
// for (let i = 0; i < circles.length; i++) {
//   area = Math.floor(Math.PI * circles[i] * circles[i]);
//   areas.push(area);
// }
// console.log(areas);
// let areas = circles.map(function (radius) {
//   return Math.floor(Math.PI * radius * radius);
// });
// console
// function say(message) {
//   if (!message) {
//     return;
//   }
//   console.log(message);
// }
// function add(a, b) {
//   return a + b;
// }
// console.log(add(14, 15));
// function compareBy(propertyName) {
//   return function (a, b) {
//     let x = a[propertyName],
//       y = b[propertyName];

//     if (x > y) {
//       return 1;
//     } else if (x < y) {
//       return -1;
//     } else {
//       return 0;
//     }
//   };
// }
// let products = [
//   { name: "iphone", price: 900 },
//   { name: "Samsung Galaxy", price: 850 },
//   { name: "Sony Xpeeria", price: 7000 },
// ];
// console.log("product sorted by name:");
// console.table(products);
// products.sort(compareBy("name"));
// products.sort(compareBy("price"));
// console.table(products);
function cmToIn(length) {
  return length / 2.54;
}
function inToCm(length) {
  return length * 2.54;
}
console.log(inToCm(8));
function convert(fn, length) {
  return fn(length);
}
let inches = convert(cmToIn, 10);
console.log(inches);

let cm = convert(inToCm, 10);
console.log(cm);
