<?php get_header(); ?>

 <!--ここからinformation-fv-->
  <section id="about">
    <div class="fv-wrapper about-fv-wrapper">
      <div class="about-left-wrapper">
        <div class="about-text-wrap">
          <div class="about-text-img1">
            <img src="<?php echo get_template_directory_uri();?>/img/_x31_7.png" alt="">
          </div>
          <p class="about-left-text">
            <span class="about-left-line-1">Information</span><br><span class="about-left-line-2">お知らせ</span>
          </p>
        </div>
      </div>
      <div class="fv-right-wrapper about-right-wrapper">
        <div class="fv-under-img about-under-img">
          <img src="<?php echo get_template_directory_uri();?>/img/top-big-under.png" alt="">
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/information/news1.png" alt="" class="fv-img-about"></div>
        </div>
        <div class="fv-upimg-wrapper about-upimg-wrapper2">
          <div><img src="<?php echo get_template_directory_uri();?>/img/information/sp-news1.png" alt="" class="fv-img-about2"></div>
        </div>
      </div>
    </div>
    <div class="about-button-wrapper">
      <span><a href="<?php echo home_url();?>" class="about-home">ホーム</a></span>
      <div class="about-arrow"><img src="<?php echo get_template_directory_uri();?>/img/about/ic_arrow.jpg"></div>
      <span><a class="about-about" href="<?php echo home_url();?>/news/">お知らせ</a></span>
      <div class="about-arrow"><img src="<?php echo get_template_directory_uri();?>/img/about/ic_arrow.jpg"></div>
      <span>お知らせ詳細</span>

    </div>


  </section>

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>

  <!--ここから　page-name（infolistを引用）-->
  <section id="page-name">
    <div class="page-name-container">
      <div class="page-name-wrap">
        <div class="page-name-left-allwrap">
          <div class="page-name-left-wrapper">
            <p class="page-name-title"><?php the_title();?></p>
            <p class="page-name-day"><?php the_time('Y年n月j日');?></p>
            <span class="page-neme-content">
              <?php
$terms = get_the_terms($post->ID,'category');
foreach( $terms as $term ) {
echo '<a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a>';
}
?>
            </span>
          </div>
          <div>
            <?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?><!--投稿にアイキャッチがある場合-->
<?php else: ?>
    <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
<?php endif; ?>
          </div>
          
         <?php the_content();?>

          <!--ページネーション-->
          <div class="page-name-nav-links">
            
            <?php previous_post_link('%link', '&#60;　前の記事へ', TRUE); ?><!-- (現在の前のページへのリンク) class="prev page-numbers" -->
            <a href=""><span>お知らせ</span>一覧</a><!-- 現在閲覧しているページ --><!-- class="page-numbers current"-->
            <?php next_post_link('%link', '次の記事へ　&#62;', TRUE); ?><!-- class="page-numbers"-->
            
          </div>
          <!--ページネーション終わり-->
            


        </div>



<!--下記サイドバーはsidebar.phpに移し替えた（wordpress用ｐｈｐに書き換えて）-->
		<div>
          <!--div class="infolist-cotegory">カテゴリ</div>
        <ul class="page-name-right-wrapper">
          <li>カテゴリ</li>
          <li>
            <a href="">営業日時</a>
          </li>
          <li>
            <a href="">キャンペーン</a>
          </li>
          <li>
            <a href="">その他</a>
          </li>

        </ul>
		</div>-->
	<?php get_sidebar(); ?> 
      </div>


    </div>

  </section>


 

<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>


<?php include("map.php"); ?>
<?php get_footer(); ?>