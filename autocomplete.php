<?php
// Consulta ao banco de dados ou qualquer outra fonte de dados para obter os títulos dos filmes
$titulos_filmes = ['O Poderoso Chefão', 'Os Bons Companheiros', 'Pulp Fiction', 'O Senhor dos Anéis: A Sociedade do Anel', 'Star Wars: O Império Contra-Ataca', 'Clube da Luta', 'Forrest Gump', 'O Resgate do Soldado Ryan', 'A Origem', 'Matrix'];

echo json_encode($titulos_filmes);
?>