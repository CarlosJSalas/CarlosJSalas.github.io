
    //This function will take care of receiving the color selected in the creator section and applying that color to the div of the image
    function setNailColor(color){
        return document.getElementById('nail-color').style.backgroundColor = '#'+color;
    }

    function setBgImage(id){
        return document.getElementById('nail-bg').src="public/img/creator/bg-creator"+id+".png";
    }

    function changeHue(val){
        return document.getElementById('nail-bg').style="filter: hue-rotate("+val+"deg);";
    }
    
    function changeBrightness(val){
        return document.getElementById('nail-bg1').style="filter: Brightness("+val+"%);";
    }

    function changeGrayScale(val){
        return document.getElementById('nail-bg2').style="filter: grayscale("+val+"%);";
    }
    window.onload = function() {
        var default_color = "ffaa11";
        setNailColor(default_color);
    };
    