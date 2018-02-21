<?php
class ControladorCanales {

    public function ctrGetMarcadores(){
        $tabla = "markers";

        $respuesta = ModeloCanales::mdlGetDataMarket($tabla);
        print_r($respuesta);

        // Start XML file, echo parent node
        echo '<markers>';
        // Iterate through the rows, printing XML nodes for each
       foreach ($respuesta as $row){
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









        //return json_encode($respuesta);

    }

    function parseToXML($htmlStr)
    {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }
}