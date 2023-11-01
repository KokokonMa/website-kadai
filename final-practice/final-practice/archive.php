<?php get_header(); ?>

<!--投稿一覧newsのページ-->

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
      <span>お知らせ</span>

    </div>


  </section>

  <!--ここから　infolist-->
  <section id="infolist">
    <div class="infolist-container">
      <div class="infolist-wrap">
        <div class="infolist-left-allwrap">

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
          <div class="infolist-left-wrapper">
            <div class="infolist-img-wrapper">
              <a href="<?php the_permalink();?>"><?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail('large'); ?><!--投稿にアイキャッチがある場合-->
<?php else: ?>
    <!--投稿にアイキャッチ画像がないときの代替画像を読み込む-->
<?php endif; ?></a>
            </div>
            <div class="infolist-title-wrapper">
              <p class="infolist-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
              <!--<a class="infolist-title-wrapper-a" href="<?php the_permalink();?>"><p class="infolist-title"><?php the_title();?></p></a>-->
              <p class="infolist-date"><?php the_time('Y年n月j日');?></p>
              <span class="infolist-open">
                <?php
$terms = get_the_terms($post->ID,'category');
foreach( $terms as $term ) {
echo '<a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a>';
}
?>
              </span>
            </div>
          </div>

<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
   

<!--↓ページネーション-->
<?php the_posts_pagination(
    array(
        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '≪'), // 「前へ」リンクのテキスト
        'next_text'     => __( '≫'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>


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



  </section>


 

<?php include("map.php"); ?>
<?php get_footer(); ?>