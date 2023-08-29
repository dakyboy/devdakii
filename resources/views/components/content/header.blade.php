<header>
    <nav class="nav-container">
        <a>
            <p id="brand">Aaron Edaku</p>
        </a>

        <div>
            <img src="/images/menu-icon.svg" id="open-menu-button" onclick="openMenu()" class="hamburger">
            <img src="/images/close-icon.svg" id="close-menu-button" onclick="closeMenu()" class="hamburger">
        </div>
        <div id="nav-links">
            <a href="#work-title" onclick="closeMenu()">
                <p>Work</p>
            </a>
            <a href="#about-title" onclick="closeMenu()">
                <p>About</p>
            </a>
            <a href="#contact-title" onclick="closeMenu()">
                <p>Contact</p>
            </a>
        </div>

    </nav>


    <div id="title-header">
        <div class="greeting-container">
            <p id="greeting">Hello, i am </p>
            <h1 id="title">Aaron Edaku.</h1>
        </div>
        <p id="sub-title">A mobile app developer.</p>
        <p id="description">I love designing and developing solutions built on robust backends and user friendly
            frontends.
        </p>
    </div>
</header>

<style>
    header {
        width: 100%;
        display: flex;
        flex-flow: column;

    }

    #brand {
        padding-top: 3rem;
        padding-left: 1rem;
        color: black;
        font-size: 1.5rem;
    }

    .nav-container {
        position: fixed;
        top: 0;
        width: 100%;
        height: 10vh;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
        background-color: rgb(183, 153, 255);
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

    #nav-links {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        background-color: rgb(183, 153, 255);
    }

    #nav-links a {
        padding: 2rem;
        color: black;
        font-size: calc(3rem + 1vw);
    }

    #nav-links a:hover {
        color: rgb(209, 211, 212);
    }


    #title-header {
        display: flex;
        flex-flow: column nowrap;
        margin: 0 auto;
        margin-top: 20%;
        align-items: flex-start;
        background-color: rgb(172, 188, 255);
        max-width: 100%;
    }

    .greeting-container {
        display: flex;
        flex-flow: column;
        align-items: flex-start;
    }

    #title,
    #greeting,
    #description {
        text-align: left;
    }

    #title,
    #greeting {
        margin: 0 auto;
    }

    #title {
        font-size: calc(2rem + 1.5vw);
    }

    #greeting,
    #sub-title,
    #description {
        font-size: calc(1.5rem + 1vw);
    }
    #description 
</style>
