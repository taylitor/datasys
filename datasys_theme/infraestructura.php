<?php 
/* Template Name: Infraestructura Posts*/
?>
<?php get_header(); ?>
<?php  
$args = array(
'post_type' => 'menu',
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>             

<?php 
}
}
wp_reset_postdata();
?>
<div class="container-fluid" style="padding: 0; margin:0;">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandInfrastructura.png">
    <div style="position: absolute; top:26%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconInfraestructura.png" style="width: 150px;">
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Infraestructura</h1>
            
    </div>
</div>
<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 70px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 20px;">   Nuestra Experiencia en el diseno de las soluciones de nuestros clientes, nos ha indicado la necesidad de brindar una solucion integral a traves de un solo proveedor, para lo cual hemos valorado lo relevante de incluir varios elementos base a la solucion a nivel de lo que se denomina "Infraestructura", para lo cual se incluye lo siguiente no solo aspectos de Cableado Estructurado TIA/EIA Uptime Institute, sino elementos tecnologicos de alto impacto como lo que se refiere a la seguridad Electronica, para la cual se detalla  con mayor ampliacion los mismos : </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/InfraestucturaBigIcon.png" style="padding: 30px;">
            </center>
            </div>
        </div>  
</div>  
  
</div>
<div class="container-fluid" style="background: #F8F8F8;">   

        <div class="container" style="margin-left: 0; margin:100px 10px;"> 
        <div class="row"> 
        <div class="col-md-10 col-md-offset-1">  
                <h1 class=" mTop20 istok-b text-red">Cableado Estructurado</h1><br>
                <center>    
                 <img src="<?php echo get_template_directory_uri() ?>/assets/img/cableadoEstructurado.png" style="width: 100%;" >
                 </center>
        </div>
        </div>
        </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-6" style="padding: 85px;">
              <div> 
                     <h1 class=" mTop20 istok-b text-red">Seguridad Electronica</h1>
                    <p class="istok" style="font-size: 18px;">   Nuestras Soluciones de seguridad de plataforma abierta se integran facilmente con sus sistemas y tecnologias, y nuestro sistema de gestion de video (VMS) funciona con camaras HD y analogicas. Nuestras camaras son compatibles con una amplia gama de plataformas VMS y nuestras soluciones de control de acceso admiten hardware de campo abierto de otros fabricantes lideres. </p>
              </div>

            </div>
            <div class="col-md-6">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/cameras.jpg">
            </center>
            </div>
        </div>  
</div>  
  
</div>

<div class="container-fluid" style="background: #F8F8F8;">   
<div class="container"> 
<div class="row">   
<div class="col-md-4 col-md-offset-1"> 
<img src="<?php echo get_template_directory_uri() ?>/assets/img/table1.jpg" style="width: 425px;     margin: 80px 0;">
  </div>
<div class="col-md-4"> 
<img src="<?php echo get_template_directory_uri() ?>/assets/img/table2.jpg" style="width: 425px; margin-left: 32px !important;     margin: 80px 0;">
  </div>
</div>  
</div>  
</div>  





<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-6" style="padding: 85px;">
              <div> 
                     <h1 class=" mTop20 istok-b text-red">Infraestructura <br> para Data Center</h1><br>
                     <p style="font-size: 19px;" class="istok-b">Gabinetes y Centros de datos Encapsulados</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;">Maximice la eficiencia del espacio y el comportamiento de su datacenter, utilizando la tecnologia de encapsulados que optimiza la instalacion y administracion de un Data Center mediante un sistema inteligente en filas que integra los gabinetes, potencia, enfriamiento, distribucion de potencia, contenimiento de pasillo, monitoreo y tecnologia de control de centros de datos.        </p>
              </div>

            </div>
            <div class="col-md-6">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/InfraDataCenter.jpg">
            </center>
            </div>
        </div>  
</div>  
  
</div>



<div class="container-fluid" style="background: #F8F8F8;">   
<div class="container"> 
        <div class="row" >   
                    <div class="col-md-6">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/seguridadyMonitoreo.png" style="margin:30px 0;">
            </center>
            </div>
            <div class="col-md-6" style="padding: 60px;">
              <div> 
                     
                     <p style="font-size: 19px;" class="istok-b">Seguridad y monitoreo ambiental</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;">Estos sistemas ofrecen monitoreo ambiental y de seguridad de alto rendimiento a traves de la red, realiza vigilancia y monitoreo por video para registrar la actividad humana. Brinda monitoreo de temperatura, humedad, contacto en las puertas, contacto seco, fugas puntuales, vibraciones, humo y audio de dos vias por medio de las herramientas.  </p>
              </div>

            </div>

        </div>  
</div>  
  
</div>






<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-6" style="padding: 85px;">
              <div> 
                     <p style="font-size: 19px;" class="istok-b">Enfriamiento</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;">Garantice la eficacia y el correcto desempeno de su data center controlando el estado de las variables ambientales de sus sistemas mas criticos, los sistemas de climatizacion de precision garantizan un verdadero control de cada parametro ambiental para posibilitar una gestion del calor eficiente, confiable y rentable de sus instalacione.       </p>
              </div>

            </div>
            <div class="col-md-6">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/enfriamiento.png">
            </center>
            </div>
        </div>  
</div>  
  
</div>


<div class="container-fluid" style="background: #F8F8F8; padding-left: 0;">   
<div class="container" style="padding-left: 0;"> 
        <div class="row" style="padding-left: 0;">   
                    <div class="col-md-6" style="padding-left: 0 !important;">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/distribuciondeEnergia.png" style="width:100% !important;">
            </center>
            </div>
            <div class="col-md-6" style="padding: 60px;">
              <div> 
                     
                     <p style="font-size: 19px;" class="istok-b">Distribucion de energia</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;">La distribucion de energia dentro de un datacenter es esencial para el correcto desempeno de sus sistemas de potencia, garantizar facilidad, eficiencia, control, monitoreo, versatilidad y alto rendimiento es la mision de los productos de APC con sus Racks PDU y PDU para gabines. </p>
              </div>

            </div>

        </div>  
</div>  
  
</div>



<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-6" style="padding: 85px;">
              <div> 
                     <h1 class=" mTop20 istok-b text-red">Calidad de energia <br> y respaldo</h1><br>
                     <p style="font-size: 19px;" class="istok-b">UPS'S</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;">Los equipos APC UPS On line brinda proteccion de energia online  de alta densidad y doble conversion real para servidores, redes de voz y datos, laboratorios medicos y aplicaciones de la industria ligera. Ofrecemos una amplia gama de sistemas de alimentacion ininterrumpida (UPS) desde soluciones para centro de datos o aplicaciones de mision critica.       </p>
              </div>

            </div>
            <div class="col-md-6">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/calidadEnergia.jpg">
            </center>
            </div>
        </div>  
</div>  
  
</div>




<div class="container-fluid" style="background: #F8F8F8; padding-left: 0;">   
<div class="container" style="padding-left: 0;"> 
        <div class="row" style="padding-left: 0;">   
                    <div class="col-md-6" style="padding-left: 0 !important;">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/generadores.jpg" style="width:100% !important;">
            </center>
            </div>
            <div class="col-md-6" style="padding: 60px;">
              <div> 
                     
                     <p style="font-size: 19px;" class="istok-b">Generadores</p>
                     <div style="width: 100px;height: 8px; background: #FFB001; margin-top: 5px;"></div><br>
                    <p class="istok" style="font-size: 18px;"> Ofrecemos soluciones para satisfacer sus necesidades en aplicacion de energia de emergencia o servicio primario, proporcionandole el respaldo ante la necesidad de energia cuando y donde lo necesite. Los sistemas de energia de AKSA le brindan energia ininterrumpida para operaciones esenciales, ayudandole a cumplir con las actividades de su vida cotidiana. </p>
              </div>

            </div>

        </div>  
</div>  
  
</div>












<?php get_footer(); ?> 