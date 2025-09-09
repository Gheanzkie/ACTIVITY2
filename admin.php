<?php
include_once('act2server.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin</title>
</head>
<body>
    <body class="bg-dark d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4" style="width: 25rem;">
    <h2 class="text-center mb-4">Admin</h2>
    <form method="POST">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>

      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="d-flex justify-content-center gap-2">
        <button class="btn btn-danger" name="submit">Enter</button>
        
        <a class="btn btn-danger" href="index.php">Back</a>
      </div>
    </form>
  </div>

</body>
    
</body>
</html>