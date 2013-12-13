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
$GLOBALS['TL_LANG']['tl_ytvideo']['title'] 				= array('Titel', 'Vergeben Sie einen Titel für das Video');
$GLOBALS['TL_LANG']['tl_ytvideo']['description'] 		= array('Beschreibung', 'Sie können HTML-Tags verwenden, um die Beschreibung zu formatieren.');
$GLOBALS['TL_LANG']['tl_ytvideo']['videoId']			= array('Video-ID', 'Die 11-stellige ID des Youtube-Videos. Das fett markierte ist die ID: http://www.youtube.com/watch?v=<b>X1FFG3ixM-o</b>.');
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide'] 			= array('Autohide', 'Legt fest, ob und wie die Steuerelemente beim Abspielen des Video automatisch ausgeblendet werden.');
$GLOBALS['TL_LANG']['tl_ytvideo']['controls'] 			= array('Steuerelemente', 'Legt fest, ob die Steuerelemente des Players angezeigt werden.');
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay'] 			= array('Autoplay', 'Definiert das automatische Abspielen des Videos.');
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop'] 			= array('Wiederholung', 'Definiert, ob das Video als Endlosschleife abgespielt werden soll.');
$GLOBALS['TL_LANG']['tl_ytvideo']['rel'] 				= array('Verwandte Videos', 'Definiert, ob am Ende des Videos verwandte Videos angezeigt werden sollen.');
$GLOBALS['TL_LANG']['tl_ytvideo']['color']	 			= array('Farbe', 'Definiert die Farbe des Fortschrittsbalkens.');
$GLOBALS['TL_LANG']['tl_ytvideo']['theme'] 				= array('Theme', 'Definiert die allgemeine Farbgebung des Players.');
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo'] 			= array('Video-Infos', 'Definiert, ob Video-Infos wie Titel oder User vor dem Abspielen angezeigt werden.');
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding'] 	= array('Branding', 'Das Youtube-Branding ausschalten. Das Youtube-Logo und die Youtube-Kopfleiste werden ausgeblendet.');
$GLOBALS['TL_LANG']['tl_ytvideo']['width'] 				= array('Breite', 'Die Breite des Videos.');
$GLOBALS['TL_LANG']['tl_ytvideo']['height'] 			= array('Höhe', 'Die Höhe des Videos.');
$GLOBALS['TL_LANG']['tl_ytvideo']['cssClass']    		= array('CSS-Klasse', 'Hier können Sie eine oder mehrere Klassen eingeben.');
$GLOBALS['TL_LANG']['tl_ytvideo']['published']    		= array('Video veröffentlichen', 'Das Video auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_ytvideo']['start']        		= array('Anzeigen ab', 'Das Video erst ab diesem Tag auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_ytvideo']['stop']         		= array('Anzeigen bis', 'Das Video nur bis zu diesem Tag auf der Webseite anzeigen.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['video_legend'] 			= 'Video-Daten';
$GLOBALS['TL_LANG']['tl_ytvideo']['title_legend'] 			= 'Video-Titel und Beschreibung';
$GLOBALS['TL_LANG']['tl_ytvideo']['behaviour_legend'] 		= 'Video-Verhalten';
$GLOBALS['TL_LANG']['tl_ytvideo']['display_legend'] 		= 'Anzeige-Eigenschaften';
$GLOBALS['TL_LANG']['tl_ytvideo']['expert_legend'] 			= 'Experten-Einstellungen';
$GLOBALS['TL_LANG']['tl_ytvideo']['publish_legend'] 		= 'Veröffentlichung';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide_options'] = array( 
	2		=> 'Fortschrittsbalken ausblenden, Steuerelemente einblenden',
	1		=> 'Alle Elemente ausblenden',
	0		=> 'Alle Elemente einblenden'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['controls_options'] = array( 
	2		=> 'Steuerelemente anzeigen, Flashplayer lädt erst beim Start',
	1		=> 'Steuerelemente anzeigen, Flashplayer lädt sofort',
	0		=> 'Steuerelemente nicht anzeigen'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay_options'][1] = 'Automatisches Abspielen aktivieren'; 
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop_options'][1] = 'Endlosschleife';
$GLOBALS['TL_LANG']['tl_ytvideo']['rel_options'][1] = 'Verwandte Videos anzeigen';
$GLOBALS['TL_LANG']['tl_ytvideo']['color_options'] = array( 
	'red'	=> 'rot',
	'white'	=> 'weiß'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['theme_options'] = array( 
	'light'	=> 'hell',
	'dark'	=> 'dunkel'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo_options'] = array( 
	1	=> 'Video-Infos aktivieren'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding_options'] = array( 
	1	=> 'Youtube-Branding deaktiveren'
);

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['new']        = array('Neues Video', 'Ein neues Video anlegen');
$GLOBALS['TL_LANG']['tl_ytvideo']['show']       = array('Videodetails', 'Die Details des Videos ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_ytvideo']['edit']       = array('Video bearbeiten', 'Video ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ytvideo']['copy']       = array('Video duplizieren', 'Video ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_ytvideo']['delete']     = array('Video löschen', 'Video ID %s löschen');
$GLOBALS['TL_LANG']['tl_ytvideo']['toggle']     = array('Video veröffentlichen/unveröffentlichen', 'Video ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_ytvideo']['pasteafter'] = array('Video einfügen', 'Nach dem Video ID %s einfügen');

?>