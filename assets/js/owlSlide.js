$('.owl-carousel.slide-default').owlCarousel({
    margin:10,
    dotClass: "dot",
    stageOuterClass: 'slide-show',
    stageClass: "slides clearfix",
    startPosition: 1,
    loop: true,
    responsive:{
      0:{
          items: 1,
      },
      576:{
          items: 2,
      },
      762: {
        items: 3,
      },
    }
})
$('.owl-carousel.slide-2').owlCarousel({
    margin:10,
    items: 2,
    stageOuterClass: 'slide-show',
    stageClass: "slides clearfix",
    startPosition: 1,
    loop: true,
    dots: false,
    responsive:{
      0:{
          items: 1,
      },
      762: {
        items: 2,
      },
    }
})

