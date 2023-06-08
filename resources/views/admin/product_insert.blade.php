<x-admin-header-card />

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('insert_product') }}" enctype="multipart/form-data">

                @csrf
                <label>Mã sản phẩm:</label>
                <input type="text" name="product_id" class="form-control" value="{{ old('product_id') }}">
                @error('product_id')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>Tên sản phẩm:</label>
                <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}">
                @error('product_name')
                    <p style="color: red;
                        font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Giới thiệu sản phẩm:</label>
                <textarea name="product_details" id="product_details_editor" "></textarea>
                @error('product_details')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <label>Loại sản phẩm:</label>
                <select name="product_type" class="form-control">
                    <option value="">Hãy chọn loại sản phẩm</option>
                    @foreach( $product_types->unique('product_type') as $item)
                    <option value="{{$item->product_type}}">{{$item->product_type}}</option>
                    @endforeach
                </select>
                @error('product_type')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>Nhà sản xuất:</label>
                <select name="mansx" class="form-control">
                    <option value="">Hãy chọn mã nhà sản xuất</option>
                    @foreach( $product_types->unique('mansx') as $item)
                    <option value="{{$item->mansx}}">{{$item->mansx}}</option>
                    @endforeach
                </select>
                @error('mansx')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Năm sản xuất:</label>
                <input type="text" name="product_year" class="form-control" value="{{ old('product_year') }}">
                @error('product_year')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Giá:</label>
                <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                @error('price')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Số lượng:</label>
                <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
                @error('quantity')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Chi tiết sản phẩm:</label>
                <textarea name="product_description" id="product_description_editor"></textarea>
                @error('product_description')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <label>Chi tiết thêm:</label>
                <textarea name="more_details" id="more_details_editor"></textarea>
                @error('more_details')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <label>Hình đại diện:</label>
                <input type="file" name="image" class="form-control"><br>
                @error('image')
                <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
            @enderror
                <label>Hình thêm:</label>
                <input type="file" name="images[]" multiple class="form-control"><br>
                @error('images')
                <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
            @enderror
                <input type="submit" name="submit" value="Add" class="btn btn-primary mt-3 form-control">
            </form>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    ClassicEditor.create(document.querySelector('#product_details_editor')).catch(error => {
                        console.error(error);
                    });
                    ClassicEditor.create(document.querySelector('#product_description_editor')).catch(error => {
                        console.error(error);
                    });
                    ClassicEditor.create(document.querySelector('#more_details_editor')).catch(error => {
                        console.error(error);
                    });
                });
            </script>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- Footer -->

<x-admin-footer-card />
