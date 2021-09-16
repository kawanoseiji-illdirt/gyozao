<?php
/*
Template Name: page-contact-thx
*/
?>

<?php get_header(); ?>

<div class="character_inner">
  <img src="<?php echo get_template_directory_uri(); ?>/img/icon_title.svg" alt="">
  <h2 class="section_title">お問い合わせ</h2>
  <p class="contact_p">お問い合わせいただきありがとうございました！<br>折り返しご連絡いたしますのでお待ちください。</p>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>