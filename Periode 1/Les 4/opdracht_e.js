const keyInYNStrict = require("readline-sync").keyInYNStrict;

let score = 0;
while (keyInYNStrict(`Wil je klikken? (Score: ${score})`))
    score += 1;

console.clear();
console.log("Game over! Score: " + score);