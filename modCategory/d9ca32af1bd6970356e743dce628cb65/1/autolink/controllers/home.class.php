<?php
/**
 * The home manager controller for autolink.
 *
 */
class autolinkHomeManagerController extends autolinkMainController {
	/* @var autolink $autolink */
	public $autolink;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('autolink');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->autolink->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->autolink->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->autolink->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "autolink-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->autolink->config['templatesPath'] . 'home.tpl';
	}
}