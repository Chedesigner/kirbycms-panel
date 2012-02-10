<?php 

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// set the default panle language
c::set('panel.language', 'en');

// set the main color for the panel design
// can be any valid css color definition
c::set('panel.color', 'red');

// allowed mime types for file uploads
c::set('upload.allowed', array(
  'image/jpeg', 
  'image/png', 
  'image/gif',
  'application/pdf',
  'application/gzip',
  'application/zip',
));
    
?>