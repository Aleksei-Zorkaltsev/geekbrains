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

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="status_operation_message red">
            {{ $error }}
        </div>
    @endforeach
@endif
