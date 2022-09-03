<?php
  // prevent automatic redirection of 404 and incorrect URL's
  remove_action('template_redirect', 'redirect_canonical');
?>