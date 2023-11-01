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
            <span class="about-left-line-1">Voice</span><br><span class="about-left-line-2">お客様の声</span>
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
      <span>お客様の声</span>


    </div>


  </section>

  <!--ここから　voice-->
  <section id="voice-page">
    <div class="voice-page-cotainer">

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>

      <div class="voice-page-wrap">
        <div class="voice-page-img-wrapper">
         <?php if(has_post_thumbnail()): ?>
  <?php the_post_thumbnail('large'); ?><!--投稿にアイキャッチがある場合-->
<?php else: ?>
  <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
<?php endif; ?>

        </div>
        <div class="voice-page-text-wrapper">
          <div class="voice-page-cust"><?php the_title();?></div>
          <p class="voice-page-text">
            <?php the_content();?>
          </p>
        </div>
      </div>

<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
     

      <!--ページネーション-->
      <?php the_posts_pagination(
array(
        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '≪'), // 「前へ」リンクのテキスト
        'next_text'     => __( '≫'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>

      <!--ページネーション終わり-->


    </div>
   

  </section>


<?php include("map.php"); ?>

<?php get_footer();?>