<?php

// Active User - Display in masthead
function widget_active_user() { ?>
  <div class="widget active_user">
    <?php
      if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user(); // Get User Info for display on page
        echo 'Logged in as <span class="username">' . $current_user->display_name . '</span>';
      } else {
        // Put login widget here
        echo 'Log in!';
      }
    ?>
  </div><!-- .widget.active_user -->
  <?php
}

?>
