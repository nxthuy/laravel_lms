@if(Session::has('flash_success_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_success_message') }}
    </div>
@endif