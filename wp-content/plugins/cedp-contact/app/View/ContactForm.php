<?php
namespace Cedp\Contact\View;
class ContactForm{
  public static function render(){
    ?>
    <div class="form-wrapper flex-container flex-direction-column box-shadow">
      <div class="form-header">
        <div class="title">
          <span>Nous joindre</span>
        </div>
        <hr>
      </div>
      <div class="form-body flex-container">
        <div class="form-content">
          <form id="contact-form">
            <ul>
              <li>
                  <label for="name">Nom</label>
                  <input type="text" id="name" name="name" data-validation="required" />
                  <span></span>
              </li>
              <li>
                  <label for="email">Courriel</label>
                  <input type="text" id="email" name="email" data-validation="email required" />
                  <span></span>
              </li>
              <li>
                  <label for="phone">Téléphone</label>
                  <input type="text" id="phone" name="phone" data-validation="phone" />
                  <span></span>
              </li>
              <li>
                  <label for="activity">Secteur d'activité</label>
                  <input type="text" id="activity" name="activity" />
                  <span></span>
              </li>
              <li>
                  <label for="subject">Parlez-nous de vous</label>
                  <textarea id="subject" name="subject"></textarea>
                  <span></span>
              </li>
            </ul>
          </form>
        </div>
        <div class="form-message-container flex-container flex-direction-column flex-justify-center">
          <span>Merci de votre intéret, nous vous contacterons le plus rapidement possible.</span>
        </div>
      </div>
      <div class="form-footer">
          <input type="button" id="submit-contact" onclick="submitContact(this)" class="right" value="Envoyer" />
      </div>
    </div>
    <?php
  }
}
 ?>
