        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php lang($login); ?></h2>
            <div class="center-page-2"><img src="<?php echo base_url()."public/img/user-logo.jpg" ?>" class="user_img" alt="user_image" /></div>
            <form action="Login/login" method="post" class="my-form">
                <input type="text" name="username" class="input-text" placeholder="<?php echo "Introduza o nome de utilizador" ?>" /><br />
                <input type="password" name="password" class="input-text" placeholder="<?php echo lang($enter_pass); ?>" /><br />
                <?php 
                    echo (isset($login_success))? $login_success:'';
                    echo (isset($login_error))? $login_error:'';
                ?>
                <input type="submit" class="submit" value=" <?php echo lang($start_session); ?>" /><br />
            </form>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p class="center-items-2"><?php echo lang($not_account); ?><a href="<?php echo base_url().'register' ?>" class="default-link-2"><?php echo lang($register_here); ?></a></p>
        </div>
        <br/>