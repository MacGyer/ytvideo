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
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Class ContentYtvideo
 *
 * Front end content element "ytvideo".
 * @copyright  pluspunkt coding 2012
 * @author     pluspunkt coding <http://www.pluspunkt-coding.de>
 * @package    Controller
 */
class ContentYtvideo extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_ytvideo';

	/**
	 * Video object
	 * @var Database_Result
	 */
	protected $objVideo;


	/**
	 * Get all Videos from Database
	 * @return string
	 */
	public function generate()
	{
		
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
						
			$objVideo = Database::getInstance()
						->prepare('
							SELECT * FROM tl_ytvideo WHERE id = ?
						')
						->execute($this->ytvideo);
			
			$arrVideo = $objVideo->fetchAssoc();
			
			$objTemplate->wildcard = '### YOUTUBE VIDEO ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->ytvideo;
			$objTemplate->link = $arrVideo['title'];
			$objTemplate->href = 'contao/main.php?do=ytvideo&amp;act=edit&amp;id=' . $this->ytvideo;

			return $objTemplate->parse();
		}
				
		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$time = time();
		
		$objVideo = Database::getInstance()
					->prepare(
						'SELECT *
						FROM tl_ytvideo 
						WHERE id = ?
							AND published = ?
							AND (start = ? OR start < ?)
							AND (stop = ? OR stop > ?)'
					)
					->execute($this->ytvideo, 1, '', $time, '', $time);
		
		$arrVideo = $objVideo->fetchAssoc();
						
		$this->Template->ytvideo_data = $arrVideo;
                if($arrVideo['reloop'])
                {
                    $this->Template->ytvideo_options = 'playlist='.$arrVideo['videoId'].'&amp;autoplay='.$arrVideo['autoplay'].'&amp;autohide='.$arrVideo['autohide'].'&amp;controls='.$arrVideo['controls'].'&amp;loop='.$arrVideo['reloop'].'&amp;rel='.$arrVideo['rel'].'&amp;color='.$arrVideo['color'].'&amp;theme='.$arrVideo['theme'].'&amp;showinfo='.$arrVideo['showinfo'];
                }
                else{
                    $this->Template->ytvideo_options = 'autoplay='.$arrVideo['autoplay'].'&amp;autohide='.$arrVideo['autohide'].'&amp;controls='.$arrVideo['controls'].'&amp;loop='.$arrVideo['reloop'].'&amp;rel='.$arrVideo['rel'].'&amp;color='.$arrVideo['color'].'&amp;theme='.$arrVideo['theme'].'&amp;showinfo='.$arrVideo['showinfo'];
                }
        }
}

?>