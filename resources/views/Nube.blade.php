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
                              <li class="active">
                                 <a href="{{route('marketing')}}">Unidad 1</a>
                              </li>
                              <li>
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
               <h3>Conceptos de <span class="orange_color">la Nube</span></h3>
            </div>
         </div>
      </div>
   </div>
</div>

      <div class="section layout_padding">
         <div class="container">
           
            <div class="row">
               <div class="col-md-6">
                  <img src="images/c??mputo en la nube.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                  <h3>Computaci??n en la Nube</h3>
                     <p>La computaci??n en la nube, conocida tambi??n como servicios en la nube, inform??tica en la nube, nube de c??mputo o simplemente ??la nube??, es el uso de una red de servidores remotos conectados a internet para almacenar, administrar y procesar datos, servidores, bases de datos, redes y software</p>
                  </div>
               </div>
            </div>
            <br>
            <div>
            <h3>Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</h3>
            <p>IAAS (Infrastructure as a Service) es un servicio inform??tico en la nube que da acceso a una infraestructura de TI altamente flexible a trav??s de Internet. El alojamiento, la administraci??n y el mantenimiento del hardware que la sustenta recaen completamente en manos del proveedor del servicio. El modelo t??pico de facturaci??n de las ofertas de IaaS sigue el principio pay per use por el que los abonados solo pagan por lo que usan.
               Cuando nos referimos a IaaS, estamos hablando de infraestructuras como servicio. Las empresas contratan la infraestructura de hardware a un tercero a cambio de una cuota o alquiler. La contrataci??n de este hardware permite elegir la capacidad de proceso (procesadores), la memoria a utilizar (memoria RAM) y el espacio de almacenamiento (disco duro).</p>
            <br>
            <h3>La plataforma como servicio o PAAS</h3>
            <p>Es un conjunto de servicios basados en la nube que permite a los desarrolladores y usuarios empresariales crear aplicaciones a una velocidad que las soluciones en las instalaciones no pueden alcanzar.
               El servicio PAAS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de datos, middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc.
               Este tipo de servicios es el ideal para los desarrolladores que s??lo quieran centrarse en la implementaci??n y administraci??n de sus aplicaciones. Al no tener que preocuparse por los recursos de hardware y software (sistemas operativo), mejoran su eficacia, centr??ndose s??lo en la parte que les interesa.</p>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/modelos de c??mputo en la nube.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>El software como servicio (SAAS) </h4>
                     <p>Es un modelo de entrega de software basado en la nube en el que el proveedor de la nube desarrolla y mantiene el software de las aplicaciones en la nube, proporciona actualizaciones autom??ticas del mismo y lo pone a disposici??n de sus clientes a trav??s de Internet con un sistema de pago por uso. El proveedor de la nube p??blica administra todo el hardware y el software tradicional, incluidos middleware, software de aplicaciones y seguridad.
                        Este modelo de software como infraestructura, aloja el software de la empresa, as?? como sus datos, en servidores externos a la misma, y paga una cuota por su utilizaci??n. Cualquier empleado de una empresa podr?? acceder desde cualquier lugara las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la nube estamos hablando de SaaS.
                        Con un SaaS la preocupaci??n de la empresa ser?? s??lo c??mo utilizar los programas de software necesarios para su funcionamiento, olvid??ndose del resto de recursos. El hardware requerido, sistemas operativos, aplicaciones, etc. son provistas por el proveedor del servicio que, adem??s, se encarga de mantenerlas funcionando correctamente y actualizadas.</p>
                  </div>
               </div>
               <h3>Los modelos de c??mputo en la nube IAAS, PAAS, SAAS.<br>IAAS (Infrastructure as a Service)</h3>
               <p>IaaS es una soluci??n de cloud computing que consiste en proveer y gestionar recursos de computaci??n ???servidores, almacenamiento, redes y virtualizaci??n??? por Internet. La Infraestructura como Servicio proporciona a las empresas la tecnolog??a y la capacidad de los centros de datos de alto nivel sin realizar una inversi??n de capital considerable en equipamiento IT. Los clientes IaaS acceden a su infraestructura a trav??s de un panel de control o API, pero no tienen que gestionarla f??sicamente. La Infraestructura como Servicio ofrece un mayor nivel de control respecto a una soluci??n on-premises.
                  Este modelo de servicio cloud ofrece mucha flexibilidad a empresas, ya que pueden comprar recursos de computaci??n bajo demanda, en lugar de comprar su propio hardware. De este modo las empresas aumenta la eficiencia, la escalabilidad, la redundancia y la seguridad, al mismo tiempo que mantienen el control sobre su infraestructura. Asimismo, al externalizar su infraestructura, tambi??n delegan su instalaci??n, gesti??n y mantenimiento; como consecuencia, pueden ahorrar mucho dinero, tiempo y esfuerzos.
                  Al contrario que los modelos SaaS y PaaS, IaaS ofrece m??s control a los clientes, ya que estos siguen siendo los responsables de sus aplicaciones, datos, tiempo de ejecuci??n, middleware y sistema operativo. Adem??s, en lo que a seguridad se refiere, mientras que los proveedores de IaaS se encargan de asegurar que la infraestructura, almacenamiento y redes son completamente seguras, los clientes deben asumir la responsabilidad de otros aspectos como la gesti??n de accesos, la encriptaci??n o la protecci??n del tr??fico de red.
               <br>Uso
               <br>Desplegar aplicaciones web, operar un CRM, realizar an??lisis de Big Data, almacenar datos, backups o planes de Disaster Recovery, y mucho m??s.
               Lo m??s importante es elegir el proveedor de IaaS que mejor se adapte a las necesidades y estrategia de tu negocio. Nuestro art??culo sobre aspectos clave para elegir un proveedor cloud puede ser de utilidad.
               Algunos ejemplos de IaaS son Stackscale, AWS and VMware
               En Stackscale, ofrecemos IaaS con virtualizaci??n en modalidad de Cloud Privado e IaaS sin virtualizaci??n mediante servidores bare-metal.
            <br> <b>Principales ventajas del modelo IAAS</b>
            <br>Los negocios pueden mantener el control sobre su infraestructura.
            <br>Los recursos se pueden comprar bajo demanda, sin grandes inversiones en hardware.
            <br>Automatizaci??n y escalabilidad.
            
            <br><b>Principales preocupaciones en el modelo IAAS</b>
            <br>Las preocupaciones en un modelo IaaS var??an considerablemente dependiendo del tipo de cloud que se elija, ya que las empresas no disfrutan de los mismos beneficios con un cloud p??blico, privado o h??brido. Del mismo modo que las caracter??sticas var??an significativamente de un proveedor a otro. Mientras que la dependencia del proveedor y los problemas de rendimiento pueden ser una gran preocupaci??n en un cloud p??blico, la gesti??n y la interoperabilidad entre entornos es una de las principales preocupaciones en un entorno h??brido o multi-cloud.   
            </p>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/modelos de c??mputo en la nube1.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>PAAS (Platform as a Service)</h4>
                     <p>PaaS es un modelo de servicio en la nube que proporciona un entorno de desarrollo listo para usar, en el que los desarrolladores pueden centrarse en escribir y ejecutar c??digo de calidad para crear aplicaciones personalizadas.
                        La Plataforma como Servicio se distribuye a trav??s de la web y permite que los desarrolladores puedan construir aplicaciones escalables y altamente disponibles, sin preocuparse del sistema operativo, el almacenamiento o las actualizaciones. Proporciona un espacio de trabajo que los desarrolladores pueden usar para desarrollar, gestionar, distribuir y testear sus aplicaciones de software.
                        Este modelo de servicio cloud hace que el proceso de desarrollo y despliegue de aplicaciones sea mucho m??s simple, eficiente y competitivo. Varios usuarios pueden acceder a una plataforma PaaS a trav??s de la misma aplicaci??n de desarrollo. Esta plataforma integra servicios, motores de bases de datos y m??s, para ayudar a los desarrolladores con el desarrollo, testeo y despliegue de apps. Los servicios de plataforma en la nube permiten innovar m??s r??pido, pero los clientes de PaaS solo tienen control sobre lo que construyen en la plataforma. As?? que, si hay alg??n problema con el sistema operativo o el hardware de la plataforma, no tienen ning??n control sobre el impacto que pueda tener en el rendimiento de su software. Sin embargo, mantienen el control sobre otros aspectos como el anti-malware o el control de acceso.
                        Algunos ejemplos de PaaS son Heroku, Apache Stratos y OpenShift</p>
                  </div>
               </div>
                     <p><b>Principales ventajas del modelo PAAS</b>
                        <br>Desarrollo, prueba e implementaci??n de aplicaciones simples y rentables. Los desarrolladores pueden crear aplicaciones personalizadas escalables y de alta disponibilidad f??cilmente y con menos c??digo.
                        
                        <br><b>Principales preocupaciones en el modelo PAAS</b>
                        <br>Seguridad de los datos. Interoperabilidad y vendor lock-in o dependencia del proveedor. Integraciones y compatibilidad. Limitaciones operativas. Tiempo de ejecuci??n.
                     </p>
               <div class="col-md-6">
                  <img src="images/modelos de c??mputo en la nube2.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>SAAS (Software as a Service)</h4>
                     <p>SAAS consiste en distribuir aplicaciones en la nube a usuarios a trav??s de Internet. En este modelo de servicio cloud el software se aloja en l??nea y se pone a disposici??n de los clientes con un modelo de pago por suscripci??n o compra. Los proveedores de cloud SaaS alojan aplicaciones en su red y los usuarios pueden acceder a ellas mediante un buscador o una aplicaci??n, desde dispositivos diversos. El Software como Servicio tambi??n se conoce como servicios de aplicaciones cloud.
                        El proveedor es el responsable de desarrollar, mantener y actualizar el software. Del lado del usuario, usar productos SaaS es tan sencillo como iniciar sesi??n y empezar a usarlo en l??nea, sin instalar o alojar un software en local. De modo que el equipo t??cnico no necesita dedicar tiempo a descargar e instalar aplicaciones en los ordenadores de cada empleado. Sin embargo, los usuarios finales no tienen mucho control sobre ??l; lo cual puede ser un h??ndicap para algunos negocios. El Software como Servicio es el servicio de cloud computing m??s com??n.
                        Todos usamos alg??n producto SaaS en nuestro d??a a d??a. Muchas empresas utilizan el software en la nube para construir sus negocios, ya que es f??cil de desplegar, usar, gestionar y escalar. Adem??s, SaaS ha hecho que la colaboraci??n entre equipos sea incre??blemente m??s f??cil durante las ??ltimas d??cadas.
                        Algunos ejemplos de SaaS son Google Workspace, Dropbox y Salesforce.</p>
                  </div>
               </div>
                     <p><b>Principales ventajas del modelo SAAS</b>
                        <br>Permite ahorrar tiempo y dinero al delegar la instalaci??n, gesti??n y mejora de las aplicaciones de software
                        El equipo t??cnico puede dedicar su tiempo a tareas m??s valiosas y complejas.
                        Actualizaciones y mejoras de UX continuas.
                        
                        <br><b>Principales preocupaciones en el modelo SAAS</b>
                        <br>Seguridad de los datos. Personalizaci??n y caracter??sticas limitadas. Interoperabilidad y vendor lock-in. Soporte para integraciones. Rendimiento.
                     </p>
               <div class="col-md-6">
                  <img src="images/modelos de c??mputo en la nube3.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Ejemplos de IAAS, PAAS y SAAS<br>IAAS</h4>
                     <p>Stackscale,
                        Amazon Web Services,
                        Google Cloud,
                        VMware,
                        Microsoft Azure,
                        OVH,
                        Rackspace.
                     <br><b>PAAS</b>
                     <br>Heroku
                        Google App Engine
                        OpenShift
                        Apache Stratos
                        Flynn
                        Cloud Foundry
                     <br><b>SAAS</b>
                     <br>Acumbamail
                     Salesforce
                     Gmail
                     Google Drive
                     Dropbox
                     Slack
                  </p>
                  </div>
               </div>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{route('marketing')}}">Regresar</a>
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