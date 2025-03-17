<?php snippet('head') ?>
<?php snippet('nav') ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- <h1><?= $page->title() ?></h1> -->
     <main>
         <p class="active"><span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span> TOUT</p>
         <p><span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span> LOGEMENT</p>
         <p><span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span> TERTIAIRE</p>
         <p><span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span> CULTURE</p>
         <p class="active"><span class="mono">[</span><span class="glyph">/</span><span class="mono">]</span>
         <p>-------</p>
         <p>0810 // Salle de spectacle / trianon / restaurer</p>
     </main>

     <aside class="contact-panel">
     <a class="close-btn">FERMER&nbsp;<span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span></a>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sapiente minima quidem debitis quam aliquam. 
        Nesciunt nihil nisi, veritatis eligendi voluptas sapiente, 
        nemo veniam aliquid maiores dolor dolorum tempora omnis dolores.
     </aside>

     <aside class="about-panel">
     <a class="close-btn">FERMER&nbsp;<span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span></a>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sapiente minima quidem debitis quam aliquam. 
        Nesciunt nihil nisi, veritatis eligendi voluptas sapiente, 
        nemo veniam aliquid maiores dolor dolorum tempora omnis dolores.
     </aside>

     <script>
        function display_c(){
        var refresh=1000; 
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
        var CDate = new Date()
        var NewDate=CDate.toDateString(); 
        NewDate = CDate.toLocaleTimeString();
        document.getElementById('ct').innerHTML = NewDate;
        display_c();
        }
     </script>

     <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hasSubMenu = document.querySelector(".has_sub-menu");
            const hideOnHover = document.querySelector(".hide-on-hover");
            const hideOnHoverDesktop = document.querySelectorAll(".hide-on-hover-desktop");

            if (hasSubMenu && hideOnHover) {
                hasSubMenu.addEventListener("mouseenter", function () {
                    hideOnHover.style.visibility = "hidden";
                    if (window.innerWidth < 1200) {
                        hideOnHoverDesktop.forEach(el => el.style.visibility = "hidden");
                    }
                });

                hasSubMenu.addEventListener("mouseleave", function () {
                    hideOnHover.style.visibility = "visible";
                    hideOnHoverDesktop.forEach(el => el.style.visibility = "visible");
                });
            }
        });
     </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const drawers = document.querySelectorAll(".sub-menu, .contact-panel, .about-panel");
    const menuButton = document.querySelector(".menu-button");
    const contactButton = document.querySelector(".open-contact");
    const aboutButton = document.querySelector(".open-about");
    const closeButtons = document.querySelectorAll(".close-btn");

    function closeAllDrawers() {
        drawers.forEach(drawer => drawer.classList.remove("open-drawer"));
    }

    function openDrawer(targetDrawer) {
        closeAllDrawers(); // Close any other open drawers first
        targetDrawer.classList.add("open-drawer");
    }

    // Handle menu button click
    if (menuButton) {
        menuButton.addEventListener("click", function (event) {
        openDrawer(document.querySelector(".sub-menu"));
        event.preventDefault();
        event.stopPropagation();
        });
    }

    // Handle contact button click
    if (contactButton) {
        contactButton.addEventListener("click", function (event) {
        openDrawer(document.querySelector(".contact-panel"));
        event.preventDefault();
        event.stopPropagation();
        });
    }

    // Handle about button click
    if (aboutButton) {
        aboutButton.addEventListener("click", function (event) {
        openDrawer(document.querySelector(".about-panel"));
        event.preventDefault();
        event.stopPropagation();
        });
    }

    // Handle close buttons with both click and touch events
    closeButtons.forEach(button => {
        // Add separate listeners for click and touchend events
        ["click", "touchend"].forEach(eventType => {
        button.addEventListener(eventType, function (event) {
            closeAllDrawers();
            event.preventDefault();
            event.stopPropagation();
        });
        });
    });

    // Close drawers when clicking outside
    document.addEventListener("click", function (event) {
        if (![...drawers].some(drawer => drawer.contains(event.target)) &&
            !menuButton.contains(event.target) &&
            (!contactButton || !contactButton.contains(event.target)) &&
            (!aboutButton || !aboutButton.contains(event.target))) {
        closeAllDrawers();
        }
    });

    // Also handle touch events for document
    document.addEventListener("touchend", function (event) {
        if (![...drawers].some(drawer => drawer.contains(event.target)) &&
            !menuButton.contains(event.target) &&
            (!contactButton || !contactButton.contains(event.target)) &&
            (!aboutButton || !aboutButton.contains(event.target))) {
        closeAllDrawers();
        }
    });
    });
</script>
</body>
