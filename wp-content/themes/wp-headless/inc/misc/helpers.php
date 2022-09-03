<?php
  // prevent automatic redirection of 404 and incorrect URL's
  add_filter( 'redirect_canonical', '__return_false' );
?>