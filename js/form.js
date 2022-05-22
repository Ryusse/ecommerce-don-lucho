import { Regex } from './regex.js'
import { loader } from '../js/loader.js'

const form = document.getElementById('form')
const inputs = document.querySelectorAll('.form input')

const fields = {
  email: false,
  password: false,
  fullname: false,
}

const validationForm = (e) => {
  switch (e.target.name) {
    case 'email':
      validationField(Regex.email, e.target, 'email')
      break

    case 'password':
      validationField(Regex.password, e.target, 'password')
      break

    case 'fullname':
      validationField(Regex.fullName, e.target, 'fullname')
      break
  }
}

const validationField = (expression, input, field) => {
  if (expression.test(input.value)) {
    document.querySelector(`#${field}-control .form-check`).classList.add('form-status-enabled')
    document.querySelector(`#${field}-control .form-input`).classList.add('form-input-successful')
    document.querySelector(`#${field}-control .form-input`).classList.remove('form-input-danger')
    document.querySelector(`#${field}-control .form-input-error`).classList.remove('form-status-enabled')
    document.querySelector(`#${field}-control .form-error`).classList.remove('form-status-enabled')
    fields[field] = true
  } else {
    document.querySelector(`#${field}-control .form-input`).classList.add('form-input-danger')
    document.querySelector(`#${field}-control .form-input`).classList.remove('form-input-successful')
    document.querySelector(`#${field}-control .form-check`).classList.remove('form-status-enabled')
    document.querySelector(`#${field}-control .form-input-error`).classList.add('form-status-enabled')
    document.querySelector(`#${field}-control .form-error`).classList.add('form-status-enabled')
    fields[field] = false
  }
}

inputs.forEach((input) => {
  input.addEventListener('keyup', validationForm)
  input.addEventListener('blur', validationForm)
})

form.addEventListener('submit', (e) => {
  e.preventDefault()
  const checkIcons = document.querySelectorAll('.form-control .form-check')
  const errorIcons = document.querySelectorAll('.form-control .form-error')
  const inputs = document.querySelectorAll('.form-control .form-input')

  if (fields.email && fields.password) {
    loader(true)

    setTimeout(() => {
      loader(false)
    }, 1000)

    inputs.forEach((input) => {
      input.classList.remove('form-input-successful')
    })

    checkIcons.forEach((icon) => {
      icon.classList.remove('form-status-enabled')
    })

    document.querySelector(`.form-input-error`).classList.remove('form-status-enabled')
    form.reset()
  } else {
    loader(true)

    setTimeout(() => {
      loader(false)
    }, 1000)

    setTimeout(() => {
      document.querySelector('.form-submit-message').classList.add('form-status-enabled')

      errorIcons.forEach((icon) => {
        icon.classList.add('form-status-enabled')
      })

      checkIcons.forEach((icon) => {
        icon.classList.remove('form-status-enabled')
      })

      inputs.forEach((input) => {
        input.classList.add('form-input-danger')
      })
    }, 1001)

    setTimeout(() => {
      document.querySelector('.form-submit-message').classList.remove('form-status-enabled')
    }, 5000)

    errorIcons.forEach((icon) => {
      icon.classList.remove('form-status-enabled')
    })

    inputs.forEach((input) => {
      input.classList.remove('form-input-danger')
    })

    form.reset()
  }
})
