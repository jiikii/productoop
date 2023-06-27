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

        <div id="product-app">
        <section>
            <div class="container">
                <div class="secondbg">
                <div class="container">
                    <div class="featuredTitle p-4">
                    <div class="text">
                        <h2 class="fw-bolder">Staff</h2>
                    </div>
                    <hr>
                    <div class="buttons pt-2">
                        <form action="{{ Route('addStaff') }}" method="get">
                            @csrf
                            <button class="btn btn-info px-4 text-dark mb-5">ADD STAFFS</button>
                        </form>
                    </div>
                    <div>
                        <table class="table table-info ">
                        <thead>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Created</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($staffData as $sta)
                                <tr>
                                    <td>{{ $sta->id }}</td>
                                    <td>{{ $sta->firstname }}</td>
                                    <td>{{ $sta->lastname }}</td>
                                    <td>{{ $sta->age }}</td>
                                    <td>{{ $sta->email }}</td>
                                    <td>{{ $sta->phoneNumber }}</td>
                                    <td>{{ $sta->created_at }}</td>
                                    <td>
                                        <form action="{{ route('staffEdit', ['id' => $sta->id]) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-info">Edit</button>
                                        </form>
                                        <form action="{{ route('deleteStaff', ['id' => $sta->id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection('content')