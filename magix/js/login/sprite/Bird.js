let pageWidth;
let pageHeight;
let birdHeight = 45;

function updatePageDimensions() {
    pageWidth = document.documentElement.clientWidth;
    pageHeight = document.documentElement.clientHeight;
}

updatePageDimensions();

window.addEventListener("resize", updatePageDimensions);

class Bird {
    constructor() {
        this.x = 0;
        this.y = Math.random() * (pageHeight - birdHeight);
        this.speed = 2.5;

        this.node = document.createElement("div");
        this.node.style.top = this.y + "px";
        this.node.style.right = this.x + "px";
        this.node.classList.add("bird");

        // this.node.onclick = (e) => this.triggerCut(e);
        document.querySelector("body").append(this.node);
    }

    tick() {
        this.x += this.speed;
        this.node.style.right = this.x + "px";

        let alive = this.x < pageWidth;

        if (!alive) {
            this.node.remove();
        }

        return alive;
    }
}
