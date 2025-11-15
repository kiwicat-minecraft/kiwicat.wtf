fetchData()

async function fetchData(){

    try{
        const pokemonName = document.getElementById("skin_in").value;

        const response = await fetch(`https://minotar.net/armor/body/${pokemonName}/100.png`)

        if(!response.ok){
            throw new Error("couldnt find that Skin sowwy")
        }

        
        
        const pokemonSprite = `https://minotar.net/armor/body/${pokemonName}/100.png`;
        const imgEle = document.getElementById("pokemon_sprite");
        const nameEle = document.getElementById("name");
        nameEle.textContent = pokemonName;
        
        
        

        imgEle.src = pokemonSprite;
        imgEle.style.display = "block";
        
    }

    catch(error){
        console.error(error);
    }
}