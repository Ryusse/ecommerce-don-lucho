import { Loader } from './Loader.js'

const Regex = {
  hasRealNumber: /^(?:[1-9]\d{0,2}(?:,\d{3})*|0)(?:\.\d+)?$/,
  hasJustNumber: /^[0-9]+$/,
  fullName: /^[a-zA-ZÀ-ÿ,.'-\s]{8,40}$/,
  password: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,16}$/,
  email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const form = document.getElementById('form')
const inputs = document.querySelectorAll('.form input')

const fields = {
  cantidad: false,
  side1: false,
  side2: false,
  side3: false,
  email: false,
  password: false,
  fullname: false,
}

const validationForm = (e) => {
  switch (e.target.name) {
    case 'email':
      validationField(Regex.email, e.target, 'email')
      break

    case 'nro1':
      validationField(Regex.hasJustNumber, e.target, 'nro1')
      break

    case 'nro2':
      validationField(Regex.hasJustNumber, e.target, 'nro2')
      break

    case 'nro3':
      validationField(Regex.hasJustNumber, e.target, 'nro3')
      break

    case 'montoCompra':
      validationField(Regex.hasRealNumber, e.target, 'montoCompra')
      break

    case 'meses':
      validationField(Regex.hasJustNumber, e.target, 'meses')
      break

    case 'cantidad':
      validationField(Regex.hasJustNumber, e.target, 'cantidad')
      break

    case 'side1':
      validationField(Regex.hasJustNumber, e.target, 'side1')
      break
    case 'side2':
      validationField(Regex.hasJustNumber, e.target, 'side2')
      break
    case 'side3':
      validationField(Regex.hasJustNumber, e.target, 'side3')
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
    document
      .querySelector(`#${field}-control .form-check`)
      .classList.add('form-status-enabled')
    document
      .querySelector(`#${field}-control .form-input`)
      .classList.add('form-input-successful')
    document
      .querySelector(`#${field}-control .form-input`)
      .classList.remove('form-input-danger')
    document
      .querySelector(`#${field}-control .form-input-error`)
      .classList.remove('form-status-enabled')
    document
      .querySelector(`#${field}-control .form-error`)
      .classList.remove('form-status-enabled')
    fields[field] = true
  } else {
    document
      .querySelector(`#${field}-control .form-input`)
      .classList.add('form-input-danger')
    document
      .querySelector(`#${field}-control .form-input`)
      .classList.remove('form-input-successful')
    document
      .querySelector(`#${field}-control .form-check`)
      .classList.remove('form-status-enabled')
    document
      .querySelector(`#${field}-control .form-input-error`)
      .classList.add('form-status-enabled')
    document
      .querySelector(`#${field}-control .form-error`)
      .classList.add('form-status-enabled')
    fields[field] = false
  }
}

inputs.forEach((input) => {
  input.addEventListener('keyup', validationForm)
  input.addEventListener('blur', validationForm)
})

// form.addEventListener('submit', (e) => {
//   e.preventDefault()
//   const checkIcons = document.querySelectorAll('.form-control .form-check')
//   const errorIcons = document.querySelectorAll('.form-control .form-error')
//   const inputs = document.querySelectorAll('.form-control .form-input')

//   if (fields.email && fields.password) {
//     Loader(true)

//     setTimeout(() => {
//       Loader(false)
//     }, 1000)

//     inputs.forEach((input) => {
//       input.classList.remove('form-input-successful')
//     })

//     checkIcons.forEach((icon) => {
//       icon.classList.remove('form-status-enabled')
//     })

//     document
//       .querySelector(`.form-input-error`)
//       .classList.remove('form-status-enabled')
//     form.reset()
//   } else {
//     Loader(true)

//     setTimeout(() => {
//       Loader(false)
//     }, 1000)

//     setTimeout(() => {
//       document
//         .querySelector('.form-submit-message')
//         .classList.add('form-status-enabled')

//       errorIcons.forEach((icon) => {
//         icon.classList.add('form-status-enabled')
//       })

//       checkIcons.forEach((icon) => {
//         icon.classList.remove('form-status-enabled')
//       })

//       inputs.forEach((input) => {
//         input.classList.add('form-input-danger')
//       })
//     }, 1001)

//     setTimeout(() => {
//       document
//         .querySelector('.form-submit-message')
//         .classList.remove('form-status-enabled')
//     }, 5000)

//     errorIcons.forEach((icon) => {
//       icon.classList.remove('form-status-enabled')
//     })

//     inputs.forEach((input) => {
//       input.classList.remove('form-input-danger')
//     })

//     form.reset()
//   }
// })
