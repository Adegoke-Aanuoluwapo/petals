var scores, roundScores, activePlayer, dice;
score = [0, 0];
roundScore = 0;
activePlayer = 0;

document.querySelector('.dice').style.display = ' none';
document.getElementById('score--0').textContent = '0';
document.getElementById('score--1').textContent = '0';
document.getElementById('current--0').textContent = '0';
document.getElementById('current--1').textContent = '0';
function btn() {
  console.log('button pressed');
}
btn();
document.querySelector('.btn--roll').addEventListener('click', function () {
  // console.log('button is pressed');
  // Random number
  dice = Math.floor(Math.random() * 6) + 1;
  //Display the result
  var diceDOM = document.querySelector('.dice');
  diceDOM.style.display = 'block';
  diceDOM.src = 'dice-' + dice + '.png';
});

//document.querySelector('#current--' + activePlayer).textContent = dice;
// document.querySelector('#current--1').innerHTML = dice;
// console.log(dice);
//var x = document.querySelector('#score--0').textContent;
//console.log(x);
