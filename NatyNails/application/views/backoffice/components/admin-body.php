    <div class="margin-top-1">
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Gerencia" ?></h2>
        </div>
        <div class="centered-page-2">
            <div class="admin-buttons">
                <a href="<?php echo base_url().'shopadmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo lang($shop_admin) ?></h2>
                        <p><?php lang($shop_admin_description); ?></p>
                    </div>
                </a>
                <a href="<?php echo base_url().'galleryadmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo lang($gallery_admin) ?></h2>
                        <p><?php lang($gallery_admin_description); ?></p>
                    </div>
                </a>
                <a href="<?php echo base_url().'useradmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo "Clientes" ?></h2>
                        <p><?php echo "faz a gestão dos utilizadores aqui!" ?></p>
                    </div>
                </a>
                <a href="<?php echo base_url().'queryadmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo "Consultas" ?></h2>
                        <p><?php echo "faz a gestão das consultas aqui!" ?></p>
                    </div>
                </a>
                <!--
                <a href="<?php echo base_url().'coursesadmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo lang($courses_admin) ?></h2>
                        <p><?php lang($courses_admin_description); ?></p>
                    </div>
                </a>
                <a href="<?php echo base_url().'calendaradmin' ?>" class="big-link">
                    <div class="link-card bg-img-admin">
                        <h2 class="font-title size-title"><?php echo lang($calendar_admin) ?></h2>
                        <p><?php lang($calendar_admin_description); ?></p>
                    </div>
                </a>-->
            </div>
        </div>
        
        <div class="centered-page-2">
            <h2 class="sub-title-2 section"><?php echo "Notificações" ?></h2>
        </div>
        <div class="centered-page-2">
            <p class="ml-c"><?php echo "Produtos com falta de stock: "?><br/><a href="<?php echo base_url().'shopadmin' ?>" class="mini-link"> ir à gerencia de produtos</a></p>
            <div class="centered-page center-items table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Produto</th>
                            <th>Codigo</th>
                            <th>Descrição</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($lproduct):?>
                            <?php
                                foreach ($lproduct as $product): 
                                if ($product->quantity < 30):
                            ?>
                                <tr>
                                    <td><?php echo $product->id;?></td>
                                    <td><?php echo $product->name;?></td>
                                    <td><?php echo $product->code;?></td>
                                    <td><?php echo $product->description;?></td>
                                    <td>
                                        <p class="<?php
                                            if($product->quantity < 10)
                                                echo "red-back";
                                            elseif ($product->quantity < 20)
                                                echo "yellow-back";
                                            else
                                                echo "green-back";
                                        ?>"><?php echo $product->quantity;?></p>
                                    </td>
                                </tr>
                            <?php
                                endif;
                                endforeach;
                            ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="centered-page-2">
            <p class="ml-c"><?php echo "consultas agendadas"?></p>
            <div class="centered-page center-items table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>hour</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($lquery):?>
                            <?php
                                foreach ($lquery as $query): 
                            ?>
                                <tr>
                                    <td><?php echo $query->id;?></td>
                                    <td><?php echo $query->name;?></td>
                                    <td><?php echo $query->description;?></td>
                                    <td><?php echo $query->date;?></td>
                                    <td><?php echo $query->hour;?></td>
                                    
                                </tr>
                            <?php
                                endforeach;
                            ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>