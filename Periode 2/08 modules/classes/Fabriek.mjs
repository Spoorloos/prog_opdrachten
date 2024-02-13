import Dino from "./Dino.mjs";
import Plant from "./Plant.mjs";

const MaakDino = () => new Dino("Gemaakte Modulosaurus");
const MaakPlant = () => new Plant("Gemaakte Modulobloem");

export { MaakDino, MaakPlant };