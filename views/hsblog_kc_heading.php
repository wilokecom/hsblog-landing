<?php
$atts = shortcode_atts(
    [
        'heading'           => '',
        'sup_heading'       => '',
        'description'       => '',
        'alignment'         => '',
        'heading_color'     => '',
        'sup_heading_color' => '',
        'divide_color'      => '',
        'extra_class'       => '',
        '_id'               => ''
    ],
    $atts
);

?>
    
    <div class="<?php echo esc_attr('page-title '.$atts['extra_class']); ?>">
        <?php if (!empty($atts['sup_heading'])) : ?>
            <div class="page-title__sub-title">
                <div style="background-color: <?php echo esc_attr($atts['divide_color']); ?>"
                     class="divide divide--pink <?php echo esc_attr($atts['alignment']); ?>"></div>
                <p style="color: <?php echo esc_attr($atts['sup_heading_color']); ?>"
                   class="<?php echo esc_attr('sub-title page-title__sub-title--'.$atts['alignment']); ?>">
                    <?php echo esc_html($atts['sup_heading']); ?>
                </p>
            </div>
        <?php endif; ?>
        <h2 style="color: <?php echo esc_attr($atts['heading_color']); ?>; margin-top: 0px"
            class="<?php echo esc_attr('page-title__main-title page-title__main-title--'.$atts['alignment']); ?>">
            <?php echo esc_html($atts['heading']); ?>
        </h2>
    </div>
<?php
