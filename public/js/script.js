const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

const sidebarLinks = document.querySelectorAll(".sidebar-link");

const currentUrl = window.location.pathname;

sidebarLinks.forEach((link) => {
    if (link.getAttribute("href") === currentUrl) {
        link.classList.add("active");
    }
});
