<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main-core".
 *
 * @package YayPress
 */
?>

		</div><!-- #main-core -->
		</div><!-- #main -->
		<?php /* Sidebar */ thinkup_sidebar_html(); ?>
	</div>
	</div><!-- #content -->

	<?php /* Full-width coments */ thinkup_input_allowcomments2(); ?>

	<footer>
		<?php /* Custom Footer Layout */ thinkup_input_footerlayout();
		echo	'<!-- #footer -->';  ?>
		
		<div id="sub-footer">

		<div id="sub-footer-core">
		
			<div class="copyright">
			<?php 
			printf( __( 'Using <a href="//www.yaypress.com">exMinimal WordPress Theme by YayPress</a>', 'exminimal' ) ); 
			?>
			</div>
			<!-- .copyright -->

			<?php if ( has_nav_menu( 'sub_footer_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'depth' => 1, 'container_class' => 'sub-footer-links', 'container_id' => 'footer-menu', 'theme_location' => 'sub_footer_menu' ) ); ?>
			<?php endif; ?>
			<!-- #footer-menu -->

			<?php if ( ! has_nav_menu( 'sub_footer_menu' ) ) : ?>
			<?php /* Social Media Icons */ thinkup_input_socialmediafooter(); ?>
			<?php endif; ?>

		</div>
		</div>
	</footer><!-- footer -->

</div><!-- #body-core -->

<?php wp_footer(); ?>

</body>
</html>