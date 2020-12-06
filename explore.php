<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>Book Search</title>
</head>
<body>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     $conn = new PDO("mysql:host=localhost;dbname=athenaem",'root','');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM books WHERE genre = '$searchKey'";
     }else
     $sql = "SELECT * FROM books";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
   <div class="col-md-6">
   <select name="search">
			<option value="Fantasy">Fantasy</option>
      <option value="Art">Art</option>
    </select>
    		
    </div>
     <div class="col-md-6 text-left">
      <button class="btn">Explore by Genre</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-bordered">
  <tr>
     <th>Name</th>
     <th>Genre</th>
     <th>Description</th>
  </tr>
  <?php while( $row = $result->fetch(PDO::FETCH_OBJ) ): ?>
  <tr>
  				<td><?php echo $row->title; ?></td>
				<td><?php echo $row->genre; ?></td>
				<td><?php echo $row->summary;?></td>
  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
</body>
</html>