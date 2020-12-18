<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');

class Language_switcher extends MY_Controller
{
   public function __construct() 
   {
       parent::__construct();
   }
   
   /* 
   *    function switches current website language
   *    and redirects to last page
   */
   function switch_lang($language = "") 
   {
       $language = ($language != "") ? $language : "persian";
       $this->session->set_userdata('site_lang', $language);
       
       $pervious_url = $this->session->userdata('previous_url');

       redirect($pervious_url);
   }
}
