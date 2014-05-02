<?php defined('BASEPATH') OR exit('No direct script access allowed');
abstract class CIPHPUnit_Model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->assert_results = NULL;
        $this->failed_assertion = false; 
    }

    function pre() { }
    function post() { }

    function assert_true($assertion) {
        if($assertion) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true; 
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_false($assertion) {
        if($assertion) {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        } else {
            $this->assert_results[] = array('success' => true); 
        }
    }

    function assert_true_strict($assertion) {
        if($assertion === TRUE) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_false_strict($assertion) {
        if($assertion === FALSE) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_equals($base, $check) {
        if($base == $check) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_not_equals($base, $check) {
        if($base != $check) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_equals_strict($base, $check) {
        if($base === $check) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_not_equals_strict($base, $check) {
        if($base !== $check) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_empty($assertion) {
        if(empty($assertion)) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }

    function assert_not_empty($assertion) {
        if(!empty($assertion)) {
            $this->assert_results[] = array('success' => true); 
        } else {
            $this->failed_assertion = true;
            $this->assert_results[] = array('success' => false,  
                                            'message' => $this->_get_trace_array(debug_backtrace()));
        }
    }
    private 
    function _get_trace_array($trace)
    {
        $traceinfo = "No Debug Information available.";

        if(count($trace) > 0)
        {
            $traceinfo = array('file' => $trace[0]['file'], 
                               'line' => $trace[0]['line'],
                               'function' => $trace[0]['function'],
                               'parent_class' => $trace[0]['class'], 
                               'calling_class' => $trace[1]['class'], 
                               'calling_function' => $trace[1]['function']
                               );
        }
        return $traceinfo; 
    }
}
