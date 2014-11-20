<?php
mysql_connect(
"localhost",
"root"
);
mysql_select_db("world");


//$LOOKUP = $_REQUEST['lookup'];
$ALL = $_REQUEST['all'];
$FORMAT = $_REQUEST['format'];

/*
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
//print $results;
# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}
*/

if ($ALL == "true") {
    $results = mysql_query("SELECT * FROM countries");
    print $results;
} elseif ($ALL != "") {
    $results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$ALL%';");
}
while ($row = mysql_fetch_array($results)) {
    ?>
    <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
    <?php
}
?>