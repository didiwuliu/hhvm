<?php
function foo ($a) {
   try {
     throw new Exception("ex");
   } catch (PdoException $e) {
     die("error");
   } catch (Exception $e) {
     return 2;
   } finally {
     return 3;
   }
   return 1;
}

var_dump(foo("para"));
?>
