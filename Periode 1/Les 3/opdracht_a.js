function shuffleString(string) {
    let characters = string.split('');
    for (let i = characters.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [ characters[i], characters[j] ] = [ characters[j], characters[i] ];
    }
    return characters.join('');
}

console.log(shuffleString("Boekenkast"));