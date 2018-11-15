<?php include('includes/header.php') ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Member Management System </title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
 
  <body>
    <?php
      require_once("includes/connect.php");
    ?>
    <div class="container">
      <div class="row">
        <h1 align ="center"> Member Management System</h1>
        <table class="table">
          <caption>Sneakers News Members</caption>
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Fullname</th>
              <th>Email</th>
              <th>Level</th>
              <th></td>
            </tr>
          </thead>
          <tbody>
          <?php
            $id = 1 ;
            $sql = "SELECT * FROM user";
            
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $id++ ?></th>
              <td><?php echo $data["username"]; ?></td>
               <td><?php echo $data["Fullname"]; ?></td>
              <td><?php echo $data["email"]; ?></td>
              <td>
                <?php
                    if ($data["role"] == 0) {
                      echo "Administrator";
                    }else{
                      echo "Member";
                    }
                ?>
              </td>
              <td><a href="editmember.php?id=<?php echo $data["id"]; ?>">Edit</a> <a href="deletemem.php?id=<?php echo $data["id"]; ?>">Delete</a></td>
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>
 
    </div><!-- /.container -->
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  
 
</body></html>