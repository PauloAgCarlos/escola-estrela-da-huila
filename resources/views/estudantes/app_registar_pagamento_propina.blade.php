<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painel das Finanças</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- CSS only -->
  <link rel="stylesheet" href="../Projecto Final-cassela&dilson/css/bootstrap.min.css">
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h3 class="logo"><a href="index.html">Estrela da Huila</a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Pagina Inicial</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
        
         
          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
         
            <li class="dropdown"><a href="#"><span>Usuario:</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Meu Perfil</a></li>
                  <li><a href="#">Sair</a></li>
                  
                </ul>
              </li>
          </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">

  

   


     <!-- Main content -->
     <section class="content">
      <div class="container">

              
                        <div class="card">
                            <div class="card-body">
                        <form action="/salvar_pagamento_propina" method="post">
                        @csrf
                           <fieldset>
                               <legend>Informaçoes do Pagamento</legend>

                               <div class="form-group">
                                    <label>Digite o numero de matricula </label>
                                <input type="text"  placeholder="Numero de matricula " name="numero_matricula"><button>Validar</button>
    
                                </div>

                            <div class="form-group">
                                    <label>Nome </label>
                                <input type="text" class="form-control" placeholder="Aqui aparecera o nome completo do aluno se este aluno tiver sido matriculado em algum curso... " name="aluno">
    
                                </div>

                                <div class="form-group">
                                    <label>Mês </label>
                                <input type="text" class="form-control" placeholder="Ex: Janeiro" name="mes">
    
                                </div>

                                 <div class="form-group">
                                 <label>Valor</label>

                                 
                                 <select type="text" class="form-control"  name="valor">
                                    <option>5.500,00</option>
                                 
                                </select>
 
    
                                
    
                                </div>
                               
                               
                                <div class="form-group">
                                <label>Id Matricula</label>
                                    <input type="date" class="form-control" placeholder="Nº Matricula" name="matricula">
        
                                </div>
                               

                           </fieldset>

                                <br>
                                </br>

                            <button type="submit" class="btn btn-primary float-right">Confirmar o pagamento</button>

                      </form>
                           
                          </div>
                        
                        </div>
                       
                        </div>
                  
 
           
      </div><!--/. container-fluid -->
    
    </section>
    <!-- /.content -->





          
  
    </main>
    

    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Estrela Da Huila</h3>
            <p>
              Rua Cabral <br><br>
              <strong>Telefone:</strong> +244 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
        
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pagina Principal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contatos</a></li>
             
            </ul>
          </div>

         


        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Estrela Da Huila</span></strong>. All Rights Reserved
          </div>
          <div class="credits">  ps://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 <script src="../Projecto Final-cassela&dilson/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>