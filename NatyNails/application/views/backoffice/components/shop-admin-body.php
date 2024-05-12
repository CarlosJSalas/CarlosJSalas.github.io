    <div class="margin-top-1 display-change-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php lang($shop); ?></h2>
        </div>
        <div class="centered-page-2">
            <form action="<?php echo base_url('shopadmin/save')?>" method="post" class="my-form" enctype="multipart/form-data">
                <p class="center-items-2"><?php echo "Insira os seguintes campos do produto:"?></p>
                <input type="text" name="name" class="input-text" placeholder="<?php echo "Nome do produto"?>" /><br />
                <input type="text" name="description" class="input-text" placeholder="<?php echo "Descrição da do produto"?>" /><br />
                <input type="text" name="code" class="input-text" placeholder="<?php echo "Codigo do produto"?>" /><br />
                <input type="text" name="price" class="input-text" placeholder="<?php echo "Preço do produto"?>" /><br />
                <input type="text" name="quantity" class="input-text" placeholder="<?php echo "Quantidade do produto"?>" /><br />
                <p class="center-items-2"><?php echo "(Deben estar separados por uma virgula ' , ')"?></p>
                <input type="text" name="filters" class="input-text" placeholder="<?php echo "Filtros"?>" /><br />
                <p class="center-items-2"><?php echo "Selecciona a imagem do produto:"?></p>
                <input type="file" id="img_url" name="img_url" class="input-text input-image" /><br />
                <input type="submit" class="submit" value=" <?php echo "submit" ?>" /><br />
            </form>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p class="center-items-2"><?php echo "¿Ja adicionaste o produto? "?><a href="<?php echo base_url().'shop' ?>" class="default-link-2"><?php echo "Ver em  agora"?></a></p>
        </div>
        <br/>
    </div>

    <div class="margin-top-1 display-change-2">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php lang($shop); ?></h2>
            <p>Produtos adicionados: (<?php echo count($lproduct)?>)</p>
        </div>
        <div class="centered-page center-items table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>code</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>filters</th>
                        <th>img</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php if($lproduct):?>
                        <?php foreach ($lproduct as $product): ?>
                            <tr>
                                <td><?php echo $product->id;?></td>
                                <td><?php echo $product->name;?></td>
                                <td><?php echo $product->description;?></td>
                                <td><?php echo $product->code;?></td>						
                                <td><?php echo $product->price;?>€</td>
                                <td>
                                    <p class="<?php
                                            if($product->quantity < 10)
                                                echo "red-back";
                                            elseif ($product->quantity < 20)
                                                echo "yellow-back";
                                            elseif ($product->quantity < 30)
                                                echo "green-back";
                                            else
                                                echo "blue-back";
                                        ?>"><?php echo $product->quantity;?>
                                    </p>
                                </td>
                                <td><?php echo $product->filters;?></td>
                                <td><img src="<?php echo base_url().'public/img/upload/'.$product->img_url ?>" alt="myimg" class="miniimg"></td>
                                <td>
                                    <a href="<?php echo base_url('shopadmin/edit/'.$product->id)?>" class="table-button">Edit</a>
                                </td>
                                <td>
                                    <form action="<?php echo base_url('shopadmin/delete/'.$product->id)?>" method="post">
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