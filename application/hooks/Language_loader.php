<?php
class Language_loader
{
    /*
    *   this function loads needed language files
    *   based on set language and lang_file
    *   which are already available in session array
    */
   function initialize() 
   {
       $ci =& get_instance();
       $ci->load->helper('language');
       $siteLang = $ci->session->userdata('site_lang');
       $langFile = $ci->session->userdata('lang_file');
       if(!$langFile){
          $langFile = "basic";
       }

       if ($siteLang) {
           $ci->lang->load($langFile,$siteLang);
       } else {
           $ci->lang->load($langFile,'persian');
       }
   }
}