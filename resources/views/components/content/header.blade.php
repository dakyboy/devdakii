<header>
    <nav class="nav-container">
        <a href="#" style="text-decoration:none;">
            <p id="brand">Aaron Edaku</p>
        </a>

        <div>
            {{-- <img src="https://res.cloudinary.com/the-pouch/image/upload/v1691599206/dev_dakii/menu-icon_ksrcyi.svg"
                id="open-menu-button" onclick="openMenu()" class="hamburger">
            <img src="https://res.cloudinary.com/the-pouch/image/upload/v1691599206/dev_dakii/close-icon_ctjs3l.svg"
                id="close-menu-button" onclick="closeMenu()" class="hamburger"> --}}
            <img src="/images/menu-icon.svg" id="open-menu-button" onclick="openMenu()" class="hamburger">
            <img src="/images/close-icon.svg" id="close-menu-button" onclick="closeMenu()" class="hamburger">
        </div>
        <div id="nav-links">
            <a href="#work-container" onclick="closeMenu()">
                <p>Work</p>
            </a>
            <a href="#contact-container" onclick="closeMenu()">
                <p>Contact</p>
            </a>
            <a href="#about-container" onclick="closeMenu()">
                <p>About</p>
            </a>
        </div>

    </nav>
</header>
<style>
    header {
        display: flex;
        flex-flow: column;
        align-items: center;
        max-width: 100%;
    }

    #brand {
        padding-top: 3rem;
        padding-left: 1rem;
        color: rgb(250 250 250);
        font-size: 2.5rem;
    }

    .nav-container {
        position: fixed;
        top: 0;
        width: 100%;
        height: max-content;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        background-color: rgb(113 113 122);
    }

    .hamburger {
        position: absolute;
        top: 2rem;
        right: 2rem;
        width: 32px;
        height: 32px;
        cursor: pointer;
    }

    #close-menu-button {
        background-color: rgb(230, 255, 253);
        opacity: .7;
        z-index: -4;
        width: 0;
        height: 0;
    }

    #open-menu-button:hover,
    #close-menu-button:hover {
        background-color: rgb(49, 99, 168);
    }
</style>