const readline = require("readline-sync");
const num = Math.floor(Math.random() * 101);

while (true) {
    const input = readline.questionInt("> ");
    if (input === num)
        break;
    console.log(input > num ? "Lower" : "Higher");
}

console.log("Correct!");