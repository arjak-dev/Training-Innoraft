const form = {
  username : document.getElementById('name'),
  password : document.getElementById('pass'),
  submit: document.getElementById('submit'),
  messages: document.getElementById('form-messages')
}
form.submit.addEventListener('click' ,() =>{
  const request = new XMLHttpRequest();
  request.onload = () => {
    let responseObject = null;

    try {
      responseObject = JSON.parse(request.responseText);
    } catch(e) {
      console.error('could not parse Json');
    }
    if (responseObject) {
      handleResponse(responseObject);
  }
  };
  const requestData = `username=${form.username.value}&password=${form.password.value}`;
  request.open('post', 'validate.php');
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  request.send(requestData);
});

function handleResponse (responseObject) {
  if (responseObject.ok) {
      // location.href = 'dashboard.html';
  } else {
    while (form.messages.firstChild) {
      form.messages.removeChild(form.messages.firstChild);
  }

  responseObject.message.forEach( (message) => {
      const li = document.createElement('li');
      li.textContent = message;
      form.messages.appendChild(li);
  });

  form.messages.style.display = "block";
}
}