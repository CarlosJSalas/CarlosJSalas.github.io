<div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Consultas" ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('queryadmin/save')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "completa os seguintes campos para a consulta:"?></p>
                <input type="text" name="name" class="input-text" placeholder="<?php echo "Nome pessoal"?>" /><br />
                <input type="text" name="description" class="input-text" placeholder="<?php echo "Descrição da publicação"?>" /><br />
                <input type="text" name="address" class="input-text" placeholder="<?php echo "Morada"?>" /><br />
                <input type="date" name="date" class="input-text input-date" placeholder="<?php echo "Data"?>" /><br />
                <input type="TIME" name="hour" class="input-text input-date" placeholder="<?php echo "Hora "?>" /><br />
                <input type="submit" class="submit" value=" <?php echo "submit" ?>" /><br />
            </form>
        </div>
        <br/>
    </div>

    <div class="margin-top-1 display-change-2">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Consultas"; ?></h2>
            <p>Consultas marcadas: (<?php echo count($lquery)?>)</p>
        </div>
        <div class="centered-page center-items table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Morada</th>
                        <th>date</th>
                        <th>hour</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if($lquery):?>
                        <?php foreach ($lquery as $query): ?>
                            <tr>
                                <td><?php echo $query->id;?></td>
                                <td><?php echo $query->name;?></td>
                                <td><?php echo $query->description;?></td>
                                <td><?php echo $query->address;?></td>
                                <td><?php echo $query->date;?></td>
                                <td><?php echo $query->hour;?></td>
                                <td>
                                    <a href="<?php echo base_url('queryadmin/edit/'.$query->id)?>" class="table-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo base_url('queryadmin/delete/'.$query->id)?>" method="post">
                                        <button type="submit" class="table-button" onclick=" return confirm('Tens certeça de que queres apagar esta consulta? (os dados serão removidos permanentemente)')">Delete</button>
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