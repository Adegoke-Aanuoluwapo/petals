var scores, roundScore, activePlayer, dice;
score = [0, 0];
roundScore = 0;
activePlayer = 0;

document.querySelector('.dice').style.display = ' none';
document.getElementById('score--0').textContent = '0';
document.getElementById('score--1').textContent = '0';
document.getElementById('current--0').textContent = '0';
document.getElementById('current--1').textContent = '0';

document.querySelector('.btn--roll').addEventListener('click', function () {
  // console.log('button is pressed');
  // Random number
  dice = Math.floor(Math.random() * 6) + 1;
  //Display the result
  var diceDOM = document.querySelector('.dice');
  diceDOM.style.display = 'block';
  diceDOM.src = 'dice-' + dice + '.png';
  //3 Update the round score IF the rolled number was not a 1

  if (dice !== 1) {
    roundScore += dice;
    document.querySelector(
      '#current--' + activePlayer
    ).textContent = roundScore;
  } else {
    //Next player
    activePlayer === 0 ? (activePlayer = 1) : (activePlayer = 0);
    if (activePlayer === 0) {
      activePlayer = 1;
    } else {
      activePlayer = 0;
    }
  }
});

//document.querySelector('#current--' + activePlayer).textContent = dice;
// document.querySelector('#current--1').innerHTML = dice;
// console.log(dice);
//var x = document.querySelector('#score--0').textContent;
//console.log(x);
