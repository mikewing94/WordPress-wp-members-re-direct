<?php

//Registration script
//Sensei lessons example

add_action( 'wpmem_post_register_data', 'my_reg_hook' );
function my_reg_hook( $fields ) {

   $registerid = $fields['ID'];
   $userrole = $fields['induction_type'];

   //Get a users info and change their role
   //If user picked X role then assign X role

   if ($userrole === 'contractor') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('contractor');

	       //Redirect straight to visitors induction
         header("Location: ../lesson/visitors/");
         die();
   }
   
   else if ($userrole === 'site') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('site_inductee');

         //Redirect straight to site induction
         header("Location: ../lesson/introduction/");
         die();
   }
   
   else if ($userrole === 'driver') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('driver');

         //Redirect straight to drivers induction
         $driveurl = "Location: ../lesson/vpi-immingham-vehicle-driver-induction/";
         header($driveurl);
         die();
   }

   else if ($userrole === 'Outage CDM') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('site_inductee');

	       //Redirect straight to CDM induction
         header("Location: ../lesson/cdm-main-requirements/");
         die();
   }

   else if ($userrole === 'Steam Turbine Outage 2017') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('site_inductee');

	       //Redirect straight to CDM induction
         header("Location: ../lesson/clean-conditions-presentation/");
         die();
   }

   // Note this is an action, so nothing needs+ to be
   // returned from the function.
   return;
}
?>
