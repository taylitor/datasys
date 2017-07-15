<?php 
/* Template Name: Services New*/
?>
<?php get_header(); ?>
<style type="text/css">
    .hide {
        visibility: hidden;
        display: none;
    }
    .vista {
        display: block;
        visibility: visible;
    }
    .img_us { 
        height: 100%;
        width: 100%;
    }
    .somosground{
        background-color: #FFFFFF;
        min-height: 1300px;
    }
    .Full{
        background-color: #FFFFFF;
        min-height: 350px;
    }
    .FullCom{
        background-color: #FFFFFF;
        min-height: 350px;
    }
    .FullCid{
        background-color: #FFFFFF;
        min-height: 900px;
    }    
    .FullDat{
        background-color: #FFFFFF;
        min-height: 650px;
    }  
    @media only screen and (max-width: 600px) {
       .somosground{
        background-color: #FFFFFF;
        min-height: 1500px;
    } 
    }
    .pFull100{
        padding: 140px;
    }
    hr{
        height: 1px !important;
        background-color: #8e8e8e;
    }
    ul{
        padding-left: 40px;

    }
    .PadCustomInfra {
        padding: 140px 140px 370px 140px;
        min-height: 1350px;
    }
    .PadCustomCuidad {
        padding: 140px 140px 370px 140px;
        min-height: 850px;
    }    
    .PadFull60 {
        padding: 60px;
    }
    .PadFull60Extra {
        padding: 0px 60px 60px 60px;
    }


</style>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
            <!-- Top Navigation -->
            <!-- Top content -->
            <div class="Pad0 col-xs-12 row-eq-height" style="position: relative;">
                <div class="Pad0 col-xs-12 bg-blue" style="">
                    <div class="Pad0 col-xs-12 item-50vh bg-black-after vertical-align parallax" style="position: relative;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div data-depth="0.6" class="layer">
                            <div id="particles-js"></div>
                        </div>
                        <div class="mTop50 col-xs-12 col-sm-10 col-sm-offset-1" style="position: relative;z-index: 1;">
                            <!--<img src="<?php echo the_field('icon'); ?>" alt="" style="height: 60px;">-->
                            <h1 class="mTop20 contact-info text-left text-white istok-b let-sp-0" style="">
                                <?php the_title(); ?>
                            </h1>
                            <div class="orange_line text-center mTop10" style="height: 6px; width: 80px; margin-top: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top content -->
            <!-- nosotros -->
            <div class="col-xs-12 Pad0 bg-gray-2">
                <div class="text-left container-fluid " style="z-index: 1; padding-left: 0px !important; padding-right: 0px !important;">
<?php  
$args = array(
'post_type' => 'servicios',
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
    <div class="row scrollme" style="margin: 30px 0px 30px 0px">
        <div class="col-md-4 animateme" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">
                        <img src="http://code-sapiens.com/projects/datasys/wp-content/uploads/2016/12/xaas.png<?php //echo the_field('imagen'); ?>" class="">
        </div>
        <div class="col-md-8 animateme" data-when="view" data-from="0.55" data-to="0.05" data-scale="0">

                        <?php the_field('izquierda'); ?>
                        <?php the_field('derecha'); ?>

        </div>
    </div>

<?php 
}
}
wp_reset_postdata();
?> 
               
            </div>                    
        </div>
            <!-- nosotros -->
        </div>
<?php endwhile; endif; ?> 
<?php get_footer(); ?>  