<?php get_header(); ?>

<div class="news_inner_single">
  <div class="news_single">
    <div class="news_content">
      <!-- タイトル -->
      <h2 class="news_title_single"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!-- タイトル -->

      <!-- 日付とカテゴリ表示 -->
      <span class="news_date_single"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></span>
      <span class="news_category_single"><?php the_category(', '); ?></span>
      <!-- 日付とカテゴリ表示 -->

      <!-- サムネイル画像 -->
      <div class="news_single_img"></div>
        <?php if(has_post_thumbnail()) : ?>
        <p class="responsive-thumbnail"><?php the_post_thumbnail('full'); ?></p>
        <?php else: ?>
        <div class="news_img"><img src="<?php echo get_template_directory_uri(); ?>img/no_img.png" width="702px" height="702px" alt="デフォルト画像"></div>
        <?php endif; ?>
      <!-- サムネイル画像 -->

      <!-- 記事本文 -->
      <div class="news_text">
      <?php the_content(); ?>
      </div>
      <!-- 記事本文 -->

      <!-- 本文おわり -->
    </div>
  </div>

      <!-- prenext -->
      <div class="news_prenext">
        <p class="news_pre"><?php previous_post_link('%link','←PREV'); ?></p>
        <p class="archive_link"><a href="/news/" rel="home">一覧に戻る</a></p>
        <p class="news_next"><?php next_post_link('%link','NEXT→'); ?></p>
      </div>
      <!-- prenext -->

</div>

<?php get_footer(); ?>