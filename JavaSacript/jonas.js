// function calculateAge(birthYear) {
//   return 2023 - birthYear;
// }
// console.log(calculateAge(1963));
// function retirement(year, firstName) {
//   var age = calculateAge(year);
//   var retire = 65 - age;
//   if (retire > 0) {
//     console.log(firstName + " retires in " + retire + " years");
//   } else {
//     console.log(firstName + "  has retired");
//   }
// }
// retirement(1970, "Ademefun");
// retirement(1997, "Ojindo");
// retirement(1956, "Alade");
// var whatDoYouDo = function (job, firstName) {
//   switch (job) {
//     case "teacher":
//       return firstName + " You have chosen the best profession in life";
//     case "drive":
//       return firstName + " Drives in Lisbon";
//     case "designer":
//       return firstName + "designs beautiful website ";

//     default:
//       return firstName + " does something else";
//   }
// };
// console.log(whatDoYouDo("teacher", "Agunbiade"));
function calculateTips(bill, tip) {
  this.tips = [];
  this.bills = [124, 48, 268];
  let percentage;
  let average;
  this.finalbill = [];
  this.bills.forEach((bill, index) => {
    if (bill < 50) {
      percentage = 0.2;
    } else if (bill >= 50 && bill <= 200) {
      percentage = 0.15;
    } else if (bill > 200) {
      percentage = 0.1;
    }
    this.tips[index] = bill * percentage;
    this.finalbill[index] = bill + bill * percentage;
  });
}
calculateTips();
console.log(tips);
console.log(finalbill);

function sum(arr) {
  this.sum = 0;
  for (const val of arr) {
    sum += val;
  }
  return sum;
}
bills = [1, 3, 5, 7, 9];

console.log(sum(bills));
var john = {
  firstName: "John",
  lastName: "Smith",
  birthYear: 1996,
  family: ["Jane", "Mark", "Bob", "Emily"],
  job: "teacher",
  isMarried: false,
  calculateAge: function () {
    this.age = 2023 - this.birthYear;
  },
};

kam = ["brag", "edmund", 1990, "cola", "happ", false];
// for (let a = 0; a < kam.length; a++) {
//   console.log(kam[a]);
// }
// var i = 0;
// while (i < kam.length) {
//   console.log(kam[i]);
//   i++;
// }
for (var i = 0; i < kam.length; i++) {
  if (typeof kam[i] !== "string") continue;
  console.log(kam[i]);
}
for (var i = 0; i < kam.length; i++) {
  if (typeof kam[i] !== "string") break;
  console.log(kam[i]);
}
for (var i = kam.length - 1; i >= 0; i--) {
  console.log(kam[i]);
}
// console.log(john);
// console.log(john.family[3]);
// console.log(john["lastName"]);
// var x = "family";
// console.log(john[x]);
// var jane = new Object();
// jane.name = "Jane";
// jane["job"] = "programmer";
// console.log(jane);

// john.calculateAge();
// console.log(john);
// john = {
//   fullName: "john smith",
//   mass: 92,
//   height: 1.95,

//   calcBmi: function () {
//     this.bmi = this.mass / (this.height * this.height);
//     return this.bmi;
//   },
// };
// x = john.calcBmi();
// console.log("The BMI of " + john.fullName + " is " + john.calcBmi() + "kg/m2");
// mark = {
//   fullName: "Mark Miller",
//   mass: 78,
//   height: 1.69,

//   calcBmi: function () {
//     this.bmi = this.mass / (this.height * this.height);
//     return this.bmi;
//   },
// };
// console.log("The BMI of " + mark.fullName + " is " + mark.calcBmi() + "kg/m2");
// y = mark.calcBmi();
// if (x > y) {
//   console.log("john has the highest BMI" + x);
// } else if (x < y) {
//   console.log("Mark has the highest BMI" + y);
// } else {
//   console.log("They both had draw");
// }
// console.log(john);
// for (var i = 0; i < 10; i++) {
//   console.log(i);
// }
// var a = "Hello";
// first();
// function first() {
//   var b = "Hi";
//   second();
//   function second() {
//     var b = "Hey";
//     third();
//   }
// }
// function third() {
//   var d = "John";
//   console.log(a + d);
// }

// function third() {
//   var c = "Hey!";
//   var z = c + name;
// }
// calculateAge(1941);
// first();
// console.log(first());
// console.log(second());
// console.log(third());
// function calculateAge(year) {
//   console.log(2023 - year);
// }
// calculateAge(1996);
// calculateAge(1962);
// retirement(1956);
// var retirement = function (year) {
//   console.log(65 - (2023 - year));
// };
// retirement(1979);
// var a = "Hello!";
// first();

// function first() {
//   var b = "Hi!";
//   second();
//   function second() {
//     var c = "Hey!";
//     console.log(a + b + c);
//   }
// }
// function third() {
//   var d = "John";
//   console.log(c);
// }
// calculateAge(1994);
// function calculateAge(year) {
//   console.log(2023 - year);
//   console.log(this);
//}
// var john = {
//   name: "John",
//   yearOfBirth: 1990,
//   calculateAge: function (yearOfBirth) {
//     console.log(this);
//     console.log(2023 - this.yearOfBirth);
//     //   function innerFunction() {
//     //     console.log(this);
//     //   }
//     //   innerFunction();
//   },
// };
// john.calculateAge();
// var mike = {
//   name: "Nike",
//   yearOfBirth: 1984,
// };
// mike.calculateAge = john.calculateAge;
// mike.calculateAge();
// document.getElementById("message").style.color = "blue";
// document.querySelector("#message").textContent = "I love JavaScript";
// document.getElementsByName("typescript").textContent = "34
// let current = document.querySelector(".current");
// let nextSibling = current.nextElementSibling;
// while (nextSibling) {
//   console.log(nextSibling);
//   nextSibling = nextSibling.nextElementSibling;
// }
// let prevSibling = current.previousElementSibling;
// console.log("Previous Siblings");
// while (prevSibling) {
//   console.log(prevSibling);
//   prevSibling = prevSibling.previousElementSibling;
// }
// let getSiblings = function (e) {
//   let siblings = [];
//   if (!e.parentNode) {
//     return siblings;
//   }
//   let sibling = e.parentNode.firstChild;

//   while (sibling) {
//     if (sibling.nodeType === 1 && sibling !== e) {
//       sibling.push(sibling);
//     }
//     sibling = sibling.nextSibling;
//   }
//   return siblings;
// };
// let siblings = getSiblings(document.querySelector(".current"));
// siblingText = siblings.map((e) => e.innerHTML);
// console.log(siblingText);
// let firstChild = document.querySelector(".first");
// console.log(firstChild);
// nextSibling = firstChild.nextElementSibling;
// console.log(nextSibling);
// while (nextSibling) {
//   console.log(nextSibling);
//   nextSibling = nextSibling.nextElementSibling;
// }
// nextSibling[].innerHTML = "first";
// let menu = document.getElementById("menu");
// // let firstChild = parentElement.firstChild.nodeName;
// // console.log(parentElement);
// // console.log(firstChild);
// let children = menu.children;
// console.log(children);
// children[1].innerHTML = "check";
// let current = document.querySelector(".current");
// let nextSibling = current.nextElementSibling;
// //console.log(nextSibling);
// while (nextSibling) {
//   console.log(nextSibling);
//   nextSibling = nextSibling.nextElementSibling;
// }
let item = document.querySelector("#menu");
console.log(item);
firstChild = item.firstElementChild;
lastChild = item.lastElementChild;
console.log(firstChild, lastChild);
firstChild.innerHTML = "first";
const func = (paramenter) => {
  return arakunrin;
};
const food = ["carrot", "banana", "pear"];
food.forEach((el) => {
  console.log(el);
});
num = [1, 2, 3, 5, 6, 7];
num.forEach((n) => {
  if (n % 2 == 0) {
    console.log(n);
  }
});

var fruits, text, fLen, i;
fruits = ["Banana", "Orange", "Apple", "Mango"];
fLen = fruits.length;
console.log("The length of fruits is:" + fLen);
text = "<ul>";
for (i = 0; i < fLen; i++) {
  text += "<li>" + fruits[i] + "<li>";
}
// text += "</ul>";
console.log(text);
