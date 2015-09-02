<?php if (!defined('APPLICATION')) exit();
//Original Plugin by @peregrine, Redistributed by VrijVlinder with Peregrine's permission.
 
$PluginInfo['ActivityPurge'] = array(
   'Name' => 'ActivityPurge',
   'Description' => 'Purge the Activity Table of old entries, but keeps wall comments',
   'Version' => '1.4',
   'SettingsUrl' => '/dashboard/plugin/activitypurge',
   'SettingsPermission' => 'Garden.Settings.Manage', 
   'License'=>"GNU GPL2",
   'Author' => "VrijVlinder"
);


class ActivityPurgePlugin extends Gdn_Plugin {
 
  public function PluginController_ActivityPurge_Create($Sender) {
        $Sender->Title('Activity Purge');
        $Sender->AddSideMenu('plugin/activitypurge');
        $Sender->Form = new Gdn_Form();
        $Validation = new Gdn_Validation();
        $ConfigurationModel = new Gdn_ConfigurationModel($Validation);
        $ConfigurationModel->SetField(array(
            'Plugins.ActivityPurge.DCount',
        ));
        $Sender->Form->SetModel($ConfigurationModel);


        if ($Sender->Form->AuthenticatedPostBack() === FALSE) {
            $Sender->Form->SetData($ConfigurationModel->Data);
        } else {
            $Data = $Sender->Form->FormValues();
        $delMonths = Gdn::Config("Plugins.ActivityPurge.DCount");
            if ($Sender->Form->Save() !== FALSE)
               $delMonths = Gdn::Config("Plugins.ActivityPurge.DCount");
               $this->PurgeActivityTableCount($delMonths); 
               $Sender->StatusMessage = T("Your settings have been saved and entries older than $delMonths months have been purged from the log");
        }

        $Sender->Render($this->GetView('activitypurgeset.php'));
 }


   public function Base_GetAppSettingsMenuItems_Handler($Sender) {
      $Menu = &$Sender->EventArguments['SideMenu'];
      $Menu->AddLink('Forum', 'Purge Activity Table', 'plugin/activitypurge', 'Garden.Settings.Manage');
   }



 public function PurgeActivityTableCount($delMonths){
     
         //protect against less than a years deletion
         if ($delMonths < 12)  $delMonths = 12;
         $SQL = Gdn::SQL();
         
        
        $ACtID = $SQL->Select('ActivityTypeID')
               ->From ('ActivityType') 
               ->Where (array('Name' => 'WallComment'))
               ->Get()
               ->FirstRow('', DATASET_TYPE_ARRAY)
               ->ActivityTypeID;
                
           
         
         $delMonths = "-" . $delMonths . " months";
         $delm = Gdn_Format::ToDateTime(strtotime($delMonths));
         $SQL->Delete('Activity', array('DateInserted <' => Gdn_Format::ToDateTime(strtotime($delMonths)),  'ActivityTypeID <>' => $ACtID ));
  
 }
 
  public function Setup() {
        
    }
    
    }
