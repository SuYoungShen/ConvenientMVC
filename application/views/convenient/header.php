<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php
      echo $meta;
      foreach ($css as  $value) {
        echo $value;
      }
      foreach ($js as  $value) {
        echo $value;
      }
      ?>
  </head>
