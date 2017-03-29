<?php

// add categories for attachments
function add_categories_for_attachments() {
  register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'add_categories_for_attachments' );
