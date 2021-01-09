<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
    <h1>
      <!-- 站点链接，站点标题 -->
      <a href="<?php bloginfo('url') ?>" class="navbar-brand">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <!-- 站点描述 -->
    <?php //bloginfo('description') ?>
  </div>
  </div>
</body>
</html>

