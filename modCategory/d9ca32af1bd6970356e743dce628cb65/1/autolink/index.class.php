<?php

/**
 * Class autolinkMainController
 */
abstract class autolinkMainController extends modExtraManagerController {
	/** @var autolink $autolink */
	public $autolink;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('autolink_core_path', null, $this->modx->getOption('core_path') . 'components/autolink/');
		require_once $corePath . 'model/autolink/autolink.class.php';

		$this->autolink = new autolink($this->modx);

		$this->addCss($this->autolink->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->autolink->config['jsUrl'] . 'mgr/autolink.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			autolink.config = ' . $this->modx->toJSON($this->autolink->config) . ';
			autolink.config.connector_url = "' . $this->autolink->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('autolink:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends autolinkMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}