<?php


function is_development_env()
{
   if( defined('APP_ENVIRONMENT') && (APP_ENVIRONMENT == 'development'))
   {      
      return true;
   }

   return false;
}


if ( ! function_exists('writelog')) 
{
   function writelog( $log )  
   {
      if( ! is_development_env())
      {
         return;
      }

      if ( is_array( $log ) || is_object( $log ) ) 
      {
         error_log( print_r( $log, true ) );
      } 
      else 
      {
         error_log( $log );
      }
   }
}

if( ! function_exists('bench')) {
   function bench($p='')
   {
      if( ! is_development_env())
      {
         return;
      }

      static $time_start;         
      if( empty($p))
      {
         $time_start = microtime(true);
      }
      else
      {
         $total = microtime(true) - $time_start;
         writelog( $total.' s');
      }
   }
}


if(  ! function_exists('debug_string_backtrace'))
{
   function debug_string_backtrace() 
   {
      ob_start();

      debug_print_backtrace();
      $trace = ob_get_contents();
      
      ob_end_clean();

      return $trace;
   }
}
