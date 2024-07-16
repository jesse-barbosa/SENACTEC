<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $search = null;
  $filter = null;

  if (@$_POST['search']) {
    $search = $_POST['search'];
  }

  if (@$_POST['filter']) {
    $filter = $_POST['filter'];
  }

  require_once (dirname(__DIR__) . "/class/User.php");
  $user = new User();
  echo $user->Usuarios($search, $filter);
}
