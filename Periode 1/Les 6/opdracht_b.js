let array = [ 1, 'Hello World!', true, 59.3, [ 1, 2, 3 ] ];

console.log('Length', array.length);
console.log('toString', array.toString());
console.log('pop', array.pop());
console.log('push');
array.push('Test');
let removed = array.shift();
console.log('shift', removed);
console.log('unshift');
array.unshift(removed);
console.log('join', array.join(' '));
console.log('delete');
delete array[0];
console.log('concat', array.concat(1, 2, 3));
console.log('flat', array.flat());
console.log('splice', array.splice(0, 2));
console.log('slice', array.slice(2));