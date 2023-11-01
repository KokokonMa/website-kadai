 <?php get_header();?>
 <!--ここからcourse-fv-->

 <section id="about">
    <div class="fv-wrapper about-fv-wrapper">
      <div class="about-left-wrapper">
        <div class="about-text-wrap">
          <div class="about-text-img1">
            <img src="<?php echo get_template_directory_uri();?>/img/_x31_7.png" alt="">
          </div>
          <p class="about-left-text">
            <span class="about-left-line-1">Price</span><br><span class="about-left-line-2">コース・料金</span>
          </p>
        </div>
      </div>
      <div class="fv-right-wrapper about-right-wrapper">
        <div class="fv-under-img about-under-img">
          <img src="<?php echo get_template_directory_uri();?>/img/top-big-under.png" alt="">
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/cource/courseprice.png" alt="" class="fv-img-about"></div>
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper2">
          <div><img src="<?php echo get_template_directory_uri();?>/img/cource/sp-courseprice.png" alt="" class="fv-img-about2"></div>
        </div>
      </div>
    </div>
    <div class="about-button-wrapper">
      <span><a href="<?php echo home_url();?>" class="about-home">ホーム</a></span>
      <div class="about-arrow"><img src="<?php echo get_template_directory_uri();?>/img/about/ic_arrow.jpg"></div>
      <span>コース・料金</span>

    </div>


  </section>

  <!--ここからcourse-->
  <section id="course-course">
    <div class="coursepage-container">
      <div class="course-index-wrapper">
        <div class="course-mark-wrap">
          <div class="course-mark">
            <img src="<?php echo get_template_directory_uri();?>/img/left-mark.png" alt="">
          </div>
          <p class="course-index">　コース・料金　</p>
          <div class="course-mark">
            <img src="<?php echo get_template_directory_uri();?>/img/right-mark.png" alt="">
          </div>
        </div>
        <h2 class="course-text">当院では保険診療、自費診療ともにご対応しております</h2>
      </div>
      <div class="course-wrap">
        <div class="course-wrapper">
          <div class="course-room-img">
            <img src="<?php echo get_template_directory_uri();?>/img/insurance1.png" alt="">
          </div>
          <h3 class="course-index-2">保険診療</h3>
          <ul class="course-ul">
            <li class="course-list">骨折・打撲・捻挫・脱臼</li>
            <li class="course-list">スポーツ診療</li>
            <li class="course-list">交通事故</li>
          </ul>
        </div>
        <div class="course-wrapper">
          <div class="course-room-img">
            <img src="<?php echo get_template_directory_uri();?>/img/self1.png" alt="">
          </div>
          <h3 class="course-index-2">自費診療</h3>
          <ul class="course-ul">
            <li class="course-list">腰痛・肩こり</li>
            <li class="course-list">冷え性・だるさ</li>
            <li class="course-list">骨盤・背骨矯正</li>
          </ul>
        </div>
      </div>



    </div>
  </section>

  <!--ここからInsurance-->
  <section id="insurance">
    <div class="course-insurance-container">
      <div class="insurance-wrap">
        <div class="insurance-left-wrapper">
          <div class="insurance-img">
            <img src="<?php echo get_template_directory_uri();?>/img/cource/bgicon (2).png" alt="">
          </div>
          <span>Insurance</span>
          <h3>保険診療</h3>
          <p class="insurance-text">
            健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
            「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
          </p>
          
          <ol class="insurance-ol">
            <li>骨折・打撲・捻挫・脱臼</li>
            <li>スポーツ診療</li>
            <li>交通事故</li>
          </ol>
        </div>
        <div class="insurance-right-wrapper">
          <img src="<?php echo get_template_directory_uri();?>/img/cource/top-insurance2.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!--ここからSelf-pay-->
  <section id="selfpay">
    <div class="course-insurance-container">
      <div class="insurance-wrap">
        <div class="insurance-left-wrapper">
          <div class="insurance-img">
            <img src="<?php echo get_template_directory_uri();?>/img/cource/bgicon (2).png" alt="">
          </div>
          <span>Self-pay</span>
          <h3>自費診療</h3>
          <p class="insurance-text">
            慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は
            健康保険の適用がなく、全額自己負担となります。
          </p>
          
          <ol class="insurance-ol">
            <li>腰痛・肩こり</li>
            <li>冷え性・だるさ</li>
            <li>骨盤・背骨矯正</li>
          </ol>
          <div class="selfpay-rate">
            初回　8,800円（税込） / 50分<br><br class="insurance-selfpay-br">2回目以降　6,600円（税込） / 30分
          </div>
        </div>
        <div class="insurance-right-wrapper">
          <img src="<?php echo get_template_directory_uri();?>/img/cource/top-self2.png" alt="">
        </div>
      </div>
    </div>
    </div>

  </section>
 
  <?php include("map.php"); ?>

<?php get_footer();?>