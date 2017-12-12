<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include("conexao.php");
    $grupo = selectAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>PerPostos</h1>
        <a href="inserir.php">Cadastro de Postos</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Undereço</th>
                    <th>Bairro</th>                    
                    <th>Preço Gasolina Comum</th>
                    <th>Preço Gasolina Adtivada</th>
                    <th>Preço Diesel</th>
                    <th>Preço Alcool</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($grupo as $posto){ ?>
                    <tr>
                    <td><?=$posto["nome"]?></td>
                    <td><?=$posto["endereco"]?></td>
                    <td><?=$posto["bairro"]?></td>
                    <td><?=$posto["precogasolinacomum"]?></td>
                    <td><?=$posto["precogasolinaadtivada"]?></td>
                    <td><?=$posto["precodiesel"]?></td>
                    <td><?=$posto["precoalcool"]?></td>
                    <td>
                        <form name="Alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="id" value=<?=$posto["id_posto"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form> 
                    </td>
                    <td>Excluir</td>
                    </tr>
                    <?php }
                ?>
                
            </tbody>
        </table>

        <?php
        // put your code here
        ?>
    </body>
</html>
