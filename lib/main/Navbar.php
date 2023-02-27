




    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Bocaiúva-MG, BR</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small><?php $agora = date('d/m/Y H:i'); echo $agora;?></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>(38) 9 99965-0499</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-primary rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary rounded-0 border-0 border-end border-secondary" href="https://www.linkedin.com/in/luiz-felipe-silva-santos-187bb5214/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-primary rounded-0" href="https://www.instagram.com/atendesolares/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 ">
    <a href="index.php" class="navbar-brand d-flex align-items-center  px-2 px-lg-2">
      <img src="img/icone.png" alt="..."  height="50%">
      <h3 class="m-0 text-primary">ATENDE</h3>&nbsp<h3 class="m-0 text-warning">SOLARES</h3>
    </a>
       
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0  " >
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="about.php" class="nav-item nav-link">Sobre nós</a>
                <a href="service.php" class="nav-item nav-link">Serviços</a>
                <a href="project.php" class="nav-item nav-link">Projetos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.php" class="dropdown-item">Feature</a>
                        <a href="quote.php" class="dropdown-item">Orçamento Gratuito</a>
                        <a href="team.php" class="dropdown-item">Nosso Time</a>
                        <a href="testimonial.php" class="dropdown-item">Depoimentos</a>
                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contato</a>
                
            </div>
            
            <div class="navbar-nav ms-auto p-4 p-lg-4">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning" type="submit">Buscar</button>
    </form>
  </div>
          

        </div>
    </nav>
    <!-- Navbar End -->
