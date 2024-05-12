    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo 'Consulta » Editar'; ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('queryadmin/saveEdit')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "Modifica los campos que deseas actualizar:"?></p>
                <input type="hidden" value="<?php echo $query->id ?>" name="id" class="input-text" placeholder="<?php echo "Id"?>" /><br />
                <input type="text" value="<?php echo $query->name ?>" name="name" class="input-text" placeholder="<?php echo "Nombre pessoal"?>" /><br />
                <input type="text" value="<?php echo $query->description ?>" name="description" class="input-text" placeholder="<?php echo "Descripcion del producto"?>" /><br />
                <input type="text" value="<?php echo $query->address ?>" name="address" class="input-text" placeholder="<?php echo "Morada"?>" /><br />
                <input type="text" value="<?php echo $query->date ?>" name="date" class="input-text" placeholder="<?php echo "Data"?>" /><br />
                <input type="text" value="<?php echo $query->hour ?>" name="hour" class="input-text" placeholder="<?php echo "Hora"?>" /><br />
                <input type="submit" class="submit" value=" <?php echo "Salvar consulta" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>
