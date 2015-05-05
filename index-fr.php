<?php
    $breadcrumbs = array();
    include('header-fr.php');
?>

<h1>Simple and Fast Multimedia Library</h1>

<div class="news">
    &nbsp;&nbsp;&nbsp;&nbsp;Utilisez le code <strong>sfgde50</strong> pour obtenir <strong>50%</strong> de réduction pour les <a href="learn-fr.php">e-books sur SFML</a> publiés par Packt
</div>

<div class="home-section">
    <div class="column">
        <div class="title">SFML est multi-media</div>
        <p>
            SFML offre une interface simple vers les différents composants de votre PC, afin de faciliter le développement de jeux ou d'applications multimedia. Elle se
            compose de cinq modules : système, fenêtrage, graphisme, audio et réseau.
        </p>
        <p>
            Découvrez plus en détail leurs fonctionnalités, dans <a href="learn-fr.php" title="Aller à la page des tutoriels et de la documentation">les tutoriels et
            la documentation de l'API</a>.
        </p>
    </div>
    <div class="column image">
        <img src="<?php echo image('home/multimedia.png') ?>" alt="Image multimedia" />
    </div>
</div>

<div class="home-section">
    <div class="column image">
        <img src="<?php echo image('home/multiplatform.png') ?>" alt="Image multi-platforme" />
    </div>
    <div class="column">
        <div class="title">SFML est multi-plateforme</div>
        <p>
            Avec SFML, votre application peut se compiler et tourner sans effort sur la plupart des systèmes d'exploitation : Windows, Linux, Mac OS X et prochainement
            Android &amp; iOS.
        </p>
        <p>
            Des SDKs précompilés pour votre OS préféré sont disponibles sur la <a href="download-fr.php" title="Aller à la page des téléchargements">page des téléchargements</a>.
        </p>
    </div>
</div>

<div class="home-section">
    <div class="column">
        <div class="title">SFML est multi-langage</div>
        <p>
            SFML possède des bindings officiels pour les langages C et .Net. Et grace à sa communauté très active, elle est également disponible dans beaucoup d'autres
            langages tels que Java, Ruby, Python, Go et plus encore.
        </p>
        <p>
            Apprenez-en d'avantage à leur sujet sur la <a href="download/bindings-fr.php" title="Aller à la page des bindings">page des bindings</a>.
        </p>
    </div>
    <div class="column image">
        <img src="<?php echo image('home/multilanguage.png') ?>" alt="Image multi-langage" />
    </div>
</div>

<?php
    require("footer-fr.php");
?>
