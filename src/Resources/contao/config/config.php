<?php
/**
 * Contao Open Source CMS Extension
 *
 * @package  	 Teaser (Content block pattern)
 * @author   	 Arne Stappen
 * @license  	 LGPL-3.0+ 
 * @copyright	 Arne Stappen (2016)
 */
 
 
/**
 * Content pattern
 */
$GLOBALS['TL_CTP']['element']['teaser'] = 'Agoat\TeaserPattern\PatternTeaser';


/**
 * Content pattern not allowed in sub pattern
 */
$GLOBALS['TL_CTP_NA']['subpattern'][] = 'teaser';
$GLOBALS['TL_CTP_NA']['multipattern'][] = 'teaser';


/**
 * HOOK
 */
$GLOBALS['TL_HOOKS']['isVisibleElement'][] = array('Agoat\\TeaserPattern\\Teaser', 'checkVisibility'); 

