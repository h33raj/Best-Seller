<?php
			$servername = "localhost";
                        $username = "";
                        $password = ;
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
