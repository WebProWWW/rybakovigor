#=include ./lib/MyClass.coffee

collapse = (e) ->
    e.preventDefault()
    $this = $ this
    href = $this.attr 'href'
    if href?
        $(href).slideToggle()
    off

$('.js-collapse').on 'click', collapse

$('.js-owl').owlCarousel
    # slideBy: 'page'
    # loop: on
    dots: off
    nav: off
    navElement: 'div'
    rewind: off
    navText: ['<i class="i-arr-l"></i>', '<i class="i-arr-r"></i>']
    responsive:
        0:
            items: 1
        576:
            items: 1
            nav: on
        768:
            items: 2
            nav: on
        992:
            items: 3
            nav: on
        1450:
            items: 4
            nav: on
# 1500:

$('.js-powl').owlCarousel
    dots: off
    navText: ['<i class="i-arr-l"></i>', '<i class="i-arr-r"></i>']
    nav: on
    navElement: 'div'
    items: 1
    loop: off
    # responsive:
    #     576:
    #         nav: on


#$('.js-bxslider').bxSlider
#    pager: off
#    touchEnabled: off
#    slideMargin: 100
#    nextText: ''
#    prevText: ''
#    nextSelector: '.js-bxslider-btn'
#    prevSelector: '.js-bxslider-btn'


# $.fancybox.open src:'#review'


$('.js-prevent').on 'click', (e) ->
    e.preventDefault()
    off
