<?php
	

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	/* $g1 = $_POST['g1']; 
	$g2 = $_POST['g2'];
	$g3 = $_POST['g3'];
	$g4 = $_POST['g4'];
	$g5 = $_POST['g5'];
	$g6 = $_POST['g6'];
	$grades = $_POST['grades'];

	*/
	
	
	
    $grades = array($_POST['g1'], $_POST['g2'], $_POST['g3'], $_POST['g4'], $_POST['g5'], $_POST['g6']);
	
	$average = array(1.0, 1.5, 2.0, 2.5, 3.0, 3.5, 4.0); 
	
	 $gpa = ($grades[0] + $grades[1] + $grades[2] + $grades[3] + $grades[4] + $grades[5])/6;
	
	$items = array();
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

				<form action="index2.php" method="POST" class="col">
					<h1>Grade Calculator</h1>
				
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required />
					</div>

					<div class="form-group">
						<label>1st Subject, Grade (FGE)</label>
						<input type="number" name="g1" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>2nd Subject, Grade (FGE)</label>
						<input type="number" name="g2" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>3rd Subject, Grade (FGE)</label>
						<input type="number" name="g3" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>4th Subject, Grade (FGE)</label>
						<input type="number" name="g4" class="form-control" required />
					</div>
					
					<div class="form-group">
						<label>5th Subject, Grade (FGE)</label>
						<input type="number" name="g5" class="form-control" required />
					</div>

					<div class="form-group">
						<label>6th Subject, Grade (FGE)</label>
						<input type="number" name="g6" class="form-control" required />
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
                            echo "Student Name: " . $name . "</br></br>";
						

							for ($x = 0; $x < 6; $x++) {

								if($grades[$x] >= 70 && $grades[$x] <=74)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[0] . "</br>";
									
								}
								if($grades[$x] >= 75 && $grades[$x] <=79)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[1] . "</br>";
									
								}
								if($grades[$x] >= 80 && $grades[$x] <=84)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[2] . "</br>";
									
								}
								if($grades[$x] >= 85 && $grades[$x] <=88)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[3] . "</br>";
									
								}
								if($grades[$x] >= 89 && $grades[$x] <=92)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[4] . "</br>";
									
								
								}
								if($grades[$x] >= 93 && $grades[$x] <=96)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[5] . "</br>";
									
								
								}
								if($grades[$x] >= 97 && $grades[$x] <=100)
								{
									echo "Subject " . ($x+1) . ", Grade (FGE): " . $average[6] . "</br>";
									
									
								}
								
								//$items[$x] = $average[$x];
						}
						
						//$gpa = ($items[0] + $items[1] + $items[2] + $items[3] + $items[4] + $items[5]) /6 ;
						//echo "Computed GPA: " . $gpa;
						
						echo "Computed GPA: " . $gpa;	
					}
					
					?>
					
				</div>
			</div>
		</div>
		
		
		
	<body>

</html>
