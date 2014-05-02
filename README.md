ci-php-unit
===========

unit testing framework for php, and more specifically codeigniter

Features 

* Meant to be similar to C++ Google Unit Test
* pre and post test suite functions, will run before and after the entire test suite has ran 
* pre_test_case, and post_test_case functions, will be run before and after each test case 
* ability to separate tests out into models, allowing you to load and run from anywhere
* links to drill-down into specific units
* links to drill down into specific test cases 
* ability to run one or all of your tests 
* ability to exclude tests from the controller level 

CI Steps 

1) Place the two libraries in the libaries directory

    * Mostly all of the code lives here and drives everything you need to have 
      a successful unit testin environment. 
 
2) Place the views in the views directory 

    * Modify as you see fit, this is just an example of how to do this. 

3) Place run_all_tests.php in the Controllers directory 

    * This will run all tests in the model directory you specify

* TODO get an example model that lives in models/test
* TODO update steps to run tests from the browser/CLI. 
* TODO screen shots 
