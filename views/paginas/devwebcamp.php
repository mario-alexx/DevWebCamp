<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div <?php aos_animacion(); ?> class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture >
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">
                Aenean non vestibulum mi, ac laoreet dui. Proin sodales posuere eros, 
                viverra consectetur tellus. Phasellus sed nulla a nibh dapibus sollicitudin. 
                Cras et sapien id sem lobortis ullamcorper eget sit amet nunc.
            </p>
            <p class="devwebcamp__texto">
                Aenean non vestibulum mi, ac laoreet dui. Proin sodales posuere eros, 
                viverra consectetur tellus. Phasellus sed nulla a nibh dapibus sollicitudin. 
                Cras et sapien id sem lobortis ullamcorper eget sit amet nunc.
            </p>
        </div>
    </div>
</main>