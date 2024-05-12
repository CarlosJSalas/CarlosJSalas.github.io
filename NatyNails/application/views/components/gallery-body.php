        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php lang($gallery); ?></h2>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p><?php echo "Aqui se encontra uma grande variedade de modelos de desenhos e formatos de unhas." ?></p>
        </div>
        <div class="container-center centered-page">
            <?php if($lposts):?>
                <?php foreach ($lposts as $post): ?>
                    <div class="center-items item-img-2">
                        <a href="<?php echo base_url().'gallery/view/'.$post->id ?>"><img src="<?php echo base_url().'public/img/posts/'.$post->img_url ?>" alt="filter-img"/></a>
                        <h3 class="sub-title-item ellipsis-post"><?php echo $post->name?></h3>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <br/>