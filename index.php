<?php get_header(); ?>
  <div class="pc">
  <img src="<?php echo get_template_directory_uri(); ?>/img/pc.png" alt="">
</div>
  <div class="about">
    <div class="top">
      <h1><span>H</span>OW ABOUT POYO</h1>
    </div>
    <div class="scroll-fade">
      <div class="about-box">
        <h3 class="about-sub">ディレクション</h2>
          <p class="about-sub-p">DIRECTION</p> <i class="fas fa-cannabis icon fa-5x"></i>
          <p class="about-intro">お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。</p>
      </div>
      <div class="about-box">
        <h3 class="about-sub">デザイン</h2>
          <p class="about-sub-p">DESIGN</p> <i class="fab fa-connectdevelop icon fa-5x"></i>
          <p class="about-intro">ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
      </div>
      <div class="about-box">
        <h3 class="about-sub">コーディング</h2>
          <p class="about-sub-p">coding</p> <i class="fas fa-cat icon fa-5x"></i>
          <p class="about-intro">デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
      </div>
    </div>
  </div>
  <div class="post-area">
<h2>＊お知らせ＊</h2>
<?php
if(have_posts()):
  while(have_posts()):
    the_post();
?>

    <div class="post">
      <div class="post-header">
        <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <div class="post-meta">
        <?php echo get_the_date(); ?>【<?php the_category(', ')?>】
      </div>
      </div>
      <div class="post-content">
        <div class="post-image">

          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(array(100, 100)); ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100" alt="">
        <?php endif; ?>

        </div>
        <div class="post-body">
          <?php the_excerpt(); ?>
        </div>

      </div>
    </div>
<?php
endwhile;
else:
?>
<p>記事はありません</p>
    <?php
  endif;
     ?>
    <div class="navigation">
      <div class="prev">
        <?php previous_posts_link(); ?>
      </div>
      <div class="next">
        <?php next_posts_link(); ?>
      </div>

    </div>
</div>
  <div class="works">
    <div class="top">
      <h1><span>P</span>OYO'S WORKS</h1>
      <div class="art-boxes">
        <div class="art-box">
          <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_7134.JPG" alt="T">
          <h2 class="letter">WORK 1</h2>
        </div>
        <div class="art-box"> <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_8107.JPG" alt="">
          <h2 class="letter">WORK 2</h2>
        </div>
        <div class="art-box"> <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_3673.JPG" alt="">
          <h2 class="letter">WORK 3</h2>
        </div>
      </div>
      <div class="art-boxes">
        <div class="art-box"> <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0159.JPG" alt="">
          <h2 class="letter">WORK 4</h2>
        </div>
        <div class="art-box"> <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_1887.JPG" alt="">
          <h2 class="letter">WORK 5</h2>
        </div>
        <div class="art-box"> <img class="art" src="<?php echo get_template_directory_uri(); ?>/img/IMG_3539.JPG" alt="">
          <h2 class="letter">WORK 6</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-form">
    <div class="top">
      <h1><span>C</span>ONTACT FORM</h1>
      <?php echo do_shortcode( '[contact-form-7 id="41" title="コンタクトフォーム 1"]' ); ?>
    </div>
  </div>
  <?php get_footer(); ?>
