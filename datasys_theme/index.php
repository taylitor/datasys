<?php get_header(); ?>
            <div class="Pad0 col-xs-12 slider-main item100vh parallax" style="z-index: 1;">

                
                <div id="owl-carousel-main" class="owl-carousel owl-theme" style="">
<?php  
$args = array(
'post_type' => 'slider_home',
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
                    <div class="item item-100vh parallax" style="background-image: url('<?php the_field('back_image'); ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                        <div class="overlay">
                        <div class="info-container">
                            <div class="col-xs-12 Pad0 text-white item-content">
                                <div class="text-center istok let-sp-0 secondary" style="margin-top: 22%;">
                                <center>
                                <div style="max-width: 930px;">
                                    <?php echo the_field('1er_texto'); ?>
                                       </div>
                                       </center>
                                </div>
                                <div class="orange_line text-center mTop10" style="margin: 10px auto 0; "></div>
                                <div class="text-center istok-b let-sp-0 mTop20 principal" style="margin-top: 20px;">
                                    <?php echo the_field('2do_texto'); ?>
                                </div>
                                <div class="mTop35 col-xs-12 text-center" style="">
                                    <a href="<?php echo the_field('enlace'); ?>" class="bg-red btn-red text-white istok let-sp-0" style=" font-size: 27px;">Leer m&aacute;s +</a>
                                </div>
                                <a href="#scroll" class="scroll-indicator"><i class="fa fa-angle-down fa-4 grow scroll-indicator bounce" aria-hidden="true" style="color: #FFFFFF; font-size: 65px; margin-bottom: 50px; padding:50px;"></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
<?php 
}
}
wp_reset_postdata();
?> 
    
                    
                    
                </div>
            </div>
            <!-- Top content -->
            <!-- soluciones -->

            <div class="col-xs-12 Pad0 bg-white scrollme" id="scroll" style="z-index: 1;">
                <div class="col-xs-12 text-center mTop100 animateme" style="z-index: 1;" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                    <h1 class="upper istok-b text-gray-1 let-sp-0" style="font-size: 25px;font-weight: 600;margin-bottom: 10px; color:#3E3E3E;"><?php echo ot_get_option('soluciones') ?></h1>
                    <div>   <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="max-width: 500px;margin: 0 auto;">
                        <?php echo ot_get_option('2do_soluciones') ?>
                    </h1>
                    </div>
                </div>

                <div class="col-xs-12 text-center mTop35 container mBot35 services_section animateme" style="z-index: 1;" data-from="0.75" data-to="0" data-opacity="0" data-translatex="400">
<?php  
$args = array(
'post_type' => 'soluciones_home',
'orderby' => 'date',
'order' => 'ASC',
'posts_per_page'  => 6
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>



                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 services_item ">
                        <div class="serv_circle" style="margin-bottom: 25px;">
                            <img src="<?php echo the_field('icon') ?>" alt="" style="height: 85px;" class="grow">
                        </div>
                        <h3 class="grow links" style="margin-left: 10px;"><a class="serv_title istok-b mTop35 links" href="<?php echo the_field('enlace') ?>"><?php echo the_title() ?></a></h3>

                    <p class="serv_content istok">
                    <?php if ( have_rows('caracteristicas') ):

                        while ( have_rows('caracteristicas') ): the_row(); ?>

                            
                                <?php the_sub_field('caracteristica'); ?><br>
                            

                        <?php endwhile; ?>

                    <?php endif; ?>
                    </p>
                   </div> 
<?php 
}
}
wp_reset_postdata();
?>
     
                </div>
                <!--<div class="col-xs-12 text-center container mBot100 services_section" style="z-index: 1;">
                    <a href="<?php echo ot_get_option('enlace_soluciones') ?>" class="bg-red btn-red-flat text-white istok let-sp-0" style=" font-size: 30px;">Ver m&aacute;s +</a>
                </div>-->
            </div>
            <!-- soluciones -->
            <!-- servicios -->
            <div class="col-xs-12 Pad0 bg-gray-2 scrollme img-fondo">
                <div class="col-xs-12 text-center mTop50 animateme" style="z-index: 1;" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/xaas.png" alt class="upper istok-b text-gray-1 let-sp-0" style="margin: 0 auto; height: 110px;">
                    <h1 class="title-section mTop20 istok-b let-sp-0" style="font-size:50px;">
                        <?php echo ot_get_option('servicios_administrativos') ?>
                    </h1>
                </div>
                <div class="col-xs-12 Pad0 text-center mTop35 container services_tabs animateme" style="z-index: 1;" data-from="0.75" data-to="0" data-opacity="0" data-translatex="400">
                    <ul class="services_tabs_list nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#tab1" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('primer_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab2" id="tabClick" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('segundo_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab3" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('tercer_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab4" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('cuarto_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab5" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('quinto_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab6" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('sexto_title'); ?></a></li>
                        <li><a data-toggle="tab" href="#tab7" class="let-sp-0 istok-it-b text-white growIndex" style="font-size: 20px;"><?php echo ot_get_option('septimo_title'); ?></a></li>
                    </ul>
                    <div class="tab-content">
<?php  
$args = array(
'post_type' => 'admin_serv_sect',
'orderby' => 'date',
'order' => 'ASC',
'posts_per_page'    => 7
);
$query = new WP_Query($args);

$i = 0;
if ( $query->have_posts() ) {

while ( $query->have_posts() ) {
$query->the_post();
$i++;

?>


                        <div id="tab<?php echo $i ?>" class="tab-pane fade col-xs-12 Pad0" style="background:white;">
                            <div class="col-xs-12 col-sm-11 col-sm-offset-1 col-md-10 col-sm-offset-1 Pad0 row-eq-height">
                                <div class="col-xs-12 col-sm-8 Pad20 PadTop50 PadBot35" style="min-height: 200px; padding:40px 0px 50px 70px;">
                                    <h3 class="text-left text-blue istok-it-b " style="font-size: 25px;"><?php the_title(); ?></h3>
                                    <div class="text-left istok text-gray-1 mTop20" style="font-size: 20px; line-height: 22px;">
                                        <?php the_field('desc'); ?>
                                        <br>
                                        <a href="<?php the_field('link'); ?>" class="bg-red btn-red-flat text-white istok let-sp-0" style="margin: 0 auto; font-size: 24px; text-align: center;">Cont&aacute;ctenos</a>
                                    </div>
                                </div>
                             
                                    
                              
                            </div>
                        </div>
<?php 
}
}
wp_reset_postdata();
?>
                    </div>
                </div>
            </div>
            <!-- servicios -->
            <!-- marcas -->
            <div class="col-xs-12 Pad0 scrollme" style="background: #F7F7F7;">
                <div class="col-xs-12 text-center mTop100 mBot35 animateme" style="z-index: 1;" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                    <h1 class="upper istok-b text-gray-1 let-sp-0" style="font-size: 26px;"><?php echo ot_get_option('marcas') ?></h1>
                    <h1 class="title-section mTop20 istok-b text-red let-sp-0" style="">
                       <div style="max-width: 585px; margin: 0 auto;"> <?php echo ot_get_option('2do_marcas') ?></div>
                    </h1>
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

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 text-center mTop35 container mBot50 animateme" style="z-index: 1;" data-from="0.75" data-to="0" data-opacity="0" data-translatex="400">
                    <div class="container-content " style="z-index: 1;">
                        <div id="owl-carousel-testimonial" class="owl-carousel owl-theme preguntas-carousel bg-white" style="border-radius: 0px;">
<?php  
$args = array(
'post_type' => 'testimonials',
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
                            <div class="item" style="min-height: 200px;display: inline-block;">
                                <div class="col-xs-12 Pad20 text-white item-content" style="">
                                    <div class="item-img">
                                        <img class="img-responsive" src="<?php echo the_field('imagen');?>" alt="" style="width: 100%; height: auto;">
                                    </div>
                                    <div style="padding-left:25px;padding-right: 25px;" class="text-left answer mTop20 PadBot10">
                                        <?php echo the_field('testimonio');?>
                                    </div>
                                    <div style="padding-left:25px;padding-right: 25px;" class="text-center title mTop20 PadBot20"><?php echo the_field('nombre');?></div>

                                </div>
                            </div>
<?php 
}
}
wp_reset_postdata();
?>                             


                        </div>
                    </div>
                </div>
            </div>
            <!-- marcas -->
        </div>     
<?php get_footer(); ?>        