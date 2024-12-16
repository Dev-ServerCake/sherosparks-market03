<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Hook {
    public function disable_cache() {
        // Get the CodeIgniter instance
        $CI =& get_instance();
        
        // Set cache control headers
        $CI->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $CI->output->set_header("Pragma: no-cache");
        $CI->output->set_header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    }
}