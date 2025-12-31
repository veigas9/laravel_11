@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>        
 @endif
 
@if (session()->has('message'))
    <div class="alert alert-message alert-dismissible fade show" role="alert">
        {{ session('message') }}
    </div>        
 @endif
 
@if (session()->has('error'))
    <div class="alert alert-error alert-dismissible fade show" role="alert">
        {{ session('error') }}
    </div>        
 @endif

 @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>        
    @endif