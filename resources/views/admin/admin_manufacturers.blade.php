<x-admin-header-card />
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
                        <th>Mã nhà sản xuất</th>
                        <th>Tên nhà sản xuất</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    <!-- Table rows will be generated dynamically using JavaScript or another server-side language -->
                    @foreach ($manufacturer as $item)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $item->manufacturer_code}}</td>
                            <td>{{ $item->manufacturer_name }}</td>
      

                            <td>
                                <a href='/admin/manufacturers/update/{{ $item->id }}' class="btn btn-primary form-control">Sửa</a>
                                <hr>
                  
                                <form id="delete-form" method="POST" action="delete/{{ $item->id }}"
                                    onsubmit="return confirm('Bạn có chắc chắn là muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                 
                                    <input type="submit" name="submit" value="Xóa"
                                        class="btn btn-primary form-control">
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
<x-flash-message />

<x-admin-footer-card />
