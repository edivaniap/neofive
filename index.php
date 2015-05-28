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
            <hr/><br/>DEIXE UM COMENTÁRIO<br/><br/>
            <form id="f1" name="f1" action="./dados.php" method="post">
                <input type="text" id="nome" name="nome" maxlength="80" placeholder="Nome" required=""/><br/><br/>
                <input type="email" id="email" name="email" maxlength="80" placeholder="E-mail" required=""/><br/><br/>
                <textarea rows="4" cols="50" name="comentario" form="f1" maxlength="1000" placeholder="Comentário" style="resize: none;" required=""></textarea>
                <input type="submit" id="sub" name="sub" value="Comentar">
            </form>
        </div>

        <div style="width: 600px; text-align: left;">
            <hr/><br/>COMENTÁRIOS<br/><br/>
            <?php
           
            $dbUser = "root";
            $dbPass = "1234";
            $dbHost = "localhost";
            $dbDatabase = "neo5";

            $mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);
            if ($mysqli->connect_error) {
                die("<strong>Error:</strong> (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM user ORDER BY id DESC";
            $query = $mysqli->query($sql);
            while ($dados = mysqli_fetch_assoc($query)) {
                //echo 'Registros encontrados: ' . $query->num_rows; //QUANTIDADE
                ?>   
                <table>
                    <tr>
                        <td> 
                            <img src="images/bit.png" alt="avi" class="avi"/>
                        </td>
                        <td style="padding-left: 20px; padding-right: 20px; width: 500px;">
                            <i style="color: #FA5858"><?php echo $dados['nome'] ?></i>
                            <br/>
                            <?php echo $dados['comentario'] ?>  
                        </td>
                       <!-- <td>
                            <% if (idlogado != null && idlogado.equals(comentarios.getString("idcomentador"))) {%> 
                            <form action="operarComentario.jsp?idcu=<%=comentarios.getString("idcu")%>"  id="f4" name="f4" method="post">                                               
                                <input type="hidden" name="opcao" value="usuario">
                                <input type="hidden" name="pagina" value="usuario.jsp?id=<%=idusuario%>">
                                <input type="submit" name="acao" value="Excluir" style="font-size: 8pt;">
                            </form>
                            <%}%>  
                        </td>-->
                    </tr>                   

                </table>  
                <br/><br/>
            <?php } ?>
        </div>
        <div style="text-align: right; margin-right: 100px">
          <img src="images/neofive.png" alt="neofive" style="width: 90px"/>
      </div>
    </center>
</body>
</html>
