<?php 
include('header.php');
?>
<title>csvtojson</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="convert.js"></script>
<?php include('container.php');?>
<div class="container">
	<h2>Example: Convert CSV to JSON using JavaScript</h2>	
	<div class="form-group">
		<label for="csvData">CSV Data input</label>
		<textarea id="csvData" class="form-control" rows="6">
			id,first_name,last_name,age,gender,country 
			1,Janifer,Figgins,45,Female,Britain
			2,Susi,Gerhold,43,Female,Canada
			3,Laina,Muirden,34,Female,India
			4,Maurise,Warters,56,Male,China
			5,Malynda,Isaksen,24,Female,Nepal
		</textarea>
	</div>
	<div class="form-group">
		<label for="jsonData">JSON Data Output:</label>
		<textarea id="jsonData" class="form-control" rows="6"></textarea>
	</div>    
    <button id="convertCSV" class="btn btn-success">Convert to JSON</button>		
</div>
<?php include('footer.php');?>


