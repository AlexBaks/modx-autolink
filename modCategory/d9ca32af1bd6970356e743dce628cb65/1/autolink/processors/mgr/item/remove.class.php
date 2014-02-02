<?php
/**
 * Remove an Item
 */
class autolinkItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'autolinkItem';
	public $classKey = 'autolinkItem';
	public $languageTopics = array('autolink');

}

return 'autolinkItemRemoveProcessor';