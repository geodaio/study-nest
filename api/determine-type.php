<?php
$filename = debug_backtrace().file;

  if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("css")){
    $filename.header('Content-Type: text/css');
  }
  else if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("js")){
    $filename.header('Content-Type: text/javascript');
  }
  else if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("jpg") || pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("jpeg")){
    $filename.header('Content-Type: image/jpeg');
  }
  else if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("ico")){
    $filename.header('Content-Type: image/vnd.microsoft.icon');
  }
  else if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("svg")){
    $filename.header('Content-Type: image/svg+xml');
  }
  else if (pathinfo($filename, PATHINFO_EXTENSION).equalsIgnoreCase("png")){
    $filename.header('Content-Type: image/png');
  }
?>
