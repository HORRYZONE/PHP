<?php
$record = array(
“Ali” => array(
"ID" => 1,
"Salary" => 1000,
“Phone” => 123
),
“Abu” => array(
"ID" => 2,
"Salary" => 1800,
“Phone” => 124
),
“Ahmad” => array(
"ID" => 3,
"Salary" => 2000,
“Phone” => 125
)
);
foreach($record as $row){
echo $row["ID"]. " " . $row["Salary"]
. " ". $row["Phone"]. "<br>";
}
?>