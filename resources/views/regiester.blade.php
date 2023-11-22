@extends('layout')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <form action="{{route('proses_register')}}" method="POST" id="regForm">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Nama</label>
                                        <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Masukkan Nama" />
                                         @if ($errors->has('name'))
                                          <span class="error"> * {{ $errors->first('name') }}</span>
                                          @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputusername">Username</label>
                                        <input class="form-control py-4" id="inputusername" type="text" name="username" placeholder="Masukkan username" />
                                         @if ($errors->has('username'))
                                          <span class="error"> * {{ $errors->first('username') }}</span>
                                          @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" />
                                        @if ($errors->has('email'))
                                          <span class="error">* {{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                                        @if ($errors->has('password'))
                                          <span class="error">* {{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Daftar!</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{route('login')}}">Sudah Punya Akun? Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection
Layout Dashboard

Selanjutnya kita akan membuat layout dashboard pada folder resources/views dengan nama file dashboard.blade.php. Isi file pada halaman dashboard seperti kode program dibawah

@extends('layout')
@section('content')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button
        class="btn btn-link btn-sm order-1 order-lg-0"
        id="sidebarToggle"
        href="#">
        <i class="fas fa-bars"></i>
    </button >
    <!-- Navbar Search-->
    <form
        class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input
                class="form-control"
                type="text"
                placeholder="Search for..."
                aria-label="Search"
                aria-describedby="basic-addon2"/>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ml-md-0 d-flex">
        <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle"
                id="userDropdown"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="false"
                aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
               <li> <a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>
                <li><div class="dropdown-divider"></div></li>
               <li> <a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

            <div class="sb-sidenav-footer">
                <div class="small"></div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <h1>Login Sebagai:
                    {{ Auth::user()->level }}</h1>
                <div class="row">
                    <div class="col-xl-3 col-md-6">

                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Primary Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Success Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                            <div class="card-body">
                                <canvas id="myAreaChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                            <div class="card-body">
                                <canvas id="myBarChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Afrizals Blog 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
