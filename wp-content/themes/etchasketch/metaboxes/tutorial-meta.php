<div class="my_meta_control">

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>

	<div class="meta-label">
		<label>Video Link</label>
	</div><!--.meta-label-->

	<div class="meta-input">
		<input type="text" name="<?php $metabox->the_name('tut-vimeo'); ?>" value="<?php $metabox->the_value('name'); ?>"/>
		<span>Paste Vimeo URL, example: xxxx</span>
	</div><!--.meta-label-->

	<?php global $wpalchemy_media_access; ?>

	<div class="meta-label">
		<label>PDF version for download</label>
	</div><!--.meta-label-->

	<div class="meta-input">
		<?php $mb->the_field('imgurl'); ?>
		<?php $wpalchemy_media_access->setGroupName('doc-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
		<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
		<?php echo $wpalchemy_media_access->getButton( array( 'label' => 'Select File' ) ); ?>
	</div><!--.meta-label-->

	<div class="meta-label">
		<label>Walkthrough Description</label>
	</div><!--.meta-label-->

	<div class="meta-input">
		<?php $metabox->the_field('wt-description'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Enter in a description</span>
	</div><!--.meta-field-->


	<section>

			<?php while($mb->have_fields_and_multi('wt-steps')): ?>
			<?php $mb->the_group_open(); ?>
		 		<div class="content">

			 		<div class="repeating-heading">
						<h4>Walkthrough Steps&nbsp;&nbsp;<i class="fa fa-arrows"></i></h4>
						<a href="#" class="dodelete button">Remove</a>
					</div><!--.repeating-heading-->

					<div class="meta-label">
						<label>Step Title</label>
					</div><!--.meta-label-->

					<div class="meta-input">
						<input type="text" name="<?php $metabox->the_name('tut-vimeo'); ?>" value="<?php $metabox->the_value('wt-step-title'); ?>"/>
						<span></span>
					</div><!--.meta-label-->

					<div class="meta-label">
						<label>Step Description</label>
					</div><!--.meta-label-->

					<div class="meta-input">
						<?php $metabox->the_field('wt-step-description'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span></span>
					</div><!--.meta-field-->

					<div class="meta-label">
						<label>Screenshot</label>
					</div><!--.meta-label-->

					<div class="meta-input">
						<?php $mb->the_field('wt-screenshot'); ?>
						<?php $wpalchemy_media_access->setGroupName('img-n'. $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>
						<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
						<?php echo $wpalchemy_media_access->getButton( array( 'label' => 'Select File' ) ); ?>
					</div><!--.meta-label-->

				</div><!--.content-->

			<?php $mb->the_group_close(); ?>
			<?php endwhile; ?>

			<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-fast-facts add button"><i class="fa fa-plus-circle"></i> Add Another</a></p>

		</section>
</div>
