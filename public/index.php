<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/root.css" />
    <link rel="stylesheet" href="../assets/style/style.css" />
    <link rel="stylesheet" href="../assets/style/form.css" />
    <link rel="stylesheet" href="../assets/style/loisirs.css" />
    <link rel="stylesheet" href="../assets/style/profil.css" />
    <link rel="stylesheet" href="../assets/style/header.css" />
    <link rel="stylesheet" href="../assets/style/skill.css">
    <link rel="stylesheet" href="../assets/style/pro_experience.css" />
    <title>Jack Sparrow CV</title>
    <script src="../assets/script/header.js" defer></script>
</head>

<body>
    <header>
        <div class="head-fullscreen">
            <div class="bg-menu"></div>
            <div class="background-image"></div>
        </div>
        <nav>
            <div class="title">
                <h1>J<span id="scale-ack">AcK</span> Sparrow</h1>
            </div>
            <div class="menu-burger" id="menu-burger">
                <div class="lines-container">
                    <div class="burger-lines line-top"></div>
                    <div class="burger-lines line-middle"></div>
                    <div class="burger-lines line-bot"></div>
                </div>
            </div>
            <div class="display-menu" id="display-menu">
                <div class="menu-burger-open" id="menu-burger-open">
                    <div class="lines-container">
                        <div class="burger-lines-open line-top-open"></div>
                        <div class="burger-lines-open line-middle-open"></div>
                        <div class="burger-lines-open line-bot-open"></div>
                    </div>
                </div>
                <a href="#top" class="display-menu-title">Menu</a>
                <a href="#profil" class="display-menu-links">Profil</a>
                <a href="#competences" class="display-menu-links">Competences</a>
                <a href="#experience-pro" class="display-menu-links">Experience professionelle</a>
                <a href="#loisirs" class="display-menu-links">Loisirs</a>
                <a href="#contact" class="display-menu-links">Contact</a>
            </div>
        </nav>
        <h2 class="subtitle-header">Free to contract !</h2>
        <div class="scroll-down-indicator">
            <a href="#profil" class="scrooll-half-cross">
                <div class="scroll-half-cross-lines half-cross-line1"></div>
                <div class="scroll-half-cross-lines half-cross-line2"></div>
            </a>
        </div>
    </header>
    <main>


        <section class="section section1" id="profil">
            <?php require 'profil.php'; ?>
        </section>



        <div class="ba_pirates">
            <video id="background-video" src="/video/video_bg_jack.mp4" autoplay loop muted>
            </video>
        </div>


        <section class="section section2" id="competences">
            <?php require 'skill_Data.php'; ?>
        </section>


        <div class="ba_pirates">
            <video id="background-video" src="/video/video_bg.mp4" autoplay loop muted>
            </video>
        </div>


        <section class="section section3" id="experience-pro">
            <?php require 'experience_pro.php' ?>
        </section>


        <div class="ba_pirates"></div>
        <section class="section section4">
            <h1 id="loisirs">Loisirs</h1>
            <div class="loisirs">
                <div class="loisirs-cards-container" id="cards-container1">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Pecher</h2>
                            <p>Kraken, merle, sardine.</p>
                        </div>
                        <img src="img/kraken.png" alt="an image of a kraken" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container2">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Escrime</h2>
                            <p>J'aime la bagarre.</p>
                        </div>
                        <img src="/img/swords.png" alt="2 katanas crossing each other" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container3">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Tir sportif</h2>
                            <p>Pan, pan, pan.</p>
                        </div>
                        <img src="img/musket.png" alt="an image of a musket" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container4">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Rhum</h2>
                            <p>Juste le boire, pas le distiller.</p>
                        </div>
                        <img src="img/barrel.png" alt="image of a barrel" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>

                <div class="loisirs-cards-container" id="cards-container5">
                    <div class="loisirs-cards">
                        <div class="loisirs-text-container">
                            <h2>Seduction</h2>
                            <p>Des fois ça marche.</p>
                        </div>
                        <img src="img/heart.png" alt="image of a heart" />
                    </div>
                    <div class="background-block"></div>
                    <div class="background-block2"></div>
                </div>
            </div>
        </section>
        <div class="lastImg"></div>
    </main>



    <footer>
        <?php require 'form.php'; ?>
    </footer>



</body>

</html>