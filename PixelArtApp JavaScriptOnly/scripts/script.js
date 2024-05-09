//variables que necesitan ser cambiadas!
// valor 27 (para cambio de linea)
// valor 1296 (numero maximo de pixeles)

var drawColor = "rgba(0, 0, 0)";
var drawable = false;
var buttonSize1 = 1;
var hSize = 48;
var vSize = 27;
var mSize = hSize*vSize;

function _redirect() {
    let text = "Are you sure you want to restart the canvas? (you will lose all progress)";
    if (confirm(text) == true) {
        location.reload();
    }
}

function setDrawColor(color){
    if(buttonSize1 < 1)
        buttonSize1 = 1;
    return drawColor = "#"+color;
}

function setTrue(id){
    drawable = true;
    setColorPixel(id);
}

function setFalse(){
    drawable = false;
}

function setButtonSizem1(){
    buttonSize1 = -1;
}

function setButtonSize0(){
    buttonSize1 = 0;
}

function setButtonSize1(){
    buttonSize1 = 1;
}

function setButtonSize2(){
    buttonSize1 = 2;
}

function setButtonSize3(){
    buttonSize1 = 3;
}

window.onload = function(){
    document.getElementById("wheelColor").addEventListener("change", getColor);
    document.getElementById("wheelColor").addEventListener("change", getColor);
    function getColor(){
        
        //NEWCODE

        var newColor = document.getElementById("wheelColor").value
        newColor = newColor.replace('#', '');

        var aRgbHex = newColor.match(/.{1,2}/g);
        var aRgb = [
            parseInt(aRgbHex[0], 16),
            parseInt(aRgbHex[1], 16),
            parseInt(aRgbHex[2], 16)
        ];
        var opacityColor = document.getElementById("opacityColor").value
        drawColor = "rgba("+aRgb[0]+","+aRgb[1]+","+aRgb[2]+","+opacityColor+")";
        drawColor = "rgba("+aRgb[0]+","+aRgb[1]+","+aRgb[2]+","+opacityColor+")";
        //
    }
    
    document.getElementById("btnDownload").addEventListener("mousedown", downloadImage);
    function downloadImage(){
        //trasforma el tamaño del div a 1 pixel
        var pixelTransform = document.querySelectorAll(".pixel");
        var pixelCheck = document.getElementById("pixelsize").checked;
       
        if(pixelCheck){
            for (let i = 0; i < pixelTransform.length; i++) {
                pixelTransform[i].style.padding = "0px";
            }
        }else{
            for (let i = 0; i < pixelTransform.length; i++) {
                pixelTransform[i].style.padding = "3px";
            }
        }

        //vacia el div con la imagen
        var mydiv = document.getElementById("generatedImage");
        while (mydiv.firstChild) {
            mydiv.removeChild(mydiv.firstChild);
        } 

        //quita el fondo de el lienzo
        
        var coloredPixels = document.querySelectorAll(".nocolored");
        if(coloredPixels){
            for (let i = 0; i < coloredPixels.length; i++) {
                coloredPixels[i].style.opacity = "0";
            }
        }
        
        var bgRemoveCheck = document.getElementById("bgswitch").checked;
       
        if(bgRemoveCheck){
            html2canvas(document.querySelector("#printable"),{backgroundColor: "rgb(0,0,0,0)"}).then(canvas => {
                document.querySelector("#generatedImage").appendChild(canvas)
            });
        }else{
            html2canvas(document.querySelector("#printable")).then(canvas => {
                document.querySelector("#generatedImage").appendChild(canvas)
            });
        }

        //descarga el canvas como png
        setTimeout(function(){
            var canvas = document.getElementById("generatedImage").firstChild;
            var link = document.createElement('a');
            link.download = "MyPixelArt";
            link.href = canvas.toDataURL("image/png").replace("image/PNG","image/octet-stream");
            link.click();
        }, 1000);
        
        if(pixelCheck){
            for (let i = 0; i < pixelTransform.length; i++) {
                pixelTransform[i].style.padding = "8px";
            }
        }else{
            for (let i = 0; i < pixelTransform.length; i++) {
                pixelTransform[i].style.padding = "8px";
            }
        }

        //quita el fondo de el lienzo
        var coloredPixels = document.querySelectorAll(".nocolored");
        if(coloredPixels){
            for (let i = 0; i < coloredPixels.length; i++) {
                coloredPixels[i].style.opacity = "1";
            }
        }
    }

    document.getElementById("hidebg").addEventListener("mouseover", hidebg);
    document.getElementById("hidebg").addEventListener("mouseout", showbg);

    function hidebg(){
        var coloredPixels = document.querySelectorAll(".nocolored");
        if(coloredPixels){
            for (let i = 0; i < coloredPixels.length; i++) {
                coloredPixels[i].style.opacity = "0.5";
            }
        }
    }
    function showbg(){
        var coloredPixels = document.querySelectorAll(".nocolored");
        if(coloredPixels){
            for (let i = 0; i < coloredPixels.length; i++) {
                coloredPixels[i].style.opacity = "1";
            }
        }
    }
    
    document.getElementById("setBgColor").addEventListener("click", setBG);
    function setBG(){
        var noColoredBG = document.querySelectorAll(".nocolored");
        if(noColoredBG){
            for (let i = 0; i < noColoredBG.length; i++) {
                noColoredBG[i].classList.remove("nocolored");
                noColoredBG[i].classList.add("nocolored2");
            }
        }
        var noColoredBG2 = document.querySelectorAll(".nocolored2");
        if(noColoredBG2){
            for (let i = 0; i < noColoredBG2.length; i++) {
                    noColoredBG2[i].style.backgroundColor = drawColor;
            }
              
        }
        
    }

    resizeScreen("default", "default");

    document.getElementById("resizeScreen").addEventListener("click", resizeScreen);    
    function resizeScreen(widthSize = 0, heightSize = 0){

        if(widthSize == "default" && heightSize == "default"){
            var widthSize = 48;
            var heightSize = 27;
        }else{
            var widthSize = document.getElementById("inputWidth").value;
            var heightSize = document.getElementById("inputHeight").value;
        }

        if(widthSize <= 0 || heightSize <= 0){
            return;
        }
                
        hSize = parseInt(widthSize);
        vSize = parseInt(heightSize);
        mSize = parseInt(hSize*vSize);

        var resizeDiv = document.getElementById("printable");
        while (resizeDiv.firstChild) {
            resizeDiv.removeChild(resizeDiv.firstChild);
        }
        
        var myPixelId = 0;
        var myPixelId2 = 0;
        for(var h = 0; h<widthSize; h++){
            if(heightSize%2==0)
                myPixelId2+=1;
            var pixelContainer = resizeDiv.appendChild(document.createElement("div"));
            pixelContainer.setAttribute("class", "pixel-container");
            for(var v = 0; v<heightSize; v++){
                var newPixel = pixelContainer.appendChild(document.createElement("div"));
                newPixel.setAttribute("class", "pixel nocolored noColoredBG");
                newPixel.setAttribute("id", "p"+(myPixelId+=1));
                myPixelId2+=1;
                if(myPixelId2%2 == 0)
                    document.getElementById("p"+myPixelId).style.backgroundColor = "#eeeeee";
                else
                    document.getElementById("p"+myPixelId).style.backgroundColor = "#fefefe;";
                newPixel.setAttribute("onmousemove", "setColorPixel("+myPixelId+")");
                newPixel.setAttribute("onmousedown", "setTrue("+myPixelId+");setColorPixel("+myPixelId+")");
            }
        }
    }

    
    document.getElementById("flipx").addEventListener("click", flipX);
    var hasClass = false;
    function flipX(){
        if(hasClass){
            document.querySelector("#printable").classList.remove("flipx");
            hasClass = false;
        }else{
            document.querySelector("#printable").classList.add("flipx");
            hasClass = true;
        }
    }

    document.getElementById("flipy").addEventListener("click", flipY);
    var hasClass2 = false;
    function flipY(){
        if(hasClass2){
            document.querySelector("#printable").classList.remove("flipy");
            hasClass2 = false;
        }else{
            document.querySelector("#printable").classList.add("flipy");
            hasClass2 = true;
        }
    }
}

function setNewPixelSize(size){
    var pixelTransform = document.querySelectorAll(".pixel");
    for (let i = 0; i < pixelTransform.length; i++) {
        pixelTransform[i].style.padding = size+"px";
    }
}

function setNewpalleteColor(id){
    var newColor = drawColor;
    document.getElementById("newColor"+id).style.backgroundColor = newColor;
}

function getBgColor(id){
    drawColor = document.getElementById("newColor"+id).style.backgroundColor;
}

function setColorPixel(id){
    var id2 = id;
    if(drawable){
        if(buttonSize1 == 1){
            document.getElementById("p"+id).style.backgroundColor = drawColor;
            document.getElementById("p"+id).classList.remove("nocolored");
            document.getElementById("p"+id).classList.remove("nocolored2");
        }else if(buttonSize1 == 2){
            //medio
            document.getElementById("p"+id).style.backgroundColor = drawColor;
            document.getElementById("p"+id).classList.remove("nocolored");
            document.getElementById("p"+id).classList.remove("nocolored2");

            //abajo
            id = id+1;
            var x=0;
            while(x<mSize){
                if((x / id2) < 1){
                    x+=vSize;
                }else if((x / id2) == 1){
                    //arregla arriba
                    break;
                }else{
                    //normal
                    document.getElementById("p"+id).style.backgroundColor = drawColor;
                    document.getElementById("p"+id).classList.remove("nocolored");
                    document.getElementById("p"+id).classList.remove("nocolored2");
                    break;
                }
            }

            //arriba
            id = id-2;
            var x=1;
            while(x<mSize){
                if((x / id2) < 1){
                    x+=vSize;
                }else if((x / id2) == 1){
                    //arregla arriba
                    break;
                }else{
                    //normal
                    document.getElementById("p"+id).style.backgroundColor = drawColor;
                    document.getElementById("p"+id).classList.remove("nocolored");
                    document.getElementById("p"+id).classList.remove("nocolored2");
                    break;
                }
            }
            
            //derecha
            id = id+1+vSize;
            if(id2<(mSize-vSize)){
                document.getElementById("p"+id).style.backgroundColor = drawColor;
                document.getElementById("p"+id).classList.remove("nocolored");
                document.getElementById("p"+id).classList.remove("nocolored2");
            }

            //izquierda
            id = id-vSize-vSize;
            if(id2>vSize){
                document.getElementById("p"+id).style.backgroundColor = drawColor;
                document.getElementById("p"+id).classList.remove("nocolored");
                document.getElementById("p"+id).classList.remove("nocolored2");
            }
            
        }else if(buttonSize1 == 3){
            var oldColor = document.getElementById("p"+id).style.backgroundColor;
            var coloredPixels = document.querySelectorAll(".pixel");
            for (var i = 1; i < coloredPixels.length+1; i++) {
                var newPixelColor = document.getElementById("p"+i);
                if(oldColor == newPixelColor.style.backgroundColor && oldColor != "rgb(238, 238, 238)" && oldColor != "rgb(254, 254, 254)"){
                    newPixelColor.style.backgroundColor = drawColor;
                }
            }
            buttonSize1 = 1;
        }else if(buttonSize1 == 0){
            if(id%2 == 0){
                document.getElementById("p"+id).style.backgroundColor = "#eee";
                document.getElementById("p"+id).classList.add("nocolored");
            }else{
                document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                document.getElementById("p"+id).classList.add("nocolored");
            }
        }else if(buttonSize1 == -1){
            if(id%2 == 0){
                document.getElementById("p"+id).style.backgroundColor = "#eee";
                document.getElementById("p"+id).classList.add("nocolored");
                id = id+1;
                var x=0;
                while(x<mSize){
                    if((x / id2) < 1){
                        x+=vSize;
                    }else if((x / id2) == 1){
                        //arregla arriba
                        break;
                    }else{
                        //normal
                        document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                        document.getElementById("p"+id).classList.add("nocolored");
                        break;
                    }
                }
                id = id-2;
                var x=1;
                while(x<mSize){
                    if((x / id2) < 1){
                        x+=vSize;
                    }else if((x / id2) == 1){
                        //arregla arriba
                        break;
                    }else{
                        //normal
                        document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                        document.getElementById("p"+id).classList.add("nocolored");
                        break;
                    }
                }
                
                id = id+1+vSize;
                document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                document.getElementById("p"+id).classList.add("nocolored");
                id = id-vSize-vSize;
                document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                document.getElementById("p"+id).classList.add("nocolored");
            }else{
                document.getElementById("p"+id).style.backgroundColor = "#fefefe";
                document.getElementById("p"+id).classList.add("nocolored");
                id = id+1;
                var x=0;
                while(x<mSize){
                    if((x / id2) < 1){
                        x+=vSize;
                    }else if((x / id2) == 1){
                        //arregla arriba
                        break;
                    }else{
                        //normal
                        document.getElementById("p"+id).style.backgroundColor = "#eee";
                        document.getElementById("p"+id).classList.add("nocolored");
                        break;
                    }
                }
                
                id = id-2;

                var x=1;
                while(x<mSize){
                    if((x / id2) < 1){
                        x+=vSize;
                    }else if((x / id2) == 1){
                        //arregla arriba
                        break;
                    }else{
                        //normal
                        document.getElementById("p"+id).style.backgroundColor = "#eee";
                        document.getElementById("p"+id).classList.add("nocolored");
                        break;
                    }
                }
                
                id = id+1+vSize;
                document.getElementById("p"+id).style.backgroundColor = "#eee";
                document.getElementById("p"+id).classList.add("nocolored");
                id = id-vSize-vSize;
                document.getElementById("p"+id).style.backgroundColor = "#eee";
                document.getElementById("p"+id).classList.add("nocolored");
            }
        }
    }
}

