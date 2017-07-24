<?php 
/* Template Name: Comunicaciones Corporativas Posts*/
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
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandComunicaciones.jpg">
    <div style="position: absolute; top:26%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconComunicaciones.png" style="width: 150px;">
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Comunicaciones Corporativas</h1>
            
    </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 50px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 20px;"> Hoy la interrelacion de diferentes actores o agentes relevantes para una organizacion, requieren el uso eficiente y efectivo de diferentes herramientas colaborativas, que permitan aumentar la competitividad y la productividad de las empresas u organizaciones, para lo cual nuestro objetivo a traves de este portafolio es diseñar las mejores soluciones para cada institucion o empresa con estas necesidades. </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ComunicacionesBigIcon.png" style="padding: 30px 0;" class="img-responsive">
            </center>
            </div>
        </div>  
</div>  
  
</div>

<div class="container-fluid" style="background: #F8F8F8;">	
<div class="container">	
<div class="row" style="margin-bottom: 70px;">	
<div class="col-md-12">
<p style="font-size: 30px; margin-top: 70px; text-align: center;"  class="istok">Dentro de las herramientas que están disponibles<br> dentro del diseño de la solución: </p><br><br>
</div>
<div class="col-md-12">	
<center>
<img src="<?php echo get_template_directory_uri() ?>/assets/img/ComunicaContent.png" class="img-responsive">
</center>
</div>
</div>	
</div>	
</div>	


<?php get_footer(); ?> 