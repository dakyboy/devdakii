<section class="work-container">
    <h2 id="work-title">Work</h2>
    <div class="projects-container">
        <div class="project-container">

            <p class="project-title">Roll & Scoop Joint</p>
            <picture>
                <img
                    src="https://res.cloudinary.com/the-pouch/image/upload/c_thumb,w_200,g_face/v1681213479/dev_dakii/rollnscoop_ss_1_it3p19.jpg" />
            </picture>
            <div class="project-description">
                <p>Landing site for Ice cream rolls parlour.</p>
                <a class="project-link" href="https://thepouchug.github.io/rollnscoop" target="_blank">
                    <p class="project-link">Visit site</p>
                </a>
            </div>
        </div>
    </div>
</section>
<style>
    .contact-container,
    .about-container,
    .work-container {
        height: min-content;
        width: 100%;
        padding: 2rem 2rem 2rem;
    }

    .work-container h2 {
        margin-bottom: 2rem;
    }

    .work-container {
        background-color: rgb(165, 215, 232);
        color: black;
        display: flex;
        flex-flow: column;
        align-items: center;
    }

    .projects-container {
        display: flex;
        flex-flow: row wrap;
    }

    .project-container {
        display: flex;
        flex-flow: column nowrap;
        background-color: rgba(0, 0, 0, 0.45);
        gap: 2rem 1rem;
        justify-content: space-between;
        align-items: center;
        border: thick solid white;
    }

    .project-container:hover {
        border: thick solid blue;
    }

    .project-title {
        padding: 1rem;
    }

    .project-container img {
        aspect-ratio: 16 / 9;
    }

    .project-container p {
        color: white;
        text-align: center;
    }

    .project-description {
        background-color: gray;
        width: 100%;
        padding: 2rem;
    }

    .project-link {
        margin-top: 1rem;
    }

    .project-link:hover {
        color: blue;
    }
</style>
