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
               <h3>Arqui<span class="orange_color">tectura</span></h3>
            </div>
         </div>
      </div>
   </div>
</div>

      <div class="section layout_padding">
         <div class="container">
           
            <div class="row">
               <div class="col-md-6">
                  <img src="images/Arqui_cliSer.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3>La arquitectura Cliente - Servidor</h3>
                     <p>La arquitectura cliente/servidor persigue el objetivo de procesar la informaci??n de un modo distribuido. De esta forma, los usuarios finales pueden estar dispersos en un ??rea geogr??fica m??s o menos extensa (un edificio, una localidad, un pa??s, ???) y acceder a un conjunto com??n de recursos compartidos.
                        Adem??s, el acceso debe ser transparente (el cliente puede desconocer la ubicaci??n f??sica del recurso que pretende utilizar) y, preferiblemente, multiplataforma, es decir, independiente del sistema operativo, del software de aplicaci??n e incluso del hardware.
                        En definitiva, cuando hablamos de la implantaci??n de una arquitectura cliente/servidor, nos referimos a un sistema de informaci??n distribuido.</p>
                  </div>
               </div>
               <p>Adem??s de la transparencia y la independencia del hardware y del software, una implantaci??n cliente/servidor debe tener las siguientes caracter??sticas de una implantaci??n cliente/servidor deben ser:
                  <br>>Transparencia.
                  <br>>Independencia.
                  <br>>Protocolos asim??tricos.
                  <br>>Recursos compartidos.
                  <br>>Servicio.
                  <br>>Encapsulamiento.
                  <br>>Integridad.
                  <br>>Acoplamiento d??bil.
                  <br>>Escalabilidad.
               </p>
            </div>
            <br>
            <div>
            <p>Debe utilizar protocolos asim??tricos, donde el servidor se limita a escuchar, en espera de que un cliente inicie una solicitud.
               El servidor ofrecer?? recursos, tanto l??gicos como f??sicos a una cantidad variable y diversa de clientes (por ejemplo, espacio de almacenamiento, bases de datos, impresoras, etc.)  
               El servidor ofrecer?? tambi??n una serie de servicios, que ser??n usados por los clientes. Estos servicios estar??n encapsulados, para ocultar a los clientes los detalles de su implementaci??n (por ejemplo, aceptar el requerimiento de un cliente sobre una base de datos o formatear los datos obtenidos antes de transmitirlos al cliente).
               Se facilitar?? la integridad y el mantenimiento tanto de los datos como de los programas debido a que se encuentran centralizados en el servidor o servidores.
               Los sistemas estar??n d??bilmente acoplados, ya que interact??an mediante el env??o de mensajes. Se facilitar?? la escalabilidad, de manera que sea f??cil a??adir nuevos clientes a la infraestructura (escalabilidad horizontal) o aumentar la potencia del servidor o servidores, aumentando su n??mero o su capacidad de c??lculo (escalabilidad vertical)</p>
            <br>
            </div>

            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/SISTEMAS ARQUITECTURA cliente servidor.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Elementos de la arquitectura cliente/servidor.<br>El servidor</h4>
                     <p>Cuando hablamos de una forma gen??rica, si mencionamos a un servidor, nos referimos a un ordenador, normalmente con prestaciones elevadas, que ejecuta servicios para atender las demandas de diferentes clientes.
                        Sin embargo, bajo el punto de vista de la arquitectura cliente/servidor, un servidor es un proceso que ofrece el recurso (o recursos) que administra a los clientes que lo solicitan (consultar la definici??n de cliente m??s abajo).
                        En ocasiones, los servicios tambi??n reciben el nombre de demonios (daremos en ingl??s).
                        Se trata de una terminolog??a que proviene del mundo Unix/Linux.
                        Es muy frecuente que, para referirse a un proceso servidor, se utilice el t??rmino back-end.
                        Seg??n el tipo de servidor implantado, tendremos un tipo de arquitectura cliente/servidor diferente.
                        Por ??ltimo, mencionar que en algunas ocasiones, un servidor puede actuar, a su vez, como cliente de otro servidor.
                     </p>
                  </div>
               </div>
               <h3>El cliente</h3>
               <p>Igual que antes, al hablar de forma gen??rica sobre un cliente, nos referimos a un ordenador, normalmente con prestaciones ajustadas, que requiere los servicios de un equipo servidor.
                  Sin embargo, bajo el punto de vista de la arquitectura cliente/servidor, un cliente es un proceso que solicita los servicios de otro, normalmente a petici??n de un usuario.
                  En entornos cliente/servidor, suele utilizarse el t??rmino front-end para referirse a un proceso cliente.
                  Los mensajes quedan almacenados, permitiendo que el emisor o el receptor est??n inactivos por un tiempo. As??, las comunicaciones pueden ser persistentes y as??ncronas.
                  Este mecanismo se denomina Message-Oriented Middleware (MOM)
                  Normalmente, un proceso cliente se encarga de interactuar con el usuario, por lo que estar?? construido con alguna herramienta que permita implementar interfaces gr??ficas (GUI). Adem??s, se encargar?? de formular las solicitudes al servidor y recibir su respuesta, por lo que deber?? encargarse de una parte de la l??gica de la aplicaci??n y de realizar algunas validaciones de forma local.
               </p>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="images/Middleware.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>El Middleware</h4>
                     <p>Es la parte del software del sistema que se encarga del transporte de los mensajes entre el cliente y el servidor, por lo que se ejecuta en ambos lados de la estructura.
                        El middleware permite independizar a los clientes y a los servidores, sobre todo, gracias a los sistemas abiertos, que eliminan la necesidad de supeditarse a tecnolog??as propietarias.
                        Por lo tanto, el middleware facilita el desarrollo de aplicaciones, porque resuelve la parte del transporte de mensajes y facilita la interconexi??n de sistemas heterog??neos sin utilizar tecnolog??as propietarias.
                        Adem??s, ofrece m??s control sobre el negocio, debido a que permite obtener informaci??n desde diferentes or??genes (uniendo tecnolog??as y arquitecturas distintas) y ofrecerla de manera conjunta.
                        Podemos estructurar el middleware en tres niveles:
                     </p>
                  </div>
               </div>
               <h4><b>Niveles: </b></h4>
                     <p><br> ???El protocolo de transporte, que ser?? com??n para otras aplicaciones del sistema.
                        <br>???El sistema operativo de red
                        <br>???El protocolo del servicio, que ser?? espec??fico del tipo de sistema cliente/servidor que estemos considerando.
                     </p>
               <div class="col-md-6">
                  <img src="images/Evo2.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>El funcionamiento b??sico</h4>
                     <p>Aunque es probable que a estas alturas ya te hagas una idea sobre el funcionamiento general del modelo cliente/servidor, vamos a concretarlo a continuaci??n:
                        Lo primero que debe ocurrir es que se inicie el servidor. Esto ocurrir?? durante el arranque del sistema operativo o con la intervenci??n posterior del administrador del sistema. Cuando termine de iniciarse, esperar?? de forma pasiva las solicitudes de los clientes.
                        En alg??n momento, uno de los clientes conectados al sistema realizar?? una solicitud al servidor.
                        El servidor recibe la solicitud del cliente, realiza cualquier verificaci??n necesaria y, si todo es correcto, la procesa.
                        Cuando el servidor disponga del resultado solicitado, lo env??a al cliente.
                     </p>
                  </div>
               </div>
                     <p>Finalmente, el cliente recibe el resultado que solicit??. A continuaci??n realiza las comprobaciones oportunas (si son necesarias) y, si era ese el objetivo final, se lo muestra al usuario.
                        Si descomponemos este modo de funcionamiento en elementos estructurales, ser?? m??s f??cil comprender los conceptos implicados. De esta forma, podemos obtener una definici??n de la arquitectura por niveles, estructurada como sigue:
                        <br>???Un nivel de presentaci??n, que aglutina los elementos relativos al cliente.
                        <br>???Un nivel de aplicaci??n, compuesto por elementos relacionados con el servidor.
                        <br>???Un nivel de comunicaci??n, que est?? formado por los elementos que hacen posible la comunicaci??n entre el cliente y el servidor.
                        <br>???Un nivel de base de datos, formado por los elementos relacionados con el acceso a los datos.
                        
                     </p>
               <div class="col-md-6">
                  <img src="images/protocolos-de-comunicacion-1024x468.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Reconocer protocolos de comunicaci??n en red.</h4>
                     <p>Los utilizamos pr??cticamente todos los d??as, aunque la mayor??a de los usuarios no lo sepan, ni conozcan su funcionamiento.
                        La interconexi??n de sistemas o redes de computadoras son la base de las comunicaciones hoy en d??a y est??n dise??adas bajo m??ltiples protocolos de comunicaci??n. Por ejemplo, existen muchos protocolos al establecer una conexi??n a internet y seg??n el tipo que se necesite establecer, dichos protocolos van a variar. Adem??s, la comunicaci??n a internet no es el ??nico tipo de comunicaci??n cuando hablamos de transmisi??n de datos e intercambio de mensajes en redes. En todos los casos, los protocolos de red definen las caracter??sticas de la conexi??n.                      
                     </p>
                  </div>
               </div>
                     <p> Un protocolo es un conjunto de reglas: los protocolos de red son est??ndares y pol??ticas formales, conformados por restricciones, procedimientos y formatos que definen el intercambio de paquetes de informaci??n para lograr la comunicaci??n entre dos servidores o m??s dispositivos a trav??s de una red.                       
                        Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre s??, as?? como reglas de formato que especifican c??mo se forman los paquetes y los datos en los mensajes enviados y recibidos. Algunos protocolos admiten el reconocimiento de mensajes y la compresi??n de datos dise??ados para una comunicaci??n de red confiable de alto rendimiento.
                     </p>
                    
                     <div class="col-md-6">
                        <div class="full blog_cont">
                           <h4>Tipos de protocolos de red.</h4>
                           <p>Los protocolos para la transmisi??n de datos en internet m??s importantes son TCP (Protocolo de Control de Transmisi??n) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicaci??n asociados a internet son POP, SMTP y HTTP.
                              Estos los utilizamos pr??cticamente todos los d??as, aunque la mayor??a de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisi??n de datos desde nuestros dispositivos para navegar a trav??s de los sitios, enviar correos electr??nicos, escuchar m??sica online, etc.                                                    
                           </p>
                        </div>
                     </div>
                           <p> Existen varios tipos de protocolos de red:<br>
                              ??? Protocolos de comunicaci??n de red: protocolos de comunicaci??n de paquetes b??sicos como TCP / IP y HTTP.
                              <br>??? Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.
                              <br>??? Protocolos de gesti??n de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.
                              <br> Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior com??nmente se les denomina familia de protocolos.
                              El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red espec??ficas. Este Sistema de Interconexi??n Abierto tiene por objetivo establecer un contexto en el cual basar las arquitecturas de comunicaci??n entre diferentes sistemas.
                           </p>
               <div class="col-md-6">
                   <img src="images/protocolos de comunicaci??n en red.jpg" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                      <h4>A continuaci??n listamos algunos de los protocolos de red m??s conocidos, seg??n las capas del modelo OSI:</h4>
                     <p>Protocolos de la capa 1 - Capa f??sica <br>
                        ??? USB: Universal Serial Bus
                        <br>??? Ethernet: Ethernet physical layer
                        <br>??? DSL: Digital subscriber line
                        <br>??? Etherloop: Combinaci??n de Ethernet and DSL
                        <br>??? Infrared: Infrared radiation
                        <br>??? Frame Relay
                        <br>??? SDH: Jerarqu??a digital s??ncrona
                        <br>??? SONET: Red ??ptica sincronizada 
                        <br>Protocolos de la capa 2 - Enlace de datos
                        
                        <br>??? DCAP: Protocolo de acceso del cliente de la conmutaci??n de la transmisi??n de datos
                        <br>??? FDDI: Interfaz de distribuci??n de datos en fibra
                        <br>??? HDLC: Control de enlace de datos de alto nivel
                        <br>??? LAPD: Protocolo de acceso de enlace para los canales
                        <br>??? PPP: Protocolo punto a punto
                        <br>??? STP (Spanning Tree Protocol): protocolo del ??rbol esparcido
                        <br>??? VTP VLAN: trunking virtual protocol para LAN virtual
                        <br>??? MPLS: Conmutaci??n multiprotocolo de la etiqueta
                        
                        <br>Protocolos de la capa 3 - Red
                        
                        <br>??? ARP: Protocolo de resoluci??n de direcciones
                        <br>??? BGP: Protocolo de frontera de entrada
                        <br>??? ICMP: Protocolo de mensaje de control de Internet
                        <br>??? IPv4: Protocolo de internet versi??n 4
                        <br>??? IPv6: Protocolo de internet versi??n 6
                        <br>??? IPX: Red interna del intercambio del paquete
                        <br>??? OSPF: Abrir la trayectoria m??s corta primero
                        <br>??? RARP: Protocolo de resoluci??n de direcciones inverso                                                
                     </p>
                  </div>
               </div>
                     <p> <br>Protocolos de la capa 4 - Transporte
                        
                        <br>??? IL: Convertido originalmente como capa de transporte para 9P
                        <br>??? SPX: Intercambio ordenado del paquete
                        <br>??? SCTP: Protocolo de la transmisi??n del control de la corriente
                        <br>??? TCP: Protocolo del control de la transmisi??n
                        <br>??? UDP: Protocolo de datagramas de usuario
                        <br>??? iSCSI: Interfaz de sistema de computadora peque??a de Internet iSCSI
                        <br>??? DCCP: Protocolo de control de congesti??n de datagramas
                        
                        <br>Protocolos de la capa 5 - Sesi??n
                        
                        <br>??? NFS: Red de sistema de archivos
                        <br>??? SMB: Bloque del mensaje del servidor
                        <br>??? RPC: Llamada a procedimiento remoto
                        <br>??? SDP: Protocolo directo de sockets
                        <br>??? SMB: Bloque de mensajes del servidor
                        <br>??? SMPP: Mensaje corto punto a punto
                     
                        <br>Protocolos de la capa 6- Presentaci??n
                        
                        <br>??? TLS: Seguridad de la capa de transporte
                        <br>??? SSL: Capa de conexi??n segura
                        <br>??? XDR: Extenal data representation
                        <br>??? MIME: Multipurpose Internet Mail Extensions
                        
                        <br>Protocolos de la capa 7 - Aplicaci??n
                        
                        <br>??? DHCP: Protocolo de configuraci??n din??mica de host
                        <br>??? DNS: Domain Name System
                        <br>??? HTTP: Protocolo de transferencia de hipertexto
                        <br>??? HTTPS: Protocolo de transferencia de hipertexto seguro
                        <br>??? POP3: Protocolo de oficina de correo
                        <br>??? SMTP: protocolo de transferencia simple de correo
                        <br>??? Telnet: Protocolo de telecomunicaciones de red    
                     </p>
                     <div class="col-md-6">
                        <img src="images/protocolos de comunicaci??n en red2.jpg" alt="#" />
                     </div>
               <div class="col-md-6">
                  <img src="images/Evo3.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Clasificar los sistemas de informaci??n de acuerdo a su arquitectura.</h4>
                     <p>Existen diferentes tipos de arquitecturas de sistemas cuya estructura var??a en funci??n de las necesidades de las empresas y del momento hist??rico en el que se introdujeron. Vamos a describir de forma esquem??tica las visiones l??gica y f??sica de las mismas.
                        <br> <h4>Niveles l??gicos</h4> Con independencia de la implementaci??n f??sica, se puede realizar una subdivisi??n l??gica de los sistemas de informaci??n en tres niveles:
                        <br>-Interfaz de usuario: nivel de presentaci??n donde reside la l??gica de presentaci??n e interacci??n con el usuario.
                        <br>-La l??gica de negocio: donde residen las reglas de negocio y validaci??n. Es el n??cleo funcional de la aplicaci??n.
                        <br>-El acceso a los datos: nivel encargado de la persistencia e integridad de la informaci??n en el sistema.
                     </p>
                  </div>
                </div>
                     <p><b> Sistemas monol??ticos/centralizados</b><br>
                        Su implementaci??n f??sica consiste en disponer de un gran ordenador central (mainframe) que sirve a cientos o miles de usuarios conectados al mismo a trav??s de una pantalla ???tonta??? (dumb terminal) que se utiliza para entrar o actualizar datos y acceder a informaci??n en el mainframe. Tanto la interfaz de usuario como las reglas de negocio y los datos residen en la misma m??quina. Se produce, en consecuencia, un acoplamiento de niveles. IBM populariz?? en los setenta este tipo de arquitectura para satisfacer las necesidades de procesamiento grandes corporaciones. Sin embargo, en la actualidad muy pocas organizaciones utilizan exclusivamente este tipo arquitectura basada en un ??nico ordenador central.
                     </p>
                     <p><b>Arquitectura cliente/servidor</b><br>
                        A partir de mediados de los ochenta se fue extendiendo el uso de terminales ???inteligentes??? en forma de PC de sobremesa o port??tiles que, adem??s de teclado y pantalla, incorporan elevadas capacidades de proceso y almacenaje, de modo que los usuarios pueden procesar informaci??n localmente, de forma descentralizada y aut??noma respecto al mainframe u ordenador central. Comienzan a implementarse numerosas redes locales, departamentales y corporativas. En esta arquitectura tanto interfaz de usuario, basada en Windows, como la l??gica de negocio de las aplicaciones reside en las m??quinas ???cliente???. Los datos residen en el servidor y son compartidos por todas las estaciones cliente.
                     </p>
                     <p><b>Arquitectura distribuida</b><br>
                        A mediados de los noventa con el uso generalizado de Internet surge la arquitectura distribuida. Se establece una divisi??n entre los distintos niveles l??gicos, necesaria para soportar las nuevas arquitecturas Internet. Implementaci??n de dicha separaci??n se consigue con la incorporaci??n de un nuevo tipo de servidor: el servidor de aplicaciones. La l??gica de negocio, que en la arquitectura cliente/servidor resid??a en el PC, es ejecutada ahora en los servidores de aplicaciones.
                        <br>En la arquitectura distribuida cada nivel l??gico dispone de un tipo de servidor f??sico especializado:
                        <br>Interfaz de usuario -> Servidor web
                        <br>La l??gica de negocio -> Servidor de aplicaciones
                        <br>Acceso a los datos -> Servidor de base de datos
                        <br>El desarrollo de esta arquitectura ha sido un facilitador para el desarrollo de Internet y llegado hasta nuestros d??as. La computaci??n en la nube es su ??ltimo exponente.
                     </p>
                     <div class="col-md-6">
                        <img src="images/Clasificar sistemas de informacion segun su arqutectura.png" alt="#" />
                     </div>
                     <div class="col-md-6">
                        <div class="full blog_cont">
                           <h4>Proceso de diagramaci??n de componentes de la arquitectura Cliente/Servidor.</h4>
                           <h5>Componentes</h5>
                           <p>Para entender este modelo vamos a nombrar y definir a continuaci??n algunos conceptos b??sicos que lo conforman
                              <br>??? Red: Una red es un conjunto de clientes, servidores y base de datos unidos de una manera f??sica o no f??sica en el que existen protocolos de transmisi??n de informaci??n establecidos.
                              <br>??? Cliente: El concepto de cliente hace referencia a un demandante de servicios, este cliente puede ser un ordenador como tambi??n una aplicaci??n de inform??tica, la cual requiere informaci??n proveniente de la red para funcionar.
                              <br>??? Servidor: Un servidor hace referencia a un proveedor de servicios, este servidor a su vez puede ser un ordenador o una aplicaci??n inform??tica la cual env??a informaci??n a los dem??s agentes de la red.
                              <br>??? Protocolo: Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de informaci??n en una red estructurada.
                              <br>??? Servicios: Un servicio es un conjunto de informaci??n que busca responder las necesidades de un cliente, donde esta informaci??n pueden ser mail, m??sica, mensajes simples entre software, videos, etc.
                           </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="images/proceso de diagramaci??n de componentes de la arquitectura Cliente Servidor.jpg" alt="#" />
                     </div>
                           <p><b> Caracteristicas del Modelo Cliente/Servidor<br>En el modelo CLIENTE/SERVIDOR podemos encontrar las siguientes caracter??sticas:</b><br>
                              1. El Cliente y el Servidor pueden actuar como una sola entidad y tambi??n pueden actuar como entidades separadas, realizando actividades o tareas independientes.
                           </p>
                           <p>
                              2. Las funciones de Cliente y Servidor pueden estar en plataformas separadas, o en la misma plataforma. Para ver el gr??fico seleccione la opci??n "Descargar" del men?? superior
                           </p>
                           <p>
                              3. Un servidor da servicio a m??ltiples clientes en forma concurrente.
                              <br>4. Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los Clientes o de los Servidores, ya sean por actualizaci??n o por reemplazo tecnol??gico, se realizan de una manera transparente para el usuario final.
                              <br>5. La interrelaci??n entre el hardware y el software est??n basados en una infraestructura poderosa, de tal forma que el acceso a los recursos de la red no muestra la complejidad de los diferentes tipos de formatos de datos y de los protocolos.
                              <br>6. Un sistema de servidores realiza m??ltiples funciones al mismo tiempo que presenta una imagen de un solo sistema a las estaciones Clientes. Esto se logra combinando los recursos de c??mputo que se encuentran f??sicamente separados en un solo sistema l??gico, proporcionando de esta manera el servicio m??s efectivo para el usuario final. Tambi??n es importante hacer notar que las funciones Cliente/Servidor pueden ser din??micas. Ejemplo, un servidor puede convertirse en cliente cuando realiza la solicitud de servicios a otras plataformas dentro de la red. Su capacidad para permitir integrar los equipos ya existentes en una organizaci??n, dentro de una arquitectura inform??tica descentralizada y heterog??nea.
                              <br>7. Adem??s se constituye como el nexo de uni??n m??s adecuado para reconciliar los sistemas de informaci??n basados en mainframes o minicomputadores, con aquellos otros sustentados en entornos inform??ticos peque??os y estaciones de trabajo.
                              <br>8. Designa un modelo de construcci??n de sistemas inform??ticos de car??cter distribuido.
                           </p>
                           
               <div class="col-md-6">
                  <img src="images/componentes del modelo Cliente Servidor.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Componentes del modelo Cliente/Servidor</h4>
                     <p>En esta aproximaci??n, y con el objetivo de definir y delimitar el modelo de referencia de una arquitectura Cliente/Servidor, se identifican cinco componentes que permitan articular dicha arquitectura, considerando que toda aplicaci??n de un sistema de informaci??n est?? caracterizada por lo siguiente:
                     </p>
                     <h4>Presentaci??n/Captaci??n de la informaci??n.</h4>
                     <p>La captaci??n es el efecto de captar, del lat??n ???capio???, que significa capturar. Por lo tanto la captaci??n importa capturar, tomar algo ajeno para hacerlo propio o simplemente para conocerlo, estudiarlo, cuidarnos de sus efectos, etc??tera, ya sean cosas materiales, im??genes o ideas</p>
                  </div>
               </div>
               <h4>Procesos</h4>
                     <p>Procesamiento o conjunto de operaciones a que se somete una cosa para elaborarla o transformarla.</p>
               <h4>Almacenamiento de la informaci??n</h4>
                     <p> Un dispositivo de almacenamiento de datos es un conjunto de componentes electr??nicos habilitados para leer o grabar datos en el soporte de almacenamiento de datos de forma temporal o permanente</p>
               <h4>Puestos de trabajo</h4>
                  <p>Actividad o actividades concretas que el trabajador desarrolla en la empresa y por las que percibe un determinado sueldo o salario.</p>
               <h4>Comunicaciones</h4>
                  <p>Es la acci??n consciente de intercambiar informaci??n entre dos o m??s participantes con el fin de transmitir o recibir informaci??n u opiniones distintas.</p>
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