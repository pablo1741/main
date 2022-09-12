<DOCUMENT HTML>

    <head>
    </head>

    <body>
        <?php
        /*inicio menu superior*/
    include_once "top_menu.php";
            /*fim menu superior*/

    ?>
        <center><br>
            CPF : <input type="number" id="cpf" name="cpf"><br>
            Senha: <input type="password" id="senha" name="senha"><br>
            <button onclick="login()">Enviar</button>
        </center>
        <script>
            function login() {
                var cpf = document.getElementById('cpf').value;
                cpf.innerHTML;
                console.log(cpf);
            }
        </script>
    </body>