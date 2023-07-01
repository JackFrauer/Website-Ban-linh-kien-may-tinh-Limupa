<x-admin-header-card />

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <form method="post" action="/admin/order_update/{{ $order->id }}">

                @csrf
                @method('PUT')

                <label>Order Code:</label>
                <input readonly type="text" name="order_id" class="form-control" value="{{ $order->order_id }}">
                @error('name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>User ID:</label>
                <input readonly type="text" name="user_id" class="form-control" value="{{ $order->user_id }}">
                @error('First_name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control" value="{{ $order->product_name }}">
                @error('Last_name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <label>Quantity:</label>
                <input type="text" name="quantity" class="form-control" value="{{ $order->quantity }}"
                    oninput="calculatePrice()">

                @error('password')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>Price</label>
                <input type="number" name="total_price" class="form-control" value="{{ $order->total_price }}"
                    id="price">
                @error('email')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <input type="submit" name="submit" value="Update" class="btn btn-primary mt-3 form-control">
            </form>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- Footer -->
<script>
    function calculatePrice() {
        var quantity = document.getElementsByName('quantity')[0].value;
        var price = document.getElementById('price').value;
        
        if (quantity > 0) {
            var base_price = price / quantity;
            var total_price = quantity * base_price;
            document.getElementById('price').value = total_price.toFixed(2);
        } else {
            document.getElementById('price').value = 0;
        }
    }
</script>


<x-admin-footer-card />
