(function($) {

    var $window = $(window),
        $body = $('body'),
        $header = $('#header'),
        $banner = $('#banner');

    // Breakpoints.
    breakpoints({
        xlarge: '(max-width: 1680px)',
        large: '(max-width: 1280px)',
        medium: '(max-width: 980px)',
        small: '(max-width: 736px)',
        xsmall: '(max-width: 480px)'
    });

    // Play initial animations on page load.
    $window.on('load', function() {
        window.setTimeout(function() {
            $body.removeClass('is-preload');
        }, 100);
    });

    // Header.
    if ($banner.length > 0
        && $header.hasClass('alt')) {

        $window.on('resize', function() { $window.trigger('scroll'); });

        $banner.scrollex({
            bottom: $header.outerHeight(),
            terminate: function() { $header.removeClass('alt'); },
            enter: function() { $header.addClass('alt'); },
            leave: function() { $header.removeClass('alt'); }
        });

    }

    // Menu.
    var $menu = $('#menu');

    $menu._locked = false;

    $menu._lock = function() {

        if ($menu._locked)
            return false;

        $menu._locked = true;

        window.setTimeout(function() {
            $menu._locked = false;
        }, 350);

        return true;

    };

    $menu._show = function() {

        if ($menu._lock())
            $body.addClass('is-menu-visible');

    };

    $menu._hide = function() {

        if ($menu._lock())
            $body.removeClass('is-menu-visible');

    };

    $menu._toggle = function() {

        if ($menu._lock())
            $body.toggleClass('is-menu-visible');

    };

    $menu
        .appendTo($body)
        .on('click', function(event) {

            event.stopPropagation();

            // Hide.
            $menu._hide();

        })
        .find('.inner')
        .on('click', '.close', function(event) {

            event.preventDefault();
            event.stopPropagation();
            event.stopImmediatePropagation();

            // Hide.
            $menu._hide();

        })
        .on('click', function(event) {
            event.stopPropagation();
        })
        .on('click', 'a', function(event) {

            var href = $(this).attr('href');

            event.preventDefault();
            event.stopPropagation();

            // Hide.
            $menu._hide();

            // Redirect.
            window.setTimeout(function() {
                window.location.href = href;
            }, 350);

        });

    $body
        .on('click', 'a[href="#menu"]', function(event) {

            event.stopPropagation();
            event.preventDefault();

            // Toggle.
            $menu._toggle();

        })
        .on('keydown', function(event) {

            // Hide on escape.
            if (event.keyCode == 27)
                $menu._hide();

        });

    function renderCart() {
        const cartContainer = document.getElementById('cart-contents');
        cartContainer.innerHTML = '';

        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let total = 0;

        cart.forEach((item, index) => {
            total += item.price;
            cartContainer.innerHTML += `
                <div class="cart-item">
                    <span>${item.passType}</span>
                    <span>$${item.price}</span>
                    <span>
                        <button onclick="removeFromCart(${index})">Remove</button>
                    </span>
                </div>
            `;
        });

        cartContainer.innerHTML += `<div class="cart-total">Total: $${total}</div>`;
    }

    function removeFromCart(index) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
    }

    function checkout() {
        alert('Proceeding to checkout...');
        // Need logical function of proceeding to checkout
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        renderCart();
    });

    function editPass(passName) {
        // Placeholder function for editing a pass
        console.log("Editing " + passName);
        alert("Editing functionality to be implemented.");
    }

    function addNewPass() {
        // Placeholder function for adding a new pass
        console.log("Adding a new pass.");
        alert("Add new pass functionality to be implemented.");
    }

    let cart = [];

   function addToCart(name, price, id_type) {
    $.ajax({
        url: 'http://localhost/Web-Project/public/add_to_cart',  // Adjusted to correct endpoint
        type: 'POST',
        data: {
            name: name,
            price: price,
            id_type: id_type
        },
        dataType: '', // Ensuring the response is treated as JSON
        complete: function() {
            // Всегда показывать сообщение, независимо от того, что вернул сервер
            alert("Your pass added to cart!");
        }
    });
}



$(document).ready(function() {
    // Load the cart content when the cart page is loaded
    if (window.location.pathname.includes('cart_display')) {
        loadCart();
    }
});

function loadCart() {
    $.ajax({
        url: '/index.php?action=cart_display',
        type: 'GET',
        success: function(response) {
            $('#cartContent').html(response);
        },
        error: function() {
            alert("Error loading cart.");
        }
    });
}


    window.addToCart = addToCart;

    // Load cart from localStorage on page load
    document.addEventListener('DOMContentLoaded', (event) => {
        const storedCart = localStorage.getItem('cart');
        if (storedCart) {
            cart = JSON.parse(storedCart);
        }
    });
$(document).on('click', '.remove-item', function() {
    var self = $(this); // Сохраняем ссылку на кнопку
    var id_type = self.data('id');
    $.ajax({
        url: 'http://localhost/Web-Project/public/remove_from_cart',
        type: 'POST',
        data: {id_type: id_type},
        dataType: '',  // Указываем, что ожидаем JSON в ответ
               complete: function() {
            // Перезагружаем страницу после завершения запроса, независимо от его успеха
            location.reload();
        }
    });
});


})(jQuery);
