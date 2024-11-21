function toggleMenu() {
    const menu = document.querySelector(".menu-links"); //target .menu-links element
    const icon = document.querySelector(".hamburger-icon"); //target .hamburger-icon element

    menu.classList.toggle("open") //when clicked, adds or removes open class (which has styling to either display or hide content)
    icon.classList.toggle("open")

}