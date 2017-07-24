<?php 
/* Template Name: Soluciones Especializadas */
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
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandSoluciones.jpg">
    <div style="position: absolute; top:26%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconSoluciones.png" style="width: 130px;"><br><br>
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Soluciones Especializadas</h1>
            
    </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 70px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 20px;"> Nuestra nube de Ciudades Inteligentes, permite interconectar automáticamente perfiles sostenibles para productos, ciudadanos, empresa y municipios. <br></br> El uso de RFID, contadores inteligentes, y otros 50 tipos de sensores, que son capaces de realizar un seguimiento en tiempo real del consumo de energía, el agua, los residuos que se consumen y se produce en edificios, empresas, Campus universitarios, parques industriales, personas y ciudades, entre otros. </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/solucionesRight.png" style="padding: 30px 0">
            </center>
            </div>
        </div>  
</div>  
  
</div>

<div class="container-fluid" style="background: #F8F8F8;">  
<div class="container"> 
<div class="row" style="margin-bottom: 70px;">  
<div class="col-md-12">
<center>
<p style="font-size: 30px; margin-top: 70px; align-content: center;"  class="istok">Producto del mismo hemos integrado a nuestro portafolio<br> las siguientes soluciones:</p></center><br><br>
</div>
<div class="col-md-12">  <center>
<img src="<?php echo get_template_directory_uri() ?>/assets/img/solucionesContent1.png" class="img-responsive"></center>
</div>

<div class="col-md-12">
<<center>
<p style="font-size: 30px; margin-top: 70px; align-content: center;"  class="istok">Estás soluciones tienes los siguientes Beneficios</p></center>
<br><br>
<center> 
<img src="<?php echo get_template_directory_uri() ?>/assets/img/solucionesContent2.png" class="img-responsive"></center>
</div>

</div>  
</div>  
</div>  


<?php get_footer(); ?> 