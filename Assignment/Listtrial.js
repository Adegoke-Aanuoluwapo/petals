items = [...document.querySelectorAll(".list")];
console.log(items);

items.forEach((element) => {
  element.firstElementChild.innerHTML = "First";
});

items.forEach((element) => {
  element.lastElementChild.innerHTML = "Last";
});
