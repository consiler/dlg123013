		</section><!-- #main -->
<div class="push"></div>
</div><?php //end #wrapper : makes sticky footer work ?>
    <div class="footer-wrap">
      <div class="footer-inner">
        <div class="footer-menu-wrap">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'footer',
            'menu'            => 'Dlg_Footer'
            )
          );
          ?>
        </div>
        <div class="copyright">
          <hr></hr>
          <p>Copyright &copy; 2013 Dialog Group <br> All rights reserved</p>
        </div>
      </div>
    </div>
    <?php include 'template-footer-scripts.php'; ?>
    <?php
      /* Always have wp_footer() just before the closing </body>
       * tag of your theme, or you will break many plugins, which
       * generally use this hook to reference JavaScript files.
       */
      wp_footer();
    ?>
	</body>
</html>