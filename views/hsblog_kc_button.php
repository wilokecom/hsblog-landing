<?php
$atts = shortcode_atts(
    [
        'text'       => '',
        'link_url'   => '',
        'span_class' => '',
        'link_class' => '',
        'icon_url'   => '',
        '_id'        => ''
    ],
    $atts
);

?>
    <a class="<?php echo $atts['link_class'] ?>" href="<?php echo $atts['link_url'] ?>">
        <?php if (!empty($atts['icon_url'])) : ?>
            <img src="<?php echo $atts['icon_url'] ?>" alt="icon">
            <span class="<?php echo $atts['span_class'] ?>">
                <?php echo $atts['text'] ?>
            </span>
        <?php endif; ?>
        <?php if (empty($atts['icon_url'])) : ?>
            <?php echo $atts['text'] ?>
        <?php endif; ?>
    </a>
<?php
