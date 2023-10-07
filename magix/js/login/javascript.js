let spriteList = [];

window.addEventListener("load", () => {
    tick();
});

const tick = () => {
    if (Math.random() < 0.005) {
        spriteList.push(new Bird());
    }
    for (let i = 0; i < spriteList.length; i++) {
        if (!spriteList[i].tick()) {
            spriteList.splice(i, 1);
        }
    }
    window.requestAnimationFrame(tick);
};
