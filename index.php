<?php get_header(); ?>

<div class="top_main_visual">
  
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide slide1"></div>
      <div class="swiper-slide slide2"></div>
      <div class="swiper-slide slide3"></div>
      <div class="swiper-slide slide4"></div>
      <div class="swiper-slide slide5"></div>
      <div class="swiper-slide slide6"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <div class="top_main_visual_gyozao_body">
    <img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_body.png" alt="ぎょざおのイラスト">
  </div>
  
  <div class="top_main_visual_scroll animated">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_scroll.svg" alt="スクロールボタン"></a>
    <div class="dotted_line"></div>
  </div>

</div>

<div class="top_section_line_yellow" id="about">　</div>
<div class="top_concept">

  <img class="top_concept_title" src="<?php echo get_template_directory_uri(); ?>/img/icon_title.svg" alt="ぎょうざのアイコン">
  <h2 class="section_title">はじめまして</h2>

  <div class="top_concept_flex">
    <div class="top_concept_content fadeUpTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_top01.png" alt="ぎょざおのイラスト">
      <p class="fadeUpTrigger">白い皮につつまれて。<br>ふっくらむしむしできあがり。<br>こんにちは、ぼく餃子のぎょざお。</p>
    </div>
    <div class="top_concept_content_reverse fadeUpTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_top02.png" alt="ブランコするぎょざお">
      <p class="fadeUpTrigger">あそぶの大好き。<br>一緒に公園に行こうよ。</p>
    </div>
    <div class="top_concept_content fadeUpTrigger">
      <img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_top03.png" alt="ジャンプするぎょざお">
      <p class="fadeUpTrigger">いろんなところへおでかけするよ。<br>今日はどこに行こうかな。<br>見かけたら、声かけてね。</p>
    </div>
  </div>
</div>

<div class="top_section_line_white">　</div>
<div class="top_sns">
  <img class="top_sns_arrow" src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow.svg" alt="下矢印">
  <img class="top_sns_icon" src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram_red.svg" alt="instagramのアイコン">
  <p>Instagramからチェックしてみよう！</p>

  <div class="SpOnly">
    <?php echo do_shortcode('[instagram-feed followcolor=#DC000C followtextcolor=#fff followtext="フォローする" buttontext="もっと見る" showbutton=true buttoncolor=#FFD928 buttontextcolor=#000 num=9]'); ?>
  </div>
  <div class="PcOnly">
    <?php echo do_shortcode('[instagram-feed followcolor=#DC000C followtextcolor=#fff followtext="フォローする" buttontext="もっと見る" showbutton=true buttoncolor=#FFD928 buttontextcolor=#000 num=15]'); ?>
  </div>

</div>

<div class="top_news">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_title.svg" alt="ぎょうざのアイコン">
  <h2 class="section_title">お知らせ</h2>

  <div class="top_news_feed">
    <?php
      $args = array(
        'posts_per_page' => 3 // 表示件数の指定
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
    ?>
    <div class="top_news_item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icon_gyozao.svg" alt="ぎょざおの顔アイコン">
      <div class="news_feed_content">
        <a href="<?php the_permalink(); ?>">
          <p class="news_date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
          <p class="news_category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
          <p class="news_title"><?php the_title(); ?></p>
        </a>
      </div>
    </div>
    <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
    ?>
  </div>
  <a class="top_news_more" href="/news/">もっとみる</a>
</div>

<?php get_footer(); ?>