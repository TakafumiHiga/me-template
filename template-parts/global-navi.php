<!-- 不要なものは削除 -->

<!-- マスク -->
<div class="p-global-menu__mask c-mask" id="js-mask"></div>
<nav class="p-header__menu l-global-menu p-global-menu">

  <div class="p-global-menu__inner">

    <!-- トップページのロゴ -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-global-menu__logo">
      <img class="c-logo" src="<?php echo esc_url(get_theme_file_uri('./assets/images/common/logo.svg')); ?>"
        alt="日々青天ロゴ" /></a>

    <!-- ハンバーガーメニュー -->
    <a class="p-global-menu__hamburger c-hamburger" id="js-hamburger">
      <div></div>
      <div></div>
      <!-- <span>MENU</span> -->
    </a>
    <!-- <div class="p-global-menu__pc">

      <?php 
        wp_nav_menu(array(
        'theme_location' => 'global',
        'container' => 'div',
        'container_id'    => 'js-global-menu-fixed',
        'depth' => 2,
        // 'container_class' => '', 
        'menu_id'         => '', // ulのid名
        'menu_class' => 'p-global-menu-items', // ulのclass名
        'add_li_class' => 'p-global-menu-item', // liタグへclass追加
        'add_a_class' => 'p-global-menu-item__link' // aタグへclass追加
        ));
        ?>
    </div> -->
  </div><!-- p-global-menu__inner -->




  <!-- ハンバーガーメニューの中身 -->
  <nav id="js-drower" class="p-header-menu__sp l-drower p-drower">
    <?php 
        wp_nav_menu(array(
        'theme_location' => 'drawer',
        'container' => 'div',
        'depth' => 2,
        'container_class' => 'p-drower-menu-container', 
        'menu_id'         => 'js-drower__items', // ulのid名
        'menu_class' => 'p-drower__items', // ulのclass名
        'add_li_class' => 'p-drower__item', // liタグへclass追加
        'add_a_class' => 'p-drower__item-link' // aタグへclass追加
        ));
        ?>
  </nav>
</nav>