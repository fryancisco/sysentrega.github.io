<?php if(session_status() !== PHP_SESSION_ACTIVE){session_start();} ?>
<!DOCTYPE html>
<html lang="PT-BR" class="has-background-dark">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/entrega.css">
    </head>
    <body>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4 box">
                            <img src="logo.png" alt="">
                            <br/>
                            <br/>
                            <h3 class="title has-text-white">Sistema de Entregas</h3>
                    <form action="newentrega.php" method="POST">
                        <div class="control">
                            <input oninput="this.value = this.value.toUpperCase()" name="nomecli" required autofocus class="input is-large" type="text" placeholder="Nome"/>
                            
                            <input oninput="this.value = this.value.toUpperCase()" name="telcli" required autofocus class="input is-large" type="number" placeholder="Telefone"/>

                            <input oninput="this.value = this.value.toUpperCase()" name="ruacli" required autofocus class="input is-large" type="text" placeholder="Rua"/>

                            <input oninput="this.value = this.value.toUpperCase()" name="bairrocli" required autofocus class="input is-large" type="text" placeholder="Bairro"/>

                            <input oninput="this.value = this.value.toUpperCase()" name="numerocasacli" autofocus class="input is-large" type="number" required placeholder="Numero da Casa"/>

                            <input oninput="this.value = this.value.toUpperCase()" name="refcli" required autofocus class="input is-large" type="text" placeholder="Ponto de Referência"/>
                            
                            <input oninput="this.value = this.value.toUpperCase()" name="volcli" required autofocus class="input is-large" type="number" placeholder="Quantidade de Volumes"/>

                            <button onclick="print();" type="submit" class="button is-block is-link is-large is-fullwidth">Imprimir</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>