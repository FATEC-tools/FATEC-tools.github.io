<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/STYLE_TOP_CABEÇALHO.css">
    <link rel="stylesheet" href="css/STYLE_PAGE_INICIAL.css">
    <link rel="stylesheet" href="css/STYLE_SLIDES_IMAGEM_PAGA_INICIAL.css">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Inicial</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->

    <?php require_once 'header.php'; ?>
    <!-- FIM TOPO SITE -->

    <!-- PARTE CONTEUDO PRINCIPAL -->
    <main class="estilo-fonte">
        <section id="imagem-app-site">
            <div class="area-imagens-inicio margem-entre-ele-inicio">
                <div class="slides-imagem-conteiner-inicio">
                    <div class="slides-imagens-inicio">

                        <!-- ESCOLHER IMAGEMS QUE SERÁ EXIBIDA -->
                        <input class="radio-img" type="radio" name="slide" id="slide1" checked>
                        <input class="radio-img" type="radio" name="slide" id="slide2">
                        <input class="radio-img" type="radio" name="slide" id="slide3">
                        <input class="radio-img" type="radio" name="slide" id="slide4">
                        <input class="radio-img" type="radio" name="slide" id="slide5">

                        <!-- IMAGENS DO SLIDE -->
                        <div class="slide s1">
                            <img src="img/IMG_PAGE_INICIAL/IMG-VISUAL-CODE.png" alt="visual studios code">
                        </div>

                        <div class="slide">
                            <img src="img/IMG_PAGE_INICIAL/IMG-FIGMA.png" alt="figma">
                        </div>

                        <div class="slide">
                            <img src="img/IMG_PAGE_INICIAL/IMG-BR-MODELO.png" alt="brModelo">
                        </div>

                        <div class="slide">
                            <img src="img/IMG_PAGE_INICIAL/IMG-VISUAL-G.png" alt="visuALG">
                        </div>

                        <div class="slide">
                            <img src="img/IMG_PAGE_INICIAL/IMG-ORACLE.png" alt="Virtual Box - Orcale">
                        </div>

                    </div>


                    <!-- NAVEGAÇÃO ENTRE AS IMAGENS -->
                    <div class="slides-navegation">
                        <label class="bar" for="slide1"></label>
                        <label class="bar" for="slide2"></label>
                        <label class="bar" for="slide3"></label>
                        <label class="bar" for="slide4"></label>
                        <label class="bar" for="slide5"></label>
                    </div>

                </div>
            </div>
        </section>


        <article class="inicio-aplicativos-relevantes">
            <h2>Aplicativos Relevantes</h2>
            <div class="app-relevante flex-lado-quebra">

                <?php
                foreach ($retorno as $dado) {
                    if ($dado->situacao == "Ativa") { ?>

                        <div class="btn-app">
                            <a href="<?php echo "/fatec-tools/pagina-aplicativo?id={$dado->id_ferramenta}"; ?>"><img
                                    src="img/ICONES_APP/<?php echo "{$dado->logoFerramenta}"; ?>" alt="imagem do site ou app">
                                <h3><?php echo "{$dado->nome}"; ?></h3>
                            </a>
                        </div>

                        <?php
                    }
                }
                ?>

            </div>
        </article>

        <section class="imagem-propaganda">
            <img src="img/IMG_PAGE_INICIAL/Carousel_Image_Boards_2x.png" alt="imagem-app-site">
        </section>

        <article class="aplicativos-categoria">

            <a href="/fatec-tools/desenvolvimento-web">

                <div class="btn-categoria-disciplina">
                    <p>Desenvolvimento Web ></p>
                </div>
            </a>
            <div id="aplicativos-categoria" class="app-categoria flex-lado-quebra">
                <div class="btn-app">
                    <a href="PAGE_APP_VSCODE.html"><img src="img/ICONES_APP/visualcode.png" alt="imagem do site ou app">
                        <h3>Visual Studios <br>Code</h3>
                    </a>
                </div>

                <div class="btn-app">
                    <img src="img/ICONES_APP/git & github.png" alt="imagem do site ou app">
                    <h3>Como usar Git & GitHub</h3>
                </div>

                <div class="btn-app">
                    <img src="img/ICONES_APP/git.png" alt="imagem do site ou app">
                    <h3>Git</h3>
                </div>

                <div class="btn-app">
                    <img src="img/ICONES_APP/Frame 3.png" alt="imagem do site ou app">
                    <h3>Como usar Display <span>Flex</span></h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/css.png" alt="imagem do site ou app">
                    <h3>Animações com <span>CSS</span></h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/Group 15.png" alt="imagem do site ou app">
                    <h3>HTML e CSS por onde Começar?</h3>
                </div>
            </div>
        </article>

        <section class="imagem-propaganda">
            <img src="img/IMG_PAGE_INICIAL/Agrupar 3.png" alt="imagem-app-site">
        </section>

        <article class="aplicativos-categoria">
            <a href="/fatec-tools/design-web">
                <div class="btn-categoria-disciplina">
                    <p>Design Digital ></p>
                </div>
            </a>
            <div id="aplicativos-categoria" class="app-categoria flex-lado-quebra">
                <div class="btn-app">
                    <a href="PAGE_APP_FIGMA.html"><img src="img/ICONES_APP/figma.png" alt="imagem do site ou app">
                        <h3>Figma</h3>
                    </a>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/aobe color.png" alt="imagem do site ou app">
                    <h3>Adobe Color</h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/grid calculator.png" alt="imagem do site ou app">
                    <h3>Grid Calculator</h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/Shape Type.png" alt="imagem do site ou app">
                    <h3>Shape Type</h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/Kern Type.png" alt="imagem do site ou app">
                    <h3>Kern Type</h3>
                </div>
                <div class="btn-app">
                    <img src="img/ICONES_APP/the bezier game.png" alt="imagem do site ou app">
                    <h3>The Bézier Game</h3>
                </div>
            </div>
        </article>
    </main>

    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>
    <!-- FIM RODAPE -->
</body>

<script src="js/menu-sanduiche.js"></script>

</html>