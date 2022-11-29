let active = window.location.pathname;
active = active.substring(10);
const navLink = document.querySelectorAll(".navigationButtons a")

navLink.forEach(link =>{
    if(link.href.includes(`${active}`)){
        link.classList.add('active');
    }
})