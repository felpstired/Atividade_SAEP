<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VESTE VC</title>
    <link rel="stylesheet" href="./css/style.css">
    <script scr="https://kit.fontawesome.com/f6dcf461c1.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php

    include_once './config/func.php';

    session_start();

    ?>
    <div class="body">
        <section id="cabecalho">
            <div id="center">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="index.php?page=home">
                                    <div id="logo">VESTE VC</div>
                                </a>
                            </div>
                            <div class="col">
                                <div id="menu">
                                    <a href="index.php">Home</a>
                                    <a href="index.php?page=fav">Favoritos</a>
                                    <button onclick="document.getElementById('login').style.display='block'"
                                        class="button">Login</button>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            if (!isset($_SESSION['cpf'])) {

                ?>

                <div id="login" class="modal">
                    <div class="modal-content">
                        <div>
                            <h2>LOGIN</h2>
                            <div class="form-group">
                                <label for="cpf"></label>
                                <input type="text" placeholder="CPF" id="cpf" name="cpf" required>
                            </div>
                            <div class="form-group">
                                <label for="senha"></label>
                                <input type="password" id="senha" placeholder="Senha" name="senha" required>
                            </div>
                            <div class="modal-footer form-button">
                                <button type="button" class="btn btn-secondary cancel-button"
                                    onclick="document.getElementById('login').style.display='none'">Cancelar</button>
                                <button type="button" class="btn btn-primary confirm-button"
                                    id="loginBtn">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

            } else {

                ?>

                <div id="login" class="modal">
                    <div class="modal-content">
                        <div>
                            <h2>
                                <?php echo $_SESSION['user']; ?>, você está logado.
                            </h2>
                            <p class="msg" style="color: red; text-align: center;">Deseja deslogar?</p>
                            <div class="modal-footer form-button">
                                <button type="button" class="btn btn-secondary cancel-button"
                                    onclick="document.getElementById('login').style.display='none'">Cancelar</button>
                                <button type="button" class="btn btn-primary confirm-button" id="deslogar">Deslogar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

            }

            ?>

        </section>
        <section class="corp">
            <div class="corpo">
                <?php

                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $sp = $_GET['page'];
                    if ($sp == 'fav') {
                        include_once './fav.html';
                    } else if ($sp == 'home') {
                        include_once './home.html';
                    }
                } else {
                    include_once './home.html';
                }

                ?>
            </div>
        </section>
        <section id="footer">
            <div class="foot">
                <h1>VESTE VC</h1>
                <hr>
                <h6>2022 / Todos os direitos reservados</h6>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $('#loginBtn').click(function () {
                var cpf = $('#cpf').val();
                var senha = $('#senha').val();
                if (cpf != '' && senha != '') {
                    $.ajax({
                        url: "acao.php",
                        method: "POST",
                        data: { cpf: cpf, senha: senha },
                        success: function (data) { 
                            if (data == 0) {
                                alert("CPF e/ou senha incorretos.");
                            }
                            else {
                                $('#login').hide();
                                location.reload();
                            }
                        }
                    });
                }
                else {
                    alert("Os dois campos devem ser preenchidos.");
                }
            });
            $('#deslogar').click(function () {
                var action = "deslogar";
                $.ajax({
                    url: "acao.php",
                    method: "POST",
                    data: { action: action },
                    success: function (data) {
                        location.reload();
                    }
                });
            });
        });


        let click = false;

        $('#likebt').click(function () {
            if (click) {
                $('img#likeimg').css({
                    "filter": ""
                });
                click = false;
            } else {
                $('img#likeimg').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click = true;
            }
        });


        let click1 = false;

        $('#likebt1').click(function () {
            if (click1) {
                $('img#likeimg1').css({
                    "filter": ""
                });
                click1 = false;
            } else {
                $('img#likeimg1').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click1 = true;
            }
        });


        let click2 = false;

        $('#likebt2').click(function () {
            if (click2) {
                $('img#likeimg2').css({
                    "filter": ""
                });
                click2 = false;
            } else {
                $('img#likeimg2').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click2 = true;
            }
        });


        let click3 = false;

        $('#likebt3').click(function () {
            if (click3) {
                $('img#likeimg3').css({
                    "filter": ""
                });
                click3 = false;
            } else {
                $('img#likeimg3').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click3 = true;
            }
        });


        let click4 = false;

        $('#likebt4').click(function () {
            if (click4) {
                $('img#likeimg4').css({
                    "filter": ""
                });
                click4 = false;
            } else {
                $('img#likeimg4').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click4 = true;
            }
        });


        let click5 = false;

        $('#likebt5').click(function () {
            if (click5) {
                $('img#likeimg5').css({
                    "filter": ""
                });
                click5 = false;
            } else {
                $('img#likeimg5').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click5 = true;
            }
        });


        let click6 = false;

        $('#likebt6').click(function () {
            if (click6) {
                $('img#likeimg6').css({
                    "filter": ""
                });
                click6 = false;
            } else {
                $('img#likeimg6').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click6 = true;
            }
        });


        let click7 = false;

        $('#likebt7').click(function () {
            if (click7) {
                $('img#likeimg7').css({
                    "filter": ""
                });
                click7 = false;
            } else {
                $('img#likeimg7').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click7 = true;
            }
        });


        let click8 = false;

        $('#likebt8').click(function () {
            if (click8) {
                $('img#likeimg8').css({
                    "filter": ""
                });
                click8 = false;
            } else {
                $('img#likeimg8').css({
                    "filter": "invert(26%) sepia(89%) saturate(6000%) hue-rotate(330deg) brightness(95%) contrast(106%)"
                });
                click8 = true;
            }
        });

    </script>
</body>

</html>