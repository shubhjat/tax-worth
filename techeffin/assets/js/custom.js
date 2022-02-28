/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

// Search Results
const displaySearchResults = (forReason) => {
let input = document.querySelector(".searchForm input");
if (forReason === "nolink")
input = document.querySelector(".searchFormNoLink input");

const searchResults = document.querySelector(".searchResults");
searchResults.classList.toggle("show");

const arrowMoves = document.querySelectorAll(".arrowMove");
const currentFocus = document.querySelector(".arrowMove:focus");

let n = 0;
let down = true;
window.addEventListener("keydown", (e) => {
if (e.keyCode === 40) {
e.preventDefault();
if (!down) n = n + 2;
if (n === arrowMoves.length) n = 0;
arrowMoves[n].focus();
n++;
down = true;
} else if (e.keyCode === 38) {
e.preventDefault();
if (down) n = n - 2;
if (n === -1) n = arrowMoves.length - 1;
arrowMoves[n].focus();
n--;
down = false;
}
if (e.keyCode === 27) {
e.preventDefault();
searchResults.classList.remove("show");
}
});

window.addEventListener("click", (e) => {
if (e.target != searchResults && e.target != input)
searchResults.classList.remove("show");
});

if (forReason === "nolink") {
arrowMoves.forEach((arrowMove) => {
arrowMove.addEventListener("click", (e) => {
  e.preventDefault();
  input.value = arrowMove.innerText;
});
});
}
};
// End Search Results
