import './bootstrap';

const rootEle        = document.documentElement
const scrollToTopBtn = document.querySelector("#btnScrollToTop")
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
