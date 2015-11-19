<?php get_header(); ?>
<div class="wrapper shadow">
		<div id="carousel">
			<img src="img/image01.jpg" alt="smiling children">
			<img src="img/image02.jpg" alt="group of women with their children">
			<img src="img/image03.jpg" alt="little girls at the playground">
			<img src="img/image04.jpg" alt="children sitting on a sofa and holding sign Gracias">
		</div>
		
		<section class="description">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no results found.', 'lacasitacenter' ); ?></p>
			<?php endif; ?>
		</section>
		
		<section class="row-4 clearfix">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-1-4">
        <h3>Empower</h3>
        <a class="button-read" href="http://www.lacasitacenter.org/empowerment-and-education.html">Read More</a>
			</div>
			<div class="col-1-4">
        <h3>Accompany</h3>
        <a class="button-read" href="http://www.lacasitacenter.org/accompaniment-and-hospitality.html">Read More</a>
			</div>
			<div class="col-1-4">
        <h3>Advocate</h3>
        <a class="button-read" href="http://www.lacasitacenter.org/advocacy-and-outreach.html">Read More</a>
			</div>
			<div class="col-1-4">
        <h3>Support Us</h3>
        <a class="button-read" href="http://www.lacasitacenter.org/sponsor.html">Read More</a>
			</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no results found.', 'treehouse-portfolio' ); ?></p>
			<?php endif; ?>
    </section>
	</div>
	
	<div class="wrapper">
		<section class="news">
			<h2>Latest News</h2>
      <table>
				<tbody>
					<tr>
            <td class="date">Jul 12</td>
            <td class="news-text"><h3>La Casita Center Summer Brunch</h3>
						Our Summer Brunch was a huge success. Thank you to everyone who came and made a donation! The money you donated will allow us to keep our doors open and continue sharing hope throughout the community.</td>
          </tr>
        </tbody>
			</table>
		</section>
	</div>

<?php get_footer(); ?>