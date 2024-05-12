        <div class="centered-page">
            <hr/>  
        </div>
        <div class="centered-page-2">
            <h2 class="sub-title-2"><a href="<?php echo base_url().'gallery' ?>" class="mini-link"><?php lang($gallery); ?></a></h2>    
        </div>
        <div class="container-center centered-page">
            <?php for($i = 1; $i<5 ; $i++): ?>
            <div class="center-items item-img">
                <a href="#"><img src="<?php echo base_url().'public/img/nails/naildesign'.$i.'.jpg' ?>" alt="filter-img"/></a>
                <h3 class="sub-title-item">Nail description - <?php echo $i+1 ?></h3>
            </div>
            <?php endfor; ?>
            <br />
            <a class="dec-none" href="<?php echo base_url().'gallery' ?>"><h3 class="see-more"><?php lang($seemore); ?></h3></a>
        </div>