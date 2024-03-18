<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/custom.css">
    <title>Avaliação</title>
</head>

<body>

    <h1>Avalie</h1>

    <form action="processo.php" method="post">

        <div class="estrelas">

            <input type="radio" name="estrela" id="vazio" value="" checked>
            
            <!-- Opção para selicionar 1 estrela -->
            <label><i class="opcao fa"></i></label>
            <input type="radio" name="estrela_um" id="vazio" value="1">

             <!-- Opção para selicionar 2 estrelas -->
            <label><i class="opcao fa"></i></label>
            <input type="radio" name="estrela_dois" id="vazio" value="2">

             <!-- Opção para selicionar 3 estrelas -->
            <label><i class="opcao fa"></i></label>
            <input type="radio" name="estrela_3" id="vazio" value="3">

             <!-- Opção para selicionar 4 estrels -->
            <label><i class="opcao fa"></i></label>
            <input type="radio" name="estrela_4" id="vazio" value="4">

             <!-- Opção para selicionar 5 estrelas -->
            <label><i class="opcao fa"></i></label>
            <input type="radio" name="estrela_5" id="vazio" value="5">

            <br><br>

            <!-- Botão para enviar os dados do formúlario -->
            <input type="submit" value="cadastrar">

            <br><br>

        </div>

    </form>

</body>

</html>