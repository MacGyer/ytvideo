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
$GLOBALS['TL_LANG']['tl_ytvideo']['title'][0] = 'Titel';
$GLOBALS['TL_LANG']['tl_ytvideo']['title'][1] = 'Vergeben Sie einen Titel für das Video';
$GLOBALS['TL_LANG']['tl_ytvideo']['description'][0] = 'Beschreibung';
$GLOBALS['TL_LANG']['tl_ytvideo']['description'][1] = 'Sie können HTML-Tags verwenden, um die Beschreibung zu formatieren.';
$GLOBALS['TL_LANG']['tl_ytvideo']['videoId'][0] = 'Video-ID';
$GLOBALS['TL_LANG']['tl_ytvideo']['videoId'][1] = 'Die 11-stellige ID des Youtube-Videos. Das fett markierte ist die ID: http://www.youtube.com/watch?v=<b>X1FFG3ixM-o</b>.';
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide'][0] = 'Autohide';
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide'][1] = 'Legt fest, ob und wie die Steuerelemente beim Abspielen des Video automatisch ausgeblendet werden.';
$GLOBALS['TL_LANG']['tl_ytvideo']['controls'][0] = 'Steuerelemente';
$GLOBALS['TL_LANG']['tl_ytvideo']['controls'][1] = 'Legt fest, ob die Steuerelemente des Players angezeigt werden.';
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay'][0] = 'Autoplay';
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay'][1] = 'Definiert das automatische Abspielen des Videos.';
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop'][0] = 'Wiederholung';
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop'][1] = 'Definiert, ob das Video als Endlosschleife abgespielt werden soll.';
$GLOBALS['TL_LANG']['tl_ytvideo']['rel'][0] = 'Verwandte Videos';
$GLOBALS['TL_LANG']['tl_ytvideo']['rel'][1] = 'Definiert, ob am Ende des Videos verwandte Videos angezeigt werden sollen.';
$GLOBALS['TL_LANG']['tl_ytvideo']['color'][0] = 'Farbe';
$GLOBALS['TL_LANG']['tl_ytvideo']['color'][1] = 'Definiert die Farbe des Fortschrittsbalkens.';
$GLOBALS['TL_LANG']['tl_ytvideo']['theme'][0] = 'Theme';
$GLOBALS['TL_LANG']['tl_ytvideo']['theme'][1] = 'Definiert die allgemeine Farbgebung des Players.';
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo'][0] = 'Video-Infos';
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo'][1] = 'Definiert, ob Video-Infos wie Titel oder User vor dem';
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding'][0] = 'Branding';
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding'][1] = 'Das Youtube-Branding ausschalten. Das Youtube-Logo und die Youtube-Kopfleiste werden ausgeblendet.';
$GLOBALS['TL_LANG']['tl_ytvideo']['width'][0] = 'Breite';
$GLOBALS['TL_LANG']['tl_ytvideo']['width'][1] = 'Die Breite des Videos.';
$GLOBALS['TL_LANG']['tl_ytvideo']['height'][0] = 'Höhe';
$GLOBALS['TL_LANG']['tl_ytvideo']['height'][1] = 'Die Höhe des Videos.';
$GLOBALS['TL_LANG']['tl_ytvideo']['cssClass'][0] = 'CSS-Klasse';
$GLOBALS['TL_LANG']['tl_ytvideo']['cssClass'][1] = 'Hier können Sie eine oder mehrere Klassen eingeben.';
$GLOBALS['TL_LANG']['tl_ytvideo']['published'][0] = 'Video veröffentlichen';
$GLOBALS['TL_LANG']['tl_ytvideo']['published'][1] = 'Das Video auf der Webseite anzeigen.';
$GLOBALS['TL_LANG']['tl_ytvideo']['start'][0] = 'Anzeigen ab';
$GLOBALS['TL_LANG']['tl_ytvideo']['start'][1] = 'Das Video erst ab diesem Tag auf der Webseite anzeigen.';
$GLOBALS['TL_LANG']['tl_ytvideo']['stop'][0] = 'Anzeigen bis';
$GLOBALS['TL_LANG']['tl_ytvideo']['stop'][1] = 'Das Video nur bis zu diesem Tag auf der Webseite anzeigen.';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['video_legend'] = 'Video-Daten';
$GLOBALS['TL_LANG']['tl_ytvideo']['title_legend'] = 'Video-Titel und Beschreibung';
$GLOBALS['TL_LANG']['tl_ytvideo']['behaviour_legend'] = 'Video-Verhalten';
$GLOBALS['TL_LANG']['tl_ytvideo']['display_legend'] = 'Anzeige-Eigenschaften';
$GLOBALS['TL_LANG']['tl_ytvideo']['expert_legend'] = 'Experten-Einstellungen';
$GLOBALS['TL_LANG']['tl_ytvideo']['publish_legend'] = 'Veröffentlichung';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['autohide_options'] = array(
    2 => 'Fortschrittsbalken ausblenden, Steuerelemente einblenden',
    1 => 'Alle Elemente ausblenden',
    0 => 'Alle Elemente einblenden'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['controls_options'] = array(
    2 => 'Steuerelemente anzeigen, Flashplayer lädt erst beim Start',
    1 => 'Steuerelemente anzeigen, Flashplayer lädt sofort',
    0 => 'Steuerelemente nicht anzeigen'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay_options'][1] = 'Automatisches Abspielen aktivieren';
$GLOBALS['TL_LANG']['tl_ytvideo']['reloop_options'][1] = 'Endlosschleife';
$GLOBALS['TL_LANG']['tl_ytvideo']['rel_options'][1] = 'Verwandte Videos anzeigen';
$GLOBALS['TL_LANG']['tl_ytvideo']['color_options'] = array(
    'red' => 'rot',
    'white' => 'weiß'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['theme_options'] = array(
    'light' => 'hell',
    'dark' => 'dunkel'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo_options'] = array(
    1 => 'Video-Infos aktivieren'
);
$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding_options'] = array(
    1 => 'Youtube-Branding deaktiveren'
);

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ytvideo']['new'][0] = 'Neues Video';
$GLOBALS['TL_LANG']['tl_ytvideo']['new'][1] = 'Ein neues Video anlegen';
$GLOBALS['TL_LANG']['tl_ytvideo']['show'][0] = 'Videodetails';
$GLOBALS['TL_LANG']['tl_ytvideo']['show'][1] = 'Die Details des Videos ID %s anzeigen';
$GLOBALS['TL_LANG']['tl_ytvideo']['edit'][0] = 'Video bearbeiten';
$GLOBALS['TL_LANG']['tl_ytvideo']['edit'][1] = 'Video ID %s bearbeiten';
$GLOBALS['TL_LANG']['tl_ytvideo']['copy'][0] = 'Video duplizieren';
$GLOBALS['TL_LANG']['tl_ytvideo']['copy'][1] = 'Video ID %s duplizieren';
$GLOBALS['TL_LANG']['tl_ytvideo']['delete'][0] = 'Video löschen';
$GLOBALS['TL_LANG']['tl_ytvideo']['delete'][1] = 'Video ID %s löschen';
$GLOBALS['TL_LANG']['tl_ytvideo']['toggle'][0] = 'Video veröffentlichen/unveröffentlichen';
$GLOBALS['TL_LANG']['tl_ytvideo']['toggle'][1] = 'Video ID %s veröffentlichen/unveröffentlichen';
$GLOBALS['TL_LANG']['tl_ytvideo']['pasteafter'][0] = 'Video einfügen';
$GLOBALS['TL_LANG']['tl_ytvideo']['pasteafter'][1] = 'Nach dem Video ID %s einfügen';
?>