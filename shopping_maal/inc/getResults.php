<?php


require("connect.php");

if(isset($_GET['criteria'])) {
	
	
	if(!empty($_GET['criteria'])) {
		
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn,$criteria);
		$query = "SELECT * FROM contacts WHERE nazivFirme LIKE '%{$criteria}%' OR sediste LIKE '%{$criteria}%'";
		
		$result  = mysqli_query($conn,$query);
		
				if(mysqli_num_rows($result)>0){
					
					while($row = mysqli_fetch_assoc($result)) {
						
						?>
						
						<div id="result">
						<img src="../img/store.png">
						<p><b>Naziv firme: </b> <?php echo $row['nazivFirme'] . "<br><b>Sedište:</b> " . $row['sediste']; ?> </p>
					<p><b>PIB: </b> <?php echo $row['pib']; ?> </p>
						
						</div>
						
						
						<?php
					}
					
					echo "Broj pronađenih: " . mysqli_num_rows($result);
					
				} else {
					
					echo "Nema rezultata pretrage!";
					
				}
		
		
		
	}else {
		
		echo "Kriterijum je prazan!";
		
	}
	
	
} 

?>