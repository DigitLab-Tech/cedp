function sendContactForm(event){
  event.preventDefault();
  var data = {
    'action': 'send_contact_form',
    'whatever': 1234
  };

  var request = new XMLHttpRequest();
  request.open("POST", ajax.url, true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  request.send('action=send_contact_form');
}
