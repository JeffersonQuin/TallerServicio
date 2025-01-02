<!DOCTYPE html>
<html>
<head>
    <title>Alfa Romeo | Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Syncopate:400,700" rel="stylesheet" type="text/css">

    <!-- Archivos de estilo -->
    <link rel="stylesheet" href="{{ asset('principal/css/libs.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('principal/css/styles.css') }}" media="screen">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('principal/img/Logotaller.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('principal/img/Logotaller.png') }}" type="image/x-icon"/>
</head>

  <body>
<div class="nav-menu">
  <div id="nav-menu-close" class="easing">
    X
  </div>
  <div class="scroll-pane">
    <input class="search-box" type="text" placeholder="                       Alfa Romero">
    <h5>Menú</h5>
    <ul class="main-menu">
      <li>
        <a href="#home">Inicio</a>
      </li>
      <li>
        <a href="#about-us">Sobre nosotros</a>
      </li>
      <li>
        <a href="#our-services">Servicios</a>
      </li>
      <li>
        <a href="#contact">Contacto</a>
      </li>
      <li>
        <a href="#pricing">Precios</a>
      </li>
      <li>
        <a href="#testimonials">Testimonios</a>
      </li>
      <li>
        <a href="#localize-us">Localízanos</a>
      </li>
    </ul>
    
  </div>
</div>

    <main class="body-inner">
    <header id="home">
    <!-- Nav Menu -->
    <div class="header-wrapper easing-fast">
        <div class="header-wrapper-inner">
            <div class="container">
                <div class="header-wrapper-row row-">
                    <div class="col-md-4">
                    <div class="logo" style="display: flex; align-items: center;">
                      <a href="{{ url('/') }}" style="text-decoration: none; display: flex; align-items: center;">
                      <img 
                         src="{{ asset('principal/img/Logotaller.png') }}" 
                         alt="Logo" 
                         style="width: 100px; height: auto; margin-right: 40px;"> <!-- Estilos en línea para la imagen -->
                         <div class="logo-letter" style="width: 800px; ">Taller</div>
                      </a>
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="pull-right">
                            <div class="nav-menu-open-wrapper">
                                <a id="nav-menu-open" href="#" class="img-thumbnail easing">
                                    <div class="icon icon-arrows icon-arrows-hamburger-2"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-section">
        <div class="header-section-overlay"></div>
        <div class="header-section-container">
            <div class="header-section-inner">
                <div class="container">
                    <h2 class="header-section-heading">
                        <span>
                            Alfa <span>Romero</span>
                        </span>
                    </h2>
                    <h3 class="header-section-subheading">El mejor cuidado para tu auto en la ciudad</h3>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                          <a class="header-section-button" href="{{ route('login') }}">
                          Iniciar sesión
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>

      <!-- Icon Box Section -->
      <section class="fullwidth-section welcome-section">
    <div class="section-inner">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="section-title"><span>Bienvenido a Alfa Romero </span></h2>
                <h4 class="section-subtitle">Tu taller de confianza para el cuidado de tu vehículo. Ofrecemos servicios de mantenimiento y reparación de alta calidad.</h4>
                <a href="#about-us" class="btn-ghost-rev">
                    Conoce más
                </a>
            </div>

            <div class="divider"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-wrapper img-circle center-block wow fadeInUp" data-wow-duration="2s">
                            <i class="icon-basic icon-basic-star color"></i>
                        </div>
                        <h4 class="heading">El Mejor Servicio en la Ciudad</h4>
                        <p>En Alfa Romero, ofrecemos el mejor cuidado para tu auto, utilizando tecnología avanzada y profesionales capacitados para garantizar un servicio de calidad.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-wrapper img-circle center-block wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                            <i class="icon-ecommerce icon-ecommerce-graph2 color"></i>
                        </div>
                        <h4 class="heading">Altamente Experimentados</h4>
                        <p>Contamos con más de 10 años de experiencia en el sector automotriz, brindando un servicio confiable y eficiente para la reparación y mantenimiento de tu vehículo.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-wrapper img-circle center-block wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                            <i class="icon-basic icon-basic-target color"></i>
                        </div>
                        <h4 class="heading">Alta Eficiencia</h4>
                        <p>Nos enfocamos en brindar un servicio rápido y efectivo sin comprometer la calidad. Tu auto estará listo en el menor tiempo posible.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box">
                        <div class="icon-wrapper img-circle center-block wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
                            <i class="icon-ecommerce icon-ecommerce-banknote color"></i>
                        </div>
                        <h4 class="heading">Precios Razonables</h4>
                        <p>Ofrecemos precios competitivos y accesibles para todos los servicios, asegurando que recibas la mejor relación calidad-precio en el mercado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      
<!-- Sección Acerca de Nosotros -->
<section class="fullwidth-section gray-section" id="about-us">
  <div class="section-inner">
    <div class="container">
      <div class="section-title-wrapper">
        <h2 class="section-title"><span>Acerca de nosotros</span></h2>
        <h4 class="section-subtitle">Esto es quienes somos</h4>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3 class="txt-light">¡Somos <span class="color ultra-bold">Taller Mecánico Alfa Romero!</span></h3>
          <p>En nuestro taller, nos especializamos en brindar servicios de reparación de vehículos con la más alta calidad y confianza. Con años de experiencia, ofrecemos un servicio profesional en mantenimiento preventivo y correctivo para autos de diversas marcas y modelos. Nuestro equipo de mecánicos expertos se asegura de que tu vehículo esté en las mejores manos, brindando soluciones rápidas y eficaces.</p>
          <h3 class="txt-light wow fadeInLeft"><span class="ultra-bold">Más de 10</span> años de experiencia</h3>
          <h3 class="txt-light wow fadeInLeft" data-wow-delay="0.5s"><span class="ultra-bold">Más de 2000</span> vehículos reparados</h3>
          <h3 class="txt-light wow fadeInLeft" data-wow-delay="1s"><span class="ultra-bold">1000+</span> clientes satisfechos</h3>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('principal/img/garage-769792_1280.jpg') }}" alt="Taller Mecánico">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="fullwidth-section" id="our-services">
  <div class="section-inner">
    <div class="container">
      <div class="section-title-wrapper">
        <h2 class="section-title"><span>Servicios</span></h2>
        <h4 class="section-subtitle">Esto es lo que podemos hacer por ti</h4>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Cambio de Aceite</h4>
                    <div class="service-divider"></div>
                    <p>Sustitución del aceite del motor utilizando diferentes tipos de aceites adecuados para cada vehículo.</p>
                  </div>
                </div>
              </div>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB6B1faFhEZnbw0R1uzajNccPuvSm-y1oJHA&s" alt="Cambio de Aceite" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn">1</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Engrasado de Partes</h4>
                    <div class="service-divider"></div>
                    <p>Lubricación de las partes móviles del vehículo para garantizar un funcionamiento suave y evitar desgaste prematuro.</p>
                  </div>
                </div>
              </div>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRie76hAQYyUuvZWs37DZrOnl78ZBrNO4TTUQMo5lLNBWezYfv7lJX0nU01Tjk1neEZpCU&usqp=CAU" alt="Engrasado de Partes" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="0.5s">2</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Cambio de Frenos</h4>
                    <div class="service-divider"></div>
                    <p>Reemplazo de las balatas de freno y ajuste del sistema de frenos para asegurar su rendimiento y seguridad.</p>
                  </div>
                </div>
              </div>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO4weO8gfYYR3sPN6hYvwCxo7UWjfPSmqHTA&s" alt="Cambio de Frenos" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="1s">3</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Revisión de Neumáticos</h4>
                    <div class="service-divider"></div>
                    <p>Inspección de los neumáticos y ajuste de la presión, así como el cambio de neumáticos desgastados.</p>
                  </div>
                </div>
              </div>
              <img src="https://autopos.es/wp-content/uploads/2024/04/revision-neumaticos-verano.jpg" alt="Revisión de Neumáticos" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="1.5s">4</div>
          </a>
        </div>
      </div>

      <div class="row services-row-padding">
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Lavado Exterior</h4>
                    <div class="service-divider"></div>
                    <p>Limpieza completa de la parte externa del vehículo, incluyendo carrocería, llantas y cristales.</p>
                  </div>
                </div>
              </div>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgAtJzlnIAVxBSsHpVZSm7uv_mR1f0SRFrhg&s" alt="Lavado Exterior" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn">5</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Aspirado Interior</h4>
                    <div class="service-divider"></div>
                    <p>Limpieza interior del vehículo, aspirando alfombrillas, asientos y otras superficies.</p>
                  </div>
                </div>
              </div>
              <img src="https://img.freepik.com/foto-gratis/hermoso-coche-servicio-limpieza-interior_23-2149212255.jpg" alt="Aspirado Interior" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="0.5s">6</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Fumigado Interior</h4>
                    <div class="service-divider"></div>
                    <p>Eliminación de malos olores y bacterias en el interior del vehículo.</p>
                  </div>
                </div>
              </div>
              <img src="https://megusta.do/storage/32000/14942/8038cd71c03e98c54d9e8cb748db6a50.jpg" alt="Fumigado Interior" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="1s">7</div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="service easing">
            <div class="service-inner">
              <div class="service-overlay easing">
                <div class="service-content-wrapper easing">
                  <div class="service-content">
                    <h4 class="service-heading">Encerado y Pulido</h4>
                    <div class="service-divider"></div>
                    <p>Aplicación de cera y pulido para restaurar el brillo y proteger la pintura de la carrocería.</p>
                  </div>
                </div>
              </div>
              <img src="https://static.wixstatic.com/media/e24a86_fa0c3091a22c4ee3b6b7b9f2830eabac~mv2.jpg/v1/fill/w_848,h_521,al_c,lg_1,q_85/e24a86_fa0c3091a22c4ee3b6b7b9f2830eabac~mv2.jpg" alt="Encerado y Pulido" width="350" height="260">
            </div>
            <div class="service-number wow zoomIn" data-wow-delay="1.5s">8</div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- Contact Section
      <section class="fullwidth-section" id="contact">
        <div class="section-inner">
          <div class="container">
            <div class="section-title-wrapper">
              <h2 class="section-title"><span>Contact</span></h2>
              <h4 class="section-subtitle">Don't hesitate to ask </h4>
            </div>
            <div class="contact">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" placeholder="First Name">
                </div>
                <div class="col-md-4">
                  <input type="text" placeholder="Last Name">
                </div>
                <div class="col-md-4">
                  <input type="text" placeholder="E-mail">
                </div>
              </div>
              <textarea placeholder="Message" rows="8"></textarea>
              <a href="#" class="btn-ghost pull-right">Send</a>
            </div>
          </div>
        </div>
      </section>-->

<!-- Pricing Section -->
<section class="fullwidth-section color-section" id="pricing">
  <div class="section-inner">
    <div class="container">
      <div class="section-title-wrapper">
        <h2 class="section-title"><span>Combos</span></h2>
        <h4 class="section-subtitle">Elige el combo que más te convenga</h4>
      </div>
      <div class="row pricing-table-padding">
        <!-- Combo Mecánico -->
        <div class="col-md-4">
          <div class="pricing-table wow fadeInLeft">
            <div class="title-wrapper">
              <h3 class="title">Combo Mecánico</h3>
            </div>
            <div class="price-wrapper">
              <h2 class="price">200 Bs</h2>
            </div>
            <div class="pricing-table-feature">Cambio de Aceite</div>
            <div class="pricing-table-feature">Engrasado de Partes</div>
            <div class="pricing-table-feature">Cambio de Frenos</div>
            <div class="pricing-table-feature">Revisión de Neumáticos</div>
            <a href="#">
              <div class="get-it">
                <h4 class="get-it-text">Obtener</h4>
              </div>
            </a>
          </div>
        </div>
        <!-- Combo Completo -->
        <div class="col-md-4">
          <div class="pricing-table featured wow fadeInUp">
            <div class="title-wrapper">
              <h3 class="title">Combo Completo</h3>
            </div>
            <div class="price-wrapper">
              <h2 class="price">250 Bs</h2>
            </div>
            <div class="pricing-table-feature">Cambio de Aceite</div>
            <div class="pricing-table-feature">Revisión de Neumáticos</div>
            <div class="pricing-table-feature">Lavado Exterior</div>
            <div class="pricing-table-feature">Encerado y Pulido</div>
            <a href="#">
              <div class="get-it">
                <h4 class="get-it-text">Obtener</h4>
              </div>
            </a>
          </div>
        </div>
        <!-- Combo Limpieza -->
        <div class="col-md-4">
          <div class="pricing-table wow fadeInRight">
            <div class="title-wrapper">
              <h3 class="title">Combo Limpieza</h3>
            </div>
            <div class="price-wrapper">
              <h2 class="price">100 Bs</h2>
            </div>
            <div class="pricing-table-feature">Lavado Exterior</div>
            <div class="pricing-table-feature">Aspirado Interior</div>
            <div class="pricing-table-feature">Fumigado Interior</div>
            <div class="pricing-table-feature">Encerado y Pulido</div>
            <a href="#">
              <div class="get-it">
                <h4 class="get-it-text">Obtener</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- Testimonials Section 
      <section class="fullwidth-section" id="testimonials">
        <div class="section-inner">
          <div class="container">
            <div class="section-title-wrapper">
              <h2 class="section-title"><span>Testimonials</span></h2>
              <h4 class="section-subtitle">This is what they say about us</h4>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="testimonial">
                  <h4>"Nullam scelerisque id quam a fermentum."</h4>
                  <div class="rating-wrapper">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="color bold">
                      - Alex Jefferson / Jaguar
                    </span>
                  </div>
                  <p>Morbi ac lectus malesuada, cursus justo non, iaculis lectus. Integer non purus vel nisl pellentesque mollis vitae porttitor dui. Vivamus posuere neque dolor, et vehicula lacus euismod ac.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial">
                  <h4>"Vivamus a nibh vitae felis rhoncus auctor."</h4>
                  <div class="rating-wrapper">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="color bold">
                      - John Doe / BMW
                    </span>
                  </div>
                  <p>Morbi ac lectus malesuada, cursus justo non, iaculis lectus. Integer non purus vel nisl pellentesque mollis vitae porttitor dui. Vivamus posuere neque dolor, et vehicula lacus euismod ac.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->

<!-- Sección de Ubicación -->
<section id="localize-us" class="fullwidth-section gray-section">
  <div class="section-inner no-padding-bottom">
    <div class="container">
      <div class="section-title-wrapper">
        <h2 class="section-title"><span>Ubicación</span></h2>
        <h4 class="section-subtitle">Aquí nos encontramos</h4>
      </div>
    </div>
    <!-- Google Maps Embed -->
    <div id="map_canvas" style="text-align: center;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.839844295352!2d144.9630577153214!3d-37.814107979751846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577c53e658d4a26!2sFederation+Square!5e0!3m2!1ses!2sau!4v1510912988955" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<footer>
  <div class="footer-widget-area">
    <div class="footer-widget-area-inner">
      <div class="container">
        <div class="row footer-row">
          <div class="col-md-4">
            <div class="media">
              <div class="pull-left">
                <div class="icon-basic icon-basic-smartphone footer-icon"></div>
              </div>
              <div class="media-body">
                <h3 class="widget-first-line">+591 702-123-456</h3>
                <h4 class="widget-second-line color">¿Tienes alguna pregunta?</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="footer-logo-social">
              <img class="footer-logo" src="img/logo.png" alt="Taller Alfa Romeo">
              <div class="social-icons-wrapper">
                <a href="#" class="social-icon img-circle">
                  <i class="fa fa-facebook fa-2x"></i>
                </a>
                <a href="#" class="social-icon img-circle">
                  <i class="fa fa-twitter fa-2x"></i>
                </a>
                <a href="#" class="social-icon img-circle">
                  <i class="fa fa-whatsapp fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="media-left">
                <div class="icon-basic icon-basic-geolocalize-01 footer-icon"></div>
              </div>
              <div class="media-body">
                <h3 class="widget-first-line">Oruro, Bolivia</h3>
                <h4 class="widget-second-line color">Avenida Tacna final Norte</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row">
          <div class="col-md-3">
            <h5 class="widget-title">Acerca de nosotros</h5>
            <p>El Taller "Alfa Romeo" ofrece servicios de mantenimiento automotriz con una atención personalizada para el cambio de aceite, engrasado, cambio de frenos, lavado, aspirado, fumigado, encerado y pulido. Nuestro equipo está compuesto por técnicos especializados que garantizan la calidad y eficiencia en cada servicio.</p>
          </div>
          <div class="col-md-3">
            <h5 class="widget-title">Servicios</h5>
            <ul class="list-widget">
              <li>Cambio de aceite</li>
              <li>Engrasado de partes</li>
              <li>Cambio de frenos</li>
              <li>Aspirado de interiores</li>
              <li>Lavado y fumigado</li>
              <li>Encerado y pulido</li>
              <li>Revisión de frenos y ajustes</li>
              <li>Reserva de servicios en línea</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="widget-title">Contacto</h5>
            <p>Oruro, Bolivia
              <br>Avenida Tacna final Norte</p>
            <p>Tel: +591 702-123-456</p>
            <p>E-mail: contacto@talleralfaromeo.com</p>
          </div>
          <div class="col-md-3">
            <h5 class="widget-title">Horario de atención</h5>
            <ul class="list-widget">
              <li>Lunes <span class="pull-right">8:00 am - 6:00 pm</span></li>
              <li>Martes <span class="pull-right">8:00 am - 6:00 pm</span></li>
              <li>Miércoles <span class="pull-right">8:00 am - 6:00 pm</span></li>
              <li>Jueves <span class="pull-right">8:00 am - 6:00 pm</span></li>
              <li>Viernes <span class="pull-right">8:00 am - 6:00 pm</span></li>
              <li>Sábado <span class="pull-right">8:00 am - 4:00 pm</span></li>
              <li>Domingo <span class="pull-right">Cerrado</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">
      &copy; 2025 <span class="color">Taller de Servicios Automotrices "Alfa Romeo"</span>. Todos los derechos reservados.
    </div>
  </div>
</footer>
    </main>

 

    <!-- Referenciar jQuery -->
<script src="{{ asset('principal/js/jquery-2.1.4.min.js') }}"></script>

<!-- Referenciar Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Referenciar tu archivo de scripts específico de mapas -->
<script src="{{ asset('principal/js/maps.js') }}" type="text/javascript"></script>

<!-- Referenciar los plugins -->
<script src="{{ asset('principal/js/plugins.js') }}" type="text/javascript"></script>

<!-- Referenciar el archivo principal de tu sitio -->
<script src="{{ asset('principal/js/main.js') }}" type="text/javascript"></script>
  </body>
</html>
