<header>
    <nav class="nav-container">
        <a>
            <p>Dev Dakii</p>
        </a>
        <div class="nav-links">
            <a href="#work">
                <p>Work</p>
            </a>
            <a href="#about">
                <p>About</p>
            </a>
            <a href="#contact">
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
        <p id="description">I love designing and developing solutions built on robust backends and user friendly frontends. I take my inspiration from nature, and can be found often taking my dog on walks as I enjoy the cool breeze brought forth by both Lake Victoria and The Source of The Nile .
        </p>
    </div>
</header>

<style>
    header {
        width: 100%;
        padding: .1rem;
        display: flex;
        flex-flow: column;
        
    }

    .nav-container {
        position: sticky;
        top: 0;
        width: 100%;
        flex: 1;
        padding: 2rem;
        margin: 0 auto;
        display: flex;
        flex-flow: row wrap;
        align-items: center;
        justify-content: space-between;
        background-color: rgb(11, 36, 71);
    }

    .nav-links {
        display: flex;
    }

    .nav-links a {
        padding: 1rem;
        color: white;
    }

    .nav-links a:hover {
        color: rgb(209, 211, 212);
    }


    #title-header {
        display: flex;
        flex-flow: column wrap;
        margin: 10vh auto;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 10vh 4vw;
        max-width: 90vw;
    }

    .greeting-container {
        display: flex;
        flex-flow: row wrap;
        align-items: baseline;
    }

    #title,
    #greeting, #description {
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
