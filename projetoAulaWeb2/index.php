<?php

    if (isset($_POST['resultado'], $_POST['teste1'], $_POST['teste2'])) {
        
        $resultado = $_POST['teste1'] + $_POST['teste2'];

        echo $resultado;
        
        // $resultado = $value1 + $value2;

        //if($sign=='-') {
        //$result = $value1-$value2;
        //}
        //Rest of your code...
        // $resultado = 10;
        // print_r($resultado); 
    }
?>

<html>
    <head>
        <title>Programa Inicial</title>
    </head>
    <body style="background-color: #fafafa;">
        <div style="padding: 20px; background-color: #212121; position: fixed; top: 0; left: 0; width: 100%">
            <label style="margin-left: 45%; color: #FFFFFF;"> Projetos Einstein </label>
        </div>
        <h1> Hello World! </h1>

        <form action="index.php" method="POST" style="display: flex; margin: -8px;">

            <?php
                $resultado = 0;

                if (isset($_POST['resultado'], $_POST['teste1'], $_POST['teste2'])) {
        
                    $teste1 = 0;
                    $teste2 = 0;
                    $resultado = $_POST['teste1'] + $_POST['teste2'];
            
                    echo $resultado;
                    
                    // $resultado = $value1 + $value2;
            
                    //if($sign=='-') {
                    //$result = $value1-$value2;
                    //}
                    //Rest of your code...
                    // $resultado = 10;
                    // print_r($resultado); 
                }
            ?>
        
            <div class="side-left">
                <div style="margin-top: 30%;">    
                    Projeto
                    Calculadora
                </div>
            </div>

            <div style="margin-top: 1%;">
                <div class="calculadora">
                    <div>
                        <input id="resultadoId" name="resultado" class="input-calculadora" value="<?php echo $resultado;?>">
                    </div>
                    <div>
                        <button type="button" class="btn-calc" name="value1" value="1" onclick="<?php $teste1 = 1; ?>">
                            <label>1</label>
                        </button>
                        <button type="button" class="btn-calc" name="value2" value="2" onclick="<?php $teste2 = 2; ?>">
                            <label>2</label>
                        </button>
                        <button type="button" class="btn-calc"><label>3</label></button>
                        <button type="button" class="btn-calc" onclick="<?php $operacao = '+'; ?>"><label>+</label></button>
                    </div>
                    <div>
                        <button type="button" class="btn-calc"><label>4</label></button>
                        <button type="button" class="btn-calc"><label>5</label></button>
                        <button type="button" class="btn-calc"><label>6</label></button>
                        <button type="button" class="btn-calc" onclick="<?php $operacao = '-'; ?>"><label>-</label></button>
                    </div>
                    <div>
                        <button type="button" class="btn-calc"><label>7</label></button>
                        <button type="button" class="btn-calc"><label>8</label></button>
                        <button type="button" class="btn-calc"><label>9</label></button>
                        <button type="button" class="btn-calc" onclick="<?php $operacao = '*'; ?>"><label>x</label></button>
                    </div>
                    <div>
                        <button type="button" class="btn-calc"><label>0</label></button>
                        <button type="button" class="btn-calc"><label>.</label></button>
                        <button type="submit" class="btn-calc" onclick="<?php $resultado = $value1 + $value2; ?>"><label>=</label></button>
                        <button type="button" class="btn-calc" onclick="<?php $operacao = '/'; ?>"><label>÷</label></button>
                    </div>
                </div>
            </div>

            <input class="input-calculadora" name="teste1" value="<?php echo $teste1?>">
            <input class="input-calculadora" name="teste2" value="<?php echo $operacao?>">
            <input class="input-calculadora" name="teste2" value="<?php echo $teste2?>">
            <input class="input-calculadora" name="teste2" value="=">
            <input class="input-calculadora" name="teste2" value="<?php echo $resultado?>">
            <button type="submit"></button>

        </form>


        <?php
            $result = 0;
            $imc = 0;
            if (isset($_POST['altura'], $_POST['peso'])) {
                $alturaQuadrado = floatval($_POST['altura']) * $_POST['altura'];
                $peso = floatval($_POST['peso']);
                $imc = floatval($peso / $alturaQuadrado);

                if ($imc > 40) {
                    $result = 'Obesidade grau 3';
                } else if ($imc >= 35) {
                    $result = 'Obesidade grau 2';
                } else if ($imc >= 30) {
                    $result = 'Obesidade grau 1';
                } else if ($imc >= 25) {
                    $result = 'Sobrepeso';
                } else if ($imc >= 18.5) {
                    $result = 'Peso Normal';
                } else {
                    $result = 'Abaixo do peso';
                }
            }

        ?>
        <form action="index.php" method="POST" action="" style="display: flex; margin: -8px;">
            <div style="margin-top: 5%; display: flex; margin-left: 30px;">
                <div>
                    <div style="display: grid;">
                        <label>Altura</label>
                        <input type="text" name="altura">
                    </div>
                    <div style="display: grid;">
                        <label>Peso</label>
                        <input type="text" name="peso">
                    </div>
                    <div style="display: grid;">
                        <button type="submit" class="btn-calcular"> CALCULAR </button>
                    </div>
                </div>

                <div style="margin-left: 30px; display: grid;">
                    <label>Resultado</label>
                    <input type="text" name="result" value="<?php echo $result ?>" style="border: none;">
                    <label>IMC</label>
                    <input type="text" name="imc" value="<?php echo $imc ?>" style="border: none;">
                </div>
            </div>

            <div class="side-left" style="position: absolute; right: 0;">
                <div style="    margin-top: 30%;">    
                    Projeto
                    Calculadora de IMC
                </div>
            </div>

        </form>
    </body>

    <link href="style.css" rel="stylesheet">
</html>