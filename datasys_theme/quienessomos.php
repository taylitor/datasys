<?php get_header(); ?>
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'marca-pais') !== false) {
    $size = '8';
    $visible = 'hide';
} else {
    $size = '4';
    $visible = 'vista';
}

if (strpos($url,'quienes-somos') !== false) {
    $size = '8';
    $visible = 'hide';
    $visible_nosotros = 'vista';
    $fluid = '-fluid';
    $usBg = 'somosground pFull100';
} else {
    $size = '4';
    $visible = 'vista';
    $visible_nosotros = 'hide';
}
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
            <!-- Top Navigation -->
            <!-- Top content -->
            <!-- Top content --> 
            <!-- nosotros -->
            <style>
                body{
                    background: black !important;
                }
            </style>
          <div class="container-fluid"> 
                <div class="row sectionHeight" style="background: #F9F9F9;">   
                        <div class="col-md-6">
                            <div class="col-md-11 col-md-offset-1">  
                            <div style="margin-left: 20px;"> 
                                <h1 class="title-section mTop20 istok-b text-red let-sp-0" style=" text-align:left; margin-top:55px; font-size: 45px !important;"> <?php the_title(); ?></h1>
                                <div style="margin-top: 30px; font-size: 14px;" class="istok"><?php the_field('centro'); ?> </div>
                            </div>
                            </div>

                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                        <img src="<?php echo the_field('left_bottom_imagen'); ?>" style="width: 100%;" class="imgRightHe hidden-sm hidden-xs">
                        </div>                    
                </div> 
                <div class="row" style="padding:20px 0; background: white;" >
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon1.png"> </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon2.png"> </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon3.png"> </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon4.png"> </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon5.png"> </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/QSicon6.png"> </div>

                </div> 
          </div>
            <div class="col-xs-12 Pad0 bg-gray-2 scrollme img-fondo-QS" >
                <div class="col-xs-12 text-center mTop50 animateme" style="z-index: 1;" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                   <div class="container" style="margin-top:40px; margin-bottom: 80px;">  
                        <div class="dist">  
                                <div class="col-md-6"> 
                                    <div style="padding: 25px; background: white;">   
                                             <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconMision.png" style="float: left;">
                                            <h1 class="title-section istok-b text-red mTop20" style="text-align: left;"> &nbsp;Misión</h1><br>
                                            <p class="istok" style="text-align: left;">Somos una empresa líder que ofrece las mejores soluciones tecnológicas al mercado costarricense mediante una constante innovación, flexibilidad y un alto compromiso con nuestros colaboradores, clientes y socios.</p>
                                    </div>   
                                </div>
                          <div class="col-md-6"> 
                                    <div style="padding: 25px; background: white;">   
                                             <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconVision.png" style="float: left;">
                                            <h1 class="title-section istok-b text-red mTop20" style="text-align: left;"> &nbsp;Visión</h1><br>
                                            <p class="istok" style="text-align: left;"> Ser el líder de integración de soluciones tecnológicas para el mercado regional bajo modelos de negocio innovadores para el 2020.<br><br></p>
                                    </div>   
                                </div>
                        </div>  
                   </div>   
                </div>
            </div> 

     <div class="col-xs-12 Pad0 scrollme" style="background: #fff;">
                    <div class="col-xs-12 text-center mTop100 mBot35 animateme" style="z-index: 1;" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                      <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                           <div style="max-width: 585px; margin: 0 auto;"> Certificaciones</div>
                        </h1>
                        <h1 class=" istok-b let-sp-0" style="font-size: 20px;">En  aras de generar valor  a  nuestros clientes nos hemos certificado en:</h1>
                    </div>
                    <div class="col-xs-12 text-center mTop50 container mBot50 animateme" style="z-index: 1;" data-from="0.75" data-to="0" data-opacity="0" data-translatex="400">
                        <div class="container" style="z-index: 1;">
                            <div id="owl-carousel-services" class="owl-carousel owl-theme" style="">
    <?php  
    $args = array(
    'post_type' => 'aliados',
//'orderby' => 'name',
//'order' => 'ASC',
'posts_per_page'    => -1
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>
                            <div class="item" style="min-height: 100px; max-width: 180px; margin: 0 auto;">
                                <div class="col-xs-12 Pad10 text-white item-content" style="">
                                    <img class="image" src="<?php echo the_field('imagen') ?>" alt="" style="width: 100%; height: auto;">
                                </div>
                            </div>
<?php 
}
}
wp_reset_postdata();
?>
<?php endwhile; endif; ?>

                        </div>
                    </div>
                </div>      
                </div> 

                <div class="container-fluid">   
                        <div class="row" style="background: #F7F7F7;">   
                                <div class="col-md-6" style=" margin-bottom: 70px;">
                                        <div class="col-md-9 col-md-offset-3">  
                                            <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                                            <div style="margin-top: 70px; text-align: left;"> Próximas <br>certificaciones</div>
                                            </h1><br>
                                             <h1 class=" istok let-sp-0" style="font-size: 18px;     line-height: 22px">Derivado de la dinámica del mercado, nos encontramos en un proceso de adoptacion de nuevas certificaciones como:</h1>
                                        </div>
                                              
                                 </div>
                                <div class="col-md-6"> 
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logosQS.png" style="width:50%; margin: 120px 30px 20px 100px;">
                                  </div>
                        </div>  
                </div>
                <div class="container-fluid">   
                        <div class="row" style="background: #fff;">   
                                <div class="col-md-6" style=" margin-bottom: 70px;">
                                        <div class="col-md-9 col-md-offset-3">  
                                            <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                                            <div style="margin-top: 70px; text-align: left;"> Marca País  </div>
                                            </h1><br>
                                             <h1 class=" istok let-sp-0" style="font-size: 15px;     line-height: 22px">Como una empresa de origen y capital 100% costarricense, en aras de expandir nuestro territorio a toda Centroamerica, nuestro principal objetivo es demostrar que cumplimos con los 5 principios de Esencial Costa Rica: Excelencia, Innovación, Progreso Social, Sostenibilidad y Origen Costarricense.</h1>
                                        </div>
                                              
                                 </div>
                                <div class="col-md-6"> 
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/EsencialLogo.png" style="width:50%; margin: 120px 30px 20px 100px;">
                                  </div>
                        </div>  
                </div>
                <div class="container-fluid"> 
                    <div class="row" style="background: white;">   
                        <div class="col-md-12"> 
                                <center style="margin: 30px 0;">    
                                        <h3 class="text-center istok-it" style="font-size: 26px;">
                                        <center>    
                                        <div style="max-width: 700px;">   
                                        Para Datasys ser Esencial Costa Rica es sinónimo de competitividad, mejora continua, coraje y orgullo de ser parte de la marca País.<br>
                                        </div>
                                        </center>
                                        </h3>
                                        <div style="margin-top:10px;background: #FDB000; width: 45px; height: 5px;">   

                                        </div>
                                </center>
                          </div>
                    </div>  
                </div>  
                <div class="container-fluid" style="background: #F7F6FB;">   
                        <div class="container" style="padding: 83px;"> 
                        <div style="margin-left: 20px;">
                                 <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                                  
                                            <div style="margin-top: 70px; text-align: left;" class="istok">Políticas de Calidad</div>
                                            </h1><br>
                                            
                                             <p class=" istok let-sp-0" style="font-size: 18px;     line-height: 22px">En Datasys somos expertos en la integracion de soluciones tecnologicas, la intermediacion de equipos y en cableado estructurado; mediante servicios de alta calidad, que satisfagan las necesidades y expectativas de nuestros clientes  en el tiempo oportuno.</p> 
                                     
                                             <br>
                                             <p class=" istok let-sp-0" style="font-size: 18px;     line-height: 22px">Para ello nos empeñamos en:</p>
                                             </div> <br> 
                                             <div class="col-md-6">  
                                                    <div style="padding: 25px; background: white;">   
                                                              <div style="margin-top:10px;background: #FDB000; width: 25px; height: 5px;">    </div><br>
                                                                    <p class="istok" style="font-size: 15px;">Mejorar continuamente la eficacia de nuestro Sistema de Gestión de Calidad, basado en la Norma ISO 9001:2008, a través de la  estandarización, control y medición de los  procesos, el desarrollo de las competencias de los colaboradores, la participación de todos los niveles y las alianzas estratégicas desarrolladas con proveedores lideres.</p>
                                                               
                                                    </div>
                                             </div> 
                                              <div class="col-md-6"> 
                                                    <div style="padding: 25px; background: white;">   
                                                              <div style="margin-top:10px;background: #FDB000; width: 25px; height: 5px;">   </div><br>
                                                                    <p class="istok" style="font-size: 15px;">Estar actualizados en nuevas tecnologías con el fin de que nuestros clientes utilicen productos innovadores.</p>
                                                            
                                                    </div>
                                               </div>
                        </div>  
                </div>  
                <div class="container-fluid" style="background: white; margin-bottom: -100px !important;">   
                        <div class="row">   
                                <div class="col-md-12">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logos.jpg" class="img-responsive">
                                </div>
                        </div>  
                </div>  
                <div class="container-fluid">   
                        <div class="row" style=" max-height: 87vh;">   
                                <div class="col-md-7" style="padding-left: 100px; background: #F7F7F7;">  
                                 <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                                            <div style="margin-top: 110px; margin-left: 20px; text-align: left;"> Objetivos de Calidad  </div>
                                 </h1>
                                 <p class="istok" style="font-size: 18px; margin-left: 20px;">
                                     Desarrollar negocios con la mejor rentabilidad
                                 </p>
                                    <div style="background: white; margin: 10px 20px; padding: 20px;    border-left: 6px solid #FFB100;">
                                        <p class="istok">Revisar trimestralmente el desempeño de los procesos del Sistema de Gestión de la Calidad. Al menos 8 procesos logran mejorar sus indicadores de eficacia.</p>
                                    </div>
                                        <div style="background: white; margin: 10px 20px; padding: 20px;    border-left: 6px solid #FFB100;">
                                        <p class="istok">Actualizar y/o certificar continuamente a la organización en las tecnologías de los proveedores que representamos asegurado con el plan de certificación anual.</p>
                                    </div>
                                        <div style="background: white; margin: 10px 20px; padding: 20px;    border-left: 6px solid #FFB100;">
                                        <p class="istok">Mantener la satisfaccion promedio trimestral de los clientes en un margen de 90% en adelante.</p>
                                    </div>
                                        <div style="background: white; margin: 10px 20px; padding: 20px;    border-left: 6px solid #FFB100; margin-bottom: 100px;">
                                        <p class="istok">Cumplir en un 90% con el cronograma de capacitaciones de los colaboradores.</p>
                                    </div>
                                </div>
                                <div class="col-md-5" style="padding-left: 0px; padding-right: 0 !important;">   
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/quienesDownRight.jpg" style="height: 99vh; width: 100%;" class="hidden-sm hidden-xs">
                                </div>
                        </div>          
                </div>  

            <!-- nosotros -->
            
        </div>
 
<?php get_footer(); ?> 



