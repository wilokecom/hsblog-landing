<?php
$atts = shortcode_atts(
    [
        'text'          => '',
        'customer'       => '', 
        'support_name'       => '', 
        'quote_left_img'       => '', 
        'quote_right_img'       => '', 
        'icon'       => '', 
    ],
    $atts
);

?>
      <div class="rate">
        <div class="rate__content">
            <img class="quote-right" src="<?php echo esc_attr($atts['quote_right_img']); ?>"/>
            <img class="quote-left" src="<?php echo esc_attr($atts['quote_left_img']); ?>"/>
            
            <!-- text text--white text--sm   -->
            <div class="text text--white text--sm  ">
            
                <!-- text--white text--sm -->
                <div class="text--white text--sm">
                    <?php echo esc_attr($atts['text']); ?>
                </div><!-- End / text--white text--sm -->
            
            </div><!-- End / text text--white text--sm   -->
            
        </div>
        <div class="rate__customer-info"><a href="#">
            
            <!-- icon icon--lg icon--green  -->
            <div class="icon icon--lg icon--green ">
                <div class="content">
                <div class="row justify-content-center align-items-center">
                    <img src="<?php echo esc_attr($atts['icon']); ?>" alt=""/></div>
                </div>
            </div><!-- End / icon icon--lg icon--green  -->
            </a>
            <div class="rate__customer-name">
            <div class="customer__nane"><span>By</span><a class="highlight" href="#">
                <?php echo esc_attr($atts['customer']); ?>
            </a></div>
            
            <!-- text    -->
            <div class="text   ">
                
                <!--  -->
                <div>
                <?php echo esc_attr($atts['support_name']); ?>
                </div><!-- End /  -->
                
            </div><!-- End / text    -->
            
            </div>
        </div>
        </div>
<?php
