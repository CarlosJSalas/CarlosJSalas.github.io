        
        <div class="centered-page-2">
            <div class=" back-container">
                <a href="<?php echo base_url().'shop' ?>" class="back"><b>Voltar</b></a>
            </div>
        </div>
        <div class="centered-page-2">
            <?php foreach ($product_data as $product): ?>
                <div class="center-items-2 product-img">
                    <img src="<?php echo base_url().'public/img/upload/'.$product->img_url ?>" alt="filter-img"/>
                    <div>
                        <h3 class="post-title"><?php echo $product->name?></h3><br>
                        <p class="post-text"><?php echo $product->description?></p>
                        <p class="post-text">Preço: <?php echo $product->price?>€</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>