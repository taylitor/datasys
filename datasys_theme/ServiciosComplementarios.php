<?php 
/* Template Name: Servicios Complementarios*/
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
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandServicios.jpg">
    <div style="position: absolute; top:26%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconServicios.png" style="width: 130px;"><br><br>
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Servicios Complementarios</h1>
            
    </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 70px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 20px;"> Hoy las empresas e instituciones valoran contar con una serie de servicios relevantes por parte de Proveedores de Soluciones enfocados más al Modelo de Servicios. Lo anterior con el fin de optimizer más sus recursos claves y enfocarlos a labores mas asociados al "Core" de su negocio, por lo tanto se ve en la necesidad de externar una serie de servicios que si bien son operativos, su impacto puede ser relevante si son atendidos de la mejor manera y con el personal idóneo para la vadecuada gestión de la Plataforma de TI de las organizaciones. </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/serviciosRight.png" style="padding: 30px;">
            </center>
            </div>
        </div>  
</div>  
  
</div>

<div class="container-fluid" style="background: #F8F8F8;">  
<div class="container"> 
<div class="row" style="margin-bottom: 70px;">  
<div class="col-md-12">
<p style="font-size: 30px; margin-top: 70px;"  class="istok">Dentro de las mismas se encuentran: </p><br>
</div>
<div class="col-md-6">  
<img src="<?php echo get_template_directory_uri() ?>/assets/img/serviciosList1.png" class="img-responsive">
</div>

<div class="col-md-6">  
<img src="<?php echo get_template_directory_uri() ?>/assets/img/serviciosList2.png" class="img-responsive">
</div>

</div>  
</div>  
</div>  


<?php get_footer(); ?> 