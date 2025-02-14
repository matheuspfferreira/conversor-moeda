<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <main>
        <h1>
            Converta seu dinheiro para Dólar
        </h1>
        <?php 
            $valorUsuarioReal = $_GET["valorReal"] ?? 0.00;
            $url = 'https://economia.awesomeapi.com.br/json/last/USD-BRL';

            //Extraindo os dados  da API
            $dados = json_decode(file_get_contents($url), true);

            //Obtendo apenas o valor da cotação do dólar (compra)
            $cotacaoDolar = $dados["USDBRL"]["bid"];

            //Convertendo o dinheiro do usuário para dólar
            $valorUsuarioDolar = round($valorUsuarioReal / $cotacaoDolar, 2);

            echo "<p>O seu dinheiro (R$ $valorUsuarioReal) equivale a: 
            <strong>USD $ $valorUsuarioDolar</strong>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>