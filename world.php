<?php

mysql_connect("localhost","root");
mysql_select_db("world");


$LOOKUP = $_POST['lookup'];
$ALL = $_POST['all'];
$FORMAT = $_POST['format'];

if ($ALL == "true") {
    $results = mysql_query("SELECT * FROM countries");
    //print $results;
} elseif ($LOOKUP == "") {
    echo "Please enter a country or select all to see country information.";
} elseif (strlen($LOOKUP) > 0) {
    $results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
}

while ($row = mysql_fetch_array($results)) {
    if ($FORMAT == "xml") {
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>";
        echo "<countrydata>";
        echo "<country>";
        echo "<name>" . $row['name'] . "</name>";
        echo "<ruler>" . $row['head_of_state'] . "</ruler>";
        echo "</country>";
        echo "</countrydata>";
    } else {
        print "<li>" . $row["name"] . ", ruled by " . $row["head_of_state"] . "</li>";
    }
}

?>