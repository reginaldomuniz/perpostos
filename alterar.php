<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$posto = selectId($_POST["id"]);
//var_dump($pessoa);
?>
<meta charset="UTF-8">

<form name="dadosPosto" action="conexao.php">
    <table border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th><input type="text" name="nome" value="<?=$posto['nome']?>" size="20"/></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="usuario" value="<?=$posto['endereco']?>" size="20"/></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input type="text" name="email" value="<?=$posto['bairro']?>" size="20"/></td>
            </tr>
            <tr>
                <td>Preço Gasolina Comum:</td>
                <td><input type="int" name="creat" value="<?=$posto['precogasolinacomum']?>" /></td>
            </tr>
            <tr>
                <td>Preço Gasolina Adtivada:</td>
                <td><input type="int" name="precogasolinaadtivada" value="<?=$posto['precogasolinaadtivada']?>" /></td>
            </tr>
            <tr>
                <td>Preço Diesel:</td>
                <td><input type="int" name="precodiesel" value="<?=$posto['precodiesel']?>" /></td>
            </tr>
            <tr>
                <td>Preço Alcool:</td>
                <td><input type="int" name="precoalcool" value="<?=$posto['precoalcool']?>" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="alterar" />
                    <input type="hidden" name="id" value="<?=$posto["id"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

