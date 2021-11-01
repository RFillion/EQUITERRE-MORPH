<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
      <div class="container-fluid">
        <div class="footer-grid">
          <div class="logo">
            <a href="/" class="logo--footer"><img src="/sources/medias/img_logos/equiterre_blanc.png" class="logo--footer" alt="logo"/></a>
          </div>
          <div class="information">
            <div class="contact">
              <p><a href="mailto:info@equiterre.org" target="_blank">info@equiterre.org</a></p>
              <p><a href="tel:5145222000" target="_blank">(514) 522-2000</a></p>
              <p><a href="https://bit.ly/31ezcp7" target="_blank">Maison du développement durable<br />50, rue&nbsp;Sainte-Catherine&nbsp;Ouest<br />Bureau&nbsp;340&nbsp;Montréal(Québec)</a></p>
            </div>
          </div>
          <div class="social-network">
            <div class="item social text-center">
              <a href="https://www.facebook.com/equiterre/" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/equiterre/" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://www.youtube.com/user/equiterreONG" target="_blank"><i class="fa fa-youtube"></i></a>
              <a href="https://www.linkedin.com/company/equiterre/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.instagram.com/equiterre_ong/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
          <div class="btn--footer">
            <div class="btn--donation">
              <p>
                <a href="https://www.jedonneenligne.org/equiterre/FAIREUNDON/" target="_blank">Faire un don</a>
              </p>
            </div>
          </div>
        </div>
        <p class="copyright">©2021 Équiterre - MORPH</p>
      </div>
    </footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
