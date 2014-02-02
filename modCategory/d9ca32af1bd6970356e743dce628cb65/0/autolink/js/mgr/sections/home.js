autolink.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'autolink-panel-home'
			,renderTo: 'autolink-panel-home-div'
		}]
	}); 
	autolink.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(autolink.page.Home,MODx.Component);
Ext.reg('autolink-page-home',autolink.page.Home);