<?php

/* 
*   function sets lang_file name in session
*   to be available for LanguageLoader to load lang files
*/
function load_lang_file($file_name = "basic"){
    $ci = & get_instance();
    $ci->session->set_userdata('lang_file', $file_name);
}