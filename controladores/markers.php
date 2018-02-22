
<?php




require_once "../modelos/conexion.php";



$stmt = Conexion::conectar()->prepare("select * from markers");
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($response)){

    createXMLfile($response);

}




function parseToXML($htmlStr)
{
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

function createXMLfile($markersArray){

    $filePath = 'markers.xml';

    $dom     = new DOMDocument('1.0', 'utf-8');

    $root      = $dom->createElement('markers');

    for($i=0; $i<count($markersArray); $i++){

        $markerId        =  $markersArray[$i]['id'];

        $markerName      =  $markersArray[$i]['name'];

        $markerAddress     =  $markersArray[$i]['address'];

        $markerLat      =  $markersArray[$i]['lat'];

        $markerIng  =  $markersArray[$i]['lng'];
        $markerType  =  $markersArray[$i]['type'];


        $marker = $dom->createElement('marker');

        $marker->setAttribute('id', $markerId);
        $marker->setAttribute('name', $markerName);
        $marker->setAttribute('address', $markerAddress);
        $marker->setAttribute('lat', $markerLat);
        $marker->setAttribute('lng', $markerIng);
        $marker->setAttribute('type', $markerType);



        $root->appendChild($marker);

    }

   $respuesta =  $dom->appendChild($root);

    return $respuesta;
   // $dom->save($filePath);

}







?>

