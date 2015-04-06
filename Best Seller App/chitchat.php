<?php
session_start();
if($_SESSION['name']=="Guest"){
	header("location: index.php");
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Global Buyer's Chat</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript">
    var auto_refresh = setInterval(
function ()
{
$('#time').load('load_chat.php').fadeIn("slow");
}, 1000);
  </script>
</head>
<body>


    <div class="container">
        <div class="row pad-top pad-bottom">


            <div class=" col-lg-6 col-md-6 col-sm-6">
                <div class="chat-box-div">
                    <div class="chat-box-head">
                        Users Global Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="fa fa-cogs"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="home.php"><span class="fa fa-map-marker"></span>&nbsp;Home</a></li>
                                    <li><a href="feedback"><span class="fa fa-comments-o"></span>&nbsp;Feedback</a></li>
                                    <li><a href="billing.php"><span class="fa fa-lock"></span>&nbsp;Billing</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="panel-body chat-box-main" id="time">
                    <?php
						$servername = "localhost";
                        $username = "root";
                        $password = 1996;
                        $dbname = "db";
                        $count=0;
                        // Create connection
                        $conn = new mysqli($servername, $username, $password,$dbname);

                        // Check connection
                        if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                        }
                        
                      $sql = "SELECT * FROM chat";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
	                            if($count%2==0){
	                            echo '<div class="chat-box-right">';
								echo $row['message'];
								echo '</div>';
								echo '<div class="chat-box-name-right">';
								echo $row['user'];
								echo '</div>';
								echo '<hr class="hr-clas"/>';
								$count++;
							    }
							else{
								echo '<div class="chat-box-left">';
								echo $row['message'];
								echo '</div>';
								echo '<div class="chat-box-name-left">';
								echo $row['user'];
								echo '</div>';
								echo '<hr class="hr-clas"/>';
								$count++;
								}
							
							}
						}
							$conn->close();
							?>
					</div>	   
                    <div class="chat-box-footer">
                        <div class="input-group">
							<form action="chat.php" method="post">
                            <input type="text" class="form-control" name="message" placeholder="Enter Text Here...">
                            <span class="input-group-btn">
									<input type="submit" name="commit" class="btn btn-info" value="Send">
                                
                                </form>
                            </span>
                        </div>
                    </div>

                </div>

            </div>
           
            
           
               </div>
    </div>
            

    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
