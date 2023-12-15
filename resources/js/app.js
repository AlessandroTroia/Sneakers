import './bootstrap';
import 'bootstrap';



/* js welcome */
/* contatore di numeri e chiamata asincrona */
let confirm= true
function createInterval(n,element,time) {
    let counter = 0
    let interval= setInterval(()=>{
        if(counter < n){
            counter ++
            element.innerHTML=counter
        }else{
            clearInterval(interval)
        }
    }, time)
    setTimeout(()=>{
        confirm=true
    }, 3000)
}
let observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
      if(entry.isIntersecting && confirm){
        createInterval(3, number1, 800)
        createInterval(25, number2, 100)
        createInterval(5, number3, 600)
        confirm=false
      }
    })
  })
  observer.observe(number1)

  /* navbar dinamica */
  let navbar = document.querySelector('#navbar')

window.addEventListener('scroll', ()=>{
    let scrolled = window.scrollY
    if(scrolled > 300){
     navbar.classList.add('navbarScroll')
    }else{
     navbar.classList.remove('navbarScroll')
    }
 })
 