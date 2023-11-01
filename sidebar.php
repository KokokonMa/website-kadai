<div>
          <div class="infolist-category">カテゴリ</div>
<ul class="page-name-right-wrapper infolist-right-wrapper"">
    <?php
    $args = array(
        'title_li' => ''
    );
    wp_list_categories($args);
    ?>
</ul>
</div>