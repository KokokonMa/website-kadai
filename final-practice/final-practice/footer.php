  <footer>
    <div class="footer-container">
      <div class="footer-wrap">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri();?>/img/samuraiseitaiin.png" alt="">
        </div>

         <?php wp_nav_menu( array(
  'theme_location'  => 'footer-menu', /*メニュー名 register_nav_menus arrayの前半 */
  'menu'            => '',
  'menu_class'      => 'footer-right-wrapper',  /*ulにつくクラス */
  'menu_id'         => '',  /*ulにつくid */
  'container'       => 'ul',
  'container_class' => '',
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'echo'            => true,
  'depth'           => 0,
  'walker'          => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
));  ?>

        
      </div>
    </div>

  </footer>
  <div class="footer-last">
    &#169;2023 SAMURAI整体院
  </div>

  <!--オーバーレイ用javascript-->
  <!--オーバレイを開閉する関数-->
  <script>
    const overlay = document.getElementById('overlay');
    function overlayToggle() {
      overlay.classList.toggle('overlay-on');
    }
    //指定した要素に対して上記関数を実行するクリックイベントを設定-
    const clickArea = document.getElementsByClassName('overlay-event');
    for(let i = 0; i < clickArea.length; i++) {
      clickArea[i].addEventListener('click', overlayToggle, false);
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script type="text/javascript">
    $('#slick').slick({
      dots: true,
      /*dotsClass: "slide-dots",*//*これはいったんいらない。これのせいでドットが縦に並んでしまってる。これを消すとslick-dotsが現れる*/
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      cssEase: 'ease-in-out',
      speed: 300,
    });
    $('#slick-1').slick({
      dots: true,
      /*dotsClass: "slide-dots",*//*これはいったんいらない。これのせいでドットが縦に並んでしまってる。これを消すとslick-dotsが現れる*/
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      cssEase: 'ease-in-out',
      speed: 300,
    });
    $('#slick2').slick({
      dots: false,
      /*dotsClass: "slide-dots",*//*これはいったんいらない。これのせいでドットが縦に並んでしまってる。これを消すとslick-dotsが現れる*/
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      cssEase: 'ease-in-out',
      speed: 300,
    });
    $('#slick2-1').slick({
      dots: false,
      /*dotsClass: "slide-dots",*//*これはいったんいらない。これのせいでドットが縦に並んでしまってる。これを消すとslick-dotsが現れる*/
      arrows: false,
      autoplay: true,
      autoplaySpeed: 1500,
      cssEase: 'ease-in-out',
      speed: 300,
    });
  </script>
    <!--jquery　ハンバーガーメニュー-->
    <script>
      $(function () {
        $('#js-hamburger-menu, .navigation__link').on('click', function () {
          $('.navigation-ham').slideToggle(500)
          $('.hamburger-menu').toggleClass('hamburger-menu--open')
        });
      });
    </script>
    <!--jquery　ハンバーガーメニュー終わり-->
<?php wp_footer();?>
</body>
</html>