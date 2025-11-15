

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const q = params.get("skin");

    if (q) {
        document.getElementById("skin_in").value = q;
        fetchData(q);
    }
});



async function fetchData(forceName){

    try{
       
        const pokemonName = forceName || document.getElementById("skin_in").value;

        
        const newURL = window.location.pathname + "?skin=" + encodeURIComponent(pokemonName);
        history.pushState({}, "", newURL);

        
        const response = await fetch(`https://minotar.net/armor/body/${pokemonName}/100.png`);

        if(!response.ok){
            throw new Error("couldnt find that Skin sowwy");
        }

        const pokemonSprite = `https://minotar.net/armor/body/${pokemonName}/100.png`;
        const imgEle = document.getElementById("skin_sprite");
        const nameEle = document.getElementById("name");

        nameEle.textContent = pokemonName;
        imgEle.src = pokemonSprite;
        imgEle.style.display = "block";
        
    }

    catch(error){
        console.error(error);
    }
}
