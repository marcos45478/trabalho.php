<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <h1>Tec. Informática para WEB <i class="fa-solid fa-chalkboard-user"></i> <i class="fa-solid fa-laptop"></i></h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#contato">Contato</a>
            <a href="#perfil">Perfil</a>
        </nav>
    </header>
    <section>
        <form action="insert.php" method="post">
            <h3>Trabalho</h3>
            <input type="text" name="Titulo" placeholder="Titulo" class="box">
            <textarea name="Desc" id="" class="box" placeholder="Descrição"></textarea>
            <input type="date" name="Data" id="" class="box">
            <input type="text" name="Resp" placeholder="Responsável" class="box">
            <input type="text" name="Cat" placeholder="Categoria" class="box">

            <input type="submit" value="Enviar" class="btn">
        </form>
    </section>
    <section>

        <div class="container">
            <p>
                <?php
                include_once('conexao.php');
                $sql = "SELECT * FROM ativades";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                
                foreach ($resultados as $linha) {
                    echo "<p>ID: " . $linha['id'];
                    echo "<br>";
                    echo "<p>Titulo: " . $linha['Titulo'];
                    echo "<br>";
                    echo "<p>Descrição: " . $linha['descricao'];
                    echo "<br>";
                    echo "<p>Data: " . $linha['data'];
                    echo "<br>";
                    echo "<p>Responsavel: " . $linha['responsavel'];
                    echo "<br>";
                    echo "<p>Categoria: " . $linha['categoria'];
                    
                }
           
                ?>
            </p>
        </div>
    </section>
    <footer>
        <h1>Tec. Informática para WEB <i class="fa-solid fa-chalkboard-user"></i> <i class="fa-solid fa-laptop"></i></h1>
    </footer>
</body>

</html>