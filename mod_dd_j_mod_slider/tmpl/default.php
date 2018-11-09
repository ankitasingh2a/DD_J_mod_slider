<?php
/**
 * @copyright	Copyright (c) 2018 dd_j_mod_slider. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('jquery.framework');
JHtml::_('script', 'mod_dd_j_mod_slider/article_slides.js', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'mod_dd_j_mod_slider/article_slides.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'mod_dd_j_mod_slider/style.css', array('version' => 'auto', 'relative' => true));
?>

<div id="dd_article_slides" class="<?php echo $class_sfx; ?>">
<?php if ($totalSlides > 0) : ?>
	<?php echo $slides; ?>
	<div class="article_slides_controls">
	<span class="icon-dd-arrow-left" id="slide-left"></span>
	<span id="article_slide_active">1</span> / <span><?php echo $totalSlides; ?></span>
	<span class="icon-dd-arrow-right" id="slide-right"></span>
	</div>
<?php else : 
	echo JText::_('MOD_DD_J_MOD_SLIDER_NO_SLIDES');
endif; ?>
</div>

