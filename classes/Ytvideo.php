<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   ytvideo
 * @author    Christoph Erdmann <info@pluspunkt-coding.de>
 * @license   LGPL
 * @copyright pluspunkt coding 2013
 */

class Ytvideo
{
    /**
     * generates inserttags 'ytvideo', second parameter is the video id
     * 
     * @param str $strTag
     * @return string|boolean
     */
    public function generateInserttag($strTag)
    {
        $arrSplit = explode('::', $strTag);
        
        if ($arrSplit[0] == 'ytvideo')
        {
            $time = time();
            
            $objVideo = Database::getInstance()
                ->prepare(
                        'SELECT *
                            FROM tl_ytvideo 
                            WHERE videoId = ?
                                    AND published = ?
                                    AND (start = ? OR start < ?)
                                    AND (stop = ? OR stop > ?)'
                )
                ->execute($arrSplit[1], 1, '', $time, '', $time);
            $arrVideo = $objVideo->fetchAssoc();
            
            $strOutput = '<iframe width="'.$arrVideo['width'].'" height="'.$arrVideo['height'].'" src="http://www.youtube.com/embed/'.$arrVideo['videoId'].'?';
            
            if($arrVideo['reloop']){
                $strOutput .= 'playlist=' . $arrVideo['videoId'] . '&amp;autoplay=' . $arrVideo['autoplay'] . '&amp;autohide=' . $arrVideo['autohide'] . '&amp;controls=' . $arrVideo['controls'] . '&amp;loop=' . $arrVideo['reloop'] . '&amp;rel=' . $arrVideo['rel'] . '&amp;color=' . $arrVideo['color'] . '&amp;theme=' . $arrVideo['theme'] . '&amp;showinfo=' . $arrVideo['showinfo'];            
            }
            else{
                $strOutput .= 'autoplay=' . $arrVideo['autoplay'] . '&amp;autohide=' . $arrVideo['autohide'] . '&amp;controls=' . $arrVideo['controls'] . '&amp;loop=' . $arrVideo['reloop'] . '&amp;rel=' . $arrVideo['rel'] . '&amp;color=' . $arrVideo['color'] . '&amp;theme=' . $arrVideo['theme'] . '&amp;showinfo=' . $arrVideo['showinfo'];
            }
            $strOutput .= '"></iframe>';
            return $strOutput;
        }
        return false;
    }
}