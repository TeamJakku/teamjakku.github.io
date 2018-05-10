 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>



<?php
include "db_connection.php";
$keywordfromform = $_GET["keyword"];

echo"<h2>Show all books with the word $keywordfromform in title</h2>";
$sql = "SELECT *  FROM book_table WHERE BookTitle LIKE '%".$keywordfromform ."%'";
$result = $mysqli->query($sql);

?>
<div id="accordion">
<?php
if($result->num_rows>0){
	//output data of each row
	while($row = $result->fetch_assoc()){
		
		echo "<h3>$row[BookTitle]</h3>";
		echo "<div><p>$row[Author]</p><p>$row[ISBNum]</p><p>$row[Description]</p><p>$row[Condition]</p></div>";
	}
}else{
	echo "0 results";
}

?>
</div>