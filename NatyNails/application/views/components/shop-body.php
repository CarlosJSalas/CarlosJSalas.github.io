        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php lang($shop); ?></h2>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p><?php echo "Encontre aqui os melhores produtos de manicura:" ?></p>
        </div>
        <!--
        <div class="center-items padding-lr">
            <?php for($i = 0; $i<8 ; $i++){ ?>
            <a href="#"><img src="<?php echo base_url()."public/img/favicon.png" ?>" alt="filter-img"/></a>
            <?php } ?>
        </div>
        -->
        <div class="container-center centered-page">
            <?php if($lproduct):?>
                <?php foreach ($lproduct as $product): ?>
                    <div class="center-items item-img m-5">
                        <a href="<?php echo base_url().'shop/view/'.$product->id ?>" class="img-article"><img src="<?php echo base_url().'public/img/upload/'.$product->img_url ?>" alt="filter-img"/></a>
                        <h3 class="sub-title-item ellipsis-article"><?php echo $product->name." - ".$product->price."€" ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <br/>