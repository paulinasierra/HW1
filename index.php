<?php
	

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$g1 = $_POST['g1']; 
	$g2 = $_POST['g2'];
	$g3 = $_POST['g3'];
	$g4 = $_POST['g4'];
	$g5 = $_POST['g5'];
	$g6 = $_POST['g6'];

	
	
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>HW1</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
	<head>
	<body>
		<div class="container">
			<div class="row">

				<form action="index.php" method="POST" class="col">
					<h1>Grade Calculator</h1>
				
					<div class="form-group">
						<label>Name</label>
						<input type="text" step=".01" name="name" class="form-control" required />
					</div>

					<div class="form-group">
						<label>1st Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g1" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>2nd Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g2" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>3rd Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g3" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>4th Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g4" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>5th Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g5" class="form-control" required />
					</div>

					<div class="form-group">
						<label>6th Subject, Grade (FGE)</label>
						<input type="number" step=".01" name="g6" class="form-control" required />
					</div>
					
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success">
							Compute GPA
						</button>
					</div>
				</form>
				<div class="col"> <!--display-->
					<?php
					    if (isset($_POST['submit'])){
					        
							
							echo "Student Name: " . $name . "</br>" 
							. "1st Subject, Grade (FGE): " . $_POST["g1"] . "</br>"
							. "2nd Subject, Grade (FGE): " .  $_POST["g2"] . "</br>"
							. "3rd Subject, Grade (FGE): " .  $_POST["g3"] . "</br>"
							. "4th Subject, Grade (FGE): " .  $_POST["g4"] . "</br>"
							. "5th Subject, Grade (FGE): " .  $_POST["g5"] . "</br>"
							. "6th Subject, Grade (FGE): " .  $_POST["g6"] . "</br></br>"
							
							
						    . "Computed GPA: " . ($_POST['g1'] + $_POST["g2"] + $_POST["g3"] + $_POST["g4"] + $_POST["g5"] + $_POST["g6"]) /6 ;
					    }
						
					?>
					
				</div>
			</div>
			<div class="row"> <!-- 2nd row :3-->
				
			</div>
		</div>
		
		
	<body>

</html>