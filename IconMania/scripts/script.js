window.onload = function(){

    function GetURLClone(){
        const images = document.getElementsByClassName('icon-img');
        const urls = {};
        
        for(let i = 0; i < images.length; i++){
            var imagen = images[i];
            var url = imagen.src;
    
            if(urls[url]){    
                ChangeCloneURL(url);
            }else{    
                urls[url] = true;
            }
        }

        
        const clonedImages = document.getElementsByClassName('img-cloned');
        if(clonedImages.length === 0) {
            for(let i = 0; i < images.length; i++){
                const imagen = images[i];
                var contenedorPadre = imagen.parentNode;
                contenedorPadre.classList.add('img-cheked');
            }
        }
    }

    //GetURLClone();

    function ChangeCloneURL(clonedURLImage){
        const images = document.getElementsByClassName('icon-img');
        for (let i = 0; i < images.length; i++){

            const imagen = images[i];
            const urlImagen = imagen.src;
    
            if(urlImagen == clonedURLImage) {    
                var contenedorPadre = imagen.parentNode;
                contenedorPadre.classList.add('img-cloned');
            }
        }
    }

    function resetImages(){
        const images = document.getElementsByClassName('icon-img');
        for (let i = 0; i < images.length; i++){
            const imagen = images[i];
            var contenedorPadre = imagen.parentNode;
            if(contenedorPadre.classList.contains('img-cloned')){
                contenedorPadre.classList.remove('img-cloned');
            }
            if(contenedorPadre.classList.contains('img-cheked')){
                contenedorPadre.classList.remove('img-cheked');
            }
            imagen.src = './icons/iconNumber ('+GetRandomNumber(48)+').svg';
        }
    }

    resetImages()

    function GetRandomNumber(max){
        return Math.floor(Math.random() * (max - 1 + 1)) + 1;
    }

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('icon-img')) {
            event.target.src = './icons/iconNumber ('+GetRandomNumber(48)+').svg';
        }

        if(event.target.id === 'button-reset'){
            resetImages();
        }

        if(event.target.id === 'button-check'){
            GetURLClone();
        }
    });
}
