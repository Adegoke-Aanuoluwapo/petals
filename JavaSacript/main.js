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
// function cmToIn(length) {
//   return length / 2.54;
// }
// function inToCm(length) {
//   return length * 2.54;
// }
// console.log(inToCm(8));
// function convert(fn, length) {
//   return fn(length);
// }
// let inches = convert(cmToIn, 10);
// console.log(inches);

// let cm = convert(inToCm, 10);
// console.log(cm);
// let show = function () {
//   console.log("Anonymous fuction");
// };
// show();
// setTimeout(function () {
//   console.log("Execute later afterward after 1second");
// }, 2000);
// (function () {
//   console.log("IIFE");
// })();
// let show = function () {
//   console.log("Anonymous function");
// };
// show();
// let show = () => {
//   console.log("Anonymous function");
// };
// show();
// let add = function (a, b) {
//   return a + b;
// };
// console.log(add(100, 46));
// // let add = (a, b) => a + b;
// // console.log(add(23, 27));
// let div = (a, b) => a / b;
// console.log(div(40, 8));
// let prod = (c, d) => c * d;
// console.log(prod(45, 30));
// square = (b) => b * b;
// console.log(square(50));
// let y = 10;
// let result = square(y);
// console.log(result);
// console.log(y);
// let person = {
//   name: "John",
//   age: 25,
// };
// function increaseAge(obj) {
//   obj.age += 1;
// }
// increaseAge(person);
// console.log(person);

// function countDown(fromNumber) {
//   console.log(fromNumber);
// }
// countDown(5);
// function countDown(fromNumber) {
//   console.log(fromNumber);
//   let nextNumber = fromNumber - 2;

//   if (nextNumber > 0) {
//     countDown(nextNumber);
//   }
// }
// countDown(9);
// let countDown = function f(fromNumber) {
//   console.log(fromNumber);
//   let nextNumber = fromNumber - 1;
//   if (nextNumber > 0) {
//     f(nextNumber);
//   }
// };
// let newYearCountDown = countDown;
// countDown = null;
// newYearCountDown(10);
// function sum(n) {
//   if (n <= 1) {
//     return n;
//   }
//   return n + sum(n - 1);
// }

// console.log(sum(5));

// say = (message = "Hi") => message;
// console.log(say());
// function say(message) {
//   message = typeof message !== "undefined" ? message : "Hi";
//   console.log(message);
// }
// say();
// function createDiv(
//   height = "100px",
//   width = "100px",
//   border = "solid 1px red"
// ) {
//   let div = document.createElement("div");
//   div.style.height = heaight;
//   div.style.width = width;
//   div.style.border = border;
//   document.body.appendChild(div);
//   return div;
// }
// createDiv();
// function put(toy, toyBox = []) {
//   toyBox.push(toy);
//   return toyBox;
// }
// console.log(put("Toy Car"));

// console.log(put("Teddy Bear"));
// function date(d = today()) {
//   console.log(d);
// }
// function today() {
//   return new Date().toLocaleDateString("en-US");
// }
// date();
// function bill(){

// }
let taxRate = () => 0.1;
let getPrice = function (price, tax = price * taxRate()) {
  return price + tax;
};
let fullPrice = getPrice(100);
console.log(fullPrice);

function add(x, y = 1, z = 2) {
  console.log(arguments.length);
  return x + y + z;
}
add(10, 23, 10, 30);
add(10, 20);
add(10, 20, 30);

// let person = {
//   firstName: "John",
//   lastName: "Doe",
//   greet: function () {
//         console.log('Hello, World!');
// };
// console.log(person.firstName);
// function greet() {
//   console.log("Hello" + person.firstName + person.lastName);
// }
// greet();
let person = {
  firstName: "John",
  lastName: "Doe",
  greet: function () {
    console.log("Helo, World");
  },
  getFullName: function () {
    return this.firstName + " " + this.lastName;
  },
};
console.log(person.getFullName());
