<?php
// MySQL credentials
$db_host = 'localhost';
$db_user = 'filedb';
$db_pass = 'rWJMcrSJJ4PAcLMK';
$db_name = 'filedb';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Show all lines and columns in the table 'legitsoftware' as a spreadsheet
$query = "SELECT * FROM legitsoftware";
$result = $mysqli->query($query);
$num_rows = $result->num_rows;
$num_fields = $result->field_count;
// Print the column names
echo "<table border='1'><tr>";
for ($i = 0; $i < $num_fields; $i++) {
    $field = $result->fetch_field();
    echo "<td>{$field->name}</td>";
}
echo "</tr>";
// Print the rows
for ($i = 0; $i < $num_rows; $i++) {
    $row = $result->fetch_row();
    echo "<tr>";
    for ($j = 0; $j < $num_fields; $j++) {
        echo "<td>{$row[$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>