<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\ntabela filmes apagada\n";

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(3,1),
        favorito INT DEFAULT 0
    )
";

if ($bd->exec($sql))
    echo "\ntabela filmes criada\n";
else
    echo "\nerro ao criar tabela filmes\n";
    
$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        0,
        'Vingadores: Ultimato',
        'https://image.tmdb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
        'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os 
        Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.',
        9.7
    )";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo "\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Batman Begins',
        'https://image.tmdb.org/t/p/original/jrYbYRMRwCO7vNtTdoqNcgALwAi.jpg',
        'Marcado pelo assassinato de seus pais quando ainda era criança, o milionário Bruce Wayne (Christian Bale) decide viajar pelo mundo em busca de encontrar meios que lhe 
         permitam combater a injustiça e provocar medo em seus adversários. Após retornar a Gotham City, sua cidade-natal, ele idealiza seu alter-ego: Batman, um justiceiro mascarado
         que usa força, inteligência e um arsenal tecnológico para combater o crime.',
        9.9
    )";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo "\nerro ao inserir filmes\n";
?>