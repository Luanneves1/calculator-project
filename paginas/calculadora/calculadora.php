<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    

    <div class="container mt-5">
        <h2>Calculadora Simples</h2>

        <form action="index.php?menuop=calculadora" method="POST">
            <div class="mb-3">
                <label for="num1" class="form-label">Valor 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Valor 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <div class="mb-3">
                <label for="operacao" class="form-label">Operação:</label>
                <select class="form-select" id="operacao" name="operacao">
                    <option value = "operacao"  selected>Selecione a operação abaixo: </option>
                    <option value="soma">Soma (+)</option>
                    <option value="subtracao">Subtração (-)</option>
                    <option value="multiplicacao">Multiplicação (*)</option>
                    <option value="divisao">Divisão (/)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning  container">Calcular</button>
        </form>

        <?php
        // Verificar se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capturar os valores enviados pelo formulário
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacao = $_POST["operacao"];

            // Realizar o cálculo correspondente à operação selecionada
            switch ($operacao) {
                case "soma":
                    $resultado = $num1 + $num2;
                    break;
                case "subtracao":
                    $resultado = $num1 - $num2;
                    break;
                case "multiplicacao":
                    $resultado = $num1 * $num2;
                    break;
                case "divisao":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Erro: divisão por zero!";
                    }
                    break;
                default:
                    $resultado = "Operação inválida";
            }

            // Exibir o resultado
            
            echo "<h3> Resultado:</h3>";
            echo "<p>Número 1: " . $num1 . "</p>";
            echo "<p>Número 2: " . $num2 . "</p>";
            echo "<p>Operação: " . $operacao . "</p>";
            echo "<p>Resultado: " . $resultado . "</p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
