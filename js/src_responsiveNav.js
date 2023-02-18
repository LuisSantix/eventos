const toggle = document.querySelector('.toggle')
const links = document.querySelector('.container-links')

toggle.addEventListener('click', () =>{
    toggle.classList.toggle('rotate')
    links.classList.toggle('active')
})



