window.onload = function(){

    //Others
    var iterator = -1;
    var manuallyUpdate = false;

    //Weapon card Id names:
    var weapon_img = "weapon_img";
    var weapon_name = "weapon_name";
    var weapon_info = "weapon_info";
    var weapon_damage = "weapon_damage";
    var weapon_ammon_use = "weapon_ammon_use";
    var weapon_accuracy = "weapon_accuracy";
    var weapon_fire_rate = "weapon_fire_rate";
    var weapon_video = "weapon_video";

    //Buttons ID names
    var left_button_id = "change_weapon_left";
    var right_button_id = "change_weapon_right";

    //Weapon card elements
    var element_weapon_img = getHtmlElement(weapon_img);
    var element_weapon_name = getHtmlElement(weapon_name);
    var element_weapon_info = getHtmlElement(weapon_info);
    var element_weapon_damage = getHtmlElement(weapon_damage);
    var element_weapon_ammon_use = getHtmlElement(weapon_ammon_use);
    var element_weapon_accuracy = getHtmlElement(weapon_accuracy);
    var element_weapon_fire_rate = getHtmlElement(weapon_fire_rate);
    var element_weapon_video = getHtmlElement(weapon_video);

    //Weapon Button Element
    var element_left_button = getHtmlElement(left_button_id);
    var element_right_button = getHtmlElement(right_button_id);
    
    //Arrays with weapons info
    const array_weapon_name = new Array(
        "Star Cannon",
        "Blood Gun",
        "Tactic Shotgun",
        "Tommy Fire Gun",
        "Fire Shotgun"/*,
        "Infernal Gun",
        "Love Gun",
        "Black Hole Gun",
        "Ice Ball Gun",
        "Ice Gun",
        "Molotov Gun",
        "Nitrogen Gun",
        "Aligator Rocket Launcher",
        "Trumpet Gun",
        "Electric Eel Gun",
        "Excalibur Sword",
        "Fire Grenade Launcher"*/
    );

    const array_weapon_info = new Array(
        "This cannon fires stars that deal area damage on impact, making it effective for groups of enemies. It can also pierce through enemies, making it ideal for tightly packed enemy groups.",
        "This dangerous rifle fires bloodshot eyes that, upon hitting an enemy, deal damage and simultaneously heal its wielder.", 
        "This shotgun fires 6 projectiles that hit the enemy, causing great damage. However, due to its lack of accuracy, it is ideal for close range.",
        "This automatic submachine gun can fire large bursts of incendiary bullets, which not only deal great damage to the enemy but also apply the 'On Fire' effect.",
        "This incendiary shotgun fires 6 projectiles that strike enemies, dealing heavy damage and igniting them. Due to its low accuracy, it is most effective at close range."
    );

    const array_weapon_damage = new Array(
        "40",
        "15",
        "8 (x6)",
        "10",
        "6 (x6)"
        
    );

    const array_weapon_ammo_use = new Array(
        "15",
        "20",
        "10",
        "6",
        "12"
    );

    const array_weapon_accuracy = new Array(
        "90%",
        "80%",
        "40%",
        "75%",
        "50%"
    );
    
    const array_weapon_fire_rate = new Array(
        "0.4s",
        "0.3s",
        "0.6s",
        "0.2s",
        "0.7s"
    );

    //Get Html Element
    function getHtmlElement(text_id){
        if(typeof text_id === 'string'){
            documentId = document.getElementById(text_id);
            return documentId;    
        }else{
            console.log(text_id + "is not a string");
            return;
        }
    }

    //Set new text into a element
    function changeHtmlElementContent(element, new_content){
        if(element instanceof Element){
            element.textContent = new_content;
            return element;    
        }else{
            console.log(element + "is not a element");
            return;
        }
    }

    //Set new src to an image
    function changeImgSource(img_element, new_content){
        if(img_element instanceof Element){
            img_element.src = new_content;
            return img_element;    
        }else{
            console.log(img_element + "is not a element");
            return;
        }
    }

    //Append spam with "content_li" to use css
    function appendSpamElement(element, new_content){
        var new_spam = document.createElement("span");
        new_spam.className = "content_li";
        new_spam.textContent = new_content;
        element.appendChild(new_spam);
    }

    //Set all weapons info ussing arrays
    function setNewWeapon(weapon_id){
        changeImgSource(element_weapon_img, "./media/img/weapons/weapon ("+weapon_id+").png");
        changeHtmlElementContent(element_weapon_name, array_weapon_name[weapon_id]);
        changeHtmlElementContent(element_weapon_info, array_weapon_info[weapon_id]);
        changeHtmlElementContent(element_weapon_damage, "Damage:");
        appendSpamElement(element_weapon_damage, array_weapon_damage[weapon_id]);
        changeHtmlElementContent(element_weapon_ammon_use, "Ammo use:");
        appendSpamElement(element_weapon_ammon_use, array_weapon_ammo_use[weapon_id]);
        changeHtmlElementContent(element_weapon_accuracy, "Acurracy");
        appendSpamElement(element_weapon_accuracy, array_weapon_accuracy[weapon_id]);
        changeHtmlElementContent(element_weapon_fire_rate, "Fire Rate:");
        appendSpamElement(element_weapon_fire_rate, array_weapon_fire_rate[weapon_id]);
        changeImgSource(element_weapon_video, "./media/img/weapons/gameplay/img ("+weapon_id+").png"); //change to a video location

        resetAnimation(element_weapon_img);
        resetAnimation(element_weapon_name);
        resetAnimation(element_weapon_info);
        resetAnimation(element_weapon_damage);
        resetAnimation(element_weapon_ammon_use);
        resetAnimation(element_weapon_accuracy);
        resetAnimation(element_weapon_fire_rate);
        resetAnimation(element_weapon_video);
    }

    function resetAnimation(myElement) {
        myElement.style.animation = "none";  // Desactivar temporalmente
        myElement.offsetHeight;  // Forzar reflujo
        myElement.style.animation = "";  // Restablecer la animación original
    }

    //Update the card
    function updateCardRight(){
        iterator += 1;
        if(iterator >= array_weapon_name.length)
            iterator = 0;
        setNewWeapon(iterator);
    }

    function updateCardLeft(){
        iterator -= 1;
        if(iterator < 0)
            iterator = array_weapon_name.length -1;
        setNewWeapon(iterator);
    }

    function auto_update(){
        if(!manuallyUpdate)
            updateCardRight();
    }

    function manuallyUpdateRight(){
        manuallyUpdate = true;
        updateCardRight();
    }

    function manuallyUpdateLeft(){
        manuallyUpdate = true;
        updateCardLeft();
    }

    element_left_button.addEventListener("click", manuallyUpdateLeft);
    element_right_button.addEventListener("click", manuallyUpdateRight);
    
    setInterval(auto_update, 5000);
    updateCardRight();

}   