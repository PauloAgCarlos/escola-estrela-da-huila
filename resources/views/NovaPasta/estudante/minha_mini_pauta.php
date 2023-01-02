<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painel Estudante</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

 

<?php

 ?>



   


     <!-- Main content -->
     <section class="content">
      <div class="container">

            <?php

            if(isset($_REQUEST['action'])){?>

<div class="card">
                <div class="card-header py-4">
                    <h3 class="card-title   ">

                  Essa Mensagem será enviada ao professor da disciplina

                    </h3>
                 
                </div>    

 <div class="card-body ">



          <div class="row" >
            <br>
           

               
             
              <div class="col-lg-2 col-6 text-center">
              
                    
              </div>

                    <div class="col-lg-8 col-6 text-center">
                     
                    
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                    <form action="" method="POST">
                        <label for="name">Nome</label>
                       <div class="form-group">

                      
                           <input type="text" name="name" placeholder="DIGITE O NOME O SEU NOME" required class="form-control">
                        </div> 
                      
                      
                        <div class="form-group">
                          <label for="duration">Curso </label>
                          <input type="text" name="sigla" id="duration" class="form-control" placeholder="DIGITE O SEU CURSO" required>
                        </div>
                        <div class="form-group">
                          <label for="duration">Disciplina a Reclamar </label>
                          <select class="form-control">
                            <option>Portugues</option>
                            <option>Portugues</option>
                            <option>Portugues</option>
                            <option>Portugues</option>
                        </select>
                  
                        </div>
                        
                        <label for="duration">Mensagem</label>
                        <div class="form-group">
                         <textarea name="decrisao"  class="form-control">
                         </textarea>
                         
                        </div>

                         
                      <br>
                      <br>
                     
                        <button type="submit" name="Enviar" class="btn btn-success">Enviar Mensagem</button>
                    </form>

            </form>
                      
                    
                    </div>
                    <div class="col-lg-2 col-6 text-center">
              
                    
                    </div>
                 </div>
          
              
                </div>
              </div>
            </div>
            </div>

                   
                      
                     
                    
                
                </div>

            <?php }else{ ?>
            
        
       

            <div class="card">
                <div class="card-header py-4">
                    <h3 class="card-title">

            Minhas Notas
             <br>
             <br>

                    </h3>
                    <div class="card-tools">
                                <a href="?action=add-new" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i> Reclamar Nota</a>                 
                        </div>
                </div>    

                </div class="card-body">
                <br>
             <br>
                 <div class="table-responsive bg-white">
                    <h1>Electricidade</h1>
                    <p><strong>Nome do Aluno:Domingos Andre Sapalo Cassela</strong></p>
                        <table class="table table-striped table-bordered table-hover">


                        <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Disciplinas </th>
                                    <th>mac1</th>
                                    <th>npp1</th>
                                    <th>mt1</th>
                                    <th>mac2</th>
                                    <th>npp2</th>
                                    <th>mt2</th>
                                    <th>mac3</th>
                                    <th>npp3</th>
                                    <th>mt3</th>
                                    <th>Classificaçao Final</th>
                                   
                                    
                                </tr>

                        </thead>

                        <tbody>
                          <tr>
                                     <td>1</td>
                                    <td><strong>Portugues</strong></td>
                                    
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                         </tr>  
                         
                         <tr>
                                     <td>2</td>
                                    <td>Filosofia</td>
                                    
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                         </tr> 
                         <tr>
                                     <td>3</td>
                                    <td>Informatica</td>
                                    
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                         </tr> 
                         <tr>
                                     <td>4</td>
                                    <td>Matematica</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                                    <td>aguarda</td>
                         </tr> 
                                     
                                 

                                
                        </tbody>



                    </table>
                       <div>
                </div>
                <br>
             <br>

               



                    </table>
                       <div>
                </div>
            </div>
            <?php } ?>
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
            <h3>Techie</h3>
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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->

   <!-- Template Main JS File -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
 <script src="../Projecto Final-cassela&dilson/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>