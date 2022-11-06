var random = Math.floor(Math.random() * 15);

let programBg = [
    "url('/public/img/index-back.jpg')",
    "url('/public/img/bg2.jpg')",
    "url('/public/img/bg3.jpg')",
];

document.getElementById("banner").style.backgroundImage=programBg[random];