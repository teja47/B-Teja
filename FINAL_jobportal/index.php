<?php
	define("SITE_ADDR", "http://localhost/jobportal");
	include("./include.php");
	
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		
		<title><?php echo $site_title; ?></title>
		
		<!-- link to the stylesheets -->
		<link rel="stylesheet" type="text/css" href="./main.css"></link>
	</head>
	
	<body>
		
		<div id="wrapper">
			
			<div id="top_header">
				<div id="nav">
					<a href="<?php echo SITE_ADDR;?>">By Teja 11713846</a>
				</div>

				<div id="logo">
					<h1><a href="<?php echo SITE_ADDR;?>">JobPortal</a></h1>
				</div>
			</div>

			<div id="main" class="shadow-box"><div id="content">
				
				<center>
				<form action="" method="GET" name="">
					<table>
						<tr>
							<td><input type="text" name="k" placeholder="Enter your skills or language with space" autocomplete="off"></td>
							<td><input type="submit" name="" value="submit" ></td>
						</tr>
					</table>
				</form>




				</center>

				<?php

					
					if (isset($_GET['k']) && $_GET['k'] != ''){
						
						
						$k = trim($_GET['k']);

						
						$query_string = "SELECT * FROM search_engine WHERE ";
						$display_words = "";

						
						$keywords = explode(' ', $k); 
						foreach($keywords as $word){
							$query_string .= " keywords LIKE '%".$word."%' OR ";
							$display_words .= $word." ";
						}
						$query_string = substr($query_string, 0, strlen($query_string) - 3);

						
						$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

						$query = mysqli_query($conn, $query_string);
						$result_count = mysqli_num_rows($query);

					
						if ($result_count > 0){
							
							// display search result count to user
							echo '<br /><div class="right"><b><u>'.$result_count.'</u></b> results found</div>';
							echo 'Your search for <i>'.$display_words.'</i> <hr /><br />';

							echo '<table class="search">';

							
							while ($row = mysqli_fetch_assoc($query)){
								
								echo '<tr>
									<td><h3><a href="'.$row['url'].'">'.$row['title'].'</a></h3></td>
								</tr>
								<tr>
									<td>'.$row['blurb'].'</td>
								</tr>
								<tr>
									<td><i>'.$row['url'].'</i></td>
								</tr>';
							}

							echo '</table>';
						}
						else
							echo 'No results found. Please search something else.';
					}
					else
						echo '';
				?>

			</div></div>

			<div id="footer">
				<div class="left">
					
				</div>
				<div class="right">
					
				</div>
				<div class="clear"></div>
			</div>

		</div>

	</body>
</html>