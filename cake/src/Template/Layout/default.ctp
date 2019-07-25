<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- main.js -->

    <?= $this->Html->script('main.js') ?>



    <!-- jQuery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- bootstrap framework -->
    <?= $this->Html->css('/bootstrap/css/bootstrap.css') ?>
    <?= $this->Html->script('/bootstrap/js/bootstrap.js') ?>

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <a class="navbar-brand" href="#"><i class="fas fa-coins fa-2x"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/incomes">Incomes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/spending">Spending</a>
      </li>
    </ul>
    <span class="navbar-text">
      MoneyManagement App
    </span>
  </div>
</nav>
<div class="container">
<div class="text-center">
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>

    </div>
    </div>
</div>
    <footer>
    <footer class="page-footer font-small navbar-light bg-light pt-4">

<!-- Footer Elements -->
<div class="container">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col">


    </div>
    <!--Grid column-->

    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    </footer>
</body>
</html>
