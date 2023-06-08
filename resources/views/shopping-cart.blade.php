<x-header-card />
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">remove</th>
                                    <th class="li-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="li-product-price">Unit Price</th>
                                    <th class="li-product-subtotal">Total</th>
                                    <th class="li-product-quantity">Quantity</th>
                          
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0 @endphp
                                @foreach ((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $item)
                                        <tr data-id="{{ $id }}">
                                            <td class="li-product-remove">
                                                <button class="btn btn-danger btn-sm cart_remove"><i
                                                        class="fa fa-trash-o"></i> Delete</button>
                                            </td>
                                            <td class="li-product-thumbnail">
                                                <a href="/product/{{ $item['id'] }}">
                                                    <img src="{{ asset($item['image']) }}" alt="Li's Product Image"
                                                        style="max-width: 150px; max-height: 150px;">
                                                </a>
                                            </td>

                                            <td data-th="Product" class="li-product-name">
                                                <a href="/product/{{ $item['id'] }}">{{ $item['product_name'] }}</a>
                                            </td>
                                            <td data-th="Price" class="li-product-price">
                                                <span class="amount">{{ number_format($item['price']) }} VND</span>
                                            </td>
                                            <td data-th="Subtotal" class="li-product-price"><span class="amount">{{ number_format($item['price'] * $item['quantity']) }} VND</span></td>
                                            <td data-th="Quantity">
                                                <label>Quantity</label>
                                                <input type="number" value="{{ $item['quantity'] }}"
                                                    class="form-control quantity cart_update" min="1" />
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
           
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Total <span>{{ number_format($total) }} VND</span></li>
                                </ul>
                                <a href="/checkout">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".cart_remove").click(function(e) {
        e.preventDefault();

        var ele = $(this);

        if (confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });



    $(".cart_update").change(function(e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
</script>
<!--Shopping Cart Area End-->
<x-footer-card />
