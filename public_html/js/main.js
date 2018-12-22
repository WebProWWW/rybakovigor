/*
 * @author Timur Valiyev
 * @link https://webprowww.github.io
 */

(function() {
  // START CLASS Cart
  // - - - - - - - - - - - - - - - - -
  var $cart, $cartTo, CartStorage, cartAnimating, cartStor, collapse, delay, updateCart;

  CartStorage = (function() {
    class CartStorage {
      constructor() {
        if (window.localStorage != null) {
          this.hasStorage = true;
          this.storage = window.localStorage;
          this.currentProductsArr = this.getProducts();
        }
      }

      addProduct(newProduct) {
        var currentProduct, hasCurrent, j, len, ref;
        if (!this.hasStorage) {
          return false;
        }
        // newProduct [id, count, size, price]
        hasCurrent = false;
        ref = this.currentProductsArr;
        for (j = 0, len = ref.length; j < len; j++) {
          currentProduct = ref[j];
          if (currentProduct.id === newProduct.id && currentProduct.size === newProduct.size) {
            currentProduct.count = currentProduct.count + newProduct.count;
            hasCurrent = true;
          }
        }
        if (!hasCurrent) {
          this.currentProductsArr.push(newProduct);
        }
        this.updateProducts();
        return true;
      }

      updateProducts() {
        var e, newProductsJsonSrt;
        newProductsJsonSrt = JSON.stringify(this.currentProductsArr);
        try {
          this.storage.setItem(this.storageKey, newProductsJsonSrt);
          $(this).trigger(CartStorage.EVENT_UPDATE, this.currentProductsArr.length);
        } catch (error) {
          e = error;
          console.log(e);
          return false;
        }
        return true;
      }

      removeProduct(id) {
        var currentProduct, i, j, len, ref;
        ref = this.currentProductsArr;
        for (i = j = 0, len = ref.length; j < len; i = ++j) {
          currentProduct = ref[i];
          if (currentProduct.id === id) {
            this.currentProductsArr.splice(i, 1);
            break;
          }
        }
        return this.updateProducts();
      }

      clearProducts() {
        if (!this.hasStorage) {
          return false;
        }
        this.storage.setItem(this.storageKey, null);
        this.currentProductsArr = [];
        $(this).trigger(CartStorage.EVENT_UPDATE, 0);
        return true;
      }

      getProducts() {
        var e, productsArr, productsJsonStr;
        if (!this.hasStorage) {
          return [];
        }
        productsJsonStr = this.storage.getItem(this.storageKey);
        if (productsJsonStr != null) {
          try {
            productsArr = JSON.parse(productsJsonStr);
          } catch (error) {
            e = error;
            console.log(e);
            productsArr = [];
          }
        }
        if (productsArr == null) {
          productsArr = [];
        }
        return productsArr;
      }

      getCount() {
        return this.currentProductsArr.length;
      }

    };

    CartStorage.EVENT_UPDATE = 'Update';

    CartStorage.prototype.currentProductsArr = [];

    CartStorage.prototype.hasStorage = false;

    CartStorage.prototype.storageKey = 'ctest';

    return CartStorage;

  }).call(this);

  // typeIsArray: (value) ->
  //   value and
  //     typeof value is 'object' and
  //     value instanceof Array and
  //     typeof value.length is 'number' and
  //     typeof value.splice is 'function' and
  //     not (value.propertyIsEnumerable 'length')

  // cart = new Cart
  // cart.clearProducts()
  // cart.addProduct(13)
  // cart.getProducts()

  // - - - - - - - - - - - - - - - - -
  // END CLASS Cart
  $cart = $('.js-cart');

  $cartTo = $('.js-cart-to');

  cartAnimating = false;

  cartStor = new CartStorage;

  delay = function(t, f) {
    return setTimeout(f, t);
  };

  collapse = function(e) {
    var $this, href;
    e.preventDefault();
    $this = $(this);
    href = $this.attr('href');
    if (href != null) {
      $(href).slideToggle();
    }
    return false;
  };

  updateCart = function(store) {
    var count;
    count = store.getCount();
    if (count) {
      $cart.find('.js-cart-count').text(count);
      return $cart.addClass('active');
    } else {
      $cart.removeClass('active');
      return $cart.find('.js-cart-count').text('');
    }
  };

  $('.js-collapse').on('click', collapse);

  updateCart(cartStor);

  $(cartStor).on(CartStorage.EVENT_UPDATE, function(e) {
    return updateCart(cartStor);
  });

  // TEST ONLY
  $cart.on('click', function(e) {
    e.preventDefault();
    cartStor.clearProducts();
    return false;
  });

  $('.js-bybtn').on('click', function(e) {
    var offsetBtn, offsetCart, pId;
    e.preventDefault();
    if (cartAnimating) {
      return false;
    }
    cartAnimating = true;
    pId = Number($(this).attr('product-id'));
    offsetCart = $cart.offset();
    offsetBtn = $(this).offset();
    $cartTo.css({
      'top': e.pageY - 65,
      'left': e.pageX - 65,
      'visibility': 'visible'
    }).animate({
      top: offsetCart.top,
      left: offsetCart.left,
      fontSize: 20,
      opacity: 0.6
    }, 500, function(e) {
      $cartTo.attr('style', '');
      $cart.addClass('animate');
      return delay(300, function() {
        var newProduct;
        $cart.removeClass('animate');
        cartAnimating = false;
        newProduct = {
          id: pId,
          count: 1,
          size: 1
        };
        return cartStor.addProduct(newProduct);
      });
    });
    return false;
  });

  $('.js-owl').owlCarousel({
    dots: false,
    nav: false,
    navElement: 'div',
    rewind: false,
    navText: ['<i class="i-arr-l"></i>', '<i class="i-arr-r"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1,
        nav: true
      },
      768: {
        items: 2,
        nav: true
      },
      992: {
        items: 3,
        nav: true
      },
      1450: {
        items: 4,
        nav: true
      }
    }
  });

  // 1500:
  $('.js-powl').owlCarousel({
    dots: false,
    navText: ['<i class="i-arr-l"></i>', '<i class="i-arr-r"></i>'],
    nav: true,
    navElement: 'div',
    items: 1,
    loop: false
  }).on('changed.owl.carousel', function(e) {
    var $currentData;
    $currentData = $(`#pslider-data-${e.item.index}`);
    $('.js-pslider-data').addClass('d-none');
    return $currentData.removeClass('d-none');
  });

  // $.fancybox.open src:'#review'
  $('.js-prevent').on('click', function(e) {
    e.preventDefault();
    return false;
  });

}).call(this);
