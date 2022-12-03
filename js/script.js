//$('[name="phone"]').inputmask("+7 (999) 999-99-99");
//$('[name="artikul"]').inputmask("AAAA999999999");

document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[data-mask="phone"]')
    if (!elements) return
    const phoneOptions = {
        mask: '+{7} (000) 000-00-00'
    }
    elements.forEach(el => {
        IMask(el, phoneOptions)
    })
})

document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[data-mask="artikul"]')
    if (!elements) return
    const artOptions = {
        mask: '000000000000'
    }
    elements.forEach(el => {
        IMask(el, artOptions)
    })
})