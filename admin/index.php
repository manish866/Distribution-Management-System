<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 2px,2px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
    </style>
</head>

<body>
     <div class="icon-bar">
     
      <center> <h1>WELCOME ADMIN</h1></center>
      <hr/> 
      
      <ol>
      
        <li> <a href="admin_view.php"  class="fa fa-home">Admin </a> <br></li>
        <li><a href="extra_charges_view.php">Extra Charges </a></li>
        <li><a href="main_category_view.php">Main Category</a></li>
      <li>  <a href="product_category_view.php">Product Category</a><br></li>
      <li>  <a href="product_details_view.php">Product Details</a><br></li>
      <li> <a href="retailers_view.php">Retailers</a><br></li>
        <li> <a href="stock_details_view.php">Stock Details</a></li>
          
    </ol>
    </div>
</body>
</html>