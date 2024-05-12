    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Clientes" ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('useradmin/save')?>" method="post" class="my-form">
                <input type="text" name="name" class="input-text" placeholder="<?php echo "Nome";?>" /><br />
                <input type="text" name="mail" class="input-text" placeholder="<?php echo "Email" ?>" /><br />
                <input type="password" name="password" class="input-text" placeholder="<?php echo "Palavra passe" ?>" /><br />
                <input type="text" name="phone" class="input-text" placeholder="<?php echo "Número de contacto" ?>" /><br />
                <input type="date" name="birth" class="input-text input-date"/><br />
                <p class="pre">
                    0 = cliente<br/>
                    1 = sem permissões<br/>
                    2 = Administrador<br/>
                </p>
                <input type="admin" name="admin" class="input-text" placeholder="<?php echo "Tipo" ?>" /><br />
                <input type="submit" class="submit" value=" <?php echo "criar utilizador" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>

    <div class="margin-top-1 display-change-2">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Clientes" ?></h2>
            <p>Utilizadores Criados: (<?php echo count($lusers)?>)</p>
        </div>
        <div class="centered-page center-items table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>nome</th>
                        <th>email</th>
                        <th>permissões</th>
                        <th>telemovel</th>
                        <th>data de nasc.</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if($lusers):?>
                        <?php foreach ($lusers as $user): ?>
                            <tr>
                                <td><?php echo $user->id;?></td>
                                <td><?php echo $user->name;?></td>
                                <td><?php echo $user->mail;?></td>
                                <td><?php echo $user->admin;?></td>						
                                <td><?php echo $user->phone;?></td>
                                <td><?php echo $user->birth;?></td>
                                <td>
                                    <a href="<?php echo base_url('useradmin/edit/'.$user->id)?>" class="table-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo base_url('useradmin/delete/'.$user->id)?>" method="post">
                                        <button type="submit" class="table-button" onclick=" return confirm('Tens certeça de que queres apagar este utilizador? (os dados serão removidos permanentemente)')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <br/>
    </div>