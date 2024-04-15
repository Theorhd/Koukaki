<?php

get_header();
?>

    <main id="primary" class="site-main">
    <section class="banner">
            <video autoplay muted loop id="background-video">
                <source src=".\wp-content\themes\foce-child\assets\video\videoHeader.mp4" type="video/mp4">
            </video>
        <img id="floatitem" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
    </section>

        <section id="story" class="story fadeInStory">
            <div class="titleHisBG">
                <h2 class="fadeInUpJS fiuStory">L'histoire</h2>
            </div>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

        <?php
        get_template_part('template-parts/charactersSection');
        ?>
            
            <article id="place" > 
                <div class="cloudContainer">
                    <div id="bigCloud"></div>
                    <div id="litleCloud"></div>
                </div>          
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>

        <section id="studio" class="fadeInStudio">
            <div class="studioTitleBG">
                <h2><span id="studioSpan1">Studio</span> <span id="studioSpan2">Koukaki</span></h2>
            </div>
            <div class="studioContent">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section class="Oscarcont fadeInOscar" id="oscar">
            <div class="oscartitleBG">
                <h5>
                    Fleurs d'oranger & chats errants<br>
                    est nominé aux Oscars Short<br>
                    Film Animated de 2022 !
                </h5>
            </div>
            <div class="oscarLogo">
                <img src="./wp-content\themes\foce-child\assets\images\oscarLogo.png" alt="">
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
