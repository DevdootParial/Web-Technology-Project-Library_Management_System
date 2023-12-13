<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
//include_once("../controller/SessionCheck.php");

?>

<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style5.css">
    </head>

<body>
    <div class="container">
        <!-- header starts  -->
            <header>
                <div class="row">
                    <div class="col-lg-4 col-md-12">                   
                    <div class="logo-div">
                            <a href="#">
                                <img src="book.png"><!--logo add korar somoy logo ta ke hyper link er mnodde reke di bo  logo er class ta hobo ho fontweosome theke ni chi-->
                            </a>
                    </div>                 
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <p class="heading-style">Library Management System</p>
                    </div>
                </div>
            </header>
            <!-- header ends  -->   

    <center>
        <main>
        <table height=635 width=1080>
            
            <tr height=70>
                <td colspan="2"> 
                    <table width = "800">
                   
                    <tr>
                        <td style="visibility:hidden;">
                            hdhdhdhhfhhhhhhhhhhhhhhfhfjfjfjfh
                        </td>
                        
                        <td align="center">
                            <div class="card">
                        <h2>Logged in as || <?php echo $user['name'] ?></h2>
                            </div>  
                        </td> 
                        
                          
                    </tr>  
                   
                    </table>
                </td>
            </tr>
            
            <tr>
                <td rowspan="3" width="250">  
                <nav> 
                <ul>
                   <li> <a href="librarian_dashboard.php">Dashboard</a></li>										                  
                    <li> <a href="profile.php">Profile</a></li>
                    <li> <a href="catalog.php">Catalogue</a></li> 
                    <li> <a href="book_management.php">Book Management</a></li>
                    <li> <a href="Newly_listed_Books.php">Newly Listed Books</a></li>
                    <li> <a href="TrendingBooks.php">Trending Books</a></li>
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                    <li> <a href="Notification.php">Send Notification</a></li>
                    <li> <a href="account_setting.php">Account Settings</a></li>	
                    <li> <a href="solnfromadmin.php">Help and Support</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>
					<fieldset>
						<legend> PROFILE </legend>
						<table height="30" width="500">				
							<tr>
								<td>ID</td>
								<td align="left"> :<?php echo $user['id'] ?> </td>
                                                
                                <td colspan="2" rowspan="3"> <img src="../Assests/profilepicture.png"> </td>
							</tr>
							<tr>
								<td>Name</td>
								<td>:<?php echo $user['name'] ?></td>
                              
							</tr>
                            </tr>
                                <tr>
								<td>Gender</td>
								<td>:<?php echo $user['gender'] ?></td>
							</tr>
                            <tr>
								<td>Email</td>
								<td>:<?php echo $user['email'] ?></td>
							</tr>
                               <tr>
								<td>DOB</td>
								<td>:<?php echo $user['dob'] ?></td>
                                <td align="center" colspan="4"><a href="changeprofilepicture.php">Change </a> </td
							</tr>							
					    </table>
					</fieldset>                    
					
                </td>
            </tr>
        </table>
        
        </main>

                <footer>
                     <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © by Jahidul Islam 2023</p>
                        </div>  
                    </div>                              
                </footer>
    </center>
    </div>
    </body>
</html>