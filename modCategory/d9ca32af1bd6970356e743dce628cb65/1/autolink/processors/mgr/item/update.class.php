<?php
/**
 * Update an Item
 */
class autolinkItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'autolinkItem';
	public $classKey = 'autolinkItem';
	public $languageTopics = array('autolink');
	public $permission = 'update_document';
}

return 'autolinkItemUpdateProcessor';