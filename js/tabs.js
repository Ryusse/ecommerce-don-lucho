const tabIndicator = document.querySelector('.tabs-item-indicator')
const tabsItems = document.querySelectorAll('.tabs-item')
const tabsBlock = document.querySelectorAll('.tabs-block')

const indicator = (e) => {
  tabIndicator.style.left = e.offsetLeft + 'px'
  tabIndicator.style.width = e.offsetWidth + 'px'
}

tabsItems.forEach((tabsItem, i) => {
  //Click en cada item
  tabsItems[i].addEventListener('click', (e) => {
    //Recorrer todos los item para quitar la clase active
    tabsItems.forEach((tabsItem, i) => {
      indicator(e.target)
      tabIndicator.classList.add('tabs-item-indicator-active')
      tabsBlock[i].classList.remove('tabs-block-active')
    })
    //Añadimos clase active
    tabsBlock[i].classList.add('tabs-block-active')
  })
})
