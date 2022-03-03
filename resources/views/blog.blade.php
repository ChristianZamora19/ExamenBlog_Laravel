<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blog Cliente/Servidor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                           <li>
                                 <a href="{{route('index')}}">Home</a>
                              </li>
                              <li>
                                 <a href="{{route('about')}}">Introducción</a>
                              </li>
                              <li>
                                 <a href="{{route('marketing')}}">Unidad 1</a>
                              </li>
                              <li class="active">
                                 <a href="{{route('blog')}}">Unidad 2</a>
                              </li>
                              <li>
                                 <a href="{{route('contact')}}">Contact us</a>
                              </li>
                              
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="Marketing-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="Marketingheading">
               <h3>Unidad 2: Modelo Cliente/Servidor</h3>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- section --> 
      <div class="section layout_padding dark_bg">
         <div class="container">
            
            <div class="row">
               <div class="col-md-6">
                  <img src="images/marketing_img.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font">Estrategias de reparto de complejidad</h3>
                     <h5>Arquitectura cliente/servidor</h5>
                     <h4 class="white_font">Presentación distribuida</h4>
                     <p class="white_font">Es una capa de presentacion que esta distribuida tanto con el cliente y como tambien con el servidor, de tal forma el cliente se modifica o dapta la presentacion que da el servidor. Tambien cabe mencionar que este tipo de sistema cuenta con un dificil o complejo mantenimiento. </p>
                  </div>
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('U2_Estrategias')}}">Leer mas</a>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </div>
      <!-- end section -->

       <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            
            <div class="row">
            <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3>Modelos Multinivel</h3>
                     <h5> Arquitectura Multinivel</h5>
                     <p> Es una forma de programar en donde el objetivo es separar la, lógica de negocios,de la lógica de diseño.</p>
                  </div>
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('Multinivel')}}">Leer mas</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/modelos multinivel.gif" alt="#" />
               </div>
               
            </div>
         </div>
      </div>
      <!-- end section -->
      
       <!-- section --> 
       <div class="section layout_padding dark_bg">
         <div class="container">
            
            <div class="row">
               <div class="col-md-6">
                  <img src="images/Modelo Vista Controlador.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3 class="white_font">Modelo Vista Controlador</h3>
                     <h5>MVC</h5>
                     <p class="white_font">Es un Patron dentro del diseño de software que es utilizado regularmente para realizar las interfaces del usuario, los datos y tambien la logica de control.</p>
                  </div>
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('MVC')}}">Leer mas</a>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </div>
      <!-- end section -->

       <!-- section --> 
       <div class="section layout_padding">
         <div class="container">
            
            <div class="row">
            <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3>Sockets</h3>
                     <p>Es el sistema de comunicacion entre ordenadores, por ejemplo lo que es un telefono es el sistema de comunicacion entre personas: el punto de comunicacion entre 2 personas en el cual se emite o recibe informacion
                     </p>
                  </div>
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('Sockets')}}">Leer mas</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/sockets0.png" alt="#" />
               </div>
               
            </div>
         </div>
      </div>
      <!-- end section -->

     

      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <a href="#"><img src="images/footer_logo.png" alt="#" /></a>
                  <ul class="contact_information">
                     <li><span><img src="images/location_icon.png" alt="#" /></span><span class="text_cont">London 145<br>United Kingdom</span></li>
                     <li><span><img src="images/phone_icon.png" alt="#" /></span><span class="text_cont">987 654 3210<br>987 654 3210</span></li>
                     <li><span><img src="images/mail_icon.png" alt="#" /></span><span class="text_cont">demo@gmail.com<br>support@gmail.com</span></li>
                  </ul>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6">
                  <div class="footer_links">
                     <h3>Quick link</h3>
                     <ul>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Instagram</h3>
                     <ol>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                        <li><img class="img-responsive" src="images/footer_blog.png" alt="#" /></li>
                     </ol>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="footer_links">
                     <h3>Contact us</h3>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" name="name" placeholder="Your Name" required="" />
                           </div>
                           <div class="field">
                              <input type="email" name="email" placeholder="Email" required="" />
                           </div>
                           <div class="field">
                              <input type="text" name="subject" placeholder="Subject" required="" />
                           </div>
                           <div class="field">
                              <textarea placeholder="Message"></textarea>
                           </div>
                           <div class="field">
                              <div class="center">
                                 <button class="reply_bt">Send</button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>