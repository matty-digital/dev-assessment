<?php
  // This will grab and decode the JSON data from the provided url
  function getJSONdata() {
    $url = "http://m.lowes.com/CatalogServices/product/nvalue/v1_0?nValue=4294857975&maxResults=6&showURL=1&rollUpVariants=1&showUrl=true&storeNumber=0595&priceFlag=rangeBalance&showMarketingBullets=1";
    $response = file_get_contents($url);
    $response = json_decode($response, true);

    return $response;
  }

  // Pare down the response to be easier on the front end and get what we want for the demo
  function parseJSONdata() {
    $data = getJSONdata();

    var_dump($data);
  }

?>
