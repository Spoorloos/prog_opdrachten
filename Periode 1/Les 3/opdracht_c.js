const readline = require("readline-sync");

const currentDate = Date.now();
const birthDay = new Date(
    readline.questionInt("Welk jaar ben je geboren? "),
    readline.questionInt("Welk dag ben je geboren? "),
    readline.questionInt("Welk maand ben je geboren? ")
);

console.log("Leeftijd:", (currentDate - birthDay) / 1000 / 60 / 60 / 24 / 365);