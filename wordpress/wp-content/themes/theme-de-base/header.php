<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/svg+xml" href="/sources/medias/globe.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
   
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>
<nav class="Nav">
      <div class="menu">
        <div class="logo">
          <a href="/"><img src="/wp-content/themes/theme-de-base/sources/medias/img_logos/equiterre.png" alt="Logo"/></a>
        </div>
        <div class="menu__toggle">
          <a><i class="ri-menu-3-fill"></i></a>
        </div>
        <div class="menu__desktop">
          <ul>
            <li><a href="/about.html">À propos</a></li>
            <li><a href="/news.html">Nouvelles</a></li>
            <li><a href="/services.html">Services</a></li>
            <li><a href="/team.html">Équipe</a></li>
            <li><a href="/history.html">Histoire</a></li>
            <li><a href="#">EN</a></li>
            <li><a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/"><button class="btn--menu primary">Faire un don</button></a></li>
          </ul>
        </div>
      </div>
      <div class="hamburger">
        <ul>
          <a href="/about.html"><li>À propos</li></a>
          <a href="/news.html"><li>Nouvelles</li></a>
          <a href="/services.html"><li>Services</li></a>
          <a href="/team.html"><li>Équipe</li></a>
          <a href="/history.html"><li>Histoire</li></a>
          <a href="#"><li>EN</li></a>
          <a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/"><li><button class="btn--menu primary">Faire un don</button></li></a>
        </ul>
      </div>
    </nav>
    <header class="header">
      <div class="hero">
        <div class="swiper heroSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel01.jpg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel02.jpeg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel03.jpg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel04.jpg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel05.jpg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
            <div class="swiper-slide">
              <img src="/wp-content/themes/theme-de-base/sources\medias\img_caroussel\caroussel06.jpg" alt="">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-md-8">
                    <h1>Titre 01</h1>
                    <h2>Titre 02</h2>
                    <button class="btn--hero primary">Lire la suite</button>
                  </div>
                </div>
              </div>
              <div class="hero--gradient"></div>
            </div>
          </div>
        </div>
      </div>
    </header>

<main><!-- Débute le contenu principal de notre site -->
