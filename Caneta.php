<?php

require_once './select.php';
require_once './Acervo.php';

//$res = new select();

//$res->SelectAll();

//$resp= select::SelectAll();

//echo '<pre>';
$ArrayFrontEnd = select::SelectAll();

echo $ArrayFrontEnd[0]["titulo"];

foreach ($ArrayFrontEnd as $key=>$item) {
    
    
        echo '<br>';
    echo $ArrayFrontEnd[$key]["titulo"];
    
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($ArrayFrontEnd);
      echo '</pre>';
//var_dump($ArrayFrontEnd);
//echo '</pre>';

//echo '<pre>';
  //  var_dump($ArrayFrontEnd);
   // echo '</pre>';
    //foreach ($ArrayFrontEnd as $key => $item) {
    
      //  echo $item;
//}
    
    


//$inst = new select();
//$inst->InsertEditora(50,"Darkside Books");

//$res = new select();
//$res->InsertLivro(420, 'Coração Assombrado', 'Stephen King', 2017, 41.90, 25, 1, 50);

//$res = new select();
//$res->SelectLivro(100);

?>