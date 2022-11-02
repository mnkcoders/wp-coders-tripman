<?php namespace CODERS\TripMan;

defined('ABSPATH' ) or die;

/**
 * 
 */
final class AdminController extends CODERS\Framework\Request{

    protected final function __construct($endpoint, $route = '') {
        
        parent::__construct($endpoint, $route);
    }
    
}


