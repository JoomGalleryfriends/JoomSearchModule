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

// no direct access
defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
?>

CHANGELOG Module JoomSearch for JoomGallery

Legende / Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

--------------------     Version 3.0.2      -----------------------
20210330
# Loading JoomInterface class in helper.php to avoid error
  when using the joomla updater

--------------------     Version 3.0.1      -----------------------
20190403
^ Change update server

20181213
+ Hint when JoomSearch plugin is not enabled

----------------------------------------------------------------------------------
                               Version 3.0 BETA
----------------------------------------------------------------------------------
20130318
# Option 'Synchronize with JoomGallery view' did not work

20130316
+ new baseURL option (JS)
^ AJAX search results were not shown in Beez3 template of Joomla! 3

20130226
^ DS -> '/'
+ Use Bootstrap classes in XML file
^ JS adaptions
^ Template adaptions, use of Bootstrap classes
^ Code style
^ STRICT standards
^ JDatabaseQuery
+ Layout option added in module configuration
- unused configuration options
^ minor changes
+ Check if JoomGallery installed
+ JoomGallery version check

--------------------     Version 2.0 BETA2 20120312        -----------------------
20120312
# results window not visible

--------------------          Stable 1.5.7 2011xxxx        -----------------------
20110402
# 'no results' in some yootheme templates
+ option to search per AJAX and showing the search results in window
  or show the results in standard view of Joomla!

--------------------          Stable 1.5.6 20101030        -----------------------
20101030
+ support of mootools 1.2.4

--------------------          Stable 1.5.5 20100728        -----------------------
20100814
# several XHTML errors

20100315
^ scroll to top when fading out the results window
^ modifications for template ja_purity2

20091007
- param usrcatchoose
# this.jsupcatorimg is null in javascript if 'defcatorimg' deacticated
# link on images in rearch results not working

20091004
+ synchronized search in actual shown category or detail view of JoomGallery

20090822
^ CSS background #fff removed

20090821
# use of vertical scrollbar invokes dragging of window
# starting the search without search button and pressing enter doesn't work
^ rewritten JS-Code, now all functions in class
^ window.addEvent('load') to fire event for options removed, because javscripts
  from some templates overwrite this event, now direct call of object.initoptions()
# restore of non existing CSS background in beez doesn't work

20090822
# IE doesn't work when dragging the results window or when clicking on link inside
^ Results window opens now first at (horizontal) middle of site
^ change 'load' to 'domready'

22090818
^ start code for js now in helper.php to include it in head for
  better compatibility with other templates
+ results window now dragable

--------------------          BETA        -----------------------
20090816
^ additional hidden input 'limit' = 0 to avoid pagination in results html
  coming from com_search, deletion of pagination in js removed
#+ setting the cookie with default values doesn't work when setting it in
  helper.php, added providing the 'u*' config variables with default values
# missing 'px' in CSS setting 'width' of search input

20090814
# no definition of height in CSS for results window
+ settings in backend are used by default in user panel settings
+ settings in user panel persists during the browser session
  cookie based
^ deletion of pagination in results window

20090811
# no activated user panel leads to a non styled window with search results
^ parameters activated for
  - width of input box (0=no css setting)
  - width of results window (0=no css setting)
  - height of results window (0=no css setting)
^ JS rewritten to 'class' and dynamic CSS with added module id
  means: the module can now be used in multiple instances at the same page
^ include of mod_joomsearch.css deactivated
^ language dependent output of 'No results'
# some bugs in language constants

20090809
+ dynamic hiding of not effective options in user panel
+ parameter joomsearchsubcats, search in subcategories or not
  if search for catid activated
+ prevent a search with empty entry
+ close the results window by clicking in browser window
+ automatic positioning of the results window right beside the form
  even if resizing the browser window

20090718
! initial ALPHA version