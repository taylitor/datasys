<?php 
/* Template Name: Datacenters Posts*/
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
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/heroBandDatacenters.jpg">
    <div style="position: absolute; top:20%; left: 10%;">   
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/iconDatacenters.png" style="width: 150px;">
            <h1 class="istok-b" style="color: white; font-size: 60px;"> Datacenters</h1>
            
    </div>
</div>

<div class="container-fluid" style="background: white;">   
<div class="container"> 
        <div class="row" >   
            <div class="col-md-8" style="padding: 85px;">
              <div> 
                    <div style="background: #FFB001; width: 70px; height: 5px;"> </div><br>
                    <p class="istok" style="font-size: 18px;">  Bajo esta solucion se ofrecen una serie de herramientas que le permiten a las empresas desarrollar centros de datos especializados para potenciar el desarrollo de su negocio. </p>
              </div>

            </div>
            <div class="col-md-4">
            <center>    
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/DATACENTER_Right.jpg" style="padding: 30px;">
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
<img src="<?php echo get_template_directory_uri() ?>/assets/img/datacenterList1.png" class="img-responsive">
</div>

<div class="col-md-6">	
<img src="<?php echo get_template_directory_uri() ?>/assets/img/datacenterList2.png" class="img-responsive">
</div>

</div>	
</div>	
</div>	


<?php get_footer(); ?> 