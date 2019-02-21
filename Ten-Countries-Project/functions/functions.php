<?php

/* 

    Beskrivelse: Her er det er en funskjon som slår sammen tre xml filer til en xml fil, 
    og en funksjon som tar utgangspunkt i den sammenslåtte xml filen og legger på riktig xsl fil og knytter det til riktig land.
        Sist oppdatert: 09.11.2017
            Utviklet av: Joacim, Steffen, Bahaa og Elias
                Kontrollert av: Joacim, Steffen, Bahaa og Elias

*/

function lagXSL($land){

  $targetDom = new DOMDocument();
  $xslt = new XSLTProcessor();
  
  $XSL = new DOMDocument();
  $XSL->load($land);
  $xslt->importStylesheet($XSL);
  
  $targetDom->load("../xml/merged.xml");
  print $xslt->transformToXML($targetDom);
}
function lagmergedXML(){
    
    $xmlFiles = [
        'xml/innbyggertall.xml',
        'https://www.dnb.no/portalfront/datafiles/miscellaneous/csv/kursliste_ws.xml',
        'xml/praktiskinfo.xml'
      ];
      
      $targetDom = new DOMDocument();
      
   
      $rootNode = $targetDom->appendChild(
        $targetDom->createElement('root')
      );
      
      foreach ($xmlFiles as $xmlFile) {
        $importDom = new DOMDocument();
        $importDom->load($xmlFile);
        foreach ($importDom->documentElement->childNodes as $node) {
          $rootNode->appendChild($targetDom->importNode($node, TRUE));
        }
      }
      
      $targetDom->save("xml/merged.xml");
    }
?> 