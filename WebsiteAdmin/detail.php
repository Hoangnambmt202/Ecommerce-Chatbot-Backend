<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

$conn = mysqli_connect("localhost", "root", "", "trangthuongmai");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_product = "SELECT Prt_ID, Prt_Name, Prt_Price, Prt_Quantity, Prt_Description, Prt_Picture, Cat_ID from products ";
$sql_connect_product = mysqli_query($conn, $sql_product);

if(!$sql_connect_product){
    echo "Khong the lay du lieu";
}

$_id = $_GET["id"];
$take_ID = $_id;
while($sql_array_product = mysqli_fetch_assoc($sql_connect_product)) {
  if($sql_array_product["Prt_ID"] == $_id){
  
   

    echo "<div  class='product-frame'>


     <img src='".$sql_array_product['Prt_Picture']."' class=''>       
              
    <div class='product-buy-btn'>
    <div class=''> ".$sql_array_product['Prt_Name']."</div>
     <div class=''>".$sql_array_product['Prt_Quantity']."</div>
     <div class=''>".$sql_array_product['Prt_Description']."</div>
     
      <div class=''>".$sql_array_product['Prt_Price']."</div>

      <div> <button>buy</button> </div>
       
       
       
        </div>
        </div>";

  }
}





















mysqli_close($conn);















?>

<style>
  .product-frame{
    margin-left: 300px;
  }
</style>  
</body>
</html>

