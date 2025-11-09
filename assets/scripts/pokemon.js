fetchData()

async function fetchData(){

    try{
        const pokemonName = document.getElementById("pokemon_in").value.toLowerCase();

        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`)

        if(!response.ok){
            throw new Error("couldnt find that Pokemon sowwy")
        }

        const data = await response.json();
        console.log(data);
        const pokemonSprite = data.sprites.front_default;
        const imgEle = document.getElementById("pokemon_sprite");
        const nameEle = document.getElementById("name");
        nameEle.textContent = data.name
        const moveEle = document.getElementById("moves");
        moveEle.textContent = `HP: ${data.stats[0].base_stat}`
        const typeEle = document.getElementById("types");
        types = `Types: `
        let length = data.types.length
        while(!length == 0) {
            length = length - 1
            types = types + `${data.types[length].type.name} `
        }
        typeEle.textContent = types
        

        imgEle.src = pokemonSprite;
        imgEle.style.display = "block";
        
    }

    catch(error){
        console.error(error);
    }
}