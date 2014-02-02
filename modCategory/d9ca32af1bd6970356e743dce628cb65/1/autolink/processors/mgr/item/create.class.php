<?php
/**
 * Create an Item
 */
class autolinkItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'autolinkItem';
	public $classKey = 'autolinkItem';
	public $languageTopics = array('autolink');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('autolinkItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('autolink_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'autolinkItemCreateProcessor';