<?php
//If BASEPATH is not defined, simply exit.
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Language_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function load()
    {
        //if isset language in session
        if ($this->session->userdata('cf_language')) {
            $this->config->config['language'] = $this->session->userdata('cf_language');
        }
    }
}
