<?php

namespace Modules\Peace;

use Core\CModule as CModule;
use CController as CAction;
use APP;

class Module extends CModule {
	public function onTerminate(CAction $action): void {
		$action_page = $action->getAction();
		$router = clone APP::Component()->get('router');
		$layout = $router->getLayout();
		if ($action_page) {
			if ($action_page != 'jsrpc.php' &&
			    $layout != 'layout.widget' &&
			    $layout != 'layout.json') {
				echo '<style type="text/css">',
					'.zabbix-sidebar-logo-compact {',
					'  width: 24px;',
					'  height: 24px;',
					'  background: url("modules/zabbix-module-peace/assets/ukrainian-flag-24x24.png") no-repeat}',
				     '</style>';
				echo '<link rel="icon" href="modules/zabbix-module-peace/assets/favicon_uf.ico">';
			}
		}
	}
}
