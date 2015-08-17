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
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Tagging'] = TRUE;
$Configuration['EnabledPlugins']['Flagging'] = TRUE;
$Configuration['EnabledPlugins']['Ignore'] = TRUE;
$Configuration['EnabledPlugins']['Pockets'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['cleditor'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Miami Hawk Talk';
$Configuration['Garden']['Cookie']['Salt'] = 'X6ZKXKRVHS';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LeP_QcTAAAAADz0V2eCUPuK6gnc6xm2oRNm8uFm';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LeP_QcTAAAAAOfCONQOoqr2o8tbyrpEGli4K3e1';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Miami Hawk Talk';
$Configuration['Garden']['Email']['SupportAddress'] = 'no-reply@miamihawktalk.com';
$Configuration['Garden']['Email']['UseSmtp'] = FALSE;
$Configuration['Garden']['Email']['SmtpHost'] = '';
$Configuration['Garden']['Email']['SmtpUser'] = '';
$Configuration['Garden']['Email']['SmtpPassword'] = '';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = '';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.9';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['HomepageTitle'] = 'Miami Hawk Talk';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['Locale'] = 'en-CA';
$Configuration['Garden']['GuestTimeZone'] = 'America/Detroit';
$Configuration['Garden']['EditContentTimeout'] = '3600';
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';

// MHT
$Configuration['MHT']['Environment']['Test'] = TRUE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['Flagging']['UseDiscussions'] = FALSE;
$Configuration['Plugins']['Flagging']['CategoryID'] = '27';

// Routes
$Configuration['Routes']['DefaultController'] = array('discussions', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.9';
$Configuration['Vanilla']['Categories']['Use'] = TRUE;
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = '1';
$Configuration['Vanilla']['Categories']['HideModule'] = '1';
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = FALSE;
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = FALSE;

// Yaga
$Configuration['Yaga']['Version'] = '1.0.3';

// Last edited by Steve (127.0.0.1)2015-08-17 13:31:15