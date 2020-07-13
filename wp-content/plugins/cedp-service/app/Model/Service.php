<?php
namespace Cedp\Service\Model;

class Service{
    public function init(){
      $this->_registerHooks();
    }

    protected function _registerHooks(){
      add_action( 'init', [$this, 'addCpt'] );
    }

    public function addCpt() {
    	register_post_type( 'service',[
    	  'labels' => [
    	   'name' => __( 'Services' ),
    	   'singular_name' => __( 'Service' )
    		],
    	  'public' => true,
    	  'has_archive' => false,
        'supports' => array( 'title', 'editor', 'custom-fields' )
    	]);
    }

    public function getCollection(){
      return get_posts([
        'post_type' => 'service',
        'numberposts' => '-1'
      ]);
    }
}
