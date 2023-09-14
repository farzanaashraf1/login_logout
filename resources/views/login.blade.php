<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container">
         <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
               <h4>Login</h4>
               <hr>
                    <form action = "/user" method="POST">
                    @csrf
                    <input type="text" class="form-control" placeholder="Enter name" name="name"><br></br>
                    <input type="password" class="form-control" placeholder="Enter password" name="password"><br></br>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <form>
                    </div>
         </div>
     </div>
</body>
</html>