<?php
    $nome = '';
    $sexo = '';
    $areaInteresse = '';

    if (isset($_POST["nome"], $_POST["sexo"], $_POST["areaInteresse"])) {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $areaInteresse = $_POST["areaInteresse"];
    }
?>

<html>

    <head>
        <title>Prova</title>

        <link rel="stylesheet" type="text/css" href="../styles.css">
    </head>

    <body>
        <div class="register-container">
            <div class="content">
                <section>
                    <img src="../logo.png" alt="Einstein" />

                    <h1>Vagas de Emprego</h1>
                    <p>Faça o cadastro, direcionaremos para as vagas que melhor se enquadre.</p>
                    
                </section>

                <form action="P1E7.php" method="post">
                    <input name="nome" value="<?php echo $nome ?>" placeholder="Nome" />
                    <input name="sexo" value="<?php echo $sexo ?>" placeholder="Sexo: M / F" />
                    <input name="areaInteresse" value="<?php echo $areaInteresse ?>" placeholder="Área: Análise / Infra-estrutura / Desenvolvimento" />

                    <button class="button" type="submit">Buscar</button>

                    <?php
                    if (isset($_POST["areaInteresse"])) {
                        $area = $_POST["areaInteresse"];
                        echo 
                        '<table>
                            <tr>
                                <th> &nbsp </th>
                                <th> VAGAS </th>
                            </tr>';

                        if ($area == 'Análise') {
                            echo 
                            '<tr>
                                <td> 1# </td>
                                <td> Analista de Sistema </td>
                            </tr>
                            <tr>
                                <td> 2# </td>
                                <td> Engenheiro de Software </td>
                            </tr>';
                        } else if ($area == 'Infra-estrutura') {
                            echo 
                            '<tr>
                                <td> 1# </td>
                                <td> Analista de Redes </td>
                            </tr>
                            <tr>
                                <td> 2# </td>
                                <td> Coordenador de Equipes </td>
                            </tr>';
                        } else if ($area == 'Desenvolvimento') {
                            echo 
                            '<tr>
                                <td> 1# </td>
                                <td> Programação PHP </td>
                            </tr>
                            <tr>
                                <td> 2# </td>
                                <td> Programação Python </td>
                            </tr>';
                        }

                        echo '</table';
                    }
                ?>
                </form>
            </div>
        </div>
    </body>

</html>

