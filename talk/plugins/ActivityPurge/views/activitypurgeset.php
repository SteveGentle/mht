<?php if (!defined('APPLICATION')) exit();
echo $this->Form->Open();
echo $this->Form->Errors();
?>


<h1><?php echo Gdn::Translate('Activity Purge'); ?></h1>


<table class="AltRows">
    <thead>
        <tr>
            <th><?php echo Gdn::Translate('Option'); ?></th>
            <th class="Alt"><?php echo Gdn::Translate('Description'); ?></th>
        </tr>
    </thead>
    <tbody>
       
         
        
            <tr>
            <td class="Alt">
<?php echo Gdn::Translate('delete activity table entries older than:'); ?>   
            </td>
          
            <td>

                <?php
                $Options = array('12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','18' => '18','20' => '20', '24' => '24','30' => '30', '36' => '36','48' => '48','60' => '60','72' => '72');
                $Fields = array('TextField' => 'Code', 'ValueField' => 'Code');
                echo $this->Form->DropDown('Plugins.ActivityPurge.DCount', $Options, $Fields);
                echo $this->Form->Label(' months', 'Plugins.ActivityPurge.DCount');
                ?>
         </td>
        </tr> 
         
         
      <tbody>         
    </table>
               <h2> Please Backup your Database Prior to Use.<h2>
               <h3> Note:  Upon clicking "Purge Old Activity Records", entries will be permanently purged.  Wall comments are preserved and will not be deleted </h3>              
               <h3> Selecting "All" will clear all entries from activity table. </h3>
              <br />
<?php echo $this->Form->Close('Purge Old Activity Records');




