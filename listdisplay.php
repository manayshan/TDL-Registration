<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TDL List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/tdl.ico">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
            body{
            background-color:#f0f0f0;
            font-size:20px;
            }
            table,tr,td{
                table-layout: auto;
                padding: 5px;
                margin: 10px;
                letter-spacing: 1px;
                border-collapse: separate;
                font-size: 20px;
            }
        </style>
    </head>   
    <body> 
        <div class="width100per">
            <div class="container"></div>
            <header>
               <div class="container">
                   <div class="logoWrap"><a href="javascript:;"><img src="img/logo.jpg" alt="" /></a></div>
                   <div class="navWrap">
                       <ul>
                            <li><a href="javascript:;">TDL!</a>
                                <ul>
                                        <li><a href="main.html">What TDL?</a></li>
                                        <li><a href="main.html">Why TDL?</a></li>
                                        <li><a href="main.html">Register for TDL</a></li> 
                                        <li><a href="http://pyptl.weebly.com/" target="_blank">Know MOre!!</a></li>
                                </ul>
                       </ul>
                   </div>
                   <div class="socialWrap">
                       <ul>
                            <li><a href="https://www.facebook.com/AnsalUniversity/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/ansaluniversity"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCpTZrN2Gm0sKq1UUhcOCULQ"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="http://www.instagram.com/ansal.university"><i class="fa fa-instagram"></i></a></li>
                       </ul>
                   </div>
               </div>
            </header>
            <div class="container">
                <div class="contantWrap">
                    <div class="leftWrap">

	<table border="2dp">
		<tr style="font-weight: bold;">
			<td>Roll No.</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Father Name</td>
			<td>Course</td>
			<td>School</td>
			<td>Email</td>
			<td>Mobile No</td>
			<td>Present Address</td>
			<td>Permanent Address</td>
			<td>TDL School</td>
			<td>TDL Course</td>
			<td>Reason to Opt</td>
		</tr>
		<tr></tr>
		<?php
		$conn = mysqli_connect("localhost","root", "", "test");
		if ($conn -> connect_error){
			die("Connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT rollno, firstname, lastname, fathername, course, school, email, mobileno, presentaddress, permanentaddress, tdlschool,tdlcourse, reasontoOpt from finaltdl";
		$result = $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["rollno"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["fathername"]."</td><td>".$row["course"]."</td><td>".$row["school"]."</td><td>".$row["email"]."</td><td>".$row["mobileno"]."</td><td>".$row["presentaddress"]."</td><td>".$row["permanentaddress"]."</td><td>".$row["tdlschool"]."</td><td>".$row["tdlcourse"]."</td><td>".$row["reasontoOpt"]."</td></tr>";}
			//echo "</table>";
		}
		$conn-> close();
		?>
	</table>




</div>
                </div>
            </div>
            <footer>
                <div class="container">
                <nav>
                    <ul>
                        <li><a href="">Contact</a></li>
                        <li><a href="javascript:;">About Author</a></li>
                        <li><a href="javascript:;">Disclaimer</a></li>
                    </ul>
                </nav>
                <p>By Manay Shankar </p>
                <p>©Copyright ansaluniversity.edu.in - All Rights Reserved </p>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
