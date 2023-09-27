    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Blog</title>
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="css/styles.css" rel="stylesheet" />
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
                          @auth
                            <a class="nav-link"> Olá, {{auth()->user()->firstName}} | <a href="{{route('login.user.destroy')}}"> Logout</a></a>
                          @endauth
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
            <!-- Page Header-->
            <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="site-heading">
                                <h1>Blog do Italo</h1>
                                <span class="subheading">Um blog para portifolio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main Content-->
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!-- Post preview-->
                        <div class="post-preview">                
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <!-- Post preview-->
                        <div class="post-preview">
                            <<h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on September 18, 2023
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <!-- Post preview-->
                        <div class="post-preview">
                                <h2 class="post-title">Science has not yet mastered prophecy</h2>
                                <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on August 24, 2023
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <!-- Post preview-->
                        <div class="post-preview">
                                <h2 class="post-title">Failure is not an option</h2>
                                <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                on July 8, 2023
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        <!-- Pager-->
                        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{ route('posts') }}">Older Posts →</a></div>
                    </div>
                </div>
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
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
        </body>
    </html>