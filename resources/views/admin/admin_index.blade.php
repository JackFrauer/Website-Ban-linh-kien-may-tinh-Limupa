<x-admin-header-card />

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        <tr>
                            @foreach ($users as $item)
                                <td>{{ $counter }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->First_name }}</td>
                                <td>{{ $item->Last_name }}</td>
                                <td>*******************************************************</td>
                                <td>{{ $item->email }}</td>

                                <td>{{ $item->role }}</td>
                                <td>

                                    <a href='admin/user/{{ $item->id }}' class="btn btn-primary form-control">Sửa</a>
                                    <hr>

                                    <form id="delete-form" method="POST" action="admin/delete_user/{{ $item->id }}"
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
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý Nhà sản xuất</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Order Code</th>
                            <th>User ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Order Date</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        <!-- Table rows will be generated dynamically using JavaScript or another server-side language -->
                        @foreach ($manufacturers as $item)
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $item->order_id }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->total_price) }} VND</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{$item->updated_at}} </td>

                                <td>
                                    <a href='admin/order/{{ $item->id }}' class="btn btn-primary form-control">Sửa</a>
                                    <hr>

                                    <form id="delete-form" method="POST" action="admin/delete_order/{{ $item->id }}"
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
                <a href="insert.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Thêm sản phẩm</span>
                </a>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->
    <x-flash-message />
    <x-admin-footer-card />
