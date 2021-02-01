
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
		console.log(data);
	});
	
}