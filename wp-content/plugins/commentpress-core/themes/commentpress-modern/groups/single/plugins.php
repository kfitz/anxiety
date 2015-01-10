<?php get_header( 'buddypress' ); ?>

<!-- groups/single/plugins.php -->

<div id="wrapper">



<div id="main_wrapper" class="clearfix">



<div id="page_wrapper">



	<div id="content"<?php echo commentpress_groupblog_classes(); ?>>
		<div class="padder">
			<?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>

			<?php do_action( 'bp_before_group_plugin_template' ) ?>

			<div id="item-header">
				<?php locate_template( array( 'groups/single/group-header.php' ), true ) ?>
			</div><!-- #item-header -->

			<div id="item-nav">
				<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
					<ul>
						<?php bp_get_options_nav() ?>

						<?php do_action( 'bp_group_plugin_options_nav' ) ?>
					</ul>
				</div>
			</div><!-- #item-nav -->

			<div id="item-body" class="clearfix">

				<?php do_action( 'bp_before_group_body' ) ?>

				<?php do_action( 'bp_template_content' ) ?>

				<?php do_action( 'bp_after_group_body' ) ?>
			</div><!-- #item-body -->

			<?php do_action( 'bp_after_group_plugin_template' ) ?>

			<?php endwhile; endif; ?>

		</div><!-- .padder -->
	</div><!-- #content -->

</div><!-- /page_wrapper -->



</div><!-- /main_wrapper -->



</div><!-- /wrapper -->



	<?php get_sidebar( 'buddypress' ) ?>

<?php get_footer( 'buddypress' ) ?>