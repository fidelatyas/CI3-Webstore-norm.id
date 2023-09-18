<script type="text/javascript">
	$(function() {
        cartInit();
	});

	function addToCart(productId, categoryId, quantity, price) {
		$('.cart-'+ productId).html(`<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Loading...`);

		$.ajax({
            data: {
            	product_id: productId,
            	category_id: categoryId,
            	quantity: quantity,
                discount: 0,
            	price: price,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
            	alert('Server Error.');
            	$('.cart-'+ productId).html(`Add To Cart`);
            },
            success: function(data) {
                if (data.status == 'success') {
                    if (productId == 1) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NPRO-000001',
                            content_name: 'Hair Growth Capsule',
                            content_category: 'Hair Loss',
                            content_type: 'Product',
                            value: '199000',
                            currency: 'IDR'
                        });
                    }
                    else if (productId == 3) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NPRO-000002',
                            content_name: 'Hair Tonic',
                            content_category: 'Hair Loss',
                            content_type: 'Product',
                            value: '169000',
                            currency: 'IDR'
                        });
                    }
                    else if (productId == 4) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NPRO-000003',
                            content_name: 'Anti-DHT Shampoo',
                            content_category: 'Hair Loss',
                            content_type: 'Product',
                            value: '129000',
                            currency: 'IDR'
                        });
                    }
                    else if (productId == 16) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NPRO-000009',
                            content_name: 'Stamina Cream',
                            content_category: 'PE',
                            content_type: 'Product',
                            value: '249000',
                            currency: 'IDR'
                        });
                    }
                    else if (productId == 11) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NKIT-000011',
                            content_name: 'Complete Hair Loss Kit',
                            content_category: 'Hair Loss',
                            content_type: 'Product',
                            value: '469000',
                            currency: 'IDR'
                        });
                    }
                    else if (productId == 13) {
                        fbq("track", "AddToCart", {
                            content_ids: 'NKIT-000012',
                            content_name: 'Starter Hair Loss Kit',
                            content_category: 'Hair Loss',
                            content_type: 'Product',
                            value: '279000',
                            currency: 'IDR'
                        });
                    }

                    $('.cart-detail').empty();

                    $('.cart-detail').append(data.cart_list);
                    $('.cart-total').removeClass('d-none');

                    $('.cart-total-subtotal').html(data.subtotal_display);

                    $('.quantity .minus, .quantity .plus, .cart-list .remove').unbind('click');
                    cartInit();

                    $('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart-fill-<?= $navbar; ?>.png');

                    $('html body').css('overflow', 'hidden');
                    $('.cart-container, .screen-blocker').addClass('active');

                    $('.cart-'+ productId).html(`Add to Cart`);
                    $('.cart-button.cart-'+ productId).html(`<div><img src="<?= base_url(); ?>assets/images/main/cart-add-icon.png"></div><div>Add to Cart</div>`);
                }
                else {
                    alert(data.message);
                    $('.cart-'+ productId).html(`Add To Cart`);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_add_to_cart/'
        });
	}

    function calculateSubtotal() {
        let subtotal = 0;

        $.each($('.cart-list'), function(key, cart) {
            const productId = $(cart).attr('data-product-id');
            let quantity = parseInt($(cart).attr('data-quantity'));
            let price = parseInt($(cart).attr('data-price'));

            let total = quantity * price;

            if ((productId == 1 || productId == 3 || productId == 4 || productId == 11 || productId == 13 || productId == 16) && quantity >= 3) {
                total = total - (total / 10)
            }
            else if ((productId >= 18 && productId <= 22) && quantity >= 3) {
                total = total - (total * 0.05)
            }

            subtotal += total;
        });

        const subtotalDisplay = 'IDR ' + $.number(subtotal, 0, ',', '.');

        $('.cart-total-subtotal').html(subtotalDisplay);
    }

    function cartInit() {
        $('.cart-list .remove').click(function() {
            $(this).parent().remove();

            updateCart();
            calculateSubtotal();
        });

        $('.quantity .minus').click(function() {
            const productId = $(this).parent().attr('data-product-id');

            let quantity = parseInt($('#cart-list-'+ productId).attr('data-quantity'));

            quantity =  quantity - 1;

            if (quantity > 0) {
                $('#cart-list-'+ productId).attr('data-quantity', quantity);
                $('#cart-list-'+ productId).find('.quantity .input').html(quantity);
            }
            else {
                $('#cart-list-'+ productId).remove();
            }

            updateCart();
            calculateSubtotal();
        });

        $('.quantity .plus').click(function() {
            const productId = $(this).parent().attr('data-product-id');

            let quantity = parseInt($('#cart-list-'+ productId).attr('data-quantity'));

            quantity = quantity + 1;

            $('#cart-list-'+ productId).attr('data-quantity', quantity);
            $('#cart-list-'+ productId).find('.quantity .input').html(quantity);

            updateCart();
            calculateSubtotal();
        });
    }

    function updateCart() {
        let arrCart = [];
        let cart = {};

        $.each($('.cart-list'), function(key, cartList) {
            cart = {};
            cart.discount = 0;

            cart.product_id = $(cartList).attr('data-product-id');
            cart.category_id = $(cartList).attr('data-category-id');
            cart.quantity = parseInt($(cartList).attr('data-quantity'));
            cart.price = parseInt($(cartList).attr('data-price'));
            cart.total = cart.price * cart.quantity;

            if ((cart.product_id == 1 || cart.product_id == 3 || cart.product_id == 4 || cart.product_id == 11 || cart.product_id == 13 || cart.product_id == 16) && cart.quantity >= 3) {
                cart.discount = cart.total / 10;
                discount = cart.price - (cart.price / 10);

                $('.cart-price-'+ cart.product_id).html('<div class="cart-price-container"><div class="old">IDR '+ $.number(cart.price, 0, ',', '.') +'</div><div class="new">IDR '+ $.number(discount, 0, ',', '.') +'</div></div>');
            }
            else if ((cart.product_id >= 18 && cart.product_id <= 22) && cart.quantity >= 3) {
                cart.discount = cart.total * 0.05;
                discount = cart.price - (cart.price * 0.05);

                $('.cart-price-'+ cart.product_id).html('<div class="cart-price-container"><div class="old">IDR '+ $.number(cart.price, 0, ',', '.') +'</div><div class="new">IDR '+ $.number(discount, 0, ',', '.') +'</div></div>');
            }
            else {
                $('.cart-price-'+ cart.product_id).html('<div class="price">IDR '+ $.number(cart.price, 0, ',', '.') +'</div>');
            }

            arrCart.push(cart);
        });

        $.ajax({
            data: {
                arr_cart: JSON.stringify(arrCart),
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                alert('Server Error.');
                $('.cart-'+ productId).html(`Add To Cart`);
            },
            success: function(data) {
                if (data.status == 'success') {
                    if (arrCart.length <= 0) {
                        $('.cart-detail').html(`<div class="empty-cart-container text-center"><div>Oooops...</div><div>Your cart is empty</div><div class="margin-top-30px"><a href="<?= base_url(); ?>all-product/"><button class="main">Shop Now</button></a></div></div>`);
                        $('.cart-icon').attr('src', '<?= base_url(); ?>assets/images/main/cart-<?= $navbar; ?>.png');

                        $('.cart-total').addClass('d-none');
                    }
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_update_cart/'
        });
    }
</script>