<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Filmes</title>
    <style>
        .filme {
            margin-bottom: 20px;
        }

        .filme img {
            width: 150px;
            height: auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BraFilmes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Downloads</a>
                    </li>




                </ul>

                <div class="d-flex" role="search">
                    <input class="form-control me-2" id="f" type="search" placeholder="Digite o nome do filme" aria-label="Search">
                    <button class="btn btn-outline-success" id="pesquisar" type="submit">Pesquisar</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="conteiner">
        <div class="row">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">


                    <div class="card-body">
                        <div id="aguardePagina" style="display:none;">Carregando...</div>
                        <div id="pagina"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>







    <script type="text/javascript">
        $("#pesquisar").click(function() {
            $.ajax({
                type: 'POST',
                url: 'resultado.php',
                data: {
                    filme: $("#f").val()
                },
                dataType: "html",
                beforeSend: function() {
                    $('#aguardePagina').show();
                },
                success: function(html) {
                    $('#aguardePagina').hide();
                    $('#pagina').html(html);
                },
                error: function() {
                    $('#aguardePagina').hide();
                    $('#pagina').html("Erro ao buscar filme.");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Faça uma solicitação AJAX para obter os títulos dos filmes
            $.ajax({
                url: 'autocomplete.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Inicialize o Autocomplete com os dados retornados
                    $("#f").autocomplete({
                        source: data,
                        minLength: 1
                    });
                },
                error: function() {
                    console.error('Erro ao obter os títulos dos filmes.');
                }
            });
        });
    </script>
</body>

</html>