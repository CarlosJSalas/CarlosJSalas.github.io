        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php lang($register); ?></h2>
            <div class="center-page-2"><img src="<?php echo base_url()."public/img/user-logo.jpg" ?>" class="user_img" alt="user_image" /></div>
            <form action="<?php echo base_url('register/save')?>" method="post" class="my-form">
                <input type="text" name="name" class="input-text" placeholder="<?php echo lang($enter_first_name);?>" /><br />
                <input type="text" name="mail" class="input-text" placeholder="<?php echo lang($enter_mail); ?>" /><br />
                <input type="password" name="password" class="input-text" placeholder="<?php echo "Introduza uma palavra passe" ?>" /><br />
                <input type="text" name="phone" class="input-text" placeholder="<?php echo "Introduza um numero de contacto valido" ?>" /><br />
                <input type="date" name="birth" class="input-text input-date" placeholder="<?php echo "Introduza um numero de contacto valido" ?>" /><br />
                <input type="submit" class="submit" value=" <?php echo lang($register_button); ?>" /><br />
            </form>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p class="center-items-2"><?php echo lang($already_account);?><a href="<?php echo base_url().'login' ?>" class="default-link-2"><?php lang($start_session_here); ?></a></p>
        </div>
        <br/>