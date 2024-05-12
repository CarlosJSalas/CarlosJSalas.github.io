        
         <div class="centered-page-2">
            <div class=" back-container">
                <a href="<?php echo base_url().'gallery' ?>" class="back"><b>Voltar</b></a>
            </div>
        </div>
        <div class="centered-page-2">
            <?php foreach ($post_data as $post): ?>
                <div class="center-items-2 post-img">
                    <img src="<?php echo base_url().'public/img/posts/'.$post->img_url ?>" alt="img"/>
                    <div>
                        <h3 class="post-title"><?php echo $post->name?></h3><br>
                        <p class="post-text"><?php echo $post->description?></p>
                        <?php
                            $materials_explode = explode(",",$post->materials);
                        ?>
                        <ul>
                        <p class="post-text">Materiais:</p>
                        <?php foreach ($materials_explode as $material): ?>
                            <li class="post-text"><?php echo $material ?></li>
                        <?php endforeach; ?>
                        </ul>
                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>