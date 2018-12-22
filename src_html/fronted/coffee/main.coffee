#=include ./lib/CartStorage.coffee

$cart = $ '.js-cart'
$cartTo = $ '.js-cart-to'
cartAnimating = off
cartStor = new CartStorage

delay = (t, f) -> setTimeout f, t

collapse = (e) ->
    e.preventDefault()
    $this = $ this
    href = $this.attr 'href'
    if href?
        $(href).slideToggle()
    off

updateCart = (store) ->
    count = store.getCount()
    if count
        $cart.find('.js-cart-count').text count
        $cart.addClass 'active'
    else
        $cart.removeClass 'active'
        $cart.find('.js-cart-count').text ''

$('.js-collapse').on 'click', collapse


updateCart cartStor
$(cartStor).on CartStorage.EVENT_UPDATE, (e) -> updateCart cartStor


# TEST ONLY
$cart.on 'click', (e) ->
    e.preventDefault()
    cartStor.clearProducts()
    off

$('.js-bybtn').on 'click', (e) ->
    e.preventDefault()
    return off if cartAnimating
    cartAnimating = on
    pId = Number $(this).attr 'product-id'
    offsetCart = $cart.offset()
    offsetBtn = $(this).offset()
    $cartTo.css
        'top' : e.pageY - 65
        'left': e.pageX - 65
        'visibility': 'visible'
    .animate {
        top : offsetCart.top
        left: offsetCart.left
        fontSize: 20
        opacity: 0.6
    }, 500, (e) ->
        $cartTo.attr 'style', ''
        $cart.addClass 'animate'
        delay 300, ->
            $cart.removeClass 'animate'
            cartAnimating = off
            newProduct =
                id: pId
                count: 1
                size: 1
            cartStor.addProduct newProduct
    off


$('.js-owl').owlCarousel
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
.on 'changed.owl.carousel', (e) ->
    $currentData = $ "#pslider-data-#{e.item.index}"
    $('.js-pslider-data').addClass 'd-none'
    $currentData.removeClass 'd-none'


# $.fancybox.open src:'#review'


$('.js-prevent').on 'click', (e) ->
    e.preventDefault()
    off
