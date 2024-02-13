class Dino {
    leeft = true;
    honger = true;

    constructor(naam, vleesEter, leeftijd) {
        this.naam = naam;
        this.vleesEter = vleesEter;
        this.leeftijd = leeftijd;
        console.log("Ik ben een: ", naam);
    }

    eatFood(foodToEat) {
        foodToEat.leeft = false;
        this.honger = false;
        console.log("Ik eet nu: ", foodToEat.naam);
    }
}

export default Dino;