const getCubeCapacity = (length, width, height) => length * height * width;
console.log("getCubeCapacity", getCubeCapacity(10, 5, 10));

const getCylinderCapacity = (radius, height) => radius**2 * Math.PI * height;
console.log("getCylinderCapacity", getCylinderCapacity(10, 50));

const getHypotenuse = (opposite, adjecent) => Math.sqrt(opposite**2 + adjecent**2);
console.log("getHypotenuse", getHypotenuse(10, 10));

const getAverage = (...nums) => nums.reduce((a, b) => a + b, 0) / nums.length || 0;
console.log("getAverage", getAverage(1, 2, 3, 4, 5, 6, 7, 8, 9, 0));
