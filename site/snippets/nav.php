<nav class="main-menu">
    <a class="main-menu_item brand">
        <img src="<?= url('assets/img/ui/logo.svg') ?>?v=<?= time() ?>" alt="<?= $site->title() ?> Architecture">
    </a>
    <span class="main-menu_item hide-on-hover-desktop">
        <span><span id='ct'></span><span>&nbsp;/PARIS</span></span>
    </span>
    <a class="main-menu_item hide-on-hover-desktop" href="" target="_blank">
        INSTA
    </a>
    <div class="main-menu_item lang-switcher hide-on-hover">
        <a class="active"><span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span> FR</a>
        <a><span class="mono">[</span><span class="glyph mono">-</span><span class="mono">]</span> EN</a>
    </div>
    <div class="main-menu_item has_sub-menu">
        <a class="menu-button show-submenu">
            <span class="mono">[</span><span class="glyph">&nbsp;&nbsp;MENU&nbsp;&nbsp;</span><span class="mono">]</span>
        </a>
        <div class="sub-menu">
            <a class="close-btn">FERMER&nbsp;<span class="mono">[</span><span class="glyph">X</span><span class="mono">]</span></a>
            <a class="sub-menu_item">Work</a>
            <a class="sub-menu_item">News</a>
            <a class="sub-menu_item open-about">About</a>
            <a class="sub-menu_item">Index</a>
            <a class="sub-menu_item open-contact">Contact</a>
        </div>
    </div>
</nav>

