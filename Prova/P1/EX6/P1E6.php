<?php
    $livro = '';
    $tipoUsuario = '';
    $prazo = '';

    if (isset($_POST["livro"], $_POST["tipoUsuario"])) {
        $livro = $_POST["livro"];
        $tipoUsuario = $_POST["tipoUsuario"];

        $prazo = $tipoUsuario == 'Aluno' ? 3 : 10;
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

                    <h1>Biblioteca</h1>
                    <p>Faça o cadastro do empréstimo do livro desejado.</p>
                    
                </section>

                <form action="P1E6.php" method="post">
                    <input name="livro" value="<?php echo $livro ?>" placeholder="Livro" />
                    <input name="tipoUsuario" value="<?php echo $tipoUsuario ?>" placeholder="Aluno / Professor" />
                    <input name="prazo" value="<?php echo $prazo ? $prazo . ' dias para devolução' : '' ?>" disabled />

                    <button class="button" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </body>

</html>

