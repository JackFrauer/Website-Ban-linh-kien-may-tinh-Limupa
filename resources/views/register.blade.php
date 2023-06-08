<x-header-card />
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form method="post" action="/login">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>User Name</label>
                                <input class="mb-0" placeholder="User Name" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" placeholder="Password" name="password"
                                    value="{{ old('password') }}">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Forgotten pasward?</a>
                            </div>
                            <div class="col-md-12">
                                <button class="register-button mt-0">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form method="post" action="/users">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>First Name</label>
                                <input class="mb-0" type="text" placeholder="First Name" name="First_name"
                                    value={{ old('First_name') }}>
                                @error('First_name')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            @error('First_name')
                                <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                            @enderror
                            <div class="col-md-6 col-12 mb-20">
                                <label>Last Name</label>
                                <input class="mb-0" type="text" placeholder="Last Name" name="Last_name"
                                    value={{ old('Last_name') }}>
                                @error('Last_name')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6 col-12 mb-20">
                                <label>Username</label>
                                <input class="mb-0" type="text" placeholder="User Name" name="name"
                                    value={{ old('name') }}>
                                @error('name')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" placeholder="Email Address" name="email"
                                    value={{ old('email') }}>
                                @error('email')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" placeholder="Password" name="password">
                                @error('password')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Confirm Password</label>
                                <input class="mb-0" type="password" placeholder="Confirm Password"
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <p style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="register-button mt-0">Register</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
<x-footer-card />
