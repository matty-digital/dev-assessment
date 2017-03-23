<?php
  // This will grab and decode the JSON data from the provided url
  function getJSONdata() {
    $url = "https://m.lowes.com/CatalogServices/product/nvalue/v1_0?nValue=4294857975&maxResults=6&showURL=1&rollUpVariants=1&showUrl=true&storeNumber=0595&priceFlag=rangeBalance&showMarketingBullets=1";
    $response = file_get_contents($url);
    // Make the JSON a php array
    $response = json_decode($response, true);
    $products = $response['productList'];

    // If for some reason we don't get a response, we'll create an error to display
    if(count($products)) {
      // Pare down the response to be easier on the front end and get what we want for the demo
      foreach($products as $prod) {
        $data[] = array(
            "brand" => $prod['brand'],
            "desc" => $prod['description'],
            "bullets" => $prod['marketingBullets'],
            "price" => $prod['pricing']['price'],
            "images" => $prod['imageUrls']
        );
      }
      return $data;
    }
    return FALSE;

  }
