<?php
namespace Craft;

class InflectorPlugin extends BasePlugin
{

	function getName()
	{
		return Craft::t('BM Inflector');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Blue Mantis';
	}

	function getDeveloperUrl()
	{
		return 'http://bluemantis.com';
	}

	public function init()
	{
		require_once __DIR__ . '/lib/inflector/inflections.php';
		require_once __DIR__ . '/lib/inflector/inflector.php';
		require_once __DIR__ . '/lib/inflector/helpers.php';
	}

	protected function defineSettings()
	{
		return array(
			'language' => array(AttributeType::String, 'required' => true),
		);
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('inflector/_settings', array(
			'settings' => $this->getSettings()
		));
	}

	/**
	 * Registers the Twig extension.
	 *
	 * @return FacebookFeedTwigExtension
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.inflector.twigextensions.InflectorTwigExtension');
		return new InflectorTwigExtension();
	}

}
