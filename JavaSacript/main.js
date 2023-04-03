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
// let taxRate = () => 0.1;
// let getPrice = function (price, tax = price * taxRate()) {
//   return price + tax;
// };
// let fullPrice = getPrice(100);
// console.log(fullPrice);

// function add(x, y = 1, z = 2) {
//   console.log(arguments.length);
//   return x + y + z;
// }
// add(10, 23, 10, 30);
// add(10, 20);
// add(10, 20, 30);

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
// let person = {
//   firstName: "John",
//   lastName: "Doe",
//   greet: function () {
//     console.log("Helo, World");
//   },
//   getFullName: function () {
//     return this.firstName + " " + this.lastName;
//   },
// };
// console.log(person.getFullName());
// function Person(firstName, lastName) {
//   this.firstName = firstName;
//   this.lastName = lastName;
//   this.getFullName = function () {
//     return this.firstName + " " + this.lastName;
//   };
// }
// let person = new Person("John", "Doe");
// console.log(person.getFullName());

// function calculateTips(bill, tip) {
//   if (bill > 0 && bill < 50) {
//     tip = 0.2 * bill;
//     return tip;
//   } else if (bill >= 50 && bill < 200) {
//     tip = 0.15 * bill;
//     return tip;
//   } else if (bill > 200) {
//     tip = 0.1 * bill;
//     return tip;
//   }
// }
// console.log(calculateTips(48));
// console.log(calculateTips(124));
// console.log(calculateTips(268));

// const tip = [];
// tip[0] = calculateTips(48);
// tip[1] = calculateTips(124);
// tip[2] = calculateTips(268);
// console.log("The tips paid John's family are:");
// console.log(tip);
// const bill = [];
// bill[0] = 124;
// bill[1] = 48;
// bill[2] = 268;
// console.log("The final amount paid John's family are:");
// const amt = [];
// amt[0] = tip[0] + bill[0];
// amt[1] = tip[1] + bill[1];
// amt[2] = tip[2] + bill[2];
// console.log(amt);
// function Person(firstName, lastName) {
//   console.log(new.target);
//   this.firstName = firstName;
//   this.lastName = lastName;

//   this.getFullName = function () {
//     return this.firstName + " " + this.lastName;
//   };
// }
// let person = new Person("John", "Doe");
// function Person(firstName, lastName) {
//   if (!new.target) {
//     throw Error("Cannot be called without the new keyword");
//   }
//   this.firstName = firstName;
//   this.lastName = lastName;
// }
// Person();
// let person = { name: "John" };

// console.log(person);
// console.log(person.name);
// console.log(person.toString());
// console.log(Object.prototype);
// console.log(typeof Object);
// function Person(name) {
//   this.name = name;
// }
// console.log(Person);
// console.log(Person.prototype);
// Person.prototype.greet = function () {
//   return "Hi, I'm " + this.name + "!";
// };
// let p1 = new Person("John");
// let greeting = p1.greet();
// console.log(greeting);
// let s = p1.toString();
// console.log(s);
// var firstName = "John";
// var age = 33;
// age >= 18
//   ? console.log(firstName + " drinks beer")
//   : console.log(firstName + " drinks juice");
// var drink = age >= 18 ? "beer" : "juice";
// console.log(drink);
// var job = "teacher";
// function Person(firstName, lastName) {
//   this.firstName = firstName;
//   this.lastName = lastName;
// }

// Person.prototype.getFullName = function () {
//   return this.firstName + " " + this.lastName;
// };
// let p1 = new Person("John", "Doe");
// let p2 = new Person("Jane", "Doe");
// let p3 = new Person("Jane", "Olutoroti");
// console.log(p1.getFullName());
// console.log(p1.getFullName());
// console.log(p3.getFullName());

// class Person {
//   constructor(firstName, lastName) {
//     this.firstName = firstName;
//     this.lastName = lastName;
//   }
//   getFullName() {
//     return this.firstName + " " + this.lastName;
//   }
// }
// let p4 = new Person("James", "Brown");
// let p5 = new Person("Theresa", "May");

// console.log(p4.getFullName());
// console.log(p5.getFullName());
// class Person {
//   constructor(name) {
//     this.name = name;
//   }
// }
// let person = new Person("John");
// console.log(person.name);
// class Person {
//   constructor(name) {
//     this.setName(name);
//   }
//   getName() {
//     return this.name;
//   }
//   setName(newName) {
//     newName = newName.trim();
//     if (newName === "") {
//       throw "The name cannot br empty";
//     }
//     this.name = newName;
//   }
// }
// let person = new Person("Jane Doe");
// console.log(person);
// person.setName("Jane Smith");
// console.log(person.getName());
// let person = {
//   name: "John Doe",
//   greet: function () {
//     return "Hi, I'm " + this.name;
//   },
// };
// console.log(person.name);
// console.log(person.greet());
// console.log(person.toString());
// console.log(person.__proto__);
// let teacher = {
//   teach: function (subject) {
//     return " I can teach " + subject;
//   },
// };
// teacher.__proto__ = person;
// console.log(teacher.name);
// console.log(teacher.greet());
// let person = {
//   name: "John Doe",
//   greet: function () {
//     return "Hi, I'm " + this.name;
//   },
// };
// let teacher = Object.create(person);
// teacher.name = "Jane Doe";
// teacher.teach = function (subject) {
//   return "I can teach " + subject;
// };
// console.log(teacher);
// let counter = {
//   count: 0,
//   next: function () {
//     return ++this.count;
//   },
// };
// console.log(counter.next());
// console.log(this === window);
// this.color = "Green";
// console.log(window.color);

// function show() {
//   "use strict";
//   console.log(this === undefined);
//   function display() {
//     console.log(this === undefined);
//   }
//   display();
// }
// show();
// window.show();
// let car = {
//   brand: "Honda",
//   getBrand: function () {
//     return this.brand;
//   },
// };

// console.log(car.getBrand());
// let brand = car.getBrand;
// console.log(brand());
// function factory(aClass) {
//   return new aClass();
// }
// let greeting = factory(
//   class {
//     sayHi() {
//       console.log("Hi");
//     }
//   }
// );
// greeting.sayHi();
// let greeting = factory(
//   class {
//     sayHi() {
//       console.log("Hi");
//     }
//   }
// );
// greeting.sayHi();
// let app = new (class {
//   constructor(name, age) {
//     this.name = name;
//     this.age = age;
//   }
//   start() {
//     console.log(`Starting the ${this.name} in the age ${this.age}`);
//   }
// })("Awesome App");
// app.start();
// let propName = "c";

// const rank = {
//   a: 1,
//   b: 2,
//   [propName]: 5,
// };
// console.log(rank.a);
// let name = "fullName";

// class Person {
//   constructor(firstName, lastName) {
//     this.firstName = firstName;
//     this.lastName = lastName;
//   }
//   get [name]() {
//     return `${this.firstName} ${this.lastName}`;
//   }
// }
// let person = new Person("John", "Doe");
// console.log(person.fullName);
// console.log(person.lastName);
// function Animal(legs) {
//   this.legs = legs;
// }

// Animal.prototype.walk = function () {
//   console.log("walking on " + this.legs + " legs");
// };
// function Birds(legs) {
//   Animal.call(this, legs);
// }

// Birds.prototype = Object.create(Animal.prototype);
// Birds.prototype.constructor = Animal;

// Birds.prototype.fly = function () {
//   console.log("flying");
// };

// var pigeon = new Birds(2);
// pigeon.walk();
// pigeon.fly();
// class Animal {
//   constructor(legs) {
//     this.legs = legs;
//   }
//   walk() {
//     console.log("walking on " + this.legs + " legs");
//   }
// }
// class Bird extends Animal {
//   constructor(legs) {
//     super(legs);
//     this.color = color;
//   }
//   fly() {
//     console.log("flying");
//   }
//   getColor() {
//     return this.color;
//   }
// }
// let pigeon = new Bird(2, "white");
// console.log(pigeon.getColor());
// class Dog extends Animal {
//   constructor() {
//     super(4);
//   }
//   walk() {
//     console.log(`go walking`);
//   }
// }
// let bingo = new Dog();
// bingo.walk();
// class Animal {
//   constructor(legs) {
//     this.legs = legs;
//   }

//   walk() {
//     console.log("walking on " + this.legs + " legs");
//   }
//   static helloWorld() {
//     console.log("Hello World");
//   }
// }

// class Bird extends Animal {
//   fly() {
//     console.log("flying");
//   }
// }
// Bird.helloWorld();
// class Queue extends Array {
//   enqueue(e) {
//     super.push(e);
//   }
//   dequeue() {
//     return super.shift();
//   }
//   peek() {
//     return !this.empty() ? this[0] : undefined;
//   }
//   empty() {
//     return this.length === 0;
//   }
// }

// var customers = new Queue();
// customers.enqueue("A");
// customers.enqueue("B");
// customers.enqueue("C");
// customers.enqueue("D");
// customers.enqueue("E");
// while (!customers.empty()) {
//   console.log(customers.dequeue());
// }
// let person = {
//   firstName: "John",
//   lastName: "Doe",
// };
// person.age = 24;
// console.log(person);
// delete person.age;
// console.log(person.age);

// let person = {};
// person.age = 25;
// person.ssn = "012-38-9119";
// for (let p in person) {
//   console.log(p);
// }
var person = {
  firstName: "John",
  lastName: "Doe",
  ssn: "299-25-2351",
};
for (var i in person) {
  console.log(i + ":" + person[i]);
}
// fruits = ["Apple", "Cherry", "Guava", "borocolli"];
// var fLen, i, text;
// fLen = fruits.length;
// text = "<ul>";
// for (i = 0; i < fruits.length; i++) {
//   text += "<li>" + fruits[i] + "</li>";
// }
// text += "</ul>";
// console.log(text);
// fruits.forEach(el);
// function el(value) {
//   text += "<li>" + value + "</li>";
// }
// text += "</ul>";
// console.log(text);
// document.getElementById("real").innerHTML = text;
// fruits[fruits.length] = "Lemon";
// console.log(fruits);
// var person = [];

// person[0] = "John";
// person[1] = "Doe";
// person[2] = 46;
// var x = person.length;
// var y = person[0];
// console.log(x, y);
// var points = new Array(40, 100, 1, 5, 25, 10);
// console.log(points);
// var ponte = [10, 30, 50, 5, 23, 1];
// console.log(ponte);
// var fruits = ["Banana", "Orange", "Apple", "Mango"];
// // console.log(fruits.join("+"));
// fruits.splice(2, 0, "Kiwi", "Lemonade");
// console.log(fruits);
// var myGirls = ["Cecilie", "Lone"];
// var myBoys = ["Emil", "Tobias", "Linus"];
// var myChildren = myGirls.concat(myBoys);
// console.log(myChildren);
// const food = ["apple", "carrot", "orange", "pear", "banana"];
// // const duplicateFood = food.map((el) => {
// //   console.log(el + el);
// // });
// // const bananas = food.map((el) => " sweet");
// // console.log(bananas);
// // const fruits = food.filter((item)=>item.type==="fruit"
// //   console.log("fruit")
// // )
// const banana = food.find((el) => {
//   el !== "banana";
//   return el;
// });
// console.log(banana);
// let numbers = [1, 2, 3, 4, 5, 6, 7, 9, 8, 10];
// // function checkEven((number)=>{
// //   if(number%2==0){
// //     return number
// //   }
// // })
// function checkEven(number) {
//   if (number % 2 == 0) {
//     return true;
//   } else {
//     return false;
//   }
// }
// function checkOdd(n) {
//   if (n % 2 !== 0) {
//     return true;
//   } else {
//     return false;
//   }
// }

// console.log(checkEven(3));
// let evenNumbers = numbers.filter(checkEven);
// console.log(evenNumbers);
// let Oddnumbers = numbers.filter(checkOdd);
// console.log(Oddnumbers);
// numero = [1, 3, 4, 9, 8];
// numero.forEach((el) => {
//   console.log(el * el);
// });
// numero.filter((el) => {
//   if (el % 2 == 0) {
//     return true;
//   } else {
//     return false;
//   }
// });
// const foody = ["Apple", "potato", "Banana", "Pawpaw"];
// const pop = foody.map((el) => {
//   console.log("Pawpaw");
// });
// const calm = foody.map((calm) => {
//   console.log(calm + calm);
// });
// const foodyStr = foody.join(" ");
// const foodStr = foody.join(" , ");
// console.log(foodyStr);
// console.log(foodStr);
// const pom = foody.fill("Pomengranate");
// console.log(pom);
// const numbering = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// numbering.reverse();
// console.log(numbering);
// const str = "Apple";
// const numbered = Array.from(str);
// console.log(numbered);
// const numbers = [175, 50, 25];
// // function myFunc(total, num) {
// //   return total - num;
// // }
// prod = 1;
// numbers.forEach((el) => {
//   prod *= el;
// });
// console.log(prod);

// const letters = ["a", "b", "a", "d", "a", "c", "a", "b"];
// let count = {};
// letters.forEach((a) => {
//   if (count[a]) {
//     count[a]++;
//   } else {
//     count[a] = 1;
//   }
// });
// console.log(count);
// const numbers = [1, 2, 3, 4, 5];
// // const double = numbers.map((el) => {
// //   return el * el * el;
// // });
// // console(double);
// multiplyIndex = numbers.map((el, i) => {
//   return el * i;
// // });
// // console.log(multiplyIndex);

// // const products = [
// //   { name: "laptop", price: 1000, count: 5 },
// //   {
// //     name: "desktop",
// //     price: 1500,
// //     count: 10,
// //   },
// //   { name: "phone", price: 500, count: 10 },
// // ];
// // const totalProductValue = products.map((el) => ({
// //   name: el.name,
// //   totalValue: el.price * el.count,
// // }));
// // console.log(totalProductValue);
// // const str = ["1", "2", "3", "4"];
// // const numbers = str.map((el) => {
// //   return el;
// // });
// // console.log(numbers);
// const numbers = [1, 2, 3, 4, 5, 6];
// function isEven(n) {
//   return n % 2 == 0;
// }
// number = numbers.filter(isEven);
// console.log(number);
// function isOdd(n) {
//   return n % 2 !== 0;
// }
// oddNum = numbers.filter(isOdd);
// console.log(oddNum);
// const people = [
//   { name: "Florin", age: 26 },
//   { name: "Ivan", age: 18 },
//   { name: "Jai", age: 15 },
// ];
// const numbered = [1, 2, 3, 2, 1, 3, 3, 5, 4, 6];
// nums = numbered.filter((value, index, arr) => {
//   return arr.indexOf(value) === index;
// });
// console.log(nums);
// const adult = people.filter((person) => person.age >= 18);
// console.log(adult);
// let btn = document.getElementById("btnRate");
// let outPut = document.getElementById("output");
// btn.addEventListener("click", () => {
//   let rates = document.getElementsByName("rate");
//   rates.forEach((rate)=>{if (rate.checked){
//     outPut.innerText = `You selected: ${rate.value}`
//   }

//   })
// });
let div = document.createElement("div");
div.innerHTML = "God is Good";
console.log(div);
div.id = "content";
div.className = "note";
let text = document.createTextNode("CreateElement example");
div.appendChild(text);
document.body.appendChild(div);
