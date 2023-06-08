<?php
      require_once './MVC/Controllers/controller.php';

      $controller = new Controller();

      echo json_encode($_POST);

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $controller->submitForm($_POST);
          $controller->sendMail($_POST, 'lopez.alejandro.dev@gmail.com', 'Form Submission', 'Testing');
      }

  ?> 