import './bootstrap';
const ToggleRatio    = 0.10
const rootEle        = document.documentElement
const scrollToTopBtn = document.querySelector("#btnScrollToTop")
// header         = document.querySelector("header"),
const menuItems = document.getElementsByClassName("menu_item")

//console.log("The current page name is: " + currentPageName);


const handleScroll = () => {
    let scrollTotal = rootEle.scrollHeight - rootEle.clientHeight
    if ((rootEle.scrollTop / scrollTotal) > ToggleRatio) {
        scrollToTopBtn.classList.remove("hidden")
    } else {
        scrollToTopBtn.classList.add("hidden")
    }
}
const scrollToTop = () => {
    rootEle.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}
/* SCROLL LISTENERS */
scrollToTopBtn.addEventListener("click", scrollToTop)
window.addEventListener("scroll", handleScroll)
// Jump anchor smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(aTag => {
    aTag.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
const ready = (callback) => {
    if (document.readyState !== "loading") callback()
    else document.addEventListener("DOMContentLoaded", callback)
}


const updateMenu = (url) =>{

    //var menuItems   = document.getElementsByClassName("menu_item")
    Object.values(menuItems).forEach(item => {
        const addr = item.title
        const linkTitle = new RegExp(addr)
        // 2) Find current page and remove current class
        if (linkTitle.test(currentPageName)){
            item.classList.remove('current')
            if(item.parentNode.parentNode.classList.contains('child')){
                let parentElement = document.getElementsByClassName(parent)
                Object.values(parentElement).forEach(el => {
                    el.classList.remove('current')
                })
            }
        }
        // 3) Find new page and add current class
        if (linkTitle.test(url)){
            item.classList.add('current')
            // if(item.parentNode.parentNode.classList.contains('child')){
            //     let parentElement = document.getElementsByClassName(parent)
            //     Object.values(parentElement).forEach(el => {
            //         el.classList.add('current')
            //     })
            // }
        }
    })
    // 4) Set current page
  //  document.getElementById('pgName').innerHTML  = url
}
ready(() => {
    const btnBurger = document.getElementById("btnBurger")
    btnBurger.addEventListener("click", () => {
        btnBurger.classList.toggle('open')
        document.getElementById('nav_menu').classList.toggle('hidden')
    })

    Array.from(menuItems).forEach(function (item){
        item.onclick = function (e) {
            if(item.classList.contains('solutions'))
                e.preventDefault()
            else
                //updateMenu(item.href.split("/").slice(-1)[0])
                updateMenu(item.title)
        }
    })
// Set current menu item on initialize
    updateMenu(currentPageName)
}) // END document ready
