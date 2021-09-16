<?php
/*
Template Name: page-contact
*/
?>

<?php get_header(); ?>

<div class="character_inner">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_title.svg" alt="ぎょうざのアイコン">
  <h2 class="section_title">お問い合わせ</h2>
  <p class="contact_p">ご相談・ご質問・お仕事のご依頼等<br>お気軽にご連絡ください。</p>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>