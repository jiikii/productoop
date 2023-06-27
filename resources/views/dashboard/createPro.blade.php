@extends('layout.dashboard')
@section('content')
<section class="bg">
<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{ Route('adminProduct') }}"><img class="logo" src="../imgs/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex align-items-center justify-content-center gap-2">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ Route('adminProduct') }}">PRODUCT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ Route('adminStaff') }}">STAFF'S</a>
                  </li>
                  <li class="nav-item dropdown">
                    <p class="text-success dropdown-toggle pt-3" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</p>
                  
                    <ul class="dropdown-menu dropdown-menu-white">
                      <form action="{{ route('logout') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Logout</button>
                      </form>
                    </ul>
                  </li> 
                </ul>
            </div>
          </div>
        </nav>
        <section>
            <div class="container">
                <div class="secondbg">
                    <div class="container">
                        <div class="featuredTitle p-4">
                          @if(Session::has('success'))
                            <div class="alert alert-info">
                              {{ Session::get('success') }}
                            </div>
                          @endif
                            <form action="{{ Route('addProducts') }}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <label>Product Name</label>
                                    <input type="text"  class="form-control"  placeholder="Product name" name="productName"/>
                                </div>
                                <div class="mb-2">
                                    <label>Quantity</label>
                                    <input type="text"  class="form-control"  placeholder="Quantity" name="quantity"/>
                                </div>
                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="text"  class="form-control"  placeholder="Price" name="price" />
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn btn-sm btn-primary" data-bs-dismiss="modal" >Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>
@endsection('content')