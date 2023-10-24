window.addEventListener("load", () => {
    let inputNode = document.querySelector("input");
    inputNode.onkeyup = e => {

        if(e.key != "Enter") return;
        
        let val = inputNode.value;
		let formData = new FormData();
		formData.append("txt", val); 

        fetch("ajax-process.php",{      
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
		.then(data => {
            let matchPicture = document.querySelector("#match-picture");
            let matchName = document.querySelector("#match-name");
            let style = "background-size:cover; background:url(images/pictures/" + data["picture"]
            matchPicture.setAttribute("style", style)
            matchName.innerHTML = data["name"];
        });
    }
})