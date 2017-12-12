<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
<meta charset="UTF-8">

<form name="dadosPostos" action="conexao.php">
    <table border="1">
        <thead>
            <tr>
                <th>Nome:</th>
                <th><input type="text" name="nome" value="" /></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" value="" /></td>
            </tr>
            <tr>
                <td>Bairro:</td>
                <td><input type="text" name="bairro" value="" /></td>
            </tr>
            <tr>
                <td>Preço Gasolina Comum:</td>
                <td><input type="int" name="precogasolinacomum" value="" /></td>
            </tr>
            <tr>
                <td>Preço Gasolina Aditivada:</td>
                <td><input type="int" name="precogasolinaadtivada" value="" /></td>
            </tr>
            <tr>
                <td>Preço Diesel:</td>
                <td><input type="int" name="precodiesel" value="" /></td>
            </tr>
            <tr>
                <td>Preço Alcool:</td>
                <td><input type="int" name="precoalcool" value="" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="inserir" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

