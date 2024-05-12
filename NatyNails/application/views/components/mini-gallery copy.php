        <div class="centered-page-2">
            <h2 class="sub-title-2"><a href="<?php echo base_url().'gallery' ?>" class="mini-link"><?php lang($gallery); ?></a></h2>    
        </div>
        <div class="container-center centered-page">
            
            <?php if($lposts):?>
                <div class="center-items">
                <?php foreach ($lposts as $post): ?>
                    <div class="item-img-2">
                        <a href="<?php echo base_url().'gallery/view/'.$post->id ?>"><img src="<?php echo base_url().'public/img/posts/'.$post->img_url ?>" alt="filter-img"/></a>
                        <h3 class="sub-title-item ellipsis-post"><?php echo $post->name?></h3>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <br />
            <a class="dec-none" href="<?php echo base_url().'gallery' ?>"><h3 class="see-more"><?php lang($seemore); ?></h3></a>
        </div>
        <div class="centered-page">
            <hr/>  
        </div>

        