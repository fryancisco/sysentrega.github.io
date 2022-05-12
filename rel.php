<?php
    include('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date('Y-m-d', time());
    $query = "SELECT * FROM entrega WHERE datah = '$hoje' ORDER BY hora";
    $dados = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);
?>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Relatório</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <div>
            <section class="hero is-fullheight">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <div class="column is-4 is-offset-4">
                            <h3 class="title has-text-black">
                            Relatório
                            </h3>
                        </div>
                        <h3 class="title has-text-black">
                            <center>
                            <table border="1">
                                <tr>
                                    <td style="padding: 5px;">CLIENTE</td>
                                    <td style="padding: 5px;">HORÁRIO</td>
                                    <td style="padding: 5px;">VOLUMES</td>
                                    <td style="padding: 5px;">CAIXA</td>
                                </tr>
                                <?php
                                    if($total > 0) {
                                        do {
                                ?>
                                <tr>
                                    <td style="padding: 5px;"><?=$linha['nomecli']?></td>
                                    <td style="padding: 5px;"><?= $linha['hora']?></td>
                                    <td style="padding: 5px;"><?= $linha['volcli']?></td>
                                    <td style="padding: 5px;"><?= $linha['caixa']?></td>
                                </tr>
                                
                                <?php
                                        }while($linha = mysqli_fetch_assoc($dados));
                                    }
                                ?>
                            </table>
                            <br/>
                        </h3>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<?php
    mysqli_free_result($dados);
?>