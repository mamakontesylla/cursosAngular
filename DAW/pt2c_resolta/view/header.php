<html>
    <head>
        <title>LoginCookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php
        session_start();

        // comprovem si estem loguejats
        if (isset($_SESSION['userName'])) {
          echo 'Has fet login com a <b>' . $_SESSION['userName'] . '</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
          echo '<a href="../controller/logout_ctl.php">Logout</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
          echo '<hr>';
        }
      ?>
