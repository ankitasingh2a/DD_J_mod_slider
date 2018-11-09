<?php
/**
 * @copyright	Copyright (c) 2018 dd_j_mod_slider. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

/**
 * dd_j_mod_slider - DD_J_mod_slider Helper Class.
 *
 * @package		Joomla.Site
 * @subpakage	dd_j_mod_slider.DD_J_mod_slider
 */
class modDD_J_mod_sliderHelper {
	
	/**
	 * Retrieve list of slides	 
	 *
	 * @return  mixed
	 */
	public static function &getSlides($params)
	{
		$html = '';
		$i = 0;
		$slides = $params->get('dd_article_slides_fields');
		if(count( (array)$slides ) > 0)
		{
			foreach ($slides as $slide)
			{
				$i++;
				$html .= '<div id="dd_article_slides_fields' . $i . '" class="article_slide">';
				$html .=    '<div class="article_slide_inner">';
				$html .=        '<img src="' . $slide->image . '" alt="'. $slide->image_alt .'">';
				$html .=        '<div class="article_slide_info">';
				$html .=            '<p>' . $slide->image_desc .'</p>';
				$html .=            '<small>Bild: '. $slide->image_source . '</small>';
				$html .=        '</div>';
				$html .=        '<button class="article_slide_info_toggle">';
				$html .=            '<span class="icon-dd-arrow-up"></span>';
				$html .=            '<span class="icon-dd-arrow-down"></span>';
				$html .=        '</button>';
				$html .=    '</div>';
				$html .= '</div>';
			}
	      }
	      return $html;
	  }
		
	
}
