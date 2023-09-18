<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--adding bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="create.php">Add New</a>
        </div>
      </div>
    </div>
  </nav>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>userNo</th>
        <th>userName</th>
        <th>Active</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql="select * from user";
        $result =$conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo"
            <tr>
              <td> $row[UserSno]</td>
              <td> $row[UserName] </td>
              <td> $row[Active] </td>
              <td>
                <a class='btn btn-success' href='update.php?userSno=$row[UserSno]'>Update</a>
                <a class='btn btn-danger' href='delete.php?userSno=$row[UserSno]'>Delete</a>
              </td>
            </tr>
          ";
        }
      ?>
    </tbody>
  </table>
    
</body>
</html>