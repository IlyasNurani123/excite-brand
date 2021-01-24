const stage = document.querySelector("#image-box-1");
const fragment = document.createDocumentFragment();
const grid = [5, 5];
const col = grid[0];
const row = grid[1];
const field = col * row;

for (let i = 0; i < field; i++) {
    const div = document.createElement("div");
    fragment.appendChild(div);
    div.className = "tail";
}

stage.appendChild(fragment);

let animation = anime({
    targets: ".tail",
    translateX: 240,
    backgroundColor: "#264dcf",
    borderRadius: ["0%", "50%"],
    easing: "easeInOutQuad",
    duration: 4500,
    direction: "reverse",
    loop: true
});

let ani = anime({
    targets: ".tail",
    scale: [
        { value: 0.1, easing: "easeOutSine", duration: 500 },
        { value: 1, easing: "easeInOutQuad", duration: 1200 }
    ],
    delay: anime.stagger(200, { grid: [14, 5], from: "center" }),
    borderRadius: ["0%", "50%"],
    autoplay: true
});

let rotrate = anime({
    targets: "#img-box-2",
    backgroundColor: "#264dcf",
    borderRadius: ["0%", "50%"],
    rotateZ: 360,
    duration: 8000,
    easing: "linear",
    loop: true
});