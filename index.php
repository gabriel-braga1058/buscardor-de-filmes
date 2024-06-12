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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/simple-datatable/dist/css/simple-datatable.min.css">
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

    <div class="container">
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

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-body">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th class="sortable">visitas</th>
                                    <th class="sortable">Name</th>
                                    <th class="sortable">Country</th>
                                    <th>Email</th>
                                    <th>Action</th> <!-- Custom Column -->
                                </tr>
                            </thead>
                        </table>
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
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/simple-datatable/dist/js/simple-datatable.min.js"></script>
    <script>
        const dataList = [
            [30, "John Doe", 'Afghanistan', "john@example.com", "https://i.pravatar.cc/50?img=1"],
            [60, "Jane Smith", 'Germany', "jane@example.com", "https://i.pravatar.cc/50?img=2"],
            [45, "Alice Johnson", 'United States', "alice@example.com", "https://i.pravatar.cc/50?img=3"],
            [50, "Bob Brown", 'Brazil', "bob@example.com", "https://i.pravatar.cc/50?img=4"],
            [70, "Charlie Davis", 'Canada', "charlie@example.com", "https://i.pravatar.cc/50?img=5"],
            [55, "David Wilson", 'Australia', "david@example.com", "https://i.pravatar.cc/50?img=6"],
            [65, "Eve Miller", 'United Kingdom', "eve@example.com", "https://i.pravatar.cc/50?img=7"],
            [40, "Frank Thomas", 'Mexico', "frank@example.com", "https://i.pravatar.cc/50?img=8"],
            [75, "Grace Lee", 'Japan', "grace@example.com", "https://i.pravatar.cc/50?img=9"],
            [35, "Hannah White", 'Russia', "hannah@example.com", "https://i.pravatar.cc/50?img=10"],
            [50, "Ian Harris", 'India', "ian@example.com", "https://i.pravatar.cc/50?img=11"],
            [80, "Jack Martin", 'China', "jack@example.com", "https://i.pravatar.cc/50?img=12"],
            [55, "Karen Clark", 'South Africa', "karen@example.com", "https://i.pravatar.cc/50?img=13"],
            [65, "Larry Lewis", 'France', "larry@example.com", "https://i.pravatar.cc/50?img=14"],
            [70, "Mary Walker", 'Italy', "mary@example.com", "https://i.pravatar.cc/50?img=15"],
            [85, "Nancy Hall", 'Spain', "nancy@example.com", "https://i.pravatar.cc/50?img=16"],
            [45, "Oscar Young", 'Portugal', "oscar@example.com", "https://i.pravatar.cc/50?img=17"],
            [75, "Paul King", 'Netherlands', "paul@example.com", "https://i.pravatar.cc/50?img=18"],
            [90, "Quinn Scott", 'Sweden', "quinn@example.com", "https://i.pravatar.cc/50?img=19"],
            [50, "Rachel Green", 'Switzerland', "rachel@example.com", "https://i.pravatar.cc/50?img=20"],
            [95, "Steve Adams", 'Belgium', "steve@example.com", "https://i.pravatar.cc/50?img=21"],
            [60, "Tina Baker", 'Austria', "tina@example.com", "https://i.pravatar.cc/50?img=22"],
            [85, "Uma Carter", 'Norway', "uma@example.com", "https://i.pravatar.cc/50?img=23"],
            [55, "Victor Anderson", 'Denmark', "victor@example.com", "https://i.pravatar.cc/50?img=24"],
            [75, "Wendy Turner", 'Finland', "wendy@example.com", "https://i.pravatar.cc/50?img=25"],
            [65, "Xander Rogers", 'Poland', "xander@example.com", "https://i.pravatar.cc/50?img=26"],
            [70, "Yara Mitchell", 'Greece', "yara@example.com", "https://i.pravatar.cc/50?img=27"],
            [90, "Zane Robinson", 'Turkey', "zane@example.com", "https://i.pravatar.cc/50?img=28"],
            [80, "Laura Parker", 'New Zealand', "laura@example.com", "https://i.pravatar.cc/50?img=29"],
            [50, "Tom Howard", 'Ireland', "tom@example.com", "https://i.pravatar.cc/50?img=30"]
        ];

        new simpleDataTable('myTable', dataList, {
            searchableColumns: [1, 2],
            title: 'Customers',
            itemsPerPage: 5,
            pageSelection: [5, 10, 20, 50, 100], // Selection of items per page
            fontFamily: 'arial',
            height: '17rem',
            onRowRender: function(data, column) {
                column[1] = `<td style="display:flex; align-items:center;">
                         <img src="${data[4]}" style="width:30px; border-radius:50%; margin-right:5px;" /> <span>${data[1]}</span>
                     </td>`
                column[4] = `<td>
                         <button onClick="alert('You clicked row id ${data[0]}')">Click</button>
                     </td>`
                return column
            }
        })
    </script>

</body>

</html>