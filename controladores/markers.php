<?php
header('Content-Type:text/html');
?>

<?php

require_once "../modelos/conexion.php";

function parseToXML($htmlStr)
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

$stmt = Conexion::conectar()->prepare("select * from markers");
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($response);



// Start XML file, echo parent node
echo '<markers';



       foreach ($response as $row){

            // Add to XML document node
           echo '<marker ';
           echo 'name="' . parseToXML($row['name']) . '" ';
           echo 'address="' . parseToXML($row['address']) . '" ';
           echo 'lat="' . $row['lat'] . '" ';
           echo 'lng="' . $row['lng'] . '" ';
           echo 'type="' . $row['type'] . '" ';
           echo '/>';
        }

// End XML file
echo '</markers>';

