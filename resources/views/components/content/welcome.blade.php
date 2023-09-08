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
<style>
    #title-header {
        display: flex;
        flex-flow: column nowrap;
        align-items: flex-start;
        background-color: rgb(172, 188, 255);
        min-height: 100vh;
        max-width: 100%;
        justify-content: center;
        margin-top: 4vh;
        padding: 0 2rem 0;
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

    #title {
        font-size: calc(4rem + 1.5vw);
    }

    #greeting,
    #sub-title,
    #description {
        font-size: calc(3.5rem + 1vw);
    }

    #description {
        margin-top: 8%;
    }
</style>
