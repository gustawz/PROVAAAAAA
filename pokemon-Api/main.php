<?php
$pokemons = [
    ["nome" => "Bulbasaur", "tipo" => "Grama/Veneno", "raridade" => "Comum"],
    ["nome" => "Charmander", "tipo" => "Fogo", "raridade" => "Comum"],
    ["nome" => "Squirtle", "tipo" => "Água", "raridade" => "Comum"],
    ["nome" => "Pikachu", "tipo" => "Elétrico", "raridade" => "Raro"],
    ["nome" => "Eevee", "tipo" => "Normal", "raridade" => "Raro"],
    ["nome" => "Snorlax", "tipo" => "Normal", "raridade" => "Raro"],
    ["nome" => "Dragonite", "tipo" => "Dragão/Voador", "raridade" => "Lendário"],
    ["nome" => "Gengar", "tipo" => "Fantasma/Veneno", "raridade" => "Raro"],
    ["nome" => "Lapras", "tipo" => "Água/Gelo", "raridade" => "Raro"],
    ["nome" => "Mewtwo", "tipo" => "Psíquico", "raridade" => "Lendário"],
    ["nome" => "Jigglypuff", "tipo" => "Normal/Fada", "raridade" => "Comum"],
    ["nome" => "Machamp", "tipo" => "Lutador", "raridade" => "Raro"],
    ["nome" => "Alakazam", "tipo" => "Psíquico", "raridade" => "Raro"],
    ["nome" => "Gyarados", "tipo" => "Água/Voador", "raridade" => "Lendário"],
    ["nome" => "Arcanine", "tipo" => "Fogo", "raridade" => "Raro"]
];

header('Content-Type: application/json');
echo json_encode($pokemons);
?>
