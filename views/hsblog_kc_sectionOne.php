<?php
$atts = shortcode_atts(
    [
        'image'                 => '',
        'title'                 => '',
        'sub_title'              => '',
        'video_url'              => '',
        'img_pos'                => '', 
        'btn_text'                => '', 
        'btn_link'                => '', 
        'icon_play'                => '', 
    ],
    $atts
);

?>
      <div class="container">
            <div class="row" style="<?php echo $atts['img_pos'] !== 'left' ? '' : 'flex-direction: row-reverse;'; ?>">
              <div class="col-md-12 col-lg-7">
                <div class="dots">
                  <div class="dot ">
                  </div><!-- End / dot  -->
                  <div class="dot ">
                  </div><!-- End / dot  -->
                  <div class="dot ">
                  </div><!-- End / dot  -->
                </div><!-- End / dots -->
                <div class="page-title  mb-42">
                  <div class="page-title__sub-title">
                    <p class="sub-title page-title__sub-title--blue">
                        <?php echo esc_attr($atts['sub_title']); ?>
                    </p>
                  </div>
                  <h2 class="page-title__main-title page-title__main-title--sm page-title__main-title--bold">
                        <?php echo esc_attr($atts['title']); ?>
                    </h2>
                    <?php if(!empty($atts['btn_text'])) :  ?>
                        <a href="<?php echo esc_attr($atts['btn_link']); ?>" class="wil-btn wil-btn--border wil-btn--pill wil-btn--sm wil-btn--semibold wil-btn--poppins">
                        <?php echo esc_attr($atts['btn_text']); ?>
                        </a>
                    <?php endif;  ?>
                </div>
                  
              </div>
              <div class="col-md-12 col-lg-5">
                <div class="image video-pop-up image--round" data-src="<?php echo esc_attr($atts['video_url']); ?>">
                    <img class="img" src="<?php echo esc_attr($atts['image']); ?>" alt=""/>
                  <div class="overlay overlay--transparent">
                    <a href="#">
                        <img class="pos-a-center img-icon" src="<?php echo esc_attr($atts['icon_play']); ?>" alt=""/>
                    </a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
<?php
