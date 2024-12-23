<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $query->have_posts() )
{
	?>

    <div class="search-result search-page">
    	<div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid ">
    	<?php
    	while ($query->have_posts())
    	{
    		$query->the_post();
    		$post_id = get_the_ID();
    		$thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), array('220','300'), true );
        	$thumbnail_url = $thumbnail_url[0];
        	$categories = get_the_category();
    		?>
    		<article class="elementor-post elementor-grid-item post-<?php echo $post_id?> post type-post status-publish format-standard has-post-thumbnail hentry category-the-grape entry">
    			<div class="elementor-post__card">
    				<a class="elementor-post__thumbnail__link" href="<?php the_permalink(); ?>">
    					<div class="elementor-post__thumbnail">
    						<img src="<?php echo $thumbnail_url;?>" class="attachment-full size-full" alt="" loading="lazy" srcset="<?php echo $thumbnail_url;?> 206w, <?php echo $thumbnail_url;?> 200w">
    					</div>
    				</a>
    				<div class="elementor-post__badge"><?php echo esc_html( $categories[0]->name ); ?></div>
    				<div class="elementor-post__text">
    				<h3 class="elementor-post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    				</div>
    			</div>
    		</article>
    	
    		<?php
    	}
    }
    else
    {
    	echo "No Results Found";
    }
    ?>
    </div>
    	<div class="pagination">
    		<?php
    		$pages = $query->max_num_pages;
		    $big = 999999999; // need an unlikely integer
		    if ($pages > 1)
		    {
		        $page_current = max(1, get_query_var('paged'));
		        echo paginate_links(array(
		            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		            'format' => '?paged=%#%',
		            'current' => $page_current,
		            'total' => $pages,
		        ));
		    }
    		?>
    	</div>
</div>	