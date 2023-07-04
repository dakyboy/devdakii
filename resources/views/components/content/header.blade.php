<header>
    <nav class="nav-container">
        <a>
            <p>Aaron Edaku</p>
        </a>
        <img src="/images/menu-icon.svg" id="open-menu-button" onclick="openMenu()">
        <img src="/images/close-icon.svg" id="close-menu-button" onclick="closeMenu()">
        <div id="nav-links">
            <a href="#work-title">
                <p>Work</p>
            </a>
            <a href="#about-title">
                <p>About</p>
            </a>
            <a href="#contact-title">
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

    .nav-container {
        position: fixed;
        top: 0;
        width: 100%;
        padding: 2rem;
        margin: 0 auto;
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;
        background-color: rgb(11, 36, 71);
        overflow: hidden;
    }

    #open-menu-button, #close-menu-button {
        width: 32px;
        height: 32px;
        cursor: pointer;
        z-index: 4;
    }

    #close-menu-button {
        z-index: -4;
        display: none; 
    }

    #open-menu-button:hover, #close-menu-button:hover {
        background-color: rgb(49, 99, 168);;
    }

    #nav-links {
        display: none;
        height: max-content;
    }

    #nav-links a {
        padding: 1rem;
        color: white;
    }

    #nav-links a:hover {
        color: rgb(209, 211, 212);
    }


    #title-header {
        display: flex;
        flex-flow: column nowrap;
        margin: 0 auto;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 42vh 4vw 20vh;
        max-height: 90vh;

    }

    .greeting-container {
        display: flex;
        flex-flow: row wrap;
        align-items: baseline;
    }

    #title,
    #greeting,
    #description {
        text-align: left;
    }

    #title,
    #greeting {
        margin: -1vw auto;
    }

    #title {
        font-size: calc(1.5rem + 1.8vw);
    }

    #greeting,
    #sub-title {
        font-size: calc(1.3rem + 1.2vw);
        margin: 1.1rem 1.5rem;
    }

    #description {
        flex-grow: 1;
        font-size: calc(1rem + 1vw);
        padding: 0 2rem;
    }
</style>
