 <?php get_header();?>

  <section id="about">
    <div class="fv-wrapper about-fv-wrapper">
      <div class="about-left-wrapper">
        <div class="about-text-wrap">
          <div class="about-text-img1">
            <img src="<?php echo get_template_directory_uri();?>/img/_x31_7.png" alt="">
          </div>
          <p class="about-left-text">
            <span class="about-left-line-1">About</span><br><span class="about-left-line-2">当院について</span>
          </p>
        </div>
      </div>
      <div class="fv-right-wrapper about-right-wrapper">
        <div class="fv-under-img about-under-img">
          <img src="<?php echo get_template_directory_uri();?>/img/top-big-under.png" alt="">
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/about/about.png" alt="" class="fv-img-about"></div>
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper2">
          <div><img src="<?php echo get_template_directory_uri();?>/img/about/sp-about-1.png" alt="" class="fv-img-about2"></div>
        </div>
      </div>
    </div>
    <div class="about-button-wrapper">
      <span><a href="<?php echo home_url();?>" class="about-home">ホーム</a></span>
      <div class="about-arrow"><img src="<?php echo get_template_directory_uri();?>/img/about/ic_arrow.jpg"></div>
      <span>当院について</span>

    </div>


  </section>


  <!--ここからconcept-->
  <section id="about-concept">
    <div class="concept-img-wrapper">
      <img src="<?php echo get_template_directory_uri();?>/img/title1.png" alt="">
    </div>
    <div class="concept-manimg-wrapper">
      <img src="<?php echo get_template_directory_uri();?>/img/bg-icon.png">
    </div>

    <div class="container800">
      <div class="concept-text-wrap">
        <div class="concept-logo-wrapper">
          <div class="concept-logoimg-wrapper">
            <img src="<?php echo get_template_directory_uri();?>/img/bgicon1.png">
          </div>
          <span class="concept-concept">Concept</span>
          <p class="concept-index">特徴</p>
          <p class="concept-title">
            日々変化する<br class="br-none">カラダと心を癒す<br class="br-none">パーソナル<br class="br-none">トレーナーとして
          </p>
          <p class="concept-text">
            当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。<br><br>
            また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。<br><br>
            ご不安な点や疑問点などお気軽にご相談くださいませ。
          </p>
          <div class="concept-textbutton-wrapper">
            <a href="" class="concept-text-button">→当院について</a>
          </div>
        </div>
        <div class="concept-right-img">
          <img src="<?php echo get_template_directory_uri();?>/img/3img.png" alt="">
        </div>
      
      </div>
    </div>
  </section>

  <!--ここからflow-->
  <section id="flow">
    
    <div class="flow-img-wrapper">
      <img src="<?php echo get_template_directory_uri();?>/img/about/title3.svg" alt="">
    </div>
    <div class="flow-manimg-wrapper">
      <img src="<?php echo get_template_directory_uri();?>/img/bg-icon.png">
    </div>
  
    <div class="container800">
      <div class="concept-text-wrap flow-wrap">
        <div class="concept-logo-wrapper">
          <div class="concept-logoimg-wrapper">
            <img src="<?php echo get_template_directory_uri();?>/img/bgicon1.png">
          </div>
          <span class="concept-concept">Flow</span>
          <p class="concept-index">施術の流れ</p>
          <ol class="about-flow-ul">
            <li>受付</li>
            <li>問診票のご記入</li>
            <li>カウンセリング</li>
            <li>施術</li>
            <li>アフターカウンセリング</li>
          </ol>
        </div>
        <div class="concept-right-img">
          <img src="<?php echo get_template_directory_uri();?>/img/about/group2126.jpg" alt="">
        </div>
      
      </div>
    </div>

  </section>

  <!--ここからimprove-->
  <section id="improve">
    <div class="course-index-wrapper voice-index">
      <div class="course-mark-wrap">
        <div class="course-mark">
          <img src="<?php echo get_template_directory_uri();?>/img/left-mark.png" alt="">
        </div>
        <p class="course-index">　根本改善のポイント　</p>
        <div class="course-mark">
          <img src="<?php echo get_template_directory_uri();?>/img/right-mark.png" alt="">
        </div>
      </div>
      <h2 class="course-text about-improve-text1">お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br><br class="abour-br"> 
        ご自身でできるケアなども含めて施術方針をお作りします。</h2>
    </div>

    <div class="voice-container about-improve-container">
      <div class="voice-wrap">
        <div class="voice-wrapper">
          <div class="voice-img about-improve-img">
            <img src="<?php echo get_template_directory_uri();?>/img/about/point-1.png" alt="">
          </div>
          <p class="voice-text about-improve-text">
            丁寧なカウンセリング
          </p>
        </div>
        <div class="voice-wrapper">
          <div class="voice-img about-improve-img">
            <img src="<?php echo get_template_directory_uri();?>/img/about/point-2.png" alt="">
          </div>
          <p class="voice-text about-improve-text">
            徹底的分析
          </p>
        </div>
        <div class="voice-wrapper">
          <div class="voice-img about-improve-img">
            <img src="<?php echo get_template_directory_uri();?>/img/about/point-3.png" alt="">
          </div>
          <p class="voice-text about-improve-text">
            施術計画のご提案
          </p>
        </div>
      </div>
    </div>

  </section>

  

<?php include("map.php"); ?>

<?php get_footer();?>