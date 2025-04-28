window.onload = function(){

    const image_input = document.querySelector("#importImg");
        image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            document.querySelector("#importedImage").src = uploaded_image;
        });
        reader.readAsDataURL(this.files[0]);
    });

    document.querySelector("#buttonPosition1").addEventListener("click", setWaterMark1);
    document.querySelector("#buttonPosition2").addEventListener("click", setWaterMark2);
    document.querySelector("#buttonPosition3").addEventListener("click", setWaterMark3);
    document.querySelector("#buttonPosition4").addEventListener("click", setWaterMark4);
    document.querySelector("#buttonPosition5").addEventListener("click", setWaterMark5);

    function setWaterMark1(){setWaterMark(1)}
    function setWaterMark2(){setWaterMark(2)}
    function setWaterMark3(){setWaterMark(3)}
    function setWaterMark4(){setWaterMark(4)}
    function setWaterMark5(){setWaterMark(5)}

    function setWaterMark(nMark){
        for(var i=1; i<=5 ; i++){
            document.querySelector("#water"+i).style.display="none";
            document.querySelector("#buttonPosition"+i).style.backgroundColor ="white";
            document.querySelector("#buttonPosition"+i).style.color ="rgb(0, 115, 255)";
        }
        document.querySelector("#water"+nMark).style.display="block";
        document.querySelector("#buttonPosition"+nMark).style.backgroundColor ="rgb(0, 115, 255)";
        document.querySelector("#buttonPosition"+nMark).style.color ="white";
    }

    document.querySelector("#fontSize1").addEventListener("click", setSize1);
    document.querySelector("#fontSize2").addEventListener("click", setSize2);
    document.querySelector("#fontSize3").addEventListener("click", setSize3);
    document.querySelector("#fontSize4").addEventListener("click", setSize4);
    document.querySelector("#fontSize5").addEventListener("click", setSize5);
    document.querySelector("#fontSize6").addEventListener("click", setSize6);

    function setSize1(){changeSize(16)}
    function setSize2(){changeSize(20)}
    function setSize3(){changeSize(24)}
    function setSize4(){changeSize(28)}
    function setSize5(){changeSize(32)}
    function setSize6(){changeSize(36)}
    
    var buttonNumber = 3;
    function changeSize(size){
        for(var i=1; i<=5 ; i++)
            document.getElementById("water"+i).style.fontSize=size+"px";
        
        for(var i=1; i<=6 ; i++){
            document.querySelector("#fontSize"+i).style.backgroundColor ="white";
            document.querySelector("#fontSize"+i).style.color ="rgb(0, 115, 255)";
        }
        if(size == 16)
            buttonNumber = "1";
        if(size == 20)
            buttonNumber = "2";
        if(size == 24)
            buttonNumber = "3";
        if(size == 28)
            buttonNumber = "4";
        if(size == 32)
            buttonNumber = "5";
        if(size == 36)
            buttonNumber = "6";

        document.querySelector("#fontSize"+buttonNumber).style.backgroundColor ="rgb(0, 115, 255)";
        document.querySelector("#fontSize"+buttonNumber).style.color ="white";
    }

    document.querySelector("#buttonStyle1").addEventListener("click", setStyle1);
    document.querySelector("#buttonStyle2").addEventListener("click", setStyle2);
    document.querySelector("#buttonStyle3").addEventListener("click", setStyle3);
    document.querySelector("#buttonStyle4").addEventListener("click", setStyle4);
    
    function setStyle1(){changeStyle(1)}
    function setStyle2(){changeStyle(2)}
    function setStyle3(){changeStyle(3)}
    function setStyle4(){changeStyle(4)}

    function changeStyle(styleNum){
        for(var i=1; i<=5; i++)
            document.getElementById("water"+i).classList.remove("fontStyle1", "fontStyle2", "fontStyle3", "fontStyle4", "fontStyle5");
        
        for(var i=1; i<=5; i++)
            document.getElementById("water"+i).classList.add("fontStyle"+styleNum);
        
        for(var i=1; i<=4; i++){
            document.querySelector("#buttonStyle"+i).style.backgroundColor ="white";
            document.querySelector("#buttonStyle"+i).style.color ="rgb(0, 115, 255)";
        }
        document.querySelector("#buttonStyle"+styleNum).style.backgroundColor ="rgb(0, 115, 255)";
        document.querySelector("#buttonStyle"+styleNum).style.color ="white";
    }

    var switchColor = true;
    document.querySelector("#colorChange").addEventListener("click", changeColor);
    function changeColor(){
        if(switchColor){
            document.querySelector("#colorChange").style.backgroundColor="black";
            document.querySelector("#colorChange").style.color="white";
            document.querySelector("#colorChange").innerHTML = "Black";
            for(var i=1; i<=5; i++){
                document.getElementById("water"+i).classList.remove("colorWhite");
                document.getElementById("water"+i).classList.add("colorBlack");
            }
            switchColor = false;
        }else{
            document.querySelector("#colorChange").style.backgroundColor="white";
            document.querySelector("#colorChange").style.color="rgb(0, 115, 255)";
            document.querySelector("#colorChange").innerHTML = "White";
            for(var i=1; i<=5; i++){
                document.getElementById("water"+i).classList.remove("colorBlack");
                document.getElementById("water"+i).classList.add("colorWhite");
            }
            switchColor = true;
        }
    }
    
    document.querySelector("#downloadB").addEventListener("click", downloadImage);
    function downloadImage(){
        var mydiv = document.getElementById("finalImgContainer");
        while (mydiv.firstChild) {
            mydiv.removeChild(mydiv.firstChild);
        } 

        html2canvas(document.querySelector("#imageContainer1")).then(canvas => {
            document.querySelector("#finalImgContainer").appendChild(canvas)
        });

        setTimeout(function(){
            var canvas = document.querySelector("#finalImgContainer").firstChild;
            var link = document.createElement('a');
            link.download = "nailDesign";
            link.href = canvas.toDataURL("image/png").replace("image/PNG","image/octet-stream");
            link.click();
        }, 800);
    }
}