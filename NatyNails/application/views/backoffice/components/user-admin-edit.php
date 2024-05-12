    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo 'Tienda » Editar'; ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('useradmin/saveEdit')?>" method="post" class="my-form"  enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $user->id ?>" name="id" class="input-text" placeholder="<?php echo "Id"?>" /><br />
                <input type="text" value="<?php echo $user->name ?>" name="name" class="input-text" placeholder="<?php echo "Nome";?>" /><br />
                <input type="text" value="<?php echo $user->mail ?>" name="mail" class="input-text" placeholder="<?php echo "Email" ?>" /><br />
                <input type="text" value="<?php echo $user->phone ?>" name="phone" class="input-text" placeholder="<?php echo "Número de contacto" ?>" /><br />
                <input type="date" value="<?php echo $user->birth ?>" name="birth" class="input-text input-date"/><br />
                <p>
                    0 = sem permissões<br/>
                    1 = cliente<br/>
                    2 = Administrador<br/>
                </p>
                <input type="admin" value="<?php echo $user->admin ?>" name="admin" class="input-text" placeholder="<?php echo "Tipo" ?>" /><br />
                <input type="submit" class="submit" value=" <?php echo "Salvar Alterações" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>
