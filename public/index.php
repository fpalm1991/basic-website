<?php require __DIR__ . './../inc/_header.php'; ?>

<main class="h-container mb-4">

    <section class="mb-2">

        <h2>Lorem ipsum dolor</h2>

        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque illo 
            impedit, voluptate quia enim perspiciatis accusamus! 
            Atque eius veniam ipsum.
        </p>

        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Quia vitae inventore sint, labore ut deleniti recusandae 
            consequuntur natus nihil, aut, exercitationem ratione 
            voluptas asperiores! Unde, tempora. Magnam optio alias, nam 
            perspiciatis impedit quos quaerat repellendus eum porro 
            omnis necessitatibus delectus?
        </p>
        
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque illo 
            impedit, voluptate quia enim perspiciatis accusamus! 
            Atque eius veniam ipsum.
        </p>

    </section>

    <section>
        <h2>Lorem ipsum dolor sit</h2>

        <div class="teaser">

            <?php for ($i=0; $i < 4; $i++) : ?>

            <div class="teaser-item">
                <div class="teaser-item__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="fillColor" class="bi bi-box" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                    </svg>
                </div>

                <div class="teaser-item__content">
                    <h3 class="teaser-title">Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                        elit. Dicta, explicabo vel adipisci numquam tenetur 
                        natus ullam dignissimos molestias?</p>
                </div>

                <div class="teaser-item__cta">
                    <a href="#">Learn more</a>
                </div>
            </div>

            <?php endfor; ?>

        </div>
    </section>

</main>
  
<?php require __DIR__ . './../inc/_footer.php'; ?>