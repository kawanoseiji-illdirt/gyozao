<footer>
  <div class="footer_gyozao">
    <img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_footer.png" alt="ぎょざおのイラスト">
  </div>
  <div class="footer_section_line_red">　</div>
  <div class="footer_inner">
    <div class="footer_cta">
      <a href="https://minne.com/@smy877" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-cta01.svg" alt="グッズを購入するボタン"></a>
      <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-cta02.svg" alt="お問い合わせはこちらボタン"></a>
    </div>
    <ul class="footer_nav">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">ぎょざおについて</a></li>
      <li><a href="/character/">キャラクター紹介</a></li>
      <li><a href="https://minne.com/@smy877" target="_blank">グッズ</a></li>
      <li><a href="/news/">お知らせ</a></li>
      <li><a href="/contact/">お問い合わせ</a></li>
    </ul>
    <div class="footer_sns">
    <a href="https://www.instagram.com/gyoza.gyozao/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram_white.svg" alt="Instagramのアイコン"></a>
    <a href="https://twitter.com/gyoza_gyozao" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter_white.svg" alt="Twitterのアイコン"></a>
    </div>
    <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/gyozao_logo_white.svg" alt="gyozaoのロゴ">
    <p class="copyright">© 2021 gyoza.gyozao</p>
  </div>
</footer>

<!-- Swiper読み込み -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>