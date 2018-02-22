<?php


class ControladorCanales
{


    public function ctrGetMarcadores()
    {

        $obj1 = new ControladorCanales();
        $tabla = "markers";
        $xmlresult = '';
        $respuesta = ModeloCanales::mdlGetDataMarket($tabla);
        if (count($respuesta)) {
            $result = $obj1->createXMLfile($respuesta);
        }

        return $result;

    }

    public function createXMLfile($markersArray)
    {

        $filePath = 'markers.xml';
        $dom = new DOMDocument('1.0', 'utf-8');
        $root = $dom->createElement('markers');
        for ($i = 0; $i < count($markersArray); $i++) {

            $markerId = $markersArray[$i]['id'];
            $markerName = $markersArray[$i]['name'];
            $markerAddress = $markersArray[$i]['address'];
            $markerLat = $markersArray[$i]['lat'];
            $markerIng = $markersArray[$i]['lng'];
            $markerType = $markersArray[$i]['type'];

            $marker = $dom->createElement('marker');

            $marker->setAttribute('id', $markerId);
            $marker->setAttribute('name', $markerName);
            $marker->setAttribute('address', $markerAddress);
            $marker->setAttribute('lat', $markerLat);
            $marker->setAttribute('lng', $markerIng);
            $marker->setAttribute('type', $markerType);

            $root->appendChild($marker);

        }

        $respuesta = $dom->appendChild($root);

        return $respuesta;
        // $dom->save($filePath);

    }


}
