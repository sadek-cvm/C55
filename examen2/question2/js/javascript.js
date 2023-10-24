window.addEventListener("load", () => {

})

function completeCall(){
    fetch("ajax.php", {})
    .then(response => response.json())
    .then(data => {
        let node = document.querySelector("#nbrAppels");
        node.innerHTML = data;
    });
}