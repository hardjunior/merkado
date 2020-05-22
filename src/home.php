<?php

// namespace Src;

class Home
{
   public function __construct()
   {
       echo "this is the home page";
       $this->_other();
   }
   protected function _other()
   {
       echo "this is the other function, lol";
   }
    
}
