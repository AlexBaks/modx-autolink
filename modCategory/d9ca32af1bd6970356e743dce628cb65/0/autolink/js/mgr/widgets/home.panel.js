autolink.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('autolink')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('autolink_items')
				,items: [{
					html: _('autolink_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'autolink-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	autolink.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(autolink.panel.Home,MODx.Panel);
Ext.reg('autolink-panel-home',autolink.panel.Home);
