<?php
/****************************************************************************************\
**   Module JoomSearch for JoomGallery                                                  **
**   By: JoomGallery::ProjectTeam                                                       **
**   @package JoomGallery                                                               **
**   @copyright JoomGallery::Project Team                                               **
**   Released under GNU GPL Public License                                              **
**   License: http://www.gnu.org/copyleft/gpl.html or have a look                       **
**   at administrator/components/com_joomgallery/LICENSE.TXT                            **
\****************************************************************************************/

// No direct access
defined('_JEXEC') or die('Restricted access');

$jg_ifpath     = JPATH_ROOT.'/components/com_joomgallery/interface.php';
$joomsearchObj = null;

if(file_exists($jg_ifpath))
{
  // Include JoomGallery's interface class
  require_once $jg_ifpath;

  // Include the helper class only once
  require_once dirname(__FILE__).'/helper.php';

  // Id of actual module instance
  $moduleid = $module->id;

  // Create helper object
  $joomsearchObj = new modJoomSearchHelper($params, $moduleid);
}

// Show the module
require JModuleHelper::getLayoutPath('mod_joomsearch', $params->get('layout', 'default'));