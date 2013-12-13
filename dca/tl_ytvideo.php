<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @author     pluspunkt coding <http://www.pluspunkt-coding.de>
 * @package    ytvideo
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_ytvideo
 */
$GLOBALS['TL_DCA']['tl_ytvideo'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true
		/*'onload_callback' => array
		(
			array('tl_ytvideo', 'checkPermission')
		)*/
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title ASC'),
			'flag'					  => 1,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields' => array('videoId'),
			'format' => 'ID: %s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_ytvideo', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title,description;{video_legend},videoId,width,height;{behaviour_legend:hide},autohide,controls,autoplay,reloop,rel;{display_legend:hide},color,theme,showinfo,modestbranding;{expert_legend:hide},cssClass;{publish_legend},published,start,stop'
	),

	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory' => true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'description' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['description'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr')
		),
		'videoId' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['videoId'],
			'inputType'               => 'text',
			'exclude'				  => true,
			'search'				  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>20, 'rgxp' => 'alnum', 'tl_class' => 'w50')
		),
		'width' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['width'],
			'inputType'               => 'text',
			'exclude'				  => true,
			'eval'                    => array('mandatory'=>false, 'rgxp' => 'digit', 'tl_class' => 'w50')
		),
		'height' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['height'],
			'inputType'               => 'text',
			'exclude'				  => true,
			'eval'                    => array('mandatory'=>false, 'rgxp' => 'digit', 'tl_class' => 'w50')
		),
		'autohide' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['autohide'],
			'inputType'               => 'select',
			'options'                 => array('2', '1', '0'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['autohide_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50')
		),
		'controls' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['controls'],
			'inputType'               => 'select',
			'options'                 => array('1', '2', '0'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['controls_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50')
		),
		'autoplay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay'],
			'inputType'               => 'checkbox',
			'options'                 => array('1'),
			'filter'				  => true,
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['autoplay_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50 m12')
		),
		'reloop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['reloop'],
			'inputType'               => 'checkbox',
			'options'                 => array('1'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['reloop_options'],
			'filter'				  => true,
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50 m12')
		),
		'rel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['rel'],
			'inputType'               => 'checkbox',
			'options'                 => array('1'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['rel_options'],
			'filter'				  => true,
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50')
		),
		'color' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['color'],
			'inputType'               => 'select',
			'options'                 => array('red', 'white'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['color_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50')
		),
		'theme' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['theme'],
			'inputType'               => 'select',
			'options'                 => array('dark', 'light'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['theme_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50')
		),
		'showinfo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo'],
			'inputType'               => 'checkbox',
			'options'                 => array('1'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['showinfo_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50 m12')
		),
		'modestbranding' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding'],
			'inputType'               => 'checkbox',
			'options'                 => array('1'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_ytvideo']['modestbranding_options'],
			'exclude'				  => true,
			'eval'                    => array('mandatory' => false, 'tl_class' => 'w50 m12')
		),
		'cssClass' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['cssClass'],
			'exclude'                 => true,
			'inputType'               => 'text'
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'flag'                    => 1,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true)
		),
		'start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['start'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard')
		),
		'stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_ytvideo']['stop'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard')
		)
	)
);


/**
 * Class tl_ytvideo
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  pluspunkt coding 2012
 * @author     pluspunkt coding <http://www.pluspunkt-coding.de>
 * @package    Controller
 */
class tl_ytvideo extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	
	/**
	 * Compile Videos for the backend view
	 * @param array
	 * @return string
	 */
	public function compileVideo($arrRow)
	{
	    $objVideo = new Ytvideo((int) $arrRow['id']);
		return '
		<div class="cte_type"><strong>' . $arrRow['title'] . '</strong></div>
		<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">
		' . $objVideo->generate() . '
		</div>' . "\n";
	}
	
	/**
	 * Return the "toggle visibility" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_ytvideo::published', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_ytvideo::published', 'alexf'))
		{
			$this->log('Not enough permissions to publish/unpublish FAQ ID "'.$intId.'"', 'tl_ytvideo toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('tl_ytvideo', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_ytvideo']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_ytvideo']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_ytvideo SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_ytvideo', $intId);
	}
}

?>