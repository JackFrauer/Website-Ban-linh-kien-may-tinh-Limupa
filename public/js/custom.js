function addToCart(itemId) {
    $.ajax({
        url: '/cart/add/' + itemId,
        type: 'POST',
        data: {
            // Add any additional data you need here
        },
        success: function(response) {
            // Handle success response
        },
        error: function(xhr) {
            // Handle error response
        }
    });
}
