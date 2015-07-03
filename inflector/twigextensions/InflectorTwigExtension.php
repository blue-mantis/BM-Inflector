<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class InflectorTwigExtension extends \Twig_Extension
{

	public function getFilters() {
		return array(
			'humanize' => new Twig_Filter_Method($this,'humanize'),
			'camelize' => new Twig_Filter_Method($this,'camelize'),
			'pluralize' => new Twig_Filter_Method($this, 'pluralize'),
			'singularize' => new Twig_Filter_Method($this, 'singularize'),
			'underscore' => new Twig_Filter_Method($this, 'underscore'),
			'titleize' => new Twig_Filter_Method($this, 'titleize'),
			'ordinal' => new Twig_Filter_Method($this, 'ordinal'),
			'ordinalize' => new Twig_Filter_Method($this, 'ordinalize')
		);
	}

	public function getName()
	{
		return Craft::t('BM Inflector');
	}

	/**
	 * Humanize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function humanize($string) {
		return craft()->inflector_functions->humanize($string);
	}

	/**
	 * Camelize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function camelize($string) {
		return craft()->inflector_functions->camelize($string);
	}

	/**
	 * Pluralize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function pluralize($string) {
		return craft()->inflector_functions->pluralize($string);
	}

	/**
	 * Singularize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function singularize($string) {
		return craft()->inflector_functions->singularize($string);
	}

	/**
	 * Underscore string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function underscore($string) {
		return craft()->inflector_functions->underscore($string);
	}

	/**
	 * Titleize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function titleize($string) {
		return craft()->inflector_functions->titleize($string);
	}

	/**
	 * Ordinal string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function ordinal($string) {
		return craft()->inflector_functions->ordinal($string);
	}

	/**
	 * Ordinalize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function ordinalize($string) {
		return craft()->inflector_functions->ordinalize($string);
	}


}
