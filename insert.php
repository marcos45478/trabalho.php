<?php
include_once('conexao.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['Titulo'];
    $descricao = $_POST['Desc'];
    $data = $_POST['Data'];
    $responsavel = $_POST['Resp'];
    $categoria = $_POST['Cat'];

    $sql = "INSERT INTO ativades (titulo, descricao, data, responsavel, categoria) VALUES (:titulo, :descricao, :data, :responsavel, :categoria)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':data', $data);
    $stmt->bindValue(':responsavel', $responsavel);
    $stmt->bindValue(':categoria', $categoria);
    $stmt->execute();
    header('location: trabalho.php');

}
