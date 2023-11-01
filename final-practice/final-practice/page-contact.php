 <?php get_header();?>

<!--ここからinformation-fv-->
  <section id="about">
    <div class="fv-wrapper about-fv-wrapper">
      <div class="about-left-wrapper">
        <div class="about-text-wrap">
          <div class="about-text-img1">
            <img src="<?php echo get_template_directory_uri();?>/img/_x31_7.png" alt="">
          </div>
          <p class="about-left-text">
            <span class="about-left-line-1">Contact</span><br><span class="about-left-line-2">ご予約・お問い合わせ</span>
          </p>
        </div>
      </div>
      <div class="fv-right-wrapper about-right-wrapper">
        <div class="fv-under-img about-under-img">
          <img src="<?php echo get_template_directory_uri();?>/img/top-big-under.png" alt="">
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/voice/voice1.png" alt="" class="fv-img-about"></div>
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper2">
          <div><img src="<?php echo get_template_directory_uri();?>/img/voice/sp-oice1.png" alt="" class="fv-img-about2"></div>
        </div>
      </div>
    </div>
    <div class="about-button-wrapper">
      <span><a href="<?php echo home_url();?>" class="about-home">ホーム</a></span>
      <div class="about-arrow"><img src="<?php echo get_template_directory_uri();?>/img/about/ic_arrow.jpg"></div>
      <span>ご予約・お問い合わせ</span>


    </div>


  </section>

  <!--ここから　contact-->
  <section id="contact">
    <div class="contact-cotainer">
      <div class="contact-way">お電話でのご予約・お問い合わせ</div>
      <p class="contact-add">〒101-0022 東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル 5F</p>
      <div class="contact-tel">tel: <span>03-1234-5678</span></div>
      <div class="contact-text-title">ご予約・お問い合わせフォーム</div>
      <p class="contact-return">※ 2営業日以内にご返信いたします。</p>

      <?php the_content();?>

    </div>
    
  

  </section>
 
  <?php include("map.php"); ?>

<?php get_footer();?>