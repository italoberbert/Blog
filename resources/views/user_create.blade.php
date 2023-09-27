<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('home')}}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login.user.store')}}">Login</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('user.create')}}">Cadastre-se</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('contact')}}">Contato</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('posts')}}">Posts</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('about')}}">Sobre</a></li>
                      <form class="d-flex" method="GET" action="{{ route('posts')}}">
                          <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                          <button class="btn btn-dark text-uppercase" type="submit">Search</button>
                      </form>
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-dark">
        <form action="{{ route('user.store')}}" method="post">
            @csrf
            <h2 class="sr-only">Cadastrar</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="firstName" placeholder="First Name"></div>
            {{ $errors->first('firstName')}}
            <div class="form-group"><input class="form-control" type="text" name="lastName" placeholder="Last Name"></div>
            {{ $errors->first('lastName')}}
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            {{ $errors->first('email') }}
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            {{ $errors->first('password') }}
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Cadastrar</button></div>
            @if (session()->has('success'))
                <x-alert key="success" :message="session()->get('success')" />
            @elseif(session()->has('error'))
                <x-alert key="danger" :message="session()->get('error')" />
            @endif
    </div>
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/italo-berbert-11b4a1279/">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/italoberbert">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>