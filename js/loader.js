export const loader = (estate) => {
  if (estate) {
    document.body.style.overflow = 'hidden'
    document.getElementById('loader').innerHTML = `
    <div id="loader-container">
      <div class="loader-circle loader-circle-1"></div>
      <div class="loader-circle loader-circle-2"></div>
      <div class="loader-circle loader-circle-3"></div>
      <div class="loader-circle loader-circle-4"></div>
      <div class="loader-circle loader-circle-5"></div>
    </div>
  `
  } else {
    document.body.style.overflow = 'auto'

    document.body.style.overflow = 'auto'
    document.getElementById('loader-container').remove()
  }
}
