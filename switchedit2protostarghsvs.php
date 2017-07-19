<?php
defined('JPATH_BASE') or die;
class PlgSystemSwitchEdit2protostarGhsvs extends JPlugin
{
 public function onAfterInitialise()
 {
  $app  = JFactory::getApplication();
  if (!$app->isClient('site'))
  {
   return;
  }
  $input = $app->input;
  if (
   $input->get('view') == 'form'
   // && $input->get('option') == 'com_content'
   && $input->get('layout') == 'edit'
   && (int) $input->get('a_id') > 0
   // && $input->get('joomla_user_state') == 'logged_in'
  ){
   $app->setTemplate('protostar');
  }
 }
}
