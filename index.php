<?php 
    $projeto = "Agenda de Contatos";
    $boasVindas = "";
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $projeto ?></title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="conexao1.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name= "nome" required/>
            <label for="email">E-mail</label>
            <input type="email" nome= "email" required/>
            <label for="text">Mensagem</label>
            <textarea name="msg" id="" cols="30" rows="10"></textarea>
            <button type="submit">Enviar</button>
        </form>
        <div class= "mensagem">
            
        </div>
    </main>
</body>
</html>



</body>
</html>


