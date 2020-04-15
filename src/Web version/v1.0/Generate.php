<?php

$filename = 'uploads/marker.csv';

// The nested array to hold all the arrays
$markers = []; 

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $markers[] = $data;		
  }

  // Close the file
  fclose($h);
}

// Display the code in a readable format


include 'TC.php';
include 'Macro.php';
?>
<!DOCTYPE html>
<html>
<body>
<h1>Done</h1>
    <form action="Download.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="to download page" name="submit">
    </form>
    </body>
</html>