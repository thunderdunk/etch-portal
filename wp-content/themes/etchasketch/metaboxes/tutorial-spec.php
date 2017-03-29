<?php

$tutorial_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_tutorial_meta',
	'title' => 'Tutorial Steps',
	'types' => array('etch_tutorial'), // added only for custom post type "etch_tutorial"
	'context' => 'normal', // same as above, defaults to "normal"
	'priority' => 'high', // same as above, defaults to "high"
	'template' => get_stylesheet_directory() . '/metaboxes/tutorial-meta.php'
));

/* eof */
