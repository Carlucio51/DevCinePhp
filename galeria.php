<?php include "cabecalho.php" ?>

<?php

$filme1 = [
    "titulo" => "Vingadores: Ultimato",
    "nota" => 8.6,
    "sinopse" => "Após os eventos devastadores de Guerra do Infinito, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster" => "https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];
$filme2 = [
    "titulo" => "Ad Astra",
    "nota" => 6.5,
    "sinopse" => "Roy McBride é um engenheiro espacial, portador de um leve grau de autismo, que decide empreender a maior jornada de sua vida: viajar para o espaço, cruzar a galáxia e tentar descobrir o que aconteceu com seu pai, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.",
    "poster" => "https://www.themoviedb.org/t/p/original/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg"
];
$filme3 = [
    "titulo" => "O Alto da Compadecida",
    "nota" => 9.9,
    "sinopse" => "O Auto da Compadecida: As aventuras dos nordestinos João Grilo (Matheus Natchergaele), um sertanejo pobre e mentiroso, e Chicó (Selton Mello), o mais covarde dos homens. Ambos lutam pelo pão de cada dia e atravessam por vários episódios enganando a todos do pequeno vilarejo de Taperoá, no sertão da Paraíba. A salvação da dupla acontece com a aparição da Nossa Senhora (Fernanda Montenegro). Adaptação da obra de Ariano Suassuna.",
    "poster" => "https://www.themoviedb.org/t/p/original/y3IhuITELtprMhUd7bccu629rba.jpg"
];
$filme4 = [
    "titulo" => "Star Wars: Episódio IX - A Ascensão de Skywalker",
    "nota" => 8.1,
    "sinopse" => "Com o retorno do Imperador Palpatine, todos voltam a temer seu poder e, com isso, a Resistência toma a frente da batalha que ditará os rumos da galáxia. Treinando para ser uma completa Jedi, Rey (Daisy Ridley) ainda se encontra em conflito com seu passado e futuro, mas teme pelas respostas que pode conseguir a partir de sua complexa ligação com Kylo Ren (Adam Driver), que também se encontra em conflito pela Força.",
    "poster" => "https://www.themoviedb.org/t/p/original/1cajv97TsZp12DElh9bX9BZkQ9X.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];


?>

<body>

    <nav class="nav-extended purple light-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>DevCinePHP</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <?php foreach($filmes as $filme) : ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"] ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"] ?></span>
                        <p><?= $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

    </div>



</body>

</html>