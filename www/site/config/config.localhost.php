<?php
  c::set('debug', true);
  c::set('cache', false);
  
  c::set('map.key', 'AIzaSyCm8q0HlWOcPQ_iwUEwAPmQPIlqIZK0pBk');

  // The code below are required for the kirby-webpack dev server to work
  if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] === 'webpack') {
    c::set('url',  $_SERVER['HTTP_X_FORWARDED_PROTO'] . '://' . $_SERVER['HTTP_X_FORWARDED_HOST']);
  }
