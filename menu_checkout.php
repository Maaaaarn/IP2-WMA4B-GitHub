<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/order.css">
        <script src ="js/order.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
    <div class="title">
            <div class="fh5co-nav" role="navigation">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.php">DC Steaks & Burgers<span>.</span></a></div>
					</div>
					
			        <div class="col-xs-12 text-center menu-1 menu-wrap" style="display:flex; margin:auto; padding:0;" >
                        <ul style="display:flex; margin:auto; padding:0;">
							<li><a href="index.php">Home</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li class="has-dropdown">
								<a href="gallery.html">Gallery</a>
					
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="rate.html">Rate Us</a></li>
							<li class="active" ><a href="menu_checkout.php">Order Here</a></li>
						</ul>
                        <div><a href="checkout.php" id="btn" class="btn">Check out</a></div>
                    </div>
                  
                </div>
			</div>
        </div>
       
        <div class="container">
            <div>
                <ul style="margin-top: 20%;">
                    <li>
                        <div class="box" data-aos="fade-up" >
                            <img src="images/steaks.jpg" style="width:100%; height:300px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Porterhouse <br> 229</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="Porterhouse"/>
                                <input type="hidden" name="price" value="229"/>    
                            </form>
                        </div>
                    </li>
                    <li>  
                        <div class="box" data-aos="fade-up" >
                            <img src="images/monsterbbc.jpg" style="width:100%; height:300px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Monster BBC <br> 399</p>
                                <form action="manage.php" class="inc-dec" method="POST">
                                    <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px; ">Add</button>
                                    <input type="hidden" name="name" value="MonsterBBC"/>
                                    <input type="hidden" name="price" value="399"/>    
                                </form>
                        </div>
                    </li>
                    <li>
                        <div class="box" data-aos="fade-up" >
                            <img src="images/pastas.jpg" style="width:100%; height:300px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Pesto Pasta <br> 169</p>
                                <form action="manage.php" class="inc-dec" method="POST">
                                    <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                    <input type="hidden" name="name" value="pestopasta"/>
                                    <input type="hidden" name="price" value="169"/>    
                                </form>
                        </div>
                    </li>
            </ul>
                    <ul>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/chickenbbc.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Chickcen BBC <br> 119</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="chickenbbc"/>
                                <input type="hidden" name="price" value="119"/>    
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/chicken.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Ala Carte Chicken Wings <br> 159</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="Ala carte Wings"/>
                                <input type="hidden" name="price" value="159"/>    
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/img9.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Chessy Fries <br> 99</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="Chessyfries"/>
                                <input type="hidden" name="price" value="99"/>    
                            </form>
                        </div>
                    </li>
                    
                </ul>
                <ul>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/img21.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Monter BBC Jr<br> 249</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="Monter BBC Jr"/>
                                <input type="hidden" name="price" value="249"/>    
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/doublebbc.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Double BBC <br> 239</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="doublebbc"/>
                                <input type="hidden" name="price" value="239"/>    
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="box1" data-aos="fade-up" >
                            <img src="images/partywings.jpg" style="width:100%; height:350px; border-top-left-radius:10px; border-top-right-radius:10px;" class="image">
                            <p class="text">Party Wings <br> 999</p>
                            <form action="manage.php" class="inc-dec" method="POST">
                                <button type="submit" name="add" class="but" style="font-family:Georgia, 'Times New Roman', Times, serif; width:20%;  padding:5px;">Add</button>
                                <input type="hidden" name="name" value="partywings"/>
                                <input type="hidden" name="price" value="999"/>    
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init({
                    offset:200,
                    duration:1000
                });
            </script>
    </body>
</html>
