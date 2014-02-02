var autolink = function(config) {
	config = config || {};
	autolink.superclass.constructor.call(this,config);
};
Ext.extend(autolink,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('autolink',autolink);

autolink = new autolink();