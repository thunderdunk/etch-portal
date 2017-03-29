<div class="my_meta_control">

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Cras orci lorem, bibendum in pharetra ac, luctus ut mauris.</p>

	<label>Name</label>

	<p>
		<input type="text" name="<?php $metabox->the_name('name'); ?>" value="<?php $metabox->the_value('name'); ?>"/>
		<span>Enter in a name</span>
	</p>

	<label>Description <span>(optional)</span></label>

	<p>
		<?php $metabox->the_field('description'); ?>
		<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
		<span>Enter in a description</span>
	</p>

	<h4>Documents</h4>

	<a style="float:right; margin:0 10px;" href="#" class="dodelete-docs button">Remove All</a>

	<p>Add documents to the library by entering in a title,
	URL and selecting a level of access. Upload new documents
	using the "Add Media" box.</p>

	<?php while($mb->have_fields_and_multi('docs')): ?>
	<?php $mb->the_group_open(); ?>

		<?php $mb->the_field('title'); ?>
		<label>Title and URL</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>

		<?php $mb->the_field('link'); ?>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>

		<?php $mb->the_field('access'); ?>
		<p><strong>Access:</strong>
			<input type="radio" name="<?php $mb->the_name(); ?>" value="admin"<?php echo $mb->is_value('admin')?' checked="checked"':''; ?>/> Admin
			<input type="radio" name="<?php $mb->the_name(); ?>" value="editor"<?php echo $mb->is_value('editor')?' checked="checked"':''; ?>/> Editor
			<input type="radio" name="<?php $mb->the_name(); ?>" value="subscriber"<?php echo $mb->is_value('subscriber')?' checked="checked"':''; ?>/> Subscriber

			<a href="#" class="button" style="margin-left:10px;" onclick="jQuery(this).siblings().removeAttr('checked'); return false;">Remove Access</a>
			<a href="#" class="dodelete button">Remove Document</a>
		</p>

	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>

	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-docs button">Add Document</a></p>

</div>
