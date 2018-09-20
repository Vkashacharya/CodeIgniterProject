<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AdminPanel</title>
<?=link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?= anchor('login/logout','Logout') ?><span class="sr-only">(current)</span></a>
      </li>
    </div>
</nav>