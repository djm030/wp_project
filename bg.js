const body = document.querySelector("body");
const IMAGE_COUNT =7;

function paintBg(num){
    const image = new Image();
    image.src = `image/${num+1}.jpg`;
    image.classList.add("bg");  
    body.appendChild(image);
}

function genRandom(){
    const random = Math.floor(Math.random()* IMAGE_COUNT);
    return random;
}
function init(){
    const randomNum = genRandom();
    paintBg(randomNum);
}
init();