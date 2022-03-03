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
     
      <!-- section --> 
<div class="About-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="aboutheading">
               <h3>Estrategias de reparto <span class="orange_color"> de complejidad</span></h3>
            </div>
         </div>
      </div>
   </div>
</div>

      <div class="section layout_padding">
         <div class="container">
           
            <div class="row">
               <div class="col-md-6">
                  <img src="images/PresentacionDistribuida.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Presentación distribuida</h4>
                     <p>Es una capa de presentacion que esta distribuida tanto con el cliente y como tambien con el servidor, de tal forma el cliente se modifica o dapta la presentacion que da el servidor. Tambien cabe mencionar que este tipo de sistema cuenta con un dificil o complejo mantenimiento.</p>
                  </div>
               </div>
            </div>
            <br>
            <div>
            </div>
            <div class="row ">
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Presentación remota</h4>
                     <p>Esta capa se ejecuta en el cliente totalmente. Dentro de esta se hacen las validaciones de los datos que entran, el formateo de los de salida, etc.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/Presentación remota.jpg" alt="#" />
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/Proceso distribuido.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Proceso distribuido </h4>
                     <p>En esta capa que es implementada por la lógica de negocio, esta dividida entre el cliente y el servidor y su acceso a la BD esta en el servidor y la capa de presentación en el cliente </p>
                  </div>
               </div>
               <h2><b>Acceso a datos remotos</b></h2>
                     <p>Es la posibilidad de entrar a los dispositivos u ordenadores a partir de alguna ubicación remota, Al tener este software instalado en algún ordenador o dispositivo se puede uno conectarse desde otro dispositivo en desde diferentes lugares
                     </p>
               <div class="col-md-6">
                  <img src="images/Base de datos distribuida.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h2>Base de datos distribuida</h2>
                     <p>La capa tanto de negocio como la de presentación son ejecutadas totalmente por el cliente, y la base de datos se encuentra distribuida con el cliente y el servidor. Para esto se necesita un mecanismo para que se asegure lo que es la coherencia de datos.</p>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Lógica de acceso</h4>
                        <p>Este es la línea principal de defensa para la gran mayoría de los sistemas, los cuales le permiten prevenir los ingresos de personas que no están autorizadas a esa información. Dentro del control de este acceso utiliza dos procesos los cuales son: la identificación y la autenticación.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="images/logica de acceso.jpg" alt="#" />
                  </div>
               </div>

               <div class="col-md-6">
                  <img src="images/Negocio a datos.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Negocio a datos</h4>
                     <p>Se dedican a la recopilación de datos de las personas y después venden estos datos a terceras empresas. Es un comercio de datos, una empresa que se dedica a recopilar datos personales de todo tipo para después venderlos a terceras empresas que puedan necesitarlos para sus propios fines.</p>
                  </div>
               </div>

                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Proceso de diseño de logica de acceso a datos</h4>
                        <p>
                           Esta capa de acceso a datos contiene la logica principal de acceso y persistencia de datos dentro de la aplicacion web.<br>
                           La capa tiene 2 tipos de fundamento de componentes<br>
                           •	Componentes de lógica de acceso a datos. Estos presentan una interfaz a la capa de negocio que abstrae de la forma en que se acceden a los datos almacenados, haciendo a la aplicación más fácil de configurar y mantener.
                           <br> •	Componentes utilitarios y auxiliares. Consisten en librerías especializadas o APIs que permiten acceder, manipular o transformar los datos dentro de los componentes de lógica de acceso a datos. Por lo general son suministrados por el fabricante del gestor de base de datos (Oracle, IBM, etc.)</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="images/Proceso de diseño de logica de acceso a datos.PNG" alt="#" />
                  </div>
                  <h3><b>Proceso de logica de acceso a datos</b>
                     <br>Cree un diseño general de su capa de acceso a datos</h3>
                      <p>1. Identifique los requerimientos de las fuentes de datos (data sources)
                     <br> 2.	Determine el enfoque de acceso a los datos
                     <br> 3.	Elija como mapear estructuras de datos a los resultados de las fuentes de datos (data sources)
                     <br> 4.	Determine como conectarse a las fuentes de datos
                     <br> 5.	Elija la estrategia para tratar errores de conexión con las fuentes de datos<br></p>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <h3>
                        <br>Diseñe sus componentes de acceso a datos</h3>
                     <p> 1. Enumere las fuentes de datos a las que va a acceder
                     <br>2. Decida el método de acceso para cada fuente de datos
                     <br>3. Determine que componentes auxiliares o librerías son necesarios para facilitar el acceso el acceso a los datos así como las tareas de desarrollo y mantenimiento
                     <br>4. Estudie si puede aplicar patrones de diseño en el acceso a los datos (Table Data Gateway, Query Object, Repository, etc.)
                     </p>
                  </div>
                  <div class="col-md-6">
                     <div class="full blog_cont">
                     </div>
                     <h3><b></b>
                        <br>Diseñe sus componentes auxiliares</h3>
                     <p> 1. Identifique que funcionalidades pueden moverse fuera de los componentes de acceso a datos y crear un componente auxiliar para su reutilización
                        <br>2. Busque librerías de componentes auxiliares disponibles
                        <br>3. Considere componentes auxiliares para solucionar problemas como conexiones, autenticación, monitorización o tratamiento de excepciones
                        <br>4. Considere añadir logging a sus componentes auxiliares
                        </p>
                  </div>
                  <h3><b>Consideraciones de diseño de la logica de acceso a datos</b></h3>
                      <p>1. Seleccione la tecnología adecuada de acceso a datos. La tecnología de acceso a datos depende del tipo y volumen de los datos que necesitamos. Determinadas tecnologías son mejores en determinados escenarios. 
                     <br>2. Utilice la abstracción para implementar componentes de acceso a datos débilmente acoplados al sistema de gestión de base de datos. Esto nos permite no solo desarrollar cómodamente y mantener nuestra capa de acceso a datos, sino incluso migrar todos los datos de un gestor a otro con el mínimo o ningún impacto en nuestra aplicación Web
                     <br>3. Considere la mapear los datos obtenidos en objetos o estructuras de datos que son más simples de procesar en la capa de negocio
                     <br>4. Encapsule todas las funcionalidades de acceso a bases de datos dentro de la capa de acceso a datos. Esta capa tiene que ocultar a la capa de negocio todo lo relacionado con conexiones, mapeos y transformaciones básicas de datos, generar consultas, etc.
                     <br>5. Decida como manejar las conexiones. Como regla, la capa de acceso a datos tiene que manejar todas las conexiones a todas las fuentes de datos requeridas por la aplicación.
                     <br>6. Determine como tratar las excepciones de datos. La capa de acceso a datos debe capturar todas las excepciones relacionadas con las fuentes de datos y las operaciones CRUD (Create, Read, Update & Delete, Crear, Leer, Actualizar y Borrar) relacionadas con la base de datos.
                     <br>7. Considere los riesgos de seguridad. La capa de acceso a datos debe de protegerse contra mecanismos de ataque que traten de borrar, corromper, alterar los datos o tomar control de la fuente de datos
                     <br>8. Reducir el tráfico de datos siempre que sea posible.
                     <br>9. Considere el desempeño y la escalabilidad de la base de datos. Estudie los límites de acceso a datos de su aplicación. Realice pruebas de estrés y pruebas de carga que permitan encontrar esos límites acorde a las capacidades del entorno de Producción de su instalación<br>
                  </p> 
                  <div> <br>
                  <h2><b>Lógica de presentación de datos </b></h2>
                     <p>
                        Es la que ve el usuario, también se la denomina "capa de usuario".
                        <br>-Presenta el sistema al usuario
                        <br>-Debe de Comunicar la información
                        <br>-Captura la información del usuario en un mínimo de proceso. (realiza un filtrado previo para comprobar que no hay errores de formato)
                        <br>-Debe tener la característica de ser "amigable",entendible y fácil de usar para el usuario  
                        <br>Esta capa se comunica únicamente con la capa de negocio.
                     </p>
                     <br>
                     <div class="col-md-6">
                        <img src="images/Lógica de presentación de datos.jpg" alt="#" />
                     </div>
                  </div>
                  <br>
                     <h2><b>Lógica de negocio </b></h2>
                        <p>
                           La lógica de negocio son rutinas que realiza entrada de datos, consultas, generación de informes. Esta capa esta presente, específicamente, wn todo el procesamiento que se realiza detrás del Backend, la aplicación visible para el usuario.
                        </p>
                        <div align="center" class="col-md-9">
                           <img src="images/Lógica de negocio.png" alt="#" />
                        </div>
               </div>
               <div class="row ">
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Proceso de desarrollo de logica de acceso a datos</h4>
                        <p>Puede utilizar aplicaciones de acceso a datos para manipular datos de orígenes externos para utilizarlos en el entorno de servicio de aplicaciones.
                           <br>Puede acceder a los datos de varias maneras:
                           <br>•utilizar API estándar o ampliadas
                           <br>•utilización de beans de persistencia gestionados por contenedor
                           <br>•utilización de beans de persistencia gestionados por bean, beans de sesión o componentes web.
                           <br>•utilizar objetos de datos de servicio (SDO)
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="images/Proceso de desarrollo de logica de acceso a datos.png" alt="#" />
                  </div>
               </div>
               <div class="row margin_top_30">
                  <div class="col-md-6">
                     <img src="images/logica de acceso a datos1.jpg" alt="#" />
                  </div>
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Procedimiento </h4>
                        <p>
                           <b>1.	Decida cómo implementar el acceso a los datos.</b>
                           <br>*El modelo de programación de EJB proporciona varios tipos de componentes del lado del servidor distintos: entidad, sesión y beans controlados por mensajes y servlets. De estos tipos, los beans de entidad se utilizan normalmente para modelar componentes de negocio en una aplicación. Los beans de entidad tienen estado y comportamiento.
                           <br>*El estado de los beans de entidad es persistente y se almacena en una base de datos. A medida que se realizan cambios en un bean de entidad, su estado se mantiene en sincronización con el registro de base de datos que representa el bean. Existen dos tipos de beans de entidad proporcionados por el modelo EJB y estos dos tipos difieren en el mecanismo utilizado para proporcionar persistencia. Estos dos tipos de beans de entidad son beans persistencia gestionada por contenedor (CMP) y beans persistencia gestionada por bean (BMP).
                        </p>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-md-6">
                        <div class="full blog_cont">
                           <p><b>2.	Busque un origen de datos o una fábrica de conexiones utilizando una referencia de recurso.</b>
                              <br>-	Para el acceso a bases de datos relacionales, los administradores configuran un proveedor JDBC y orígenes de datos asociados, que funcionan con el WebSphere Relational Resource Adapter incorporado.
                              <br>-	Para el acceso a bases de datos no relacionales, los administradores instalan un adaptador de recursos JCA ( Java Platform, Enterprise Edition) Connector Architecture (Java ) en un servidor de aplicaciones y configuran fábricas de conexiones asociadas.                              
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <img src="images/logica de acceso a datos2.jpg" alt="#" />
                     </div>
                  </div>
                  <div class="row margin_top_30">
                     <div class="col-md-6">
                        <img src="images/logica de acceso a datos3.png" alt="#" />
                     </div>
                     <div class="col-md-6">
                        <div class="full blog_cont">
                           <p>
                              <b>3.	Obtenga una conexión con un origen de datos o una fábrica de conexiones.</b>
                              <br>La arquitectura de gestión de conexiones para el acceso relacional y de procedimiento a los sistemas de información de empresa (EIS) se basa en la especificación JCA ( Java EE Connector Architecture). El Gestor de conexiones (CM), que agrupa y gestiona las conexiones dentro de un servidor de aplicaciones, es capaz de gestionar las conexiones obtenidas a través de los adaptadores de recursos (RAs) definidos por la especificación JCA y de los orígenes de datos definidos por la especificación de extensiones JDBC.</p>
                        </div>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <p><b>4. Utilice la identidad de hebra para asignar un propietario a la conexión. Consulte el tema Utilización de la identidad de hebra, soporte para obtener más información.                              
                        </p>
                     </div>
                  </div>
               </div>

               <div class="row ">
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <h4>Proceso lógica de negocio </h4>
                        <p>
                           La capa de negocio consta de la lógica del sistema: reglas de negocio, workflow de negocio, operaciones no persistentes. Todas las operaciones persistentes son delegadas a la capa de acceso de datos.
                           <br><b>Reglas de negocio</b>
                           <br>La capa de negocio debería ser vista como un conjunto de servicios expuestos a las capas de presentación de las aplicaciones. La idea es que todos los módulos que requieren una funcionalidad la encuentren en un solo lugar y con una sola versión, no hay réplica de funcionalidades en un formulario u otro lugar.
                           <br><b>Validaciones de los datos</b>
                           <br>Esta capa debe de garantizar que los datos requeridos para procesarla fueron debidamente validados, y solo si es exitosa la validación se puede iniciar el flujo del proceso de negocio. Para ello debe comprobarse la validez de los datos obtenidos desde la capa de presentación para preservar a la aplicación de ataques de código malintencionado.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="images/Proceso lógica de negocio1.jpg" alt="#" />
                  </div>
               </div>
               <div class="row margin_top_30">
                  <div class="col-md-6">
                     <img src="images/Tres_capas.png" alt="#" />
                  </div>
                  <div class="col-md-6">
                     <div class="full blog_cont">
                        <p>
                           <b>Comunicaciones entre capas. La entidad de negocio.</b>
                           <br>Es muy importante definir la estrategia de comunicación entre las capas. Se crean entidades que carecen de métodos, solo tienen propiedades, campos y posiblemente atributos, que nos pueden servir para almacenar la información como la asociación de las propiedades a las columnas de la base de datos. La comunicación entre capas se establece mediante objetos del modelo.
                           <br><b>Transacciones</b>
                           <br>El manejo de las transacciones debe de realizarse desde la capa de negocio, no desde la capa de acceso a datos. La capa de acceso a datos proporciona los datos pero las transacciones de los mismos se manejan desde la capa de negocio.
                           <br><b>Tratamiento de excepciones en la capa</b>
                           <br>Se debe de establecer un modelo de excepciones que se propague a la capa de presentación. Las excepciones son generadas desde la capa de acceso a datos y deben ser encapsuladas en esta capa para trasladarlas de forma correcta a la capa superio
                        </p>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-md-6">
                        <div class="full blog_cont">
                           <p>
                           <b>Encapsular la capa en servicios</b>
                           <br>Los servicios de negocio son el “puente” entre un usuario y los servicios de datos. Responden a peticiones del usuario (u otros servicios de negocio) para ejecutar una tarea de este tipo. Cumplen con esto aplicando procedimientos formales y reglas de negocio a los datos relevantes. Cuando los datos necesarios residen en un servidor de bases de datos, garantizan los servicios de datos indispensables para cumplir con la tarea de negocio o aplicar su regla. Esto aísla al usuario de la interacción directa con la base de datos.
                           <br><b>Control sobre el uso de servicios</b>
                           <br>El control de acceso al servicio de negocio debe hacerse en la capa de negocio, puesto que podemos tener distintas capas de presentación. El control se puede hacer a nivel de servicio vertical (cada fachada) o a nivel de método dentro de cada servicio.
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <img src="images/componente-logica-de-negocio2.png" alt="#" />
                     </div>
                  </div>
               </div>
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