window.onload = function(){ //wait for load entire site
    
    setThemeColor();
    function setThemeColor(){
        if(!darkTheme){
            document.getElementById("theme-button").src="./media/icons/moon-solid.svg";
            document.documentElement.style.setProperty('--main-color', '#ff0000');
            document.documentElement.style.setProperty('--secondary-color', '#ffb700');
            document.documentElement.style.setProperty('--selection-color', '#9e0000');
            document.documentElement.style.setProperty('--tertiary-color', '#000');
            document.documentElement.style.setProperty('--dark-red', '#ffffff');
            document.documentElement.style.setProperty('--darken-red', '#f0f0f0');
            document.documentElement.style.setProperty('--quaternary-color', '#fff');
            changeBackgroundImage(true);
        }else{
            document.getElementById("theme-button").src="./media/icons/sun-solid.svg";
            document.documentElement.style.setProperty('--main-color', '#ff0000');
            document.documentElement.style.setProperty('--secondary-color', '#ffb700');
            document.documentElement.style.setProperty('--selection-color', '#9e0000');
            document.documentElement.style.setProperty('--tertiary-color', '#fff');
            document.documentElement.style.setProperty('--dark-red', '#2d0000');
            document.documentElement.style.setProperty('--darken-red', '#161010');
            document.documentElement.style.setProperty('--quaternary-color', '#5f0000');
            changeBackgroundImage(false);
        }
    }

    function changeBackgroundImage(whiteStyle){
        var elements = document.querySelectorAll('.special-background');
        elements.forEach(function(element) {
            if(whiteStyle)
                element.style.setProperty('background-image', 'url(./media/proyects-img/pattern-white-theme.png)');
            else
                element.style.setProperty('background-image', 'url(./media/proyects-img/pattern.png)');
        });
    }
    

       // Function to toggle menu visibility based on screen width
    function toggleMenuVisibility() {
        var headerRight = document.querySelector('.header-right');
        
        // Check screen width
        if (window.innerWidth <= 600) {
            headerRight.style.display = 'none'; // Hide menu on small screens
        } else {
            headerRight.style.display = 'flex'; // Show menu on larger screens
        }
    }

    // Call the function when the page loads
    toggleMenuVisibility();

    // Event listener for bars button
    document.querySelector('.bars-button').addEventListener('click', function() {
        var headerRight = document.querySelector('.header-right');
        // Toggle menu visibility when bars button is clicked
        if (window.getComputedStyle(headerRight).display === 'none') {
            headerRight.style.display = 'flex';
        } else {
            headerRight.style.display = 'none';
        }
    });

    // Event listener to change menu state when window is resized
    window.addEventListener('resize', toggleMenuVisibility);
}

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    // Verify operating system theme
    //console.log('Dark Theme');
    darkTheme = true;
} else {
    // Verify operating system theme
    //console.log('Light Theme');
    darkTheme = false;
}

function cambiarColor() {
    // Create a <link> element to load the CSS file
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = './styles/style.css'; // CSS path   
    document.head.appendChild(link);
  
    // Modify the CSS variable after the CSS file has been loaded
    link.onload = function() {
        if(darkTheme){
            darkTheme = false;
            document.getElementById("theme-button").src="./media/icons/moon-solid.svg";
            document.documentElement.style.setProperty('--main-color', '#ff0000');
            document.documentElement.style.setProperty('--secondary-color', '#ffb700');
            document.documentElement.style.setProperty('--selection-color', '#9e0000');
            document.documentElement.style.setProperty('--tertiary-color', '#000');
            document.documentElement.style.setProperty('--dark-red', '#ffffff');
            document.documentElement.style.setProperty('--darken-red', '#f0f0f0');
            document.documentElement.style.setProperty('--quaternary-color', '#fff');
            changeBackgroundImage(true)
        }else{
            darkTheme = true;
            document.getElementById("theme-button").src="./media/icons/sun-solid.svg";
            document.documentElement.style.setProperty('--main-color', '#ff0000');
            document.documentElement.style.setProperty('--secondary-color', '#ffb700');
            document.documentElement.style.setProperty('--selection-color', '#9e0000');
            document.documentElement.style.setProperty('--tertiary-color', '#fff');
            document.documentElement.style.setProperty('--dark-red', '#2d0000');
            document.documentElement.style.setProperty('--darken-red', '#161010');
            document.documentElement.style.setProperty('--quaternary-color', '#5f0000');
            changeBackgroundImage(false)
        }
    };
    
    function changeBackgroundImage(whiteStyle){
        var elements = document.querySelectorAll('.special-background');
        elements.forEach(function(element) {
            if(whiteStyle)
                element.style.setProperty('background-image', 'url(./media/proyects-img/pattern-white-theme.png)');
            else
                element.style.setProperty('background-image', 'url(./media/proyects-img/pattern.png)');
        });
    }
    
    /*
    --main-color: #ff0000;
    --secondary-color: #ffb700;
    --selection-color: #9e0000;
    --tertiary-color: #fff;
    --dark-red: #2d0000;
    --darken-red: #161010;
    --quaternary-color: #5f0000;
    */
}