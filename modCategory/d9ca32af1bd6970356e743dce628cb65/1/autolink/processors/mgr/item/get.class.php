<?php
/**
 * Get an Item
 */
class autolinkItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'autolinkItem';
	public $classKey = 'autolinkItem';
	public $languageTopics = array('autolink:default');
}

return 'autolinkItemGetProcessor';