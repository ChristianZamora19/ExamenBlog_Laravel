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
                                 <a href="{{route('about')}}">Introducci??n</a>
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
     
      <!-- section --> 
<div class="About-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aboutheading">
               <h3>Modelo vis<span class="orange_color">ta Controlador</span></h3>
            </div>
         </div>
      </div>
   </div>
</div>

      <div class="section layout_padding">
         <div class="container">
           
            <div class="row">
               <div class="col-md-6">
                  <img src="images/Modelo Vista Controlador2.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Modelo, control y vista, en las arquitecturas Cliente/Servidor. </h4>
                     <p>
                        <b>Modelo</b>
                        <br>???	El Modelo que contiene una representaci??n de los datos que maneja el sistema, su l??gica de negocio, y sus mecanismos de persistencia
                        <br><b>Vista</b>
                        <br>???	La Vista, o interfaz de usuario, que compone la informaci??n que se env??a al cliente y los mecanismos interacci??n con ??ste.
                     </p>
                  </div>
               </div>
            </div>
            <br>
            <div>
            <h4>Controlador</h4>
            <p>
               ???	El Controlador, que act??a como intermediario entre el Modelo y la Vista, gestionando el flujo de informaci??n entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.
            </p>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/Modelo Vista Controlador4.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Modelo Vista Controlador (MVC) en las arquitecturas Cliente/Servidor. </h4>
                     <p>
                        Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicaci??n, la interfaz de usuario, y la l??gica de control en tres componentes distintos.
                     <br>Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los a??os en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo.
                     </p>
                  </div>
               </div>
               <h4><b>El patr??n MVC se basa en la divisi??n de responsabilidades</b></h4>

            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/Modelo Vista Controlador3.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <p>
                        En este patr??n existen tres responsabilidades. La primera de ellas es la responsabilidad del Modelo que se encarga la mayor parte de la l??gica de negocio y comunicaci??n con las bases de datos. En segundo lugar, tenemos la Vista que se encarga de mostrar la informaci??n del modelo y por ??ltimo el Controlador que comunica la informaci??n entre ambas partes.
                     <br>MVC era inicialmente un patr??n arquitectural, un modelo o gu??a que expresa c??mo organizar y estructurar los componentes de un sistema software, sus responsabilidades y las relaciones existentes entre cada uno de ellos.
                     </p>
                  </div>
               </div>
            <p>
               <b>El modelo es el responsable de:</b>
            <br>???	Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.
            <br>???	Define las reglas de negocio (la funcionalidad del sistema).
            <br>???	Lleva un registro de las vistas y controladores del sistema.
            <br>???	Si estamos ante un modelo activo, notificar?? a las vistas los cambios que en los datos pueda producir un agente externo.
         <br>
            <b>El controlador es responsable de:</b>
            <br>???Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
            <br>???	Contiene reglas de gesti??n de eventos, del tipo "SI Evento Z, entonces Acci??n W". Estas acciones pueden suponer peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al m??todo "Actualizar ()". Una petici??n al modelo puede ser "Obtener_tiempo_de_entrega (nueva_orden_de_venta )". 
         <br>
            <b>Las vistas son responsables de:</b>
            <br>???	Recibir datos del modelo y los muestra al usuario.
            <br>???	Tienen un registro de su controlador asociado (normalmente porque adem??s lo instancia).
            <br>???	Pueden dar el servicio de "Actualizaci??n ()", para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes).
            </p>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Proceso de flujo de control a partir del MVC</h4>
                     <p>
                        1.	El usuario interact??a con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un bot??n, enlace, etc.)
                     <br>2. El controlador recibe (por parte de los objetos de la interfaz-vista) la notificaci??n de la acci??n solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a trav??s de un gestor de eventos (handler) o callback.
                     <br>3. El controlador accede al modelo, actualiz??ndolo, posiblemente modific??ndolo de forma adecuada a la acci??n solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos est??n a menudo estructurados usando un patr??n de comando que encapsula las acciones y simplifica su extensi??n.
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/Proceso MVC.png" alt="#" />
               </div>
               <p>
                  <br>4. El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, produce un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podr??a utilizar el patr??n Observador para proveer cierta indirecci??n entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun as?? el modelo en s?? mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio (el modelo) a la vista aunque puede dar la orden a la vista para que se actualice. Nota: En algunas implementaciones la vista no tiene acceso directo al modelo, dejando que el controlador env??e los datos del modelo a la vista.
                  <br>5. La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.
               </p>
               <div class="col-md-6">
                  <img src="images/Desarrollo MVC.jpg" alt="#" />
               </div>

               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Desarrollo de software a partir del MVC</h4>
                     <h5>Arquitectura de aplicaciones MVC</h5>
                     <p>
                        Diagrama de la colaboran de las distintas capas que componen la arquitectura de desarrollo de software en el patr??n MVC.
                     <br>Representado con flechas los modos de colaboraci??n entre los distintos elementos que formar??an una aplicaci??n MVC, junto con el usuario. Los controladores con su l??gica de negocio, hacen de puente entre los modelos y las vistas. Los modelos pueden enviar datos a las vistas. 
                     </p>
                  </div>
               </div>
               
               </div>
               <p>
                  <br>Paso a paso c??mo ser??a el flujo de trabajo caracter??stico en un esquema MVC.
                  <br>1. El usuario realiza una solicitud a nuestro sitio web. Generalmente estar?? desencadenada por acceder a una p??gina de nuestro sitio. Esa solicitud le llega al controlador.
                  <br>2. El controlador comunica tanto con modelos como con vistas. A los modelos les solicita datos o les manda realizar actualizaciones de los datos. A las vistas les solicita la salida correspondiente, una vez se hayan realizado las operaciones pertinentes seg??n la l??gica del negocio.
                  <br>3. Para producir la salida, en ocasiones las vistas pueden solicitar m??s informaci??n a los modelos. En ocasiones, el controlador ser?? el responsable de solicitar todos los datos a los modelos y de enviarlos a las vistas, haciendo de puente entre unos y otros. Ser??a corriente tanto una cosa como la otra, todo depende de nuestra implementaci??n; por eso esa flecha la hemos coloreado de otro color.
                  <br>4. Las vistas env??an al usuario la salida. Aunque en ocasiones esa salida puede ir de vuelta al controlador y ser??a ??ste el que hace el env??o al cliente, por eso he puesto la flecha en otro color.

               </p>
               <div class="col-md-6">
                  <img src="images/Modelo Vista Controlador 0.jpg" alt="#" />
               </div>
              
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>??Como funciona una aplicaci??n MVC?</h4>
                     <p>
                        <b>*Captura de la petici??n en el controlador</b>
                     <br>La aplicaci??n recibe peticiones que son centralizadas en el Controlador. ??ste es el encargado de interpretar, a partir de la URL de la solicitud, el tipo de operaci??n que hay que realizar. Normalmente, esto se hace analizando el valor de alg??n par??metro que se env??a anexando a la URL de la petici??n y que se utiliza con esta finalidad.
                     </p>
                  </div>
               </div>

               <p>
                  <br><b>*Procesamiento de la petici??n</b>
                  <br>Una vez que el Controlador determine la operaci??n a realizar, procede a ejecutar las acciones pertinentes, invocando para ello a los diferentes m??todos expuestos por el Modelo.
                  <br><b>*Generaci??n de respuestas</b>
                  <br>Los resultados devueltos por el Modelo al Controlador son depositados por ??ste en una variable de petici??n, sesi??n o aplicaci??n, seg??n el alcance que deban tener.
               </p>
               <div class="col-md-6">
                  <img src="images/Modelo-Vista-Controlador.jpg" alt="#" />
               </div>
            </div>
            
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('blog')}}">Regresar</a>
                  </div>
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
                  <p>Copyright ?? 2019 Design by <a href="https://html.design/">Free Html Templates</a></p>
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