<?php
require_once(APPPATH . '/libraries/CIPHPUnit_Model.php');
class Example_tests_model extends CIPHPUnit_Model
{
   function __construct() {
       parent::__construct();
   }
   function test__example_one()
   {
       $this->assert_equals(1,1); 
   }
   function test__example_two()
   {
       $this->assert_equals(1,1); 
   }
}
