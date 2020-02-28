<?php
$atts = shortcode_atts(
    [
        'icon_url'          => '',
        'title'             => '',
        'desc'              => '',
        'container_class'    => '',
        'icon_class'         => '',
        'icon_text'         => '',
        'color'             => '',
    ],
    $atts
);



?>
   <div class="textBoxHorizontal <?php echo esc_attr($atts['container_class']); ?>">
        <div class="textBoxHorizontal__icon">
        <!-- icon icon--pink icon--md  -->
        <div class="icon <?php echo esc_attr($atts['icon_class']); ?>">
            <div class="content">
                <div class="row justify-content-center align-items-center">
                <?php if(!empty($atts['icon_url'])) : ?>
                    <img src="<?php echo esc_attr($atts['icon_url']); ?>" alt=""/>
                    <?php else: ?><?php echo esc_attr($atts['icon_text']); ?><?php endif; ?> 
                </div>
            </div>
        </div><!-- End / icon icon--pink icon--md  -->
        </div>
        <div class="textBoxHorizontal__info" >
            <?php if(!empty($atts['title'])) : ?>
                <div class="textBoxHorizontal__title " style="color: <?php echo esc_attr($atts['color']); ?>">
                    <?php echo esc_attr($atts['title']); ?>
                </div>
            <?php endif; ?> 
            <?php if(!empty($atts['desc'])) : ?>
                <div class="textBoxHorizontal__desc" style="color: <?php echo esc_attr($atts['color']); ?>">
                    <?php echo esc_attr($atts['desc']); ?>
                </div>
            <?php endif; ?> 
        </div>
    </div>

    <!-- <?php if(!empty($atts['icon_url'])) : ?>
        <img src="<?php echo esc_attr($atts['icon_url']); ?>" alt=""/>
    <?php else: ?>
        <span>fsef</span>
    <?php endif; ?> -->
<?php
