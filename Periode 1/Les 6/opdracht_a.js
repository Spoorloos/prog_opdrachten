const mockString = value => value
    .split('')
    .map((char, index) => char[index & 1 ? "toLowerCase" : "toUpperCase"]())
    .join('');

console.log(mockString("Ik heb erg veel honger!"));
