const array = [ 'c', 5645, 9393.77, "hello", true, false, "Good morning", 88, -90, 777.777, 90, 665.33, "F" ];

console.table(array.filter(value => typeof value == "string"));
console.table(array.filter(value => typeof value == "number"));
console.table(array.filter(value => typeof value == "boolean"));