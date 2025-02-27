<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/style_pagina_cadastro_ferramenta.css">


    <title>Cadastrar Ferramenta</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">


</head>

<body>


    <?php // HEADER
    require_once "header.php";

    if (isset($_SESSION["id_usuario"])) {

        if ($_SESSION["nivel_usuario"] == 'Admin' || $_SESSION["nivel_usuario"] == 'Professor') {

            ?>

            <main class="estilo-fonte">

                <div class="container flex-center flex-column">

                    <div class="cadastrar-ferramenta flex-center flex-column">

                        <h2>Adicionar Nova Ferramenta</h2>

                        <form class="form-cadastrar-ferramenta" action="/fatec-tools/cadastrar-ferramenta" method="post"
                            enctype="multipart/form-data">

                            <div class="campos flex-lado-a-lado">

                                <div class="container-left container-left-right">

                                    <div class="img-logo-ferramenta">

                                        <img class="img-cadastrar-ferramenta" src="" id="img">
                                        <input type="file" name="logoFerramenta" onchange="mostrar(this)">

                                    </div>

                                    <div style="color:blue;font-size:11px;"><?php echo $msg[4]; ?></div>

                                </div>

                                <div class="container-right container-left-right">

                                    <label for="nomeFerramenta">Nome:</label>
                                    <input type="text" id="nomeFerramenta" name="nome" required>
                                    <div style="color:red;font-size:11px;"><?php echo $msg[0]; ?></div>

                                    <label for="linkDonwload">Link para download:</label>
                                    <input type="url" id="linkDonwload" name="link" required>
                                    <div style="color:red;font-size:11px;"><?php echo $msg[1]; ?></div>

                                    <label for="descricao">Descrição:</label>
                                    <textarea id="descricao" name="descricao" rows="7" cols="50" required></textarea>
                                    <div style="color:red;font-size:11px;"><?php echo $msg[2]; ?></div>

                                    <label for="categoria">Categoria:</label>


                                    <select id="categoria" name="categoria">
                                        <option value="0">Escolha uma categoria</option>
                                        <?php //Listar as Categorias
                                                foreach ($retorno as $dado) {

                                                    echo "<option value='{$dado->id_cat_ferramenta}'>{$dado->descricao}</option>";

                                                }
                                                ?>
                                    </select>
                                    <div style="color:red;font-size:11px;"><?php echo $msg[3]; ?></div>

                                </div>

                            </div>

                            <div class="btns-acoes flex-lado-a-lado">
                                <input class="btn-vermelho btn-lado-a-lado" type="submit" value="Adicionar Ferramenta">
                                <input class="btn-vermelho btn-lado-a-lado" type="reset" value="Limpar Campos">
                            </div>

                            <?php //MENSAGEM DE RETORNO
                                    if (isset($_GET["msg"])) {
                                        echo "<p>{$_GET["msg"]}</p>";

                                        echo '<p>Ver lista de ferramentas <a href="/fatec-tools/listar-ferramentas" class="text-link">Clique aqui</a>';
                                    }
                                    ?>

                        </form>

                    </div>

                </div>

            </main>


        <?php // FOOTER
    
        } else {

            header("Location: /fatec-tools");
        }
    } else {

        header("Location: /fatec-tools/login");
    }

    require_once "footer.html";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        function mostrar(img) {
            if (img.files && img.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };
                reader.readAsDataURL(img.files[0]);
            }
        }
    </script>

</body>

</html>