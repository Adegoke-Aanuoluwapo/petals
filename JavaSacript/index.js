let x;
let y;
let z;


document.getElementById("rollButton").onclick = function(){
x = Math.floor(Math.random() * 6) + 1;
y = Math.floor(Math.random() * 6) + 1;
z = Math.floor(Math.random() * 6) + 1;

document.getElementById("xlabel").innerHTML = x;
document.getElementById("ylabel").innerHTML = y;
document.getElementById("zlabel").innerHTML = z;

}
let a = false;
let b = true;


document.getElementById("bol").innerHTML = Boolean(a);
document.getElementById("greet").innerHTML = Boolean(b);