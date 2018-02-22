<?php


class ControladorCanales {




    public function ctrGetMarcadores(){

        $obj1 = new ControladorCanales();

        $tabla = "markers";
        $xmlresult='';

        $respuesta = ModeloCanales::mdlGetDataMarket($tabla);









        // Start XML file, echo parent node
        $xmlresult = '<markers ';



//       foreach ($respuesta as $row){
//
//            // Add to XML document node
//           $xmlresult= $xmlresult. '<marker ';
//           $xmlresult= $xmlresult. 'name="' . $obj1->parseToXML($row['name']) . '" ';
//           $xmlresult= $xmlresult. 'address="' . $obj1->parseToXML($row['address']) . '" ';
//           $xmlresult= $xmlresult. 'lat="' . $row['lat'] . '" ';
//           $xmlresult= $xmlresult. 'lng="' . $row['lng'] . '" ';
//           $xmlresult= $xmlresult. 'type="' . $row['type'] . '" ';
//           $xmlresult= $xmlresult. '/>';
//        }
//
//
//        $xmlresult= $xmlresult. '</markers>';












        return true;

    }

    public  function parseToXML($htmlStr)
    {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }



}
