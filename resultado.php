<?php
$filme = $_POST['filme'];

$filmes = [
    "O Poderoso Chefão" => [
        "titulo" => "O Poderoso Chefão",
        "sinopse" => "A saga da família Corleone, liderada pelo patriarca Vito Corleone, é uma história de poder, lealdade e traição no mundo do crime organizado na América do século XX.",
        "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/90/93/20/20120876.jpg"
    ],
    "Os Bons Companheiros" => [
        "titulo" => "Os Bons Companheiros",
        "sinopse" => "A vida de Henry Hill e sua trajetória dentro da máfia, desde seus primeiros anos como um garoto que sonhava em ser um gangster, até sua ascensão e eventual queda.",
        "imagem" => "https://m.media-amazon.com/images/I/51vv75oglyL._AC_.jpg"
    ],
    "Pulp Fiction" => [
        "titulo" => "Pulp Fiction",
        "sinopse" => "Um filme de narrativas entrelaçadas que segue a vida de dois assassinos, uma esposa de gângster, um boxeador e dois criminosos em uma série de histórias que se cruzam.",
        "imagem" => "https://m.media-amazon.com/images/I/71c05lTE03L._AC_SY679_.jpg"
    ],
    "O Senhor dos Anéis: A Sociedade do Anel" => [
        "titulo" => "O Senhor dos Anéis: A Sociedade do Anel",
        "sinopse" => "Frodo Bolseiro, um hobbit do Condado, embarca em uma jornada épica para destruir o Anel do Poder e impedir que o maligno Sauron conquiste a Terra Média.",
        "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/92/91/32/20224832.jpg"
    ],
    "Star Wars: O Império Contra-Ataca" => [
        "titulo" => "Star Wars: O Império Contra-Ataca",
        "sinopse" => "Enquanto a Aliança Rebelde luta contra o Império Galáctico, Luke Skywalker treina com o mestre Jedi Yoda e se prepara para enfrentar Darth Vader.",
        "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/72/73/89/20535463.jpg"
    ],
    "Clube da Luta" => [
        "titulo" => "Clube da Luta",
        "sinopse" => "Um trabalhador de escritório desiludido forma um clube de luta clandestino com um vendedor de sabonetes carismático, que evolui para algo muito maior.",
        "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/90/95/96/20122166.jpg"
    ],
    "Forrest Gump" => [
        "titulo" => "Forrest Gump",
        "sinopse" => "A história de Forrest Gump, um homem simples com um coração puro, cujas aventuras o levam a presenciar e influenciar momentos cruciais da história americana.",
        "imagem" => "https://upload.wikimedia.org/wikipedia/pt/c/c0/ForrestGumpPoster.jpg"
    ],
    "O Resgate do Soldado Ryan" => [
        "titulo" => "O Resgate do Soldado Ryan",
        "sinopse" => "Durante a Segunda Guerra Mundial, um grupo de soldados americanos é enviado em uma missão para resgatar o último sobrevivente de quatro irmãos, o soldado James Ryan.",
        "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDeV-pqbksTO_Zxh-R51KZEA8fpSJ_eb4evA&s"
    ],
    "A Origem" => [
        "titulo" => "A Origem",
        "sinopse" => "Dom Cobb é um ladrão especializado em extrair segredos do subconsciente das pessoas durante o sonho. Ele é oferecido uma chance de redenção ao realizar a inserção de uma ideia na mente de um alvo.",
        "imagem" => "https://m.media-amazon.com/images/I/81p+xe8cbnL._AC_SY679_.jpg"
    ],
    "Matrix" => [
        "titulo" => "Matrix",
        "sinopse" => "Um hacker chamado Neo descobre que a realidade como a conhecemos é uma simulação criada por máquinas inteligentes para controlar a humanidade. Ele se junta a um grupo de rebeldes para lutar pela libertação da humanidade.",
        "imagem" => "https://m.media-amazon.com/images/I/51EG732BV3L.jpg"
    ]
];


$resultado = "";

if (array_key_exists($filme, $filmes)) {

    $info = $filmes[$filme];

    $resultado = "<div class='filme'>
                    <h2>{$info['titulo']}</h2>
                    <p>{$info['sinopse']}</p>
                    <img src='{$info['imagem']}' alt='{$info['titulo']}'>
                    
                  </div>";
} else {
    $resultado = "Filme não encontrado.";
}

echo $resultado;
