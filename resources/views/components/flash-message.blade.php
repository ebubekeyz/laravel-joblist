@if(session()->has('message'))
<div x-data="show: true" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed py-3 text-white bg-danger text-center w-50 m-auto" style="top-0">
    <p>
        {{session('message')}}
    </p>
</div>
@endif