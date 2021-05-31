<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php include 'script.php' ?>
    <link rel="stylesheet" href="css/style.css">

<style>

.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline;
  float: right;
}

/* Green */
.success {
  color: green;
  margin-right: 10px;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}

/* Blue */
.info {
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}
  
</style>


</head>
<body>

    <?php include 'navbar.php' ?>

    <button class="btn success" >Sign Up</button>
    <button class="btn info">Log In</button>

    <!Header Section-->
   

    <?php include 'grid.php' ?>


</body></html>