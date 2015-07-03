<?php
namespace Craft;

/**
 * Inflector service
 */
class Inflector_FunctionsService extends BaseApplicationComponent
{

	/**
	 * Humanize
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function humanize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->humanize($string);
	}

	/**
	 * Camelize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function camelize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->camelize($string, true);
	}

	/**
	 * Pluralize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function pluralize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->pluralize($string);
	}

	/**
	 * Singularize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function singularize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->singularize($string);
	}

	/**
	 * Underscore string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function underscore($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->underscore($string);
	}

	/**
	 * Titleize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function titleize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->titleize($string);
	}

	/**
	 * Ordinal string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function ordinal($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->ordinal($string);
	}

	/**
	 * Ordinalize string
	 *
	 * @param string $string
	 * @return string $string
	 */
	public function ordinalize($string) {
		$settings = craft()->plugins->getPlugin('inflector')->getSettings();
		$language = $settings->language ? $settings->language : 'en';
		$inflector = Inflector::get($language);
		return $inflector->ordinalize($string);
	}

}
