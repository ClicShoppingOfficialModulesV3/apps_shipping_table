<?php
/*
 * Uninstall.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
*/

  namespace ClicShopping\Apps\Shipping\Table\Sites\ClicShoppingAdmin\Pages\Home\Actions\Configure;

  use ClicShopping\OM\Registry;

  class Uninstall extends \ClicShopping\OM\PagesActionsAbstract {

    public function execute() {

      $CLICSHOPPING_MessageStack = Registry::get('MessageStack');
      $CLICSHOPPING_Table = Registry::get('Table');

      $current_module = $this->page->data['current_module'];
      $m = Registry::get('TableAdminConfig' . $current_module);
      $m->uninstall();

      $CLICSHOPPING_MessageStack->add($CLICSHOPPING_Table->getDef('alert_module_uninstall_success'), 'success', 'Table');

      $CLICSHOPPING_Table->redirect('Configure&module=' . $current_module);
    }
  }