<?php
$atts = shortcode_atts(
    [
        'text'  => '',
        'image' => '',
        '_id'   => ''
    ],
    $atts
);

?>
    <div class="demo"><a href="#"><img src="<?php echo $atts['image'] ?>" alt="Img">
            <div class="link  link--white link--bold link--cabin pt-20">
                <?php echo $atts['text'] ?>
            </div>
        </a>
    </div>
<?php
