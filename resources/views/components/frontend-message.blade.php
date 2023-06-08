<!-- Flash Alert Box -->
@if (session()->has('message'))
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300" x-show="show"
        x-init="setTimeout(() => { show = false }, 5000)">
        <div class="alert alert-success text-center fixed-top" role="alert"
            style="background-color: yellow; color: black;">
            {{ session('message') }}
        </div>
    </div>
@endif
