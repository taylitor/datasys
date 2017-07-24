<?php 
/* Template Name: Ciudades Inteligentes*/
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
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandCiudades.jpg">
    <div style="position: absolute; top:26%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconCiudades.png" style="width: 150px;">
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Ciudades Inteligentes</h1>
            
    </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 70px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 20px;"> Nuestra nube de Ciudades Inteligentes, permite interconectar automáticamente perfiles sostenibles para productos, ciudadanos, empresa y municipios.<br><br> El uso de RFID, contadores inteligentes, y otros 50 tipos de sensores, que son capaces de realizar un seguimiento en tiempo real del consumo de energía, el agua, los residuos que se consumen y se produce en edificios, empresas, Campus universitarios, parques industriales, personas y ciudades, entre otros. </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ciudadesRight.png" style="padding: 30px 0;">
            </center>
            </div>
        </div>  
</div>  
  
</div>

<div class="container-fluid" style="background: #F8F8F8;">	
<div class="container">	
<div class="row" style="margin-bottom: 70px;padding: 70px;">	

<div class="col-md-3" style="padding:50px 0;">	
<img src="<?php echo get_template_directory_uri() ?>/assets/img/ciudades1.png" class="img-responsive">
</div>

<div class="col-md-3" style="padding:50px 0;">	
<img src="<?php echo get_template_directory_uri() ?>/assets/img/ciudades2.png" class="img-responsive">
</div>

<div class="col-md-3" style="padding:50px 0;">	
<img src="<?php echo get_template_directory_uri() ?>/assets/img/ciudades3.png" class="img-responsive">
</div>

<div class="col-md-3" style="padding:50px 0;">	
<img src="<?php echo get_template_directory_uri() ?>/assets/img/ciudades4.png" class="img-responsive">
</div>

</div>	
</div>	
</div>	


<?php get_footer(); ?> 