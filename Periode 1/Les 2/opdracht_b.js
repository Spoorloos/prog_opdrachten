const read_line = require("readline-sync");

if (read_line.question("Goedenavond, hoe oud bent u? ") >= 18 && read_line.keyInYNStrict("Mag ik uw ID zien? "))
    console.log("Kom verder");
else
    console.log("Dan mag je helaas niet naar binnen.");