const toggle = document.querySelector('.toggle')
const lines = document.querySelectorAll('.toggle-line')
const overlay = document.querySelector('.overlay')
const menu = document.querySelector('.menu')

toggle.addEventListener('click', () => {
  overlay.classList.toggle('open')
  menu.classList.toggle('open')
  document.body.style.overflow = 'hidden'
  lines.forEach((line) => {
    line.classList.toggle('open')
  })
})

overlay.addEventListener('click', () => {
  overlay.classList.remove('open')
  menu.classList.remove('open')
  document.body.style.overflow = 'auto'
  lines.forEach((line) => {
    line.classList.remove('open')
  })
})
