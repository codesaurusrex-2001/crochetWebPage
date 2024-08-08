const form = document.getElementById('form');
const fname = document.getElementById('fname');
const email = document.getElementById('email');
const proj = document.getElementById('proj');

form.addEventListener('submit', (e) => {
  var isFormValid = checkInputs();
  if(!isFormValid){
      e.preventDefault();
  }
});

function checkInputs() {
    var valid = true;
  const fnameValue = fname.value.trim();
  const emailValue = email.value.trim();
  const projValue = proj.value.trim();

  if (fnameValue === '') {
    setErrorFor(fname, 'Field cannot be blank');
    valid = false;
  }

  if (emailValue === '') {
    setErrorFor(email, 'Field cannot be blank');
    valid = false;
  }

  if (projValue === '') {
    setErrorFor(proj, 'Field cannot be blank');
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
