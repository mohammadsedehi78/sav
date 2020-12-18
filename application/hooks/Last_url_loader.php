<?php
class Last_url_loader
{
   function set_previous_uri()
   {
      $ci = & get_instance();  
      $ci->session->set_userdata('previous_url', current_url());
   }
}