const tabIndicator = document.querySelector('.tabs-item-indicator')
const tabsItems = document.querySelectorAll('.tabs-item')
const tabsBlock = document.querySelectorAll('.tabs-block')

const indicator = (e) => {
  tabIndicator.style.left = e.offsetLeft + 'px'
  tabIndicator.style.width = e.offsetWidth + 'px'
}

for (let i = 0; i < tabsItems.length; i++) {
  tabsItems[i].addEventListener('click', (e) => {
    indicator(e.target)
    tabIndicator.classList.add('tabs-item-indicator-active')
    tabsBlock[0].classList.remove('tabs-block-active')
    tabsBlock[0].classList.add('tabs-block-active')
    tabsBlock[i].classList.add('tabs-block-active')
  })
}

tabsItems.forEach((tabsItem, i) => {
  tabsItems[i].addEventListener('click', (e) => {
    tabsItems.forEach((tabsItem, i) => {
      tabsBlock[i].classList.remove('tabs-block-active')
    })

    tabsBlock[i].classList.add('tabs-block-active')
  })
})
