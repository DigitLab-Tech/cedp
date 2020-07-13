<?php
namespace Cedp\Service\View;
class Service{
  public static function render($collection){
      ?>
      <div id="service" class="service-container">
        <div class="service-wrapper flex-container flex-justify-center flex-wrap" />
        <?php for($i = 0; $i < count($collection); $i++): ?>
          <?php $object = $collection[$i] ?>
          <div class="service-card flex-container flex-direction-column box-shadow">
            <div class="card-header flex-container flex-direction-column">
              <div class="card-title flex-container flex-justify-center">
                <span><?= $object->post_name ?></span>
              </div>
            </div>
            <div class="card-content">
              <div class="card-icon flex-container flex-justify-center">
                <img src="<?= get_field('icon', $object->ID) ?>" />
              </div>
              <hr>
              <div class="card-description">
                <span><?= $object->post_content ?></span>
              </div>
            </div>
          </div>
          <?php if(($i + 1) % 3 == 0 && $i != 0) : ?>
            <div class="flex-break"></div>
          <?php endif; ?>
        <?php endfor; ?>
        </div>
      </div>
    <?php
  }
}
