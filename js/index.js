import { Regex } from './regex.js'

const inputs = document.querySelectorAll('.form input')

const emailInput = document.getElementById('email')
const formInput = document.querySelectorAll('.form-input')
const formError = document.querySelectorAll('.form-error')
const formCheck = document.querySelectorAll('.form-check')
const formInputError = document.getElementsByClassName('form-input-error')

const validationForm = (e) => {
  switch (e.target.name) {
    case 'email':
      validationField(Regex.email, e.target, 'email')
      break

    case 'password':
      validationField(Regex.password, e.target, 'password')
      break
  }
}

const validationField = (expression, input, field) => {
  if (expression.test(input.value)) {
    document.querySelector(`#${field}-control .form-check`).classList.add('form-status-enabled')
    document.querySelector(`#${field}-control .form-error`).classList.remove('form-status-enabled')
  } else {
    document.querySelector(`#${field}-control .form-error`).classList.add('form-status-enabled')
    document.querySelector(`#${field}-control .form-check`).classList.remove('form-status-enabled')
  }
}

inputs.forEach((input) => {
  console.log(input)
  input.addEventListener('keyup', validationForm)
  input.addEventListener('blur', validationForm)
})
