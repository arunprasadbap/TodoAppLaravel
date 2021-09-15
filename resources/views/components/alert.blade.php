<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif
</div>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        
    </div>
@endif