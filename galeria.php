<?php include "cabecalho.php" ?>

<?php
$filme1 = [
    "titulo" => "Vingadores: Ultimato",
    "nota" => 9.7,
    "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster" => "https://image.tmdb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];
$filme2 = [
    "titulo" => "Ad Astra",
    "nota" => 8.5,
    "sinopse" => "Roy McBride é um engenheiro espacial, portador de um leve grau de autismo, que decide empreender a maior jornada de sua vida: viajar para o espaço, cruzar a galáxia e tentar descobrir o que aconteceu com seu pai, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
    "poster" => "https://image.tmdb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg"
];
$filme3 = [
    "titulo" => "Batman Begins",
    "nota" => 9.9,
    "sinopse" => "Marcado pelo assassinato de seus pais quando ainda era criança, o milionário Bruce Wayne (Christian Bale) decide viajar pelo mundo em busca de encontrar meios que lhe permitam combater a injustiça e provocar medo em seus adversários. Após retornar a Gotham City, sua cidade-natal, ele idealiza seu alter-ego: Batman, um justiceiro mascarado que usa força, inteligência e um arsenal tecnológico para combater o crime.",
    "poster" => "https://image.tmdb.org/t/p/original/jrYbYRMRwCO7vNtTdoqNcgALwAi.jpg"
];
$filme4 = [
    "titulo" => "Homem de Ferro",
    "nota" => 8.9,
    "sinopse" => "Tony Stark (Robert Downey Jr.) é um industrial bilionário, que também é um brilhante inventor. Ao ser sequestrado ele é obrigado por terroristas a construir uma arma devastadora mas, ao invés disto, constrói uma armadura de alta tecnologia que permite que fuja de seu cativeiro. A partir de então ele passa a usá-la para combater o crime, sob o alter-ego do Homem de Ferro.",
    "poster" => "https://image.tmdb.org/t/p/original/tAcDOFX0WludQhvTdmG2rDxyQRM.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];
?>

<body>
    <nav class="nav-extended indigo lighten-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent indigo darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <!--primeiro filme cadastrado-->
        <?php
        for ($i = 0; $i < count($filmes); $i++) :
            $filme = $filmes[$i];
        ?>

            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?php echo $filme["poster"] ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?php echo $filme["nota"] ?></p>
                        <span class="card-title"><?php echo $filme["titulo"] ?></span>
                        <p><?php echo $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endfor ?>
        <!---->

    </div>
    </div>
    </div>
</body>
<html>