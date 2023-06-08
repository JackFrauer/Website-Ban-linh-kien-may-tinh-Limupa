 <x-admin-header-card/>
 <!-- Content Row -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Quản lý sản phẩm</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Mã sản phẩm</th>
              <th>Loại sản phẩm</th>
              <th>Thương hiệu</th>
              <th>Giá</th>
              <th>Giới thiệu sản phẩm</th>
              <th>Ảnh</th>
              <th>Ảnh nhiều</th>
              <th>Năm sản xuất</th>
                
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            @php
            $counter=1
            @endphp
            <!-- Table rows will be generated dynamically using JavaScript or another server-side language -->
            @foreach($products as $item)
            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_id}}</td>
                <td>{{$item->product_type}}</td>
                <td>{{$item->mansx}}</td>
                <td>{{number_format($item->price)}}</td>
                <td>{{$item->product_details}}</td>
                <td><img src="{{asset($item->image)}}" alt="" style="max-width: 150px; max-height: 150px;"></td>
                <td>{{$item->images}}</td>
                <td>{{$item->product_year}}</td>

                <td>
                  <a href='product_table/{{$item->id}}' class="btn btn-primary">Sửa</a> 
                  <hr>
                  <form id="delete-form" method="POST" action="delete/{{$item->id}}" onsubmit="return confirm('Bạn có chắc chắn là muốn xóa?');">  
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" value="Xóa" class="btn btn-primary mt-3 form-control">
                  </form>
                 
                </td>
              </tr>
              @php
              $counter++;
              @endphp
              @endforeach

          </tbody>
        </table>
        <br>
        <a href="product_table/insert" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus-square"></i>
          </span>
          <span class="text">Thêm sản phẩm</span>
        </a>
      </div>
    </div>
  </div>
  <x-flash-message/>

<x-admin-footer-card/>