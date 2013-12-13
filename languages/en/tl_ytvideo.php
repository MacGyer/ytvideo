<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  pluspunkt coding 2012 
 * @author     Christoph Erdmann <info@pluspunkt-coding.de> 
 * @package    ytvideo 
 * @license    GNU/LGPL 
 * @filesource
 */
 

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['title'] 					= array('Title', 'Specify the title of the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['description'] 			= array('Description', 'You can use HTML tags to format the description.');
$GLOBALS['TL_LANG']['tl_ytvideo']['videoId']				= array('Video-ID', 'The 11 character log video ID. Marked as bold is the ID: http://www.youtube.com/watch?v=<b>X1FFG3ixM-o</b>.');
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide'] 				= array('Autohide', 'Defines whether and how the controls are automatically slided out when playing the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['controls'] 				= array('Controls', 'Defines whether the player controls are displayed.');
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay'] 				= array('Autoplay', 'Defines the automatic playback of the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop'] 				= array('Loop', 'Defines whether the initial video is played in a loop.');
$GLOBALS['TL_LANG']['tl_ytvideo']['rel'] 					= array('Related Videos', 'Defines whether related videos are displayed at the end of the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['color']	 				= array('Color', 'Defines the color of the progress bar.');
$GLOBALS['TL_LANG']['tl_ytvideo']['theme'] 					= array('Theme', 'Defines the general color of the player.');
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo'] 				= array('Video Info', 'Defines whether video information like title and user are displayed while playing.');
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding'] 		= array('Branding', 'Deactivate the Youtube branding. The Youtube logo and header are not displayed.');
$GLOBALS['TL_LANG']['tl_ytvideo']['width'] 					= array('Width', 'The width of the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['height'] 				= array('Height', 'The height of the video.');
$GLOBALS['TL_LANG']['tl_ytvideo']['cssClass']    			= array('CSS Class', 'Here you can enter one or more classes.');
$GLOBALS['TL_LANG']['tl_ytvideo']['published']    			= array('Publish', 'Make the video publicly visible on the website.');
$GLOBALS['TL_LANG']['tl_ytvideo']['start']        			= array('Show from', 'Do not show the video on the website before this day.');
$GLOBALS['TL_LANG']['tl_ytvideo']['stop']         			= array('Show until', 'Do not show the video on the website on and after this day.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['video_legend'] 			= 'Video Data';
$GLOBALS['TL_LANG']['tl_ytvideo']['title_legend'] 			= 'Video Title and Description';
$GLOBALS['TL_LANG']['tl_ytvideo']['behaviour_legend'] 		= 'Video Behaviour';
$GLOBALS['TL_LANG']['tl_ytvideo']['display_legend'] 		= 'Display Settings';
$GLOBALS['TL_LANG']['tl_ytvideo']['expert_legend'] 			= 'Expert Settings';
$GLOBALS['TL_LANG']['tl_ytvideo']['publish_legend'] 		= 'Publish Settings';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide_options'] = array( 
	2		=> 'Slide out progress bar, display controls',
	1		=> 'Slide out all elements',
	0		=> 'Display all elements'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['controls_options'] = array( 
	2		=> 'Display conrols, Flash Player loads on start',
	1		=> 'Display controls, Flash Player loads immediately',
	0		=> 'Do not display controls'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay_options'][1] = 'Activate Autoplay'; 
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop_options'][1] = 'Activate Loop';
$GLOBALS['TL_LANG']['tl_ytvideo']['rel_options'][1] = 'Show related videos at the end of the video';
$GLOBALS['TL_LANG']['tl_ytvideo']['color_options'] = array( 
	'red'	=> 'red',
	'white'	=> 'white'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['theme_options'] = array( 
	'light'	=> 'light',
	'dark'	=> 'dark'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo_options'] = array( 
	1	=> 'Activate Video Info'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding_options'] = array( 
	1	=> 'Deactivate Youtube-Branding'
);

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['new']        = array('New Video', 'Create a new Video');
$GLOBALS['TL_LANG']['tl_ytvideo']['show']       = array('Video Details', 'Show the details of Videos ID %s');
$GLOBALS['TL_LANG']['tl_ytvideo']['edit']       = array('Edit Video', 'Edit Video ID %s');
$GLOBALS['TL_LANG']['tl_ytvideo']['copy']       = array('Duplicate Video', 'Duplicate Video ID %s');
$GLOBALS['TL_LANG']['tl_ytvideo']['delete']     = array('Delete Video', 'Delete Video ID %s');
$GLOBALS['TL_LANG']['tl_ytvideo']['toggle']     = array('Publish/Unpublish Video', 'Publish/Unpublish Video ID %s');
$GLOBALS['TL_LANG']['tl_ytvideo']['pasteafter'] = array('Insert Video', 'Insert after Video ID %s');

?>