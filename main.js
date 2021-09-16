jQuery(function($){
  // ハンバーガーメニュー
  $(function() {
    $('.menu-btn').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.gnavi__sp-style').addClass('active');
        } else {
            $('.gnavi__sp-style').removeClass('active');
        }
    });
  });

  // リンク押したらメニュー画面閉じる
  $('#menu a[href]').on('click', function(event) {
    $('.menu-btn').trigger('click');
});

  // swiper設定
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 0,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: true
    },
    breakpoints: {
      640: {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
      delay: 3000,
      disableOnInteraction: true
      },
      }
      }
  });

  // 右下コンタクトボタン途中から表示する
  $(function() {
    // 変数にクラスを入れる
    var btn = $('.contact_btn');
    
    //スクロールしてページトップから1000に達したらボタンを表示
    $(window).on('load scroll', function(){
      if($(this).scrollTop() > 1000) {
        btn.addClass('active');
      }else{
        btn.removeClass('active');
      }
    });

    //スクロールしてトップへ戻る
    btn.on('click',function () {
      $('body,html').animate({
        scrollTop: 0
      });
    });
  });

  //ホバーで震える
  window.onload = function() {
    $('.character_img').hover(
    function(){$(this).addClass('fluffy');},
    function(){$(this).removeClass('fluffy');}
    );
  };

  //トップのコンセプトふわっとでてくる動き
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

  // ふわっ
  $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top-10;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
    }else{
    $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
    }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

});