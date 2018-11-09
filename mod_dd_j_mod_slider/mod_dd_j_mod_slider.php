<?php
/**
 * @copyright	@copyright	Copyright (c) 2018 dd_j_mod_slider. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';


$class_sfx = htmlspecialchars($params->get('class_sfx'));
$slides = &modDD_J_mod_sliderHelper::getSlides();
$slideFields = $params->get('dd_article_slides_fields');
$totalSlides = count((array)$slideFields);

require(JModuleHelper::getLayoutPath('mod_dd_j_mod_slider', $params->get('layout', 'default')));
