        <div class="centered-page-2">
            <h2 class="sub-title-3 section"><?php lang($creator); ?></h2>
        </div>
        <div class="info centered-page-2 card-info-1 ">
            <p><?php echo "Aqui é administrado as publicações dos trabalhos feitos ás clientes e gestão dos produtos." ?></p>
        </div>

        <div class="info centered-page-2 card-info-1 ">
            <div class="center-items linear-div">
                <div onclick="setBgImage(0)"><img src="<?php echo base_url().'public/img/creator/icon-creator0.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(1)"><img src="<?php echo base_url().'public/img/creator/icon-creator1.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(2)"><img src="<?php echo base_url().'public/img/creator/icon-creator2.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(3)"><img src="<?php echo base_url().'public/img/creator/icon-creator3.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(4)"><img src="<?php echo base_url().'public/img/creator/icon-creator4.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(5)"><img src="<?php echo base_url().'public/img/creator/icon-creator5.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(6)"><img src="<?php echo base_url().'public/img/creator/icon-creator6.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(7)"><img src="<?php echo base_url().'public/img/creator/icon-creator7.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(8)"><img src="<?php echo base_url().'public/img/creator/icon-creator8.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(9)"><img src="<?php echo base_url().'public/img/creator/icon-creator9.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(10)"><img src="<?php echo base_url().'public/img/creator/icon-creator10.jpg' ?>" alt="myOption" class="linear-img"/></div>
                <div onclick="setBgImage(11)"><img src="<?php echo base_url().'public/img/creator/icon-creator11.jpg' ?>" alt="myOption" class="linear-img"/></div>
            </div>
            <div id="nail-slider" class="center-items">
                <div class="mt-5">
                    <span class="myspan">matiz</span>
                    <input type="range" min="0" max="360" oninput="changeHue(this.value)" onchange="changeHue(this.value)">
                </div>
                <br/>
                <div>
                    <span class="myspan">brilho</span>
                    <input type="range" min="0" max="1200" oninput="changeBrightness(this.value)" onchange="changeBrightness(this.value)">
                </div>
                <br/>
                <div>
                    <span class="myspan">gray</span>
                    <input type="range" min="0" max="100" oninput="changeGrayScale(this.value)" onchange="changeGrayScale(this.value)">
                </div>
            </div>
        </div>

        <div class="info centered-page-2">
            <div class="img-creator-container center-items relative delay-1 br-20" id="nail-color">
                <div id="nail-bg2"><div id="nail-bg1"><img id="nail-bg" class="width-100 img-relative img-creator" alt="MyNailStyle" src="<?php echo base_url().'public/img/creator/bg-creator5.png' ?>"/></div></div>
                <img class="width-100 img-absolute img-creator" alt="MyNailStyle" src="<?php echo base_url().'public/img/nail8.png' ?>"/>   
            </div>
        </div>

        <div class="info centered-page-2 card-info-1 ">
            <div class="centered-page-2">
                <img src="https://dummyimage.com/50x50/E53935/ff0000.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('ff0000')"/>
                <img src="https://dummyimage.com/50x50/E91E63/E91E63.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('E91E63')"/>
                <img src="https://dummyimage.com/50x50/9C27B0/9C27B0.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('9C27B0')"/>
                <img src="https://dummyimage.com/50x50/673AB7/673AB7.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('673AB7')"/>
                <img src="https://dummyimage.com/50x50/3F51B5/3F51B5.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('3F51B5')"/>
                <img src="https://dummyimage.com/50x50/2196F3/2196F3.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('2196F3')"/>
                <img src="https://dummyimage.com/50x50/03A9F4/03A9F4.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('03A9F4')"/>
                <img src="https://dummyimage.com/50x50/00BCD4/00BCD4.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('00BCD4')"/>
                <img src="https://dummyimage.com/50x50/009688/009688.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('009688')"/>
                <img src="https://dummyimage.com/50x50/4CAF50/4CAF50.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('4CAF50')"/>
                <img src="https://dummyimage.com/50x50/8BC34A/8BC34A.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('8BC34A')"/>
                <img src="https://dummyimage.com/50x50/CDDC39/CDDC39.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('CDDC39')"/>
                <img src="https://dummyimage.com/50x50/FFEB3B/FFEB3B.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('FFEB3B')"/>
                <img src="https://dummyimage.com/50x50/FFC107/FFC107.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('FFC107')"/>
                <img src="https://dummyimage.com/50x50/FF9800/FF9800.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('FF9800')"/>
                <img src="https://dummyimage.com/50x50/FF5722/FF5722.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('FF5722')"/>
                <img src="https://dummyimage.com/50x50/795548/795548.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('795548')"/>
                <img src="https://dummyimage.com/50x50/9E9E9E/9E9E9E.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('9E9E9E')"/>
                <img src="https://dummyimage.com/50x50/607D8B/607D8B.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('607D8B')"/>
                <img src="https://dummyimage.com/50x50/F2D2BD/F2D2BD.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('F2D2BD')"/>
                <img src="https://dummyimage.com/50x50/EDC2A2/EDC2A2.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('EDC2A2')"/>
                <img src="https://dummyimage.com/50x50/e7b087/e7b087.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('e7b087')"/>
                <img src="https://dummyimage.com/50x50/ffffff/ffffff.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('ffffff')"/>
                <img src="https://dummyimage.com/50x50/000000/000000.png" alt="myOption" class="radius-2 pointer" onclick="setNailColor('000000')"/>
                <!--<input id="color-pro" type="color" class="pointer" oninput="setNailColor(this.value)" onchange="setNailColor(this.value)">-->
            </div>
        </div>
        <br/>