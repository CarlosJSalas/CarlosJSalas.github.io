    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo 'Tienda » Editar'; ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('shopadmin/saveEdit')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "Modifica los campos que deseas actualizar:"?></p>
                <input type="hidden" value="<?php echo $product->id ?>" name="id" class="input-text" placeholder="<?php echo "Id"?>" /><br />
                <input type="text" value="<?php echo $product->name ?>" name="name" class="input-text" placeholder="<?php echo "Nombre del producto"?>" /><br />
                <input type="text" value="<?php echo $product->description ?>" name="description" class="input-text" placeholder="<?php echo "Descripcion del producto"?>" /><br />
                <input type="text" value="<?php echo $product->code ?>" name="code" class="input-text" placeholder="<?php echo "Codigo del producto"?>" /><br />
                <input type="text" value="<?php echo $product->price ?>" name="price" class="input-text" placeholder="<?php echo "Precio del producto"?>" /><br />
                <input type="text" value="<?php echo $product->quantity ?>" name="quantity" class="input-text" placeholder="<?php echo "Cantidad del producto"?>" /><br />
                <input type="text" value="<?php echo $product->filters ?>" name="filters" class="input-text" placeholder="<?php echo "Filtros"?>" /><br />
                <p class="center-items-2"><?php echo "Selecciona la imagen del producto:"?></p>
                <input type="file" id="img_url_edit" name="img_url" class="input-text input-image" /><br />
                <!--<input type="file" id="img_url_edit" name="img_url" value="<?php echo base_url().'public/img/articles/'.$product->img_url ?>" class="input-text input-image" /><br />-->
                <input type="submit" class="submit" value=" <?php echo "Guardar cambios" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>
