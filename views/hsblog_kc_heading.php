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
        'extra_class'       => ''
    ],
    $atts
);

?>
    <section class="wil-section wil-section wil-section--dark-1"
             style="padding-top: 66px;margin-top: 70px;z-index: 10;">
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
            <h2 style="color: <?php echo esc_attr($atts['heading_color']); ?>"
                class="<?php echo esc_attr('page-title__main-title page-title__main-title--'.$atts['alignment']); ?>">
                <?php echo esc_html($atts['heading']); ?>
            </h2>
        </div>
    </section>
<?php
