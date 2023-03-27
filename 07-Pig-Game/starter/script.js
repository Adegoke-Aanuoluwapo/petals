var scores, roundScores, activePlayer, dice;
score = [0, 0];
roundScore = 0;
activePlayer = 0;
dice = Math.floor(Math.random() * 6) + 1;

document.querySelector('#current--' + activePlayer).textContent = dice;
