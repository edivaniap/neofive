<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Neo 5</title>
        <link rel="shortcut icon" href="images/five.ico"/>
        <link rel="stylesheet" href="styles/master.css" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    <center>
        <div>
            <img src="images/arithcalc.png" alt="arithcalc" class="lg"/>

            <h2>Arith Calc</h2>

            <p>
                Arith Calc é uma calculadora aritmética, inicialmente,
                implementada com as funções de gerar números <i>primos</i>,
                <i>múltiplos</i> e <i>divisores</i> de um número, além de calcular 
                <i>mdc</i> e <i>mmc</i> entre dois números. 
            </p>

            <br/>
            <a href="https://mega.co.nz/#!50dy3RID" target="_blank" class="btn_class">Download</a>
            <br/><br/><br/>
            <table>
                <tr>
                    <td><img src="images/mail.ico" alt="mail" class="mail"></td>
                    <td>neofive@outlook.com</td>
                </tr>
            </table>
            <p>
                Pretendemos aprimorar esta ferramenta, então, pedimos a sua sugestão para novas funções ou melhoria das atuais.
                 <!--Sinta-se a vontade para nos enviar um e-mail.--> 
            </p>
        </div>

        <div style="width: 600px; text-align: left;">
             <hr/><br/>
                 DEIXE UM COMENTÁRIO<br/><br/>
            <form id="f1" name="f1">
                <input type="text" id="nome" name="nome" maxlength="80" placeholder="Nome" required=""/><br/><br/>
                <input type="email" id="email" name="email" maxlength="80" placeholder="E-mail" required=""/><br/><br/>
                <textarea rows="4" cols="50" name="comentario" form="f1" maxlength="1000" placeholder="Comentário" style="resize: none;" required=""></textarea>
                <input type="submit" id="sub" name="sub" value="Comentar">
            </form>
        </div>

        <!--<div style="text-align: right; margin-right: 100px">
            <img src="images/neofive.png" alt="arithcalc" style="width: 90px"/>
        </div>-->
    </center>
</body>
</html>
