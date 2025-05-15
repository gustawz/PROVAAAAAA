async function fetchData(){
    try{

        const pokemonName = document.getElementById("pokemonName").value.toLowerCase();
        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`);

        if(!response.ok){
            throw new Error("Could not fetch resource");
        }

        const data = await response.json();
        const pokemonSprite = data.sprites.front_default;
        const imgElement = document.getElementById("pokemonSprite");

        imgElement.src = pokemonSprite;
        imgElement.style.display = "block";
    }
    catch(error){
        console.error(error);
        window.alert("Nome invalido, tente outro ou verifique se a digitaçao esta certa por favor")
        
    }
}

async function carregarTabelaPokemons() {
    try {
        const resposta = await fetch("main.php");
        const lista = await resposta.json();

        let html = "<table border='1' style='border-collapse: collapse; margin-top: 10px'>";
        html += "<tr><th>Nome</th><th>Tipo</th><th>Raridade</th></tr>";

        lista.forEach(p => {
            html += `<tr><td>${p.nome}</td><td>${p.tipo}</td><td>${p.raridade}</td></tr>`;
        });

        html += "</table>";
        document.getElementById("tabela-pokemons").innerHTML = html;
    } catch (erro) {
        console.error("Erro ao carregar pokémons:", erro);
    }
}

// Chama a função automaticamente ao carregar a página
window.onload = function () {
    carregarTabelaPokemons();
};
