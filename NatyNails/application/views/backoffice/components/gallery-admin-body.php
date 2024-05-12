<div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php lang($gallery); ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('galleryadmin/save')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "completa os seguintes campos para a publicação:"?></p>
                <input type="text" name="name" class="input-text" placeholder="<?php echo "Nome da publicação"?>" /><br />
                <input type="text" name="description" class="input-text" placeholder="<?php echo "Descrição da publicação"?>" /><br />
                <p class="center-items-2"><?php echo "(Deben estar separados com uma virgula ' , ')"?></p>
                <input type="text" name="materials" class="input-text" placeholder="<?php echo "Materiais"?>" /><br />
                <p class="center-items-2"><?php echo "(Deben estar separados com uma virgula ' , ')"?></p>
                <input type="text" name="filters" class="input-text" placeholder="<?php echo "Filtros"?>" /><br />
                <p class="center-items-2"><?php echo "Selecciona a imagem da publicação"?></p>
                <input type="file" id="img_url" name="img_url" class="input-text input-image" /><br />
                <input type="submit" class="submit" value=" <?php echo "submit" ?>" /><br />
            </form>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p class="center-items-2"><?php echo "¿Ja adicionaste a publicação? "?><a href="<?php echo base_url().'gallery' ?>" class="default-link-2"><?php echo "Ver en Galeria ahora"?></a></p>
        </div>
        <br/>
    </div>

    <div class="margin-top-1 display-change-2">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php lang($gallery); ?></h2>
            <p>Publicações adicionados: (<?php echo count($lposts)?>)</p>
        </div>
        <div class="centered-page center-items table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>materials</th>
                        <th>filters</th>
                        <th>img</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if($lposts):?>
                        <?php foreach ($lposts as $post): ?>
                            <tr>
                                <td><?php echo $post->id;?></td>
                                <td><?php echo $post->name;?></td>
                                <td><?php echo $post->description;?></td>
                                <td><?php echo $post->materials;?></td>
                                <td><?php echo $post->filters;?></td>
                                <td><img src="<?php echo base_url().'public/img/posts/'.$post->img_url ?>" alt="myimg" class="miniimg"></td>
                                <td>
                                    <a href="<?php echo base_url('galleryadmin/edit/'.$post->id)?>" class="table-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo base_url('galleryadmin/delete/'.$post->id)?>" method="post">
                                        <button type="submit" class="table-button" onclick=" return confirm('Tens certeça de que queres apagar este artigo? (os dados serão removidos permanentemente)')">Delete</button>
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