<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';

class InnaCtrl {
    public function generate_view() {
        $smarty = new Smarty\Smarty();
        global $conf;

        $smarty->assign('page_title',"Inna strona chroniona");
        $smarty->assign('conf',$conf);

		$smarty->display($conf->root_path.'/app/inna_chroniona.html');
    }
}