<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Calculadora IMC</h1>

        <form action="index.php?menuop=imc" method="POST">

            <div class="  mb-3">
                <label class="form-label" for="peso" name="peso">Peso (kg):</label>
                <input type="text" class="form-control" name="peso" required>
            </div>

            <div class="  mb-3">
                <label class="form-label" for="altura" name="altura">Altura (metros):</label>
                <input type="text" class="form-control" name="altura" required>
            </div>

            <button class="btn btn-warning container" type="submit">Calcular</button>

        </form>

    </div>
    <div class="container">
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if (!empty($peso) && !empty($altura) && is_numeric($peso) && is_numeric($altura)) {

            $imc = $peso / ($altura ** 2);

            if ($imc < 18.5) {
                $interpretacao = "Abaixo do peso";
            } elseif ($imc < 25) {
                $interpretacao = "Peso normal";
            } elseif ($imc < 30) {
                $interpretacao = "Sobrepeso";
            } elseif ($imc < 35) {
                $interpretacao = "Obesidade grau 1";
            } elseif ($imc < 40) {
                $interpretacao = "Obesidade grau 2";
            } else {
                $interpretacao = "Obesidade grau 3 (mórbida)";
            }
            
            // Exibe o resultado
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
            echo "<p>Interpretação: " . $interpretacao . "</p>";
        } else {
            // Caso algum dos campos esteja vazio ou não seja numérico
            echo "<p>Preencha peso e altura corretamente.</p>";
        }
        
    }
    ?>
    </div>
</body>


</html>