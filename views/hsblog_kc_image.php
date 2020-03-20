<?php
$atts = shortcode_atts(
    [
        'image'       => '',
        'translate_y' => '',
        '_id'         => ''
    ],
    $atts
);

?>
    <div class="image" style="transform :translateY(<?php echo esc_attr($atts['translate_y']); ?>); width: 100%">
        <img class="img" src="<?php echo esc_attr($atts['image']); ?>" alt="img">
    </div>
<?php
