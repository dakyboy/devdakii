<section class="about-container">
    <h2 id="about-title">About</h2>
    <p class="about-me-desc">I take my inspiration from nature, and can be found often taking my dog on walks, as I enjoy
        the
        cool breeze brought forth by both Lake Victoria and The Source of The Nile
    </p>

    <picture>
        <img src="https://res.cloudinary.com/the-pouch/image/upload/w_1000,ar_1:1,c_fill,g_auto,e_art:hokusai/v1684151199/dev_dakii/aaron_edaku_bc18e7.jpg"
            alt="Developer Aaron Edaku with his dog on nature walk along the river Nile" width="250" height="250"
            loading="lazy" />
    </picture>

</section>
<x-content.myTools></x-content.myTools>
<style>
    .about-container {
        background-color: rgb(87, 108, 188);
        color: white;
        display: flex;
        align-items: center;
        flex-flow: column wrap;
        width: 100%;
    }

    .about-container img {
        padding: 1rem;
        box-shadow: rgba(222, 6, 150, 0.881) 0px -50px 36px -28px inset;
    }

    #about-title {
        align-self: center;
    }

    .about-me-desc {
        padding: 2rem;
    }
</style>
