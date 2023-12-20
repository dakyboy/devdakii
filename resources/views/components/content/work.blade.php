<section id="work-container">
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
    #work-container h2 {
        margin-bottom: 2rem;
    }

    #work-container {
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
        gap: 2rem 1rem;
        justify-content: space-between;
        align-items: center;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .project-container:hover {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
    }

    .project-title {
        padding: 1rem;
    }

    .project-container img {
        aspect-ratio: 16 / 9;
    }

    .project-container p {
        text-align: center;
        color: rgb(249 250 251);
    }

    .project-description {
        background-color: rgb(63 63 70);
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