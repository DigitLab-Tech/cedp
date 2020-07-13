<?php
namespace Cedp\Service\Controller;

class Service{
  protected $_serviceModel;

  public function init($serviceModel){
    $this->_serviceModel = $serviceModel;
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('cedp_render_content', [$this,'render']);
  }

  public function render(){
    \Cedp\Service\View\Service::render($this->_serviceModel->getCollection());
  }
}
