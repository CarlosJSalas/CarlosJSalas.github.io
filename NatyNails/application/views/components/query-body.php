        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php echo "Consultas" ?></h2>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p><?php echo "Faz as marcações para as tuas unhas sem sair de casa!" ?></p>
            <div class="info card-info-2 ">
                <p><?php echo "Para adicionar uma marcação tens que criar uma conta" ?> <a href="<?php echo base_url().'register'?>">Criar conta</a></p>
            </div>
        </div>

        <form action="<?php echo base_url('query/save')?>" method="post" class="my-form"  enctype="multipart/form-data">
            <input type="text" name="name" class="input-text" placeholder="<?php echo "Nome";?>" /><br />
            <input type="text" name="description" class="input-text" placeholder="<?php echo "Descriçao";?>" /><br />
            <input type="text" name="address" class="input-text" placeholder="<?php echo "Direção";?>" /><br />
            <input type="date" name="date" class="input-text input-date" placeholder="<?php echo "Data";?>" /><br />
            <input type="time" name="hour" class="input-text input-date" placeholder="<?php echo "Hora";?>" /><br />
            <input type="submit" class="submit" value=" <?php echo "Criar Consulta" ?>" /><br />
        </form>

        <br/>