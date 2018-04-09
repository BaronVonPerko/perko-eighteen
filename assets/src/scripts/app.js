/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */

// Import libraries
import 'slick-carousel';

// Import custom modules
import App from'./modules/app.js';
import Carousel from './modules/carousel.js';
import MadeWithLove from './modules/made-with-love.js';

const app = new App();
const carousel = new Carousel();
const love = new MadeWithLove();

function runLove() { love.run(); }
document.getElementById('text-heart').addEventListener('click', runLove);

let loveWrapper = document.getElementById('love-wrapper');
let watch = setInterval(_ => {
    if(loveWrapper.offsetTop < window.pageYOffset + 300) {
        runLove();
        clearInterval(watch);
    }
}, 200);