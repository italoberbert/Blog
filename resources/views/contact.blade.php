<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog do italo - Portifolio</title>
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
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Entre em contato</h1>
                            <span class="subheading">Alguma pergunta? Mande um email.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Quer entrar em contato? Preencha o formulário abaixo para me enviar uma mensagem e entrarei em contato com você o mais breve possível!</p>
                        <div class="my-5">
                            <form id="{{ route('contact')}}" method="post">
                            @csrf
                                <div class="form-floating">
                                    <input class="form-control" name="name" type="text" placeholder="Insira seu nome..."/>
                                    <label for="name">Nome</label>
                                    {{ $errors->first('name') }} 
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" type="email" placeholder="Insira seu email..."/>
                                    <label for="email">Email</label>
                                    {{ $errors->first('email') }}
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="subject" type="text" placeholder="Insira o assunto..."/>
                                    <label for="subject">Assunto</label>
                                    {{ $errors->first('subject') }}
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Insira sua mensagem aqui..." style="height: 12rem"></textarea>
                                    <label for="message">Mensagem</label>
                                    {{ $errors->first('message') }}
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                @if (session()->has('mail_success'))
                                        <p class="alert alert-success">{{ session()->get('mail_success') }}</p>
                                <!-- Submit error message-->
                                <!---->
                                    @elseif (session()->has('mail_error'))
                                        <p class="alert alert-danger">{{ session()->get('mail_error') }}</p>
                                    @endif
                                <!-- Submit Button-->
                                <button class="btn btn-dark text-uppercase" id="submitButton" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
