/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */

// Import libraries
import "slick-carousel";

// Import custom modules
import App from "./modules/app.js";
import Carousel from "./modules/carousel.js";
import MadeWithLove from "./modules/made-with-love.js";

const app = new App();
const carousel = new Carousel();
const love = new MadeWithLove();

function runLove() {
  love.run();
}
let heart = document.getElementById("text-heart");
if (heart) heart.addEventListener("click", runLove);

let loveWrapper = document.getElementById("love-wrapper");
if (loveWrapper) {
  let watch = setInterval(_ => {
    if (loveWrapper.offsetTop < window.pageYOffset + 300) {
      runLove();
      clearInterval(watch);
    }
  }, 200);
}

function toggleMenu() {
  document.getElementById("menu-overlay").classList.toggle("open");
  Array.from(document.getElementsByClassName("menu-item")).forEach(element =>
    element.classList.toggle("open")
  );
}

let menuLink = document.getElementById("menu-link");
if (menuLink) menuLink.addEventListener("click", toggleMenu);
