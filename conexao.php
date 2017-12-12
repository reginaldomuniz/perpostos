<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        echo "Hello World";
        inserirPosto();
    }
    if($_POST["acao"]=="alterar"){
        alterarPosto();
    }
}

function abrirBanco(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastro";
    echo "Hello World";
    $banco = new mysqli($servername, $username, $password, $dbname);
    return $banco;
}

function alteraPosto() {
    $banco = abrirBanco();
    echo "Hello World";
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $precogasolinacomum = $_POST["precogasolinacomum"];
    $precogasolinaadtivada = $_POST["precogasolinaadtivada"];
    $precodiesel = $_POST["precodiesel"];
    $precoalcool = $_POST["precoalcool"];
    $sql = "UPDATE posto SET nome='$nome',endereco='$endereco',bairro='$bairro',precogasolinacomum='$precogasolinacomum',precogasolinaadtivada='$precogasolinaadtivada',precodiesel='$precodiesel',precoalcool='$precoalcool' WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco=null;
    voltarIndex();
}

function inserirPosto() {
    echo "Hello World";
    $banco = abrirBanco();
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $precogasolinacomum = $_POST["precogasolinacomum"];
    $precogasolinaadtivada = $_POST["precogasolinaadtivada"];
    $precodiesel = $_POST["precodiesel"];
    $precoalcool = $_POST["precoalcool"];
    $sql = "INSERT INTO posto(nome, endereco, bairro, precogasolinacomum, precogasolinaadtivada, precodiesel, precoalcool) VALUES ('$nome', '$endereco', '$bairro', '$precogasolinacomum', '$precogasolinaadtivada', '$precodiesel', '$precoalcool')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAll(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM posto ORDER BY nome";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectId($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM posto WHERE id_posto =".$id;
    $resultado = $banco->query($sql);
    $posto = mysqli_fetch_assoc($resultado);
    return $posto;
}

function voltarIndex(){
    header("Location:index.php");    
}
