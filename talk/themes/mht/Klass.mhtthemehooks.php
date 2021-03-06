<?php if (!defined('APPLICATION')) exit();
class CustomThemeHooks extends Gdn_Plugin{
   	// function to use jquery 2+ with bootstrap instead of vanilla's version
   	// source: http://vanillaforums.org/discussion/26755/running-newer-version-of-jquery-1-9-compatability-layer

    public function Base_Render_Before($Sender){
        // set variable to see if we are on test - read from config.php
        // see http://docs.vanillaforums.com/developers/configuration/using for details
        // the config key on test should read:  $Configuration['MHT']['Environment']['Test'] = TRUE;
        $ServerIsTest = C('MHT.Environment.Test', FALSE);

        //remove core jquery
        $Sender->RemoveJsFile('jquery.js');
        
        //root relative location of theme
        //$ThemeLoc = CombinePaths(array(Gdn::Request()->WebRoot(), '/themes', $Sender->Theme));
        // using the original CombinePath() function resulted in a double /talk/talk/ url
        $ThemeLoc = CombinePaths(array('themes', $Sender->Theme));

        //add new jquery-libs or jquery-libs.min
        //the jquery-libs(.min).js files are concatenated files generated by grunt.
        // it contains: jquery, jquery-migrate, and jquery-patch

        if ($ServerIsTest) {
            // if the config says it is in a test environment, serve the uncompressed libs
            $Sender->Head->AddScript($ThemeLoc.'/js/jquery-libs.js');
        } else {
            // otherwise send the minified file
            $Sender->Head->AddScript($ThemeLoc.'/js/jquery-libs.min.js');
        }

    }
}