<?php
$atts = shortcode_atts(
    [
        'logo'          => '',
        'logo_href'       => '',
        'nav1_text'          => '',
        'nav1_url'       => '',
        'nav2_text'          => '',
        'nav2_url'       => '',
        'nav3_text'          => '',
        'nav3_url'       => '',
        'nav4_text'          => '',
        'nav4_url'       => '',
    ],
    $atts
);

?>
    <nav class="wil-nav scale-down-pusher">
        <label class="nav__collapse-btn">
           <i class="fas fa-bars" aria-hidden="true"></i></label>
        <ul class="nav__menu">
          <li class="nav__item"><a class="nav__link" href="<?php echo $atts['nav1_url'] ?>"><?php echo $atts['nav1_text'] ?></a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo $atts['nav2_url'] ?>"><?php echo $atts['nav2_url'] ?></a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo $atts['nav3_url'] ?>"><?php echo $atts['nav3_url'] ?></a></li>
          <li class="nav__item"><a class="nav__link" href="<?php echo $atts['nav4_url'] ?>" style="color: #FE2F57"><?php echo $atts['nav4_url'] ?></a></li>
        </ul>
        <div class="logo">
            <a href="<?php echo $atts['logo_href'] ?>">
                <img src="<?php echo $atts['logo'] ?>" alt="">
             </a>
        </div>
      <div class="nav__overlay"></div></nav>
<?php
