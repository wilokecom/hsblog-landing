<?php
$atts = shortcode_atts(
    [
        'text'  => '',
        'image' => '',
        '_id'   => '',
        'extra_class' =>''
    ],
    $atts
);

?>
    <div class="demo"><a href="#"><img src="<?php echo $atts['image'] ?>" alt="Img">
            <div class="<?php echo esc_attr("link link--cabin pt-20 ".$atts['extra_class']);?>">
                <?php echo $atts['text'] ?>
            </div>
        </a>
    </div>
<?php
