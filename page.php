<?php get_header(); ?>

   <section id="main"> <!--dentro de main va la listado articulos, paginacion,slider -->
           

            <section id="article_list" >

          
	            <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>

	            	 <article>
	                    <div class="thumb">
	                    	
	                    		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('list_articles_thumbs' ); } ?>
	                  
	                    </div>
	                    <hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
	                    <div class="date"></div>
	                            <div class="extract">
	                            	<?php the_content(); ?>
	                            </div>
               		</article>
                

	            <?php endwhile; else: ?>
	            	<h1>No se encontraron articulos</h1>
	        	<?php endif; ?>
               
                
            </section>
<?php get_sidebar(); ?>
 </section>
<?php get_footer(); ?>