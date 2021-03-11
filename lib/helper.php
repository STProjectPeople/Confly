<?php

namespace App\Helper;

function is_dark_hero() {
  if ( is_page_template( 'template-enterprise.php' ) ) {
    return true;
  }

  return false;
}

function show_contact_form() {
  if ( is_page_template( 'template-kontakt.php' )
       || is_singular( 'case_study' )
  ) {
    return true;
  }

  return false;
}
