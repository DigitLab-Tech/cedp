<?php
namespace Cedp\Contact;

class Initializer{
  protected $contactRequest;
  protected $contactController;

  public function init(){
    $this->contactRequest = new \Cedp\Contact\Model\ContactRequest();
    $this->contactRequest->init();

    $this->contactController = new \Cedp\Contact\Controller\Contact();
    $this->contactController->init();
  }
}
