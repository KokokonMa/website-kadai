<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php chiro_schema_type(); ?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ress.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;500;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Shippori+Mincho:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Document</title>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<!--オーバーレイ用-->
  <div id="overlay" class="overlay-event"></div>



  <!--ここからheader-->
  <header id="header">

      <div class="header-wrapper">
      
      <h1 class="header-logo">
        <img src="<?php echo get_template_directory_uri();?>/img/samuraiseitaiin.png" alt="">
      </h1>
      
      <?php wp_nav_menu( array(
  'theme_location'  => 'main-menu', /*メニュー名 register_nav_menus arrayの前半 */
  'menu'            => '',
  'menu_class'      => 'header-title-wrapper-index header-title-wrapper',  /*ulにつくクラス */
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

  <!--ハンバーガーメニュー-->
    <div class="ham-wrap-wrap">
      <div class="ham-wrap">
        
        <button class="hamburger-menu overlay-event" id="js-hamburger-menu">
          <span class="hamburger-menu__bar"></span>
          <span class="hamburger-menu__bar"></span>
          <span class="hamburger-menu__bar"></span>
        </button>
      </div>  
        <nav class="navigation-ham">
          <h1 class="ham-burger-menu">
            <img src="<?php echo get_template_directory_uri();?>/img/samuraiseitaiin.png" alt="">
          </h1>
      
<div class="ham-menu">メニュー</div>
            
            <?php wp_nav_menu( array(
  'theme_location'  => 'main-menu', /*メニュー名 register_nav_menus arrayの前半 */
  'menu'            => '',
  'menu_class'      => 'navigation__list',  /*ulにつくクラス */
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


        </nav>   
    </div>
    <!--ハンバーガーメニュー終わり-->


  <!--ここからfv-->
  </header>
  <section id="fv">
    <div class="fv-wrapper">
      <div class="fv-left-wrapper">
        <div class="fv-text-wrap">
          <div class="fv-text-img1">
            <img src="<?php echo get_template_directory_uri();?>/img/_x31_7.png" alt="">
          </div>
          <div class="fv-text-img2">
            <img src="<?php echo get_template_directory_uri();?>/img/_x32_1.png" alt="">
          </div>
          <p class="fv-left-text shippori">
            <span class="fv-left-line">根本的な症状改善を</span><br><span class="fv-left-line">サポートします</span>
          </p>
        </div>
      </div>
      <div class="fv-right-wrapper">
        <div class="fv-under-img">
          <img src="<?php echo get_template_directory_uri();?>/img/top-big-under.png" alt="">
        </div>
        <div id="slick" class="fv-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/top-big.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/top-big2.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/top-big3.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/top-big4.png" alt="" class="fv-img"></div>
        </div>
        <div id="slick-1" class="fv-upimg-wrapper">
          <div><img src="<?php echo get_template_directory_uri();?>/img/sp-1.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/sp-2.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/sp-3.png" alt="" class="fv-img"></div>
          <div><img src="<?php echo get_template_directory_uri();?>/img/sp-4.png" alt="" class="fv-img"></div>
        </div>
      </div>
    </div>

    <!--ここからnews-->
    <div class="container1280">
      <div class="news-wrap">
        <div class="news-wrpper">

		  <?php
            $args = array( 'post_type' => 'post',
                'posts_per_page' => 1,  ); // カスタム投稿タイプ post
            $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

	      <p class="news-news">News</p>
          <p class="news-info">お知らせ</p>
          <P class="news-day"><?php the_time('Y年n月j日');?></P>
          <p class="news-content"><?php
          $terms = get_the_terms($post->ID,'category');
          foreach( $terms as $term ) {
          echo '<a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a>';
          }
          ?></p>

          <div class="news-title">
            <a href="<?php the_permalink();?>" class="news-title-a"><?php the_title();?></a>
		  </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>

          </div>


        

        <div class="news-allinfo">
          <a href="<?php echo home_url();?>/news/" class="news-allinfo-a">→お知らせ一覧へ</a>
		</div>

        </div>
      </div>

      <!--レスポンシブ768px以下用-->
      <div class="news-wrap2">
        <div class="news-wrapper2">
          <p class="news-news">News</p>
          <p class="news-info">お知らせ</p>
        </div>
        <div class="news-wrapper2-res">
          <div class="news-wrapper2-2">
            <p class="news-day"><?php the_time('Y年n月j日');?></p>
            <p class="news-content"><?php
$terms = get_the_terms($post->ID,'category');
foreach( $terms as $term ) {
echo '<a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a>';
}
?></p>
          </div>
          <div class="news-title2">
            <a href="<?php the_permalink();?>" class="news-title-a"><?php the_title();?></a>
          </div>
        </div>
        <div class="news-allinfo2">
          <a href="<?php echo home_url();?>/news/" class="news-allinfo-a">→お知らせ一覧へ</a>
        </div>
      </div>
    </div>

  </section>
  <!--ここからconcept-->
  <section id="concept">
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
            <a href="<?php echo home_url();?>/about/" class="concept-text-button">→当院について</a>
          </div>
        </div>
        <div class="concept-right-img">
          <img src="<?php echo get_template_directory_uri();?>/img/3img.png" alt="">
        </div>
      
      </div>
    </div>
  </section>
<!--ここからcourse-->
  <section id="course">
    <div class="course-line-img">
      <img src="<?php echo get_template_directory_uri();?>/img/line.png" alt="">
    </div>
    <div class="couse-line2-img">
      <img src="<?php echo get_template_directory_uri();?>/img/line2.png" alt="">
    </div>
    <div class="course-img">
      <img src="<?php echo get_template_directory_uri();?>/img/course.svg" alt="">
    </div>
    <div class="course-man-img">
      <img src="<?php echo get_template_directory_uri();?>/img/bgicon-2.svg" alt="">
    </div>

    <div class="course-container">
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

      <div class="course-button-wrapper">
        <a href="<?php echo home_url();?>/course/" class="course-button">→ コース・料金詳細へ</a>
      </div>


    </div>
  </section>

  <!--ここからお客様の声-->
  <section id="voice">
    <div class="voice-top-img">
      <div id="slick2" class="voice-topimg-wrapper">
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi.png" alt="" class="voice-top-img1"></div>
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi2.png" alt="" class="voice-top-img1"></div>
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi3.png" alt="" class="voice-top-img1"></div>
      </div>
      <div id="slick2-1" class="voice-topimg-wrapper">
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi-sp1.png" alt="" class="voice-top-img1"></div>
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi-sp2.png" alt="" class="voice-top-img1"></div>
        <div><img src="<?php echo get_template_directory_uri();?>/img/koshi-sp3.png" alt="" class="voice-top-img1"></div>
      </div>
      <div class="voice-half-img">
        <img src="<?php echo get_template_directory_uri();?>/img/half.png" alt="">
      </div>
    </div>

    <!--course-index-wrapperと同じｈｔｍｌを使いまわす-->
    <!--transformするためにvoice-indexのクラスを追加-->
    <div class="course-index-wrapper voice-index">
      <div class="course-mark-wrap">
        <div class="course-mark">
          <img src="<?php echo get_template_directory_uri();?>/img/left-mark.png" alt="">
        </div>
        <p class="course-index">　お客様の声　</p>
        <div class="course-mark">
          <img src="<?php echo get_template_directory_uri();?>/img/right-mark.png" alt="">
        </div>
      </div>
      <h2 class="course-text">痛みの改善に加えて自分で予防もできるようになりました</h2>
    </div>

    <div class="voice-container">
      <div class="voice-wrap">
        <div class="voice-wrapper">
          <div class="voice-img">
            <img src="<?php echo get_template_directory_uri();?>/img/voice1.png" alt="">
          </div>
          <div class="voice-name">S・K様　30代女性</div>
          <p class="voice-text">
            1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。
          </p>
        </div>
        <div class="voice-wrapper">
          <div class="voice-img">
            <img src="<?php echo get_template_directory_uri();?>/img/voice2.png" alt="">
          </div>
          <div class="voice-name">T・M様　40代男性</div>
          <p class="voice-text">
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
          </p>
        </div>
        <div class="voice-wrapper">
          <div class="voice-img">
            <img src="<?php echo get_template_directory_uri();?>/img/voice3.png" alt="">
          </div>
          <div class="voice-name">S・T様　60代女性</div>
          <p class="voice-text">
            転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。
          </p>
        </div>
      </div>
      <div class="voice-button-wrapper">
        <a href="<?php echo home_url();?>/voice/" class="course-button">→ お客様の声一覧へ</a>
      </div>
    </div>
  </section>
    </div>


<?php include("map.php"); ?>

<?php get_footer();?>