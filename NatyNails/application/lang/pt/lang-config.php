<?php 
    //language Settings
    //ALL
    $app_name = "NatyNails";
    $copyright = "© Copyright ".$app_name." 2022";
    $gallery = "Galería";
    $home = "Home";
    $login = "Login";
    $register = "Registo";
    $creator = "Criador";
    $contacts = "Contatos";
    $shop = "Produtos";
    $courses = "Cursos";
    $questions = "Perguntas";
    $help = "Ajuda";
    $social = "Social";
    $seemore = "Ver mais";
    $mail_contact = "dontin.ns@gmail.com";
    $phone_contact = "(+351) 916 502 525";
    //description
    $shop_description = "Queres produtos de boa qualidade a um bom preço? Para ver os nossos incriveis produtos clique aqui!";
    $gallery_description = "Para ver a nossa galeria de unhas com desings unicos e maravilhosos clique aqui!";
    $creator_description = "Cria desings de unhas incriveis de forma gratuita e partilha com os teus amigos clicando neste link!";
    //BODY
    $about = "Sobre";
    $about_info = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis rhoncus purus, sit amet imperdiet arcu mollis sit amet. Donec vel ligula vehicula, lobortis ante eu, ornare ligula. Sed aliquam neque ex. Pellentesque velit enim, dignissim non semper ut, convallis sit amet dui. Vivamus bibendum, tellus eget aliquet tristique, metus nibh dapibus dolor, at egestas dui ex vel neque.";
    $about_info2 = "Duis et ex augue. Proin bibendum tellus id lobortis venenatis. Pellentesque tempus leo ipsum, non placerat est egestas ac. Quisque suscipit hendrerit sapien, non tincidunt sem facilisis et. Etiam rutrum leo a mi malesuada euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut varius sollicitudin neque vel placerat.";
    //CONTACTS
    $schedule = "Horario e funcionamento:";
    $working_hours = "9:00 - 13:00 & 14:00 - 17:00 (De Segundas ás sextas)";
    $working_hours_2 = "Consultar horas (Sabados e Domingos)";
    $questions_2 = "Tens alguma duvida?";
    $freecunet_questions = "Perguntas Frequentes";
    $service_problems = "Tens algum problema com os nossos serviços?";
    $contact_phone_text = "Pode-nos contactar pelo seguinte número: ";
    $contact_mail_text = "Ou por meio do nosso email: ";
    //LOGIN
    $enter_mail = "Introduz o teu email";
    $enter_pass = "Introduza a tua palavra-passe";
    $forgot_pass = "Esqueceste-te da tua palavra-passe";
    $start_session = "Iniciar sessão";
    $not_account = "Não tens conta?";
    $register_here = " Registe-se aqui!";
    //REGISTER
    $enter_first_name = "Insere o teu nome";
    $enter_last_name = "Insere o teu ultimo nome";
    $pass_require = "( A palavra passe deve ter pelo menos 8 carateres )";
    $repeat_pass = "Repita a sua palavra passe";
    $accept_terms = "Ao registares-te estás a aceitar: ";
    $terms_and_conditions = "Termos e condições";
    $register_button = "Registarse";
    $already_account = "¿Ja tens uma conta? ";
    $start_session_here = "Inicia sessão aqui!";
    //ADMIN
    $shop_admin = "Produtos";
    $gallery_admin = "Galeria";
    $calendar_admin = "Horario";
    $courses_admin = "Cursos";
    $shop_admin_description = "Faz a gestão dos teus produtos aqui!";
    $gallery_admin_description = "Faz a gestão das tuas imagens aqui!";
    $calendar_admin_description = "Cria marcações de para os clientes aqui!";
    $courses_admin_description = "Faz a gestão dos teus videos cursos aqui!";
    $admin = "Admin";
    $exit = "Sair";

    function lang($text){
        if (isset($text) && !empty($text)){
            echo $text;
            return;
        }
        echo "Text_Not_Defined";
        return;
    }
?>