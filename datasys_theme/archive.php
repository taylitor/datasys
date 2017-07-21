<?php get_header(); ?>

        <main class="cd-main-content">
            <!-- carousel -->
            <div class="container-fluid Pad0">
                <div class="Pad0 col-xs-12">
                    <div class="">
                        <div class="item" style=" height: 250px; width:100%; background: url(<?php echo get_template_directory_uri() ?>/img/blog-bg.png) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel -->
            <!-- blog -->
            <div class="container mTop10 bg-white mBot35">


      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
        <?php _e( '=> Resultados de busqueda de', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php  the_post_thumbnail('small') ?>
                 <?php //echo substr(get_the_excerpt(), 0,200); ?>
                 
               </li>

            <?php } ?>

            </ul>

           <?php paginate_links(); ?>

        <?php } ?>

          

            </div>
            <!-- blog -->
            <!-- footer -->
  
<?php get_footer(); ?>