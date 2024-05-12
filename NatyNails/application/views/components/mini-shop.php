        <div class="centered-page-2">
            <h2 class="sub-title-2"><a href="<?php echo base_url().'shop' ?>" class="mini-link"><?php lang($shop); ?></a></h2>    
        </div>
        <div class="container-center centered-page mb-5">
            <?php if($lproduct):?>
                <?php foreach ($lproduct as $product): ?>
                    <div class="center-items shadow-1 item-img br-20">
                        <a href="<?php echo base_url().'shop/view/'.$product->id ?>" class="img-article"><img src="<?php echo base_url().'public/img/upload/'.$product->img_url ?>" alt="filter-img"/></a>
                        <h3 class="sub-title-item ellipsis-article"><?php echo $product->name." - ".$product->price."€" ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <br />
            <a class="dec-none" href="<?php echo base_url().'shop' ?>"><h3 class="see-more"><?php lang($seemore); ?></h3></a>
        </div>