//this file chanche que css atrib, display block to display none of the this classes:

    function switchFirstDisplay(){
        var elems = document.getElementsByClassName('display-change-1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'block';
        }
        var elems = document.getElementsByClassName('display-change-2');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
        //document.getElementsByClassName("display-change-1").style.display = "block"; //create
        //document.getElementsByClassName("display-change-2").style.display = "none"; //edit
    }
    
    function switchSecondDisplay(){
        var elems = document.getElementsByClassName('display-change-1');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'none';
        }
        var elems = document.getElementsByClassName('display-change-2');
        for (var i=0;i<elems.length;i+=1){
            elems[i].style.display = 'block';
        }
        //document.getElementsByClassName("display-change-2").style.display = "block"; //edit
        //document.getElementsByClassName("display-change-1").style.display = "none"; //create
    }

    window.onload = function() {
        switchFirstDisplay();
    };
