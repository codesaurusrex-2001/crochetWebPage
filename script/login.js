const form = document.getElementById('form');
const fname = document.getElementById('user');
const email = document.getElementById('pass');

form.addEventListener('submit', (e) => {
  var isFormValid = checkInputs();
  if(!isFormValid){
      e.preventDefault();
  }
});

function checkInputs() {
  var valid = true;
  const userValue = user.value.trim();
  const passValue = pass.value.trim();

  if (userValue === '') {
    setErrorFor(user, 'Field cannot be blank');
    valid = false;
  }

  if (passValue === '') {
    setErrorFor(pass, 'Field cannot be blank');
    valid = false;
  }
  return valid;
} //checkInputs

function setErrorFor(input, message) {
  const inputField = input.parentElement;
  const small = inputField.querySelector('small');

  //add error inside of small tag
  small.innerText = message;

  //error class
  inputField.className = 'input-field error';
} //setErrorFor
