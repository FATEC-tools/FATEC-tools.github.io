<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/STYLE_PAGE_APP.css">
    <link rel="stylesheet" href="css/STYLE_TOP_CABEÇALHO.css">

    <!-- ICON PESQUISA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />


    <title>FATEC tools - Visual Studio Code</title>
    <link rel="icon" href="img/ICON_SITE_FATECTOOLS.png" type="image/png">
</head>

<body>
    <!-- INICIO TOPO SITE -->
    <?php require_once 'header.php'; ?>
    <!-- FIM TOPO SITE -->

    <!-- INICIO CONTEUDO PRINCIPAL -->
    <main>
        <section class="area-download">
            <!-- AREA PARA DIRENCIONAMENTO PARA SITE DE DOWNLOAD -->
            <div class="card-instalar">

                <div class="icon-ir-site margem-entre-ele">

                    <img id="image-icon-app" src="img/ICONES_APP/<?php echo "{$retorno[0]->logoFerramenta}"; ?>" alt="">

                    <div class="text-instalar">

                        <h2><?php echo "{$retorno[0]->nome}"; ?></h2>

                        <!-- CODIGO ESTRELAS AVALIAÇÃO -->
                        <div class="rating">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text"><svg viewBox="0 0 576 512" height="1em"
                                    xmlns="http://www.w3.org/2000/svg" class="star-solid">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                </svg></label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text"><svg viewBox="0 0 576 512" height="1em"
                                    xmlns="http://www.w3.org/2000/svg" class="star-solid">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                </svg></label>
                            <input checked="" type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text"><svg viewBox="0 0 576 512" height="1em"
                                    xmlns="http://www.w3.org/2000/svg" class="star-solid">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                </svg></label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text"><svg viewBox="0 0 576 512" height="1em"
                                    xmlns="http://www.w3.org/2000/svg" class="star-solid">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                </svg></label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text"><svg viewBox="0 0 576 512" height="1em"
                                    xmlns="http://www.w3.org/2000/svg" class="star-solid">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                    </path>
                                </svg></label>
                        </div>
                    </div>

                    <br>

                    <a href="<?php echo "{$retorno[0]->link_download}"; ?>" target="_blank"><button
                            class="btn-instalar">ir
                            para o site</button></a>
                </div>
                <div class="area-imagens margem-entre-ele">
                    <div class="slides-imagem-conteiner">
                        <div class="slides-imagens">

                            <!-- ESCOLHER IMAGEMS QUE SERÁ EXIBIDA -->
                            <input class="radio-img" type="radio" name="slide" id="slide1" checked>
                            <input class="radio-img" type="radio" name="slide" id="slide2">
                            <input class="radio-img" type="radio" name="slide" id="slide3">
                            <input class="radio-img" type="radio" name="slide" id="slide4">
                            <input class="radio-img" type="radio" name="slide" id="slide5">

                            <!-- IMAGENS DO SLIDE -->
                            <div class="slide s1">
                                <img src="img/IMG_TUTORIAL_PAGE_APP/tela_welcom.png" alt="">
                            </div>

                            <div class="slide">
                                <img src="img/IMG_TUTORIAL_PAGE_APP/Captura de tela 2024-05-18 172949.png" alt="">
                            </div>

                            <div class="slide">
                                <img src="img/IMG_TUTORIAL_PAGE_APP/tela_codigo.png" alt="">
                            </div>

                            <div class="slide">
                                <img src="img/IMG_TUTORIAL_PAGE_APP/Passo2VSCode.png" alt="">
                            </div>

                            <div class="slide">
                                <img src="img/IMG_TUTORIAL_PAGE_APP/Passo3VSCode.png" alt="">
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
            </div>
            </div>
        </section>

        <section class="area-descricao">
            <div class="descricao-avaliacao">
                <div class="descricao">
                    <h2>Descrição</h2>
                    <p>
                        <?php echo "{$retorno[0]->descricao}"; ?>
                    </p>
                </div>

                <div class="avaliacao">
                    <h2>Avaliação</h2>
                    <div class="blocos-avaliacao">

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/big_smoke_real_life___gta_sa_by_shibuz4_dg6ti9d-fullview.jpg"
                                    alt="">
                                <h2>Big Smoke</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/characters-from-gta-san-andreas-in-real-life-v0-6oqzb6meqxzb1.png"
                                    alt="">
                                <h2>Nick Kong</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/ryder_real_life___gta_sa_by_shibuz4_dg6ti4w-fullview.jpg"
                                    alt="">
                                <h2>Ryder</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/Screenshot_(1612).png" alt="">
                                <h2>CJ</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/big_smoke_real_life___gta_sa_by_shibuz4_dg6ti9d-fullview.jpg"
                                    alt="">
                                <h2>Big Smoke</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/characters-from-gta-san-andreas-in-real-life-v0-6oqzb6meqxzb1.png"
                                    alt="">
                                <h2>Nick Kong</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/ryder_real_life___gta_sa_by_shibuz4_dg6ti4w-fullview.jpg"
                                    alt="">
                                <h2>Ryder</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                        <div class="avaliacao-user">
                            <div class="img-avalia">
                                <img src="img/img-personas-page-app/Screenshot_(1612).png" alt="">
                                <h2>CJ</h2>
                            </div>
                            <div class="traco-avalia"></div>
                            <div class="opiniao-avalia">
                                <P>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni non et ea sit
                                    repellat voluptas ullam tempore asperiores laborum, recusandae officia optio quis
                                    doloribus expedita distinctio sunt. Velit, aut perferendis?
                                </P>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>

        <!-- INICIO AREA TUTORIAL -->
        <section class="area-primeiros-passos">
            <h2 id="titulo-primeiros-passos">Primeiros passos</h2>
            <article class="passos-geral passos">
                <div class="passos-left">
                    <h2>1º Passo</h2>
                    <p>
                        Depois de baixar o VSCode no site, abra o VSCodeUserSetup no explorador de arquivos da sua
                        máquina
                        e siga os passos de instalação mostrados.
                    </p>
                </div>

                <div class="passos-right">
                    <img src="img/IMG_TUTORIAL_PAGE_APP/Passo1VSCode.png" alt="">
                </div>
            </article>

            <article class="passos-geral passos-invert">
                <div class="passos-left">
                    <img src="img/IMG_TUTORIAL_PAGE_APP/Passo2VSCode.png" alt="">
                </div>

                <div class="passos-right">
                    <h2>2º Passo</h2>
                    <p>
                        Para começar a codificar primeiro crie uma pasta vazia,
                        depois selecione "open folder" dentro do aplicativo para abrir a pasta que você acabou de criar.
                    </p>
                </div>
            </article>

            <article class="passos-geral passos">
                <div class="passos-left">
                    <h2>3º Passo</h2>
                    <p>
                        Após abrir a pasta no aplicativo, clique em new file.
                        Pronto, seu Visual Studio Code está pronto para ser usado, escolha a linguagem de programação
                        que será usada e começe seu projeto.
                    </p>
                </div>

                <div class="passos-right">
                    <img src="img/IMG_TUTORIAL_PAGE_APP/Passo3VSCode.png" alt="">
                </div>
            </article>

            <article class="passos-video">
                <h2>Video que pode te ajudar</h2>

                <iframe id="iframe" width="1280" height="720"
                    src="https://www.youtube.com/embed/NXgsXiu4LtA?si=jG50oH2U2UsTfvHf" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


            </article>
        </section>
    </main>

    <!-- RODAPE -->
    <?php require_once 'footer.html'; ?>

</body>

<script src="js/menu-sanduiche.js"></script>

</html>