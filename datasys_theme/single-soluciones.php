<?php get_header(); ?>
<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'soluciones-de-servicios') !== false) {
    $padd = 'Full';
} elseif(strpos($url,'redes-y-seguridad') !== false) {
    $padd = 'Full';
} elseif(strpos($url,'comunicaciones') !== false) {
    $padd = 'FullCom';
} elseif(strpos($url,'datacenters') !== false) {
    $padd = 'FullDat';    
} elseif(strpos($url,'ciudad-inteligente') !== false) {
    $padd = 'FullCid';
}else{
    $padd = 'somosground';
}


?>
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
                    <div class="Pad0 col-xs-12 item-50vh bg-black-after vertical-align parallax" style="position: relative;background: url(<?php echo the_field('imagen'); ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div data-depth="0.6" class="layer">
                            <div id="particles-js"></div>
                        </div>
                        <div class="mTop100 col-xs-12 col-sm-10 col-sm-offset-1" style="position: relative;z-index: 1;">
                            <div class="serv_circle">
                                <img src="<?php echo the_field('icon'); ?>" alt="" style="height: 50px;">
                            </div>
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


                    <div class="col-xs-12 col-sm-4 col-md-4 Pad0 <?php echo $padd; ?>" >          
                        <div class="serv_content istok-b text-red" style="font-size: 26px;">
                        <img src="<?php echo the_field('left_bottom_imagen'); ?>" class="img_us">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-8 col-md-8 ">
                        <div class="serv_content istok PadFull60" style="font-size: 16px; color: rgb(81, 81, 81); line-height: 1.905; ">
                        <?php the_field('izquierda'); ?>
                        </div>
                    </div>                    
                </div>

               
            </div>                    
        </div>
            <!-- nosotros -->
        </div>
<?php endwhile; endif; ?> 
<?php get_footer(); ?>  