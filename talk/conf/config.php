<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.9';

// Database
$Configuration['Database']['Name'] = 'mht5_vf219';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = 'root';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'Miami Hawk Talk';
$Configuration['Garden']['Cookie']['Salt'] = 'X6ZKXKRVHS';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'Miami Hawk Talk';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.9';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Simplex';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_simplex';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.9';

// Last edited by Steve (127.0.0.1)2015-06-03 01:58:27