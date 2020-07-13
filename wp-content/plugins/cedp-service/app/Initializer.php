<?php
namespace Cedp\Service;

class Initializer{
  protected $service;
  protected $serviceController;

  public function init(){
    $this->service = new \Cedp\Service\Model\Service();
    $this->service->init();

    $this->serviceController = new \Cedp\Service\Controller\Service();
    $this->serviceController->init($this->service);
  }
}
