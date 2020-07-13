class Validator{
    constructor(){
      this.requiredMsg = "Ce champs est requis";
      this.emailMsg = "Veuillez entrer un courriel valide";
      this.phoneMsg = "Veuillez entrer un numéro valide";
    }
    required(val){
      return val.length > 0;
    }
    email(val){
      const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(val.toLowerCase());
    }
    phone(val){
      const re = /^$|(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/;
      return re.test(val);
    }
}

class Form{
  constructor(formId, action){
    this.formId = formId;
    this.action = action;
    this.elements = document.querySelectorAll(formId + ' input,' + formId + ' textarea');
    this.validator = new Validator;
  }

  submit(){
    if(this._validate()){
      this.send();
    }
  }

  send(){
    fetch(ajax.url, {
    	method: 'POST',
    	body:this.getEncodedData(),
    	headers: {
    		'Content-type': 'application/x-www-form-urlencoded'
    	}
    }).then(function (response) {
      console.log(response);
      if (response.ok) {return response.json();}
      return Promise.reject(response);
    }).then(function (data) {
      console.log(data  )
      document.getElementById('contact').classList.add('submited');
    }).catch(function(data){
      console.log('Something went wrong');
    });
  }

  getEncodedData(){
    var data = 'action='+this.action;
    for (var i = 0, element; element = this.elements[i++];) {
        data += '&' + element.name +'='+encodeURIComponent(element.value);
    }
    return data;
  }

  _validate(){
    var hasError = false;
    this._reset();
    for (var i = 0, element; element = this.elements[i++];) {
      if(element.dataset.validation == undefined){ continue };

      var validationTypes = element.dataset.validation.split(' ');
      for (var j = 0, type; type = validationTypes[j++];) {
        if(!this.validator[type](element.value)){
          hasError = true;
          if(element.dataset.errors == undefined){
            element.dataset.errors = type + ' ';
          }
          else{
            element.dataset.errors += type + ' ';
          }
        }
      }
    }
    this._render();
    return !hasError;
  }

  _render(){
      for (var i = 0, element; element = this.elements[i++];) {
        var li = element.parentNode;
        var span = element.nextElementSibling;

        if(element.dataset.errors == undefined){
          li.classList.remove('alert');
          span.textContent = '';
        }
        else{
          var errors = element.dataset.errors.split(' ');
          li.classList.add('alert');

          if(errors.includes('required')){
            console.log(this.validator.requiredMsg);
            span.textContent = this.validator.requiredMsg;
            continue;
          }
          if(errors.includes('email')){
            span.textContent = this.validator.emailMsg;
            continue;
          }
          if(errors.includes('phone')){
            span.textContent = this.validator.phoneMsg;
            continue;
          }
        }
      }
  }

  _reset(){
    for (var i = 0, element; element = this.elements[i++];) {
      delete element.dataset.errors;
    }
  }
}

function submitContact(e){
  var form = new Form("#contact-form",'send_contact_form');
  form.submit();
}
