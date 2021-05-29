<!DOCTYPE html>

<head>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>

<html>

<body>
    <div class="content">
        <h1>Bibliófilo's</h1>

        <h2>Livros</h2>
        <?php
        require 'mysql_server.php';

        $conexao = RetornaConexao();
        
        $codigo_livro = 'codigo_livro';
        $autor = 'autor';
        $titulo = 'titulo';
        $editora = 'editora';
        $ano_publicacao = 'ano_publicacao';
        /*TODO-1: Adicione uma variavel para cada coluna */


        $sql =
            'SELECT ' . $codigo_livro .
            '     , ' . $autor .
            '     , ' . $titulo .
            '     , ' . $editora .
            '     , ' . $ano_publicacao .
            /*TODO-2: Adicione cada variavel a consulta abaixo */
            '  FROM livros';


        $resultado = mysqli_query($conexao, $sql);
        if (!$resultado) {
            echo mysqli_error($conexao);
        }



        $cabecalho =
            '<table>' .
            '    <tr>' .
            '        <th>' . $codigo_livro . '</th>' .
            '        <th>' . $autor . '</th>' .
            '        <th>' . $titulo . '</th>' .
            '        <th>' . $editora . '</th>' .           
            '        <th>' . $ano_publicacao . '</th>' .
            /* TODO-3: Adicione as variaveis ao cabeçalho da tabela */
            '    </tr>';

        echo $cabecalho;

        if (mysqli_num_rows($resultado) > 0) {

            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';

                echo '<td>' . $registro[$codigo_livro] . '</td>' .
                    '<td>' . $registro[$autor] . '</td>' .
                    '<td>' . $registro[$titulo] . '</td>' .
                    '<td>' . $registro[$editora] . '</td>'.
                    '<td>' . $registro[$ano_publicacao] . '</td>';
                    /* TODO-4: Adicione a tabela os novos registros. */
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '';
        }
        FecharConexao($conexao);
        ?>
    </div>
</body>

</html>