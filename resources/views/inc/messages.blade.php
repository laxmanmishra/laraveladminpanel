@if(isset($error) && count($error)>0)
    @foreach ($error->all as $error)
        <div class="alert alert-danger">
            $error
        </div>    
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif