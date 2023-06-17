<x-admin-header-card />

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <form method="post" action="/admin/user_update/{{$user->id}}">

                @csrf
                @method('PUT')
                
                <label>Username:</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                @error('name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>First name:</label>
                <input type="text" name="First_name" class="form-control" value="{{ $user->First_name }}">
                @error('First_name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Last name</label>
                <input type="text" name="Last_name" class="form-control" value="{{ $user->Last_name}}">
                @error('Last_name')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror

                <label>Password:</label>
                <input type="text" name="password" class="form-control" value="{{$user->password}}">
                @error('password')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>

                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email}}">
                @error('email')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                <br>
                <label>Role</label>
 
                <select name="role" class="form-control">
                    <option value="user">Pick a role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                @error('role')
                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                @enderror
                


                <input type="submit" name="submit" value="Add" class="btn btn-primary mt-3 form-control">
            </form>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
<!-- Footer -->

<x-admin-footer-card />
