@extends('layout.auth')
@section('content')
<section class="bg">
    <div class="container">
        <div class="title">
            <h2 class="text-center text-white">PRODUCT STORAGE</h2>
            @if(Session::has('error'))
                <div class="alert alert-danger" role="role">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div>
                <button class="btn btn-info px-5 text-dark" data-bs-toggle="modal" data-bs-target="#myModal">LOGIN</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">LOGIN USER</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
        
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    
                    <div class="mb-2">
                        <label>Email</label>
                        <input type="text" class="form-control"  placeholder="Email" name="email" />
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control"  placeholder="Password" name="password" />
                    </div>
                    <button class="loginbtn btn btn-sm btn-info px-3">LOGIN</button>
                </form>
            </div>
        
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        
            </div>
        </div>
        </div>
</section>
@endsection('content')