window.addEventListener("load", () => {
    updateLights();
});

function updateLights() {
    fetch("ajax.php")
        .then((response) => response.json())
        .then((data) => {
            data.forEach((light) => {
                // console.log(light);
                document.querySelector("#" + light.name).src =
                    "img/light-" + (light.status ? "on" : "off") + ".png";
            });

            setTimeout(updateLights, 1000);
        });
}
