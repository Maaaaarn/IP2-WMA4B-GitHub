<?php
session_start();

 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <a style="margin-left:10px; margin-top:10px;" href="menu_checkout.php" id="btn" class="btn">BACK</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <p style="justify-content:center; margin:10px; padding:0; font-size:25px;" >Check Out</p>
          
            <div class="col-lg-8" style="float:left;">
                <table class="table">
                    <thead class="text-center">
                        <tr  >
                            <th scope="col">Serial no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value ){
                                    $total=$total+$value['price'];
                                    

                                    echo"
                                    <tr>
                                        <td>1</td>
                                        <td>$value[name]</td>
                                        <td>$value[price]</td>
                                        <td><input class='text-center' type='number' value='$value[quantity]' min='1' max='10'></td>
                                        <td>
                                            <form action='manage.php' method='POST'>
                                                <button name='remove' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='name' value='$value[name]'/>
                                            </form>
                                        </td>
                                    </tr>
                                    ";
                                }
                            }
                        ?>
                     
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3" style="float:right; margin-right:90px;">
                <div class="border bg-light rounded p-4">
                    <h3>Total:</h3>
                    <h5 class="text-center"><?php echo $total ?></h5><br>
                    <form method="POSt">
                        <button class="btn btn-primary btn-block" name="place" onclick="myfunction() ">Place Order</button>
                </div>
            </div>

        </div>
    </div>
 <?php
   if(isset($_POST['place'])){
       echo "<script>alert('Thank You for ordering online!');
       window.location.href='index.php';</script>";
   }
   ?>    
</body>
</html>
