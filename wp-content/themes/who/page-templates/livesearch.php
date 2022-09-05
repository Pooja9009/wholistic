<?php
   $xml_doc = new DOMDocument();
   $xml_doc->load('persons.xml');

   $x=$xml_doc->getElementsByTagName('name');
   
   $q = $_GET['q'];
   $result = '';
   foreach($x as $node) {
       if (stripos("{$node->nodeValue}", $q) !== false) {
           $result .= "{$node->nodeValue}";
       }
   }

  // Set $response to "No records found." in case no hint was found
  // or the values of the matching values
   if ($result == '')
       $result = 'No records found.';

  //show the results or "No records found."
   echo $result;
?>