 @extends('layouts.app1')

@section('content')

  <main id="main">


  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../assets/img/estrela1 (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Temos para o seu filho o melhor</h5>
        <p>Ter acesso ao seu aproveitamento, nunca foi tao fácil</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../assets/img/estrela2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Temos para o seu filho o melhor</h5>
        <p>Ter acesso ao seu aproveitamento, nunca foi tao fácil</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/img/estrela3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Temos para o seu filho o melhor</h5>
        <p>Ter acesso ao seu aproveitamento, nunca foi tao fácil</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   
    
  
        
    
       
       


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="../Projecto Final-cassela&dilson/assets/img/testimonials-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Diretor do Instituto Politecnico Estrela da Huila</h3>
           
            <ul>
              <li><i class="bi bi-check-circle"></i> Licenciado em Psicologia pela...</li>
              <li><i class="bi bi-check-circle"></i> 28 anos </li>
              <li><i class="bi bi-check-circle"></i>Pos graduacao em Matematica</li>
            </ul>
            <a href="#" class="read-more">Ler mais... <i class="bi bi-long-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nossos Cursos</h2>
          

        <div class="row">

          @foreach($cursos as $item)
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
             
              <ul>
               <img src="{{$item->imagem}}">
              </ul>
              <div class="btn-wrapp">
                <h5>{{$item->nome}}</h5>
                <a href="visualizar_curso/{{$item->id}}">Saber mais...</a>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Nosso Quadro de Honra</h2>
          
        <div class="row">
          

          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="../assets/img/user.png" class="img-fluid" alt="">
            <ul>
              <li><i class="bi bi-check-circle"></i>Nome: Domingos Cassela</li>
              <li><i class="bi bi-check-circle"></i>Idade:23 anos </li>
              <li><i class="bi bi-check-circle"></i>Curso:Ciencias Fisicas e Biologicas</li>
              <li><i class="bi bi-check-circle"></i>Media:18 Valores</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
           
            <img src="../assets/img/user.png" class="img-fluid" alt="">
            <ul>
              <li><i class="bi bi-check-circle"></i>Nome: Domingos Mateus</li>
              <li><i class="bi bi-check-circle"></i>Idade:24 anos </li>
              <li><i class="bi bi-check-circle"></i>Curso:Eletricidade</li>
              <li><i class="bi bi-check-circle"></i>Media: 19 Valores</li>
            </ul>
           
          </div>
        </div>

        </div>

      </div>
    </section>

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Entre em contato</h2>
       
        </div>

       

        <div class="row">

         

          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Teu email" required>
                </div>
              </div>
             
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Messagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar A Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
   

  </main><!-- End #main -->


 @endsection