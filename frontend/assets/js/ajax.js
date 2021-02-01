
// Add to cart
function addToCart(id) {
	event.preventDefault();
	quantity = 1;
	$.ajax({
		url: 'http://localhost/datmonan/frontend/index.php?controller=cart&action=cart',
		type: 'POST',
		dataType: 'json',
		data: {
			'id' : id,
			'quantity' : quantity
		},
	})
	.done(function(data) {
		$('.count-item').text(data);
	});
	
}

// update cart
function updateCart(id) {
	quantity = $("#quantity_" + id).val();
	
	$.ajax({
		url: 'http://localhost/datmonan/frontend/index.php?controller=cart&action=update',
		type: 'POST',
		dataType: 'json',
		data: {
			'id': id,
			'quantity': quantity
		},
	})
	.done(function(data) {
		$("#cart-list").load("http://localhost/datmonan/frontend/index.php?controller=cart&action=detail .shop-cart");
	})
	
}