const sliderItems = document.querySelectorAll('.slider-item')
const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
let slidePosition = 0
let totalSlides = sliderItems.length

const updateSlidePosition = () => {
  sliderItems.forEach((slideItem) => {
    slideItem.classList.remove('slider-item-visible')
    slideItem.classList.add('slider-item-hidden')
  })

  sliderItems[slidePosition].classList.add('slider-item-visible')
}

const moveToNextSlide = () => {
  if (slidePosition === totalSlides - 1) {
    slidePosition = 0
  } else {
    slidePosition++
  }

  updateSlidePosition()
}

const moveToPrevSlide = () => {
  if (slidePosition === 0) {
    slidePosition = totalSlides - 1
  } else {
    slidePosition--
  }

  updateSlidePosition()
}

next.addEventListener('click', () => {
  moveToNextSlide()
})

prev.addEventListener('click', () => {
  moveToPrevSlide()
})
