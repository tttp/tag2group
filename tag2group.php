<?php

require_once 'tag2group.civix.php';

function tag2group_civicrm_post  ($op, $objectName, $objectId, &$objectRef ) {
  if ($objectName != 'EntityTag' && is_array($objectRef) && $objectRef[1] == "civicrm_contact")
    return;
  if (!array_key_exists($objectId,$GLOBALS['settings']['tag2group']))
    return;
  if ($op == 'create') {
    $gid = $GLOBALS['settings']['tag2group'][$objectId];
    foreach ($objectRef[0] as $cid) {
      $r=civicrm_api ("GroupContact","create",array ("version"=>3, "group_id"=> $gid, "contact_id"=>$cid));
    }
    return;
  }
  if ($op == 'create') { 
    //do something on delete?
  }
//    die ("tot $op $objectNam $objectName");
}

/**
 * Implementation of hook_civicrm_config
 */
function dummytag2group_civicrm_config(&$config) {
die ("toto");
  _tag2group_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function dummytag2group_civicrm_xmlMenu(&$files) {
  _tag2group_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function dummytag2group_civicrm_install() {
  return _tag2group_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function tag2group_civicrm_uninstall() {
  return _tag2group_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function tag2group_civicrm_enable() {
  return _tag2group_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function tag2group_civicrm_disable() {
  return _tag2group_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function tag2group_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _tag2group_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function tag2group_civicrm_managed(&$entities) {
  return _tag2group_civix_civicrm_managed($entities);
}
