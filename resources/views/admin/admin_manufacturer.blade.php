<x-admin-header-card />

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <form method="post" action="/admin/manufacturer/update/{{ $manufacturer->id }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <label>Manufacturer Code:</label>
                <input type="text" name="manufacturer_code" class="form-control" value="{{ $manufacturer->manufacturer_code }}">
                @error('product_id')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>Manufacturer Name</label>
                <input type="text" name="manufacturer_name" class="form-control" value="{{ $manufacturer->manufacturer_name }}">
                @error('product_name')
                    <p style="color: red;
                        font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <input type="submit" name="submit" value="Update" class="btn btn-primary mt-3 form-control">
            </form>
        
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- Footer -->

<x-admin-footer-card />
