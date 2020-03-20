<?php
$atts = shortcode_atts(
    [
        'img_1'      => '',
        'img_2'      => '',
        'skeleton_1' => '',
        'skeleton_2' => '',
        '_id'        => ''
    ],
    $atts
);

?>
    
    <!-- mock-ups -->
    <div class="mock-ups">
        <!-- mock-up mock-up--rotate-left -->
        <div class="mock-up mock-up--rotate-left" style="width: 231.74px; height: 451.27px;">
            <div class="mock-up__skeleton"
                 style="background-image:url(<?php echo esc_attr($atts['skeleton_1']); ?>)"></div>
            <div class="mock-up__content" style="background-image:url(<?php echo esc_attr($atts['img_1']); ?>)"></div>
        </div><!-- End / mock-up mock-up--rotate-left -->
        
        <!-- mock-up mock-up--rotate-right -->
        <div class="mock-up mock-up--rotate-right" style="width: 269px; height: 523px;">
            <div class="mock-up__skeleton"
                 style="background-image:url(<?php echo esc_attr($atts['skeleton_2']); ?>)"></div>
            <div class="mock-up__content" style="background-image:url(<?php echo esc_attr($atts['img_2']); ?>)"></div>
        </div><!-- End / mock-up mock-up--rotate-right -->
    
    </div><!-- End / mock-ups -->

<?php
