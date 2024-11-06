const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

const sidebarLinks = document.querySelectorAll(".sidebar-link");

const sidebar = document.querySelector("#sidebar");

sidebar.addEventListener("mouseenter", function () {
    sidebar.classList.add("expand");
});

sidebar.addEventListener("mouseleave", function () {
    sidebar.classList.remove("expand");
});

const currentUrl = window.location.pathname;

sidebarLinks.forEach((link) => {
    if (link.getAttribute("href") === currentUrl) {
        link.classList.add("active");
    }
});
