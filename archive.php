<?php get_header(); ?>

<div class="news_inner">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_title.svg" alt="ぎょうざのアイコン">
  <h2 class="section_title">お知らせ</h2>

  <div class="category">
    <a class="category-item" href="<?php echo home_url(); ?>/news/">全て</a>
    <a class="category-item" href="<?php echo home_url(); ?>/category/item/">商品紹介</a>
    <a class="category-item" href="<?php echo home_url(); ?>/category/event/">イベント案内</a>
    <a class="category-item" href="<?php echo home_url(); ?>/category/blog/">日常</a>
    <a class="category-item" href="<?php echo home_url(); ?>/category/manga/">4コマ漫画</a>
    <a class="category-item" href="<?php echo home_url(); ?>/category/other/">その他</a>
  </div>

  <div class="news_flex">
    <?php // ブログの一覧を表示する start ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="news_item">
        <a href="<?php the_permalink(); ?>">
          <?php // アイキャッチ画像を表示させる start ?>    
          <div class="blog-item__thumbnail">
            <?php if(has_post_thumbnail()) : ?>
            <div class="news_img"><?php echo get_the_post_thumbnail($post->ID, 'l-size'); ?></div>
            <?php else: ?>
            <p class="news_category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
            <div class="news_img"><img src="<?php echo get_template_directory_uri(); ?>/img/no_img.png" alt="デフォルト画像"></div>
            <?php endif; ?>
          </div>
          <?php // アイキャッチを表示させる end ?>

          <div class="news_item_content">
            <?php // カテゴリーと日付とタイトルを表示させる start ?>
            <p class="news_category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
            <p class="news_title"><?php echo mb_substr($post->post_title, 0, 32).'…'; ?><p>
            <p class="news_date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
            <?php // タイトルを表示させる end ?>
          </div>
        </a>
      </article>
    <?php endwhile; endif; ?>
    <?php // ブログの一覧を表示する end ?>

  </div>

  <div class="news_pagination">
    <?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
    echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 4,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '<< 前へ',
        'next_text' => '次へ >>',
    )); ?>
  </div>

</div>

<?php get_footer(); ?>