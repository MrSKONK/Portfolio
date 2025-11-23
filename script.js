/* Typing animation */
var typed = new Typed(".typing", {
    strings: ["", "Étudiant en BTS SIO,", "Futur Chef de Projet,", "Futur Développeur Web,"],
    typeSpeed: 75,
    BackSpeed: 60,
    loop: false
});

/* Menu */
const nav = document.querySelector(".nav"),
    navList = nav.querySelectorAll("li"),
    totalNavList = navList.length,
    allSection = document.querySelectorAll(".section"),
    totalSection = allSection.length;

for (let i = 0; i < totalNavList; i++) {
    const a = navList[i].querySelector("a");
    a.addEventListener("click", function(e) {
        e.preventDefault();
        
        // Retire la classe "active" pour tous les nav items
        for (let j = 0; j < totalNavList; j++) {
            navList[j].querySelector("a").classList.remove("active");
        }
        
        // Ajoute la classe "active" à nav item quand on clique 
        this.classList.add("active");
        
        // Montre la section correspondante
        showSection(this);

        if (window.innerWidth < 1200) {
            menuSectionTogglerButton();
        }
    })
}

function showSection(element) {
    // Récupeère l'ID de la section et le décode proprement
    const href = element.getAttribute("href");
    const target = decodeURIComponent(href.split("#")[1]);
    
    // Retire la classe "active" pour toutes les sections
    allSection.forEach(section => {
        section.classList.remove("active");
    });
    
    // Ajoute  la classe "active" à la section ciblée
    const targetSection = document.getElementById(target);
    if (targetSection) {
        targetSection.classList.add("active");
        console.log(`Activating section: ${target}`); // débogage
    } else {
        console.error(`Section non trouvée: ${target}`); // débogage
    }
}

const navTogglerButton = document.querySelector(".nav-toggler"),
    menu = document.querySelector(".menu");

navTogglerButton.addEventListener("click", () => {
    menuSectionTogglerButton();
});

function menuSectionTogglerButton() {
    menu.classList.toggle("open");
    navTogglerButton.classList.toggle("open");
    for (let i = 0; i < totalSection; i++) {
        allSection[i].classList.toggle("open");
    }
}

// Fonction pour vérifier les IDs des sections au chargement
window.addEventListener('load', () => {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        console.log(`Section ID: ${section.id}`); // débogage
    });
});