 <?php get_header();?>

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
  <section id="contact-thanks">
    <div class="contact-thanks-cotainer">
      <div class="contact-thanks-frame">
        <div class="thanks-title">お問い合わせ内容を送信しました</div>
        <p class="thanks-text">ありがとうございます。２営業日以内にご返信いたします。</p>
        <div class="thanks-button">
          <a href="">戻る</a>
        </div>
      </div>
    </div>
    
  </section>

  

<?php include("map.php"); ?>

<?php get_footer();?>