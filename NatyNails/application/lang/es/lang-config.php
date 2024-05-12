<?php 
    //language Settings
    //ALL
    $app_name = "NatyNails";
    $copyright = "© Copyright ".$app_name." 2022";
    $gallery = "Galería";
    $home = "Home";
    $login = "Login";
    $register = "Registro";
    $creator = "Creador";
    $contacts = "Contactos";
    $shop = "Tienda";
    $courses = "Cursos";
    $questions = "Preguntas";
    $help = "Ayuda";
    $social = "Social";
    $seemore = "Ver más";
    $mail_contact = "natynails.contact@natynail.com";
    $phone_contact = "(+351) 987 965 468";
    //description
    $shop_description = "Quieres productos de buena calidad a buen precio? mira nuestro apartado de articulos clickeando aqui!";
    $gallery_description = "Mira nuestra galeria de uñas original con diseños increibles clickeando aqui!";
    $creator_description = "Crea diseños de uñas increibles gratis y compartelos con tus amigos con nuestro creador de uñas clickeando aqui!";
    //BODY
    $about = "Sobre";
    $about_info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis rhoncus purus, sit amet imperdiet arcu mollis sit amet. Donec vel ligula vehicula, lobortis ante eu, ornare ligula. Sed aliquam neque ex. Pellentesque velit enim, dignissim non semper ut, convallis sit amet dui. Vivamus bibendum, tellus eget aliquet tristique, metus nibh dapibus dolor, at egestas dui ex vel neque.";
    $about_info2 = "Duis et ex augue. Proin bibendum tellus id lobortis venenatis. Pellentesque tempus leo ipsum, non placerat est egestas ac. Quisque suscipit hendrerit sapien, non tincidunt sem facilisis et. Etiam rutrum leo a mi malesuada euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut varius sollicitudin neque vel placerat.";
    //CONTACTS
    $schedule = "Horario y funcionamiento:";
    $working_hours = "9:00 - 13:00 & 14:00 - 17:00 (Lunes a Viernes)";
    $working_hours_2 = "Marcación prévia (Sabados y Domingos)";
    $questions_2 = "Tienes alguna duda?";
    $freecunet_questions = "Preguntas frecuentes";
    $service_problems = "Tienes algun problema con el servicio?";
    $contact_phone_text = "Puedes contactarnos mediante el numero de telefono: ";
    $contact_mail_text = " O mediante la dirección de email: ";
    //LOGIN
    $enter_mail = "Introduce tu correo";
    $enter_pass = "Introduce tu contraseña";
    $forgot_pass = "¿Has olvidado la contraseña?";
    $start_session = "Iniciar sesión";
    $not_account = "¿No tienes una cuenta?";
    $register_here = " ¡Registrate aqui!";
    //REGISTER
    $enter_first_name = "Introduce tu primer nombre";
    $enter_last_name = "Introduce tu ultimo nombre";
    $pass_require = "( La contraseña debe contener almenos 8 caracteres )";
    $repeat_pass = "Repite tu contraseña";
    $accept_terms = "Al registrarte estás aceptando los ";
    $terms_and_conditions = "Terminos y condiciones";
    $register_button = "Registrarse";
    $already_account = "¿Ya tienes una cuenta? ";
    $start_session_here = "¡Inicia sesión aqui!";
    //ADMIN
    $shop_admin = "Tienda";
    $gallery_admin = "Galeria";
    $calendar_admin = "Horario";
    $courses_admin = "Cursos";
    $shop_admin_description = "Gerencia tus productos en la sección de Tienda Aqui!";
    $gallery_admin_description = "Gerencia tus imagnes en la sección de Galleria Aqui!";
    $calendar_admin_description = "Gerencia tus citas en la sección de Calendario Aqui!";
    $courses_admin_description = "Gerencia tus videos en la sección de Cursos Aqui!";
    $admin = "Admin";
    $exit = "Salir";

    function lang($text){
        if (isset($text) && !empty($text)){
            echo $text;
            return;
        }
        echo "Text_Not_Defined";
        return;
    }
?>