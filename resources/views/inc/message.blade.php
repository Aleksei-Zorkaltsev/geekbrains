@if(session()->has('success'))
    <div class="status_operation_message green">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="status_operation_message red">
        {{ session()->get('error') }}
    </div>
@endif
