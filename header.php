<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='gyozao | ぎょざおのオフィシャルサイト（餃子のキャラクターぎょざ・ぎょざお）'>
  <meta property='og:url' content='https://gyozao.com/'>
  <meta property='og:description' content='gyozao | ぎょざおのオフィシャルサイト（餃子のキャラクターぎょざ・ぎょざお）'>
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.png">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="gyozao | ぎょざおのオフィシャルサイト" />
  <meta name="description" content="餃子のキャラクターぎょざ・ぎょざお。オリジナルグッズやイベント案内を掲載しています。" />
  <title>gyozao | ぎょざおのオフィシャルサイト（餃子のキャラクターぎょざ・ぎょざお）</title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <?php if ( is_page() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/pagestyle.css" />
  <?php endif; ?>
  <?php if ( is_archive() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/pagestyle.css" />
  <?php endif; ?>
  <?php if ( is_single() ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/pagestyle.css" />
  <?php endif; ?>
  <!-- Fontawsome読み込み -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <!-- Adobeフォント読み込み -->
  <script>
    (function(d) {
      var config = {
        kitId: 'aqa3duk',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>  
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="header_inner">
    <div class="header_gyozao_icon">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="top_header_gyozao" src="<?php echo get_template_directory_uri(); ?>/img/icon_gyozao.svg" alt="ぎょざおの顔アイコン"></a>
    </div>

    <h1 class="header_gyozao_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/gyozao_logo_red.svg" alt="ぎょざおロゴ"></h1>
    <nav class="gnavi__pc-style">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">ぎょざおについて</a></li>
        <li><a href="/character/">キャラクター紹介</a></li>
        <li><a href="https://minne.com/@smy877" target="_blank">グッズ</a></li>
        <li><a href="/news/">お知らせ</a></li>
        <li><a href="/contact/">お問い合わせ</a></li>
      </ul>
    </nav>

  <!--768px以下で表示-->
    <div class="menu-btn">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="gnavi__sp-style">
      <ul id="menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">ぎょざおについて</a></li>
        <li><a href="/character/">キャラクター紹介</a></li>
        <li><a href="https://minne.com/@smy877" target="_blank">グッズ</a></li>
        <li><a href="/news/">お知らせ</a></li>
        <li><a href="/contact/">お問い合わせ</a></li>
      </ul>
    </nav>
  <!--/768px以下で表示-->
  </div>
</header>

<div class="sns_side">
  <p>Follow us</p>
  <a href="https://www.instagram.com/gyoza.gyozao/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram_red.svg" alt="Instagramのアイコン"></a>
  <a href="https://twitter.com/gyoza_gyozao" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter_red.svg" alt="Twitterのアイコン"></a>
</div>

<div class="contact_btn">
  <a href="https://store.line.me/stickershop/product/12855752/ja?from=sticker" target="_blank"><img class="contact_btn_img" src="<?php echo get_template_directory_uri(); ?>/img/btn-contact.png" alt="お問い合わせボタン"></a>
</div>