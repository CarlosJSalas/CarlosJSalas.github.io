    
    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo 'Galeria » Editar'; ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('galleryadmin/saveEdit')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "Modifica los campos que deseas actualizar:"?></p>
                <input type="hidden" value="<?php echo $post->id ?>" name="id" class="input-text" placeholder="<?php echo "Id"?>" /><br />
                <input type="text" value="<?php echo $post->name ?>" name="name" class="input-text" placeholder="<?php echo "Nome do produto"?>" /><br />
                <input type="text" value="<?php echo $post->description ?>" name="description" class="input-text" placeholder="<?php echo "Descrição do produto"?>" /><br />
                <p class="center-items-2"><?php echo "(Deben ser separados por una coma ' , ')"?></p>
                <input type="text" value="<?php echo $post->materials ?>" name="materials" class="input-text" placeholder="<?php echo "Materiais"?>" /><br />
                <p class="center-items-2"><?php echo "(Deben ser separados por una coma ' , ')"?></p>
                <input type="text" value="<?php echo $post->filters ?>" name="filters" class="input-text" placeholder="<?php echo "Filtros"?>" /><br />
                <p class="center-items-2"><?php echo "Seleciona uma imagem:"?></p>
                <input type="file" name="img_url" class="input-text input-image" /><br />
                <input type="submit" class="submit" value=" <?php echo "Salvar alterações" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>
