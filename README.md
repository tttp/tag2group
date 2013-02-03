tag2group
=========

CiviCRM extension to add a contact to a group when tagged

Installation
----------

1) add this extension into your extension folder in civicrm
2)  in your civicrm.settings.php add 
$GLOBALS['settings']['tag2group'] = array (idtag=>idgroup,tagid2=>groupid2...);

and voila, when adding one of the tag, it will add the contact to the group too
