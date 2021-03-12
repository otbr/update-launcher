<?php
    $launcher = array(
        "config" => array(
            "nome" => "FuriaOT",
            "nome_evento" => "Boss",
            "nome_top" => "Top",
            "background" => "assets/background.png",
            "logo" => "assets/logo.png"
        ),
    );

    $config_banco = array(
      "nome_tabela_news" => "z_forum",
      "nome_coluna_news" => "post_text"
    );

    /*
        Exemplo a ser seguido
        1 => array(
            "nome" => "Exemplo",
            "local_gif" => "assets/64/exemplo.gif",
            "horario_spawn" => "00:06:00",
        ),
        2 => array(
            "nome" => "Exemplo2",
            "local_gif" => "https://www.tibiawiki.com.br/images/7/70/Apocalypse.gif",
            "horario_spawn" => "01:06:00",
        ),

        E sempre implementando o numero 1... 2 ... 3.
        nome = Nome do boss que vai spawnar
        local_gif = onde ta a gif que vai ser importada
        horario_spawn = vai de 00:00:01 que e meia noite ate 23:59:59 do dia especifico
    */

    date_default_timezone_set('America/Sao_Paulo'); /*Define a zona de horario*/
    $config_boss = array(
        "Sunday" => array( // Domingo
            1 => array(
                "nome" => "Izcandar the banished",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0f/Izcandar_the_Banished.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Urmahlullu the Immaculate",
                "local_gif" => "https://www.tibiawiki.com.br/images/4/42/Urmahlullu_the_Immaculate.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Furyosa",
                "local_gif" => "https://www.tibiawiki.com.br/images/e/e1/Furyosa.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Madareth",
                "local_gif" => "https://www.tibiawiki.com.br/images/3/3a/Madareth.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Alptramun",
                "local_gif" => "https://www.tibiawiki.com.br/images/c/c9/Alptramun.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Plagueroot",
                "local_gif" => "https://www.tibiawiki.com.br/images/2/24/Plagueroot.gif",
                "horario_spawn" => "23:00:00",
            ),

        ),
        "Monday" => array( // Segunda Feira
            1 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Urmahlullu the Immaculate",
                "local_gif" => "https://www.tibiawiki.com.br/images/4/42/Urmahlullu_the_Immaculate.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Izcandar the banished",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0f/Izcandar_the_Banished.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Crypt Warden",
                "local_gif" => "https://www.tibiawiki.com.br/images/1/12/Crypt_Warden.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "Obujos",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/01/Obujos.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Madareth",
                "local_gif" => "https://www.tibiawiki.com.br/images/3/3a/Madareth.gif",
                "horario_spawn" => "23:00:00",
            ),
        ),
        "Tuesday" => array( // Terça Feira
            1 => array(
                "nome" => "Furyosa",
                "local_gif" => "https://www.tibiawiki.com.br/images/e/e1/Furyosa.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => " Jaul",
                "local_gif" => "https://www.tibiawiki.com.br/images/8/84/Jaul.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Faceless Bane",
                "local_gif" => "https://www.tibiawiki.com.br/images/a/a0/Faceless_Bane.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Brokul",
                "local_gif" => "https://www.tibiawiki.com.br/images/e/ea/Brokul.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "Urmahlullu the Immaculate",
                "local_gif" => "https://www.tibiawiki.com.br/images/4/42/Urmahlullu_the_Immaculate.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Maxxenius",
                "local_gif" => "https://www.tibiawiki.com.br/images/4/4c/Maxxenius.gif",
                "horario_spawn" => "23:00:00",
            ),
        ),
        "Wednesday" => array( // Quarta feira
            1 => array(
                "nome" => "Izcandar the banished",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0f/Izcandar_the_Banished.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Manticore",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0b/Manticore.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Plagueroot",
                "local_gif" => "https://www.tibiawiki.com.br/images/2/24/Plagueroot.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Obujos",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/01/Obujos.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "Izcandar the banished",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0f/Izcandar_the_Banished.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Furyosa",
                "local_gif" => "https://www.tibiawiki.com.br/images/e/e1/Furyosa.gif",
                "horario_spawn" => "23:00:00",
            ),
        ),
        "Thursday" => array( // Quinta Feira
            1 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Dracula",
                "local_gif" => "https://www.tibiawiki.com.br/images/c/c3/Arachir_the_Ancient_One.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Brokul",
                "local_gif" => "https://www.tibiawiki.com.br/images/e/ea/Brokul.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Dracula",
                "local_gif" => "https://www.tibiawiki.com.br/images/c/c3/Arachir_the_Ancient_One.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Manticore",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0b/Manticore.gif",
                "horario_spawn" => "23:00:00",
            ),
        ),
        "Friday" => array( // Sexta Feira
            1 => array(
                "nome" => "DragonKing",
                "local_gif" => "https://www.tibiawiki.com.br/images/9/93/Soul_of_Dragonking_Zyrtarch.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Faceless Bane",
                "local_gif" => "https://www.tibiawiki.com.br/images/a/a0/Faceless_Bane.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Alptraum",
                "local_gif" => "https://www.tibiawiki.com.br/images/c/c9/Alptramun.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Manticore",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0b/Manticore.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "Alptraum",
                "local_gif" => "https://www.tibiawiki.com.br/images/c/c9/Alptramun.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Crypt Warden",
                "local_gif" => "https://www.tibiawiki.com.br/images/1/12/Crypt_Warden.gif",
                "horario_spawn" => "23:00:00",
            ),
        ),
        "Saturday" => array( // Sabado
            1 => array(
                "nome" => "Jaul",
                "local_gif" => "https://www.tibiawiki.com.br/images/8/84/Jaul.gif",
                "horario_spawn" => "01:00:00",
            ),
            2 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "05:00:00",
            ),
            3 => array(
                "nome" => "Izcandar the banished",
                "local_gif" => "https://www.tibiawiki.com.br/images/0/0f/Izcandar_the_Banished.gif",
                "horario_spawn" => "09:00:00",
            ),
            4 => array(
                "nome" => "Tanjis",
                "local_gif" => "https://www.tibiawiki.com.br/images/6/67/Tanjis.gif",
                "horario_spawn" => "13:00:00",
            ),
            5 => array(
                "nome" => "Jaul",
                "local_gif" => "https://www.tibiawiki.com.br/images/8/84/Jaul.gif",
                "horario_spawn" => "17:00:00",
            ),
            6 => array(
                "nome" => "Madareth",
                "local_gif" => "https://www.tibiawiki.com.br/images/3/3a/Madareth.gif",
                "horario_spawn" => "21:00:00",
            ),
            7 => array(
                "nome" => "Crypt Warden",
                "local_gif" => "https://www.tibiawiki.com.br/images/1/12/Crypt_Warden.gif",
                "horario_spawn" => "23:00:00",
            ),
        )

    );

    define('HOSTNAME','45.179.88.218');
    define('USERNAME', 'root');
    define('PASSWORD', 'EXBDFADZ891');
    define('DATABASE', 'OT');
    define('CHARSET', 'utf8');







    /* Nao Mexer daqui para baixo*/
    switch (date('l')){
        case 'Sunday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Domingo";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Monday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Segunda-Feira";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Tuesday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Terça-Feira";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Wednesday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Quarta-Feira";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Thursday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Quinta-Feira";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Friday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Sexta-Feira";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
            break;
        case 'Saturday':
            for($i=1; $i <= count($config_boss[date('l')]);$i++){
                if($i == 1){
                    $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                }
                if($config_boss[date('l')][$i]['horario_spawn'] <= date('H:i:s')){
                    if($ordena <= $config_boss[date('l')][$i]['horario_spawn']){
                        $ordena = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['id'] = $i;
                        $boss['boss_atual']['nome'] = $config_boss[date('l')][$i]['nome'];
                        $boss['boss_atual']['local_gif'] = $config_boss[date('l')][$i]['local_gif'];
                        $boss['boss_atual']['horario'] = $config_boss[date('l')][$i]['horario_spawn'];
                        $boss['boss_atual']['dia'] = "Sabado";
                    }
                }
            }
            $testProximo = $boss['boss_atual']['id'] + 1;
            $boss['proximo_boss']['log'] = 0;
            if(isset($config_boss[date('l')][$testProximo])){
                $boss['proximo_boss']['log'] = 1;
                $boss['proximo_boss']['nome'] = $config_boss[date('l')][$testProximo]['nome'];
                $boss['proximo_boss']['local_gif'] = $config_boss[date('l')][$testProximo]['local_gif'];
                $boss['proximo_boss']['horario'] = $config_boss[date('l')][$testProximo]['horario_spawn'];
            }
        break;
    }

    function DBConnect(){
        $sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
        mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));
        return $sql;
    }
    function DBClose($sql){
        @mysqli_close($sql) or die(mysqli_error($sql));
    }
    function DBExecute($sql){
        $conexao = DBConnect();
        $resultado = @mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return $resultado;
    }
    $onlines = 0;
    $sql_onlines = "SELECT count(player_id) FROM players_online";
    $sql_top = "SELECT * from players WHERE group_id = 1 AND account_id <> 1 ORDER BY level DESC LIMIT 1";
    $sql_news = "SELECT * FROM ".$config_banco['nome_tabela_news']." ORDER BY id DESC LIMIT 1";
    $data_onlines = DBExecute($sql_onlines);
    $data_top = DBExecute($sql_top);
    $data_news = DBExecute($sql_news);
    if(isset($data_news) AND $data_news->num_rows != 0){
        while($news_bd = mysqli_fetch_assoc($data_news)){
            $news = $news_bd[$config_banco['nome_coluna_news']];
        }
    }
    if(isset($data_onlines) AND $data_onlines->num_rows != 0){
        while($onlines_bd = mysqli_fetch_assoc($data_onlines)){
            $onlines = $onlines_bd['count(player_id)'];
        }
    }
    if(isset($data_top) AND $data_top->num_rows != 0){
        while($top_bd = mysqli_fetch_assoc($data_top)){
            $top_name = $top_bd['name'];
            $top_level = $top_bd['level'];
            $top_look = $top_bd['looktype'];
            $top_addon = $top_bd['lookaddons'];
            $top_head = $top_bd['lookhead'];
            $top_body = $top_bd['lookbody'];
            $top_legs = $top_bd['looklegs'];
            $top_feet = $top_bd['lookfeet'];
        }
    }
    $nome_player = $top_name;
    $level_player = $top_level;
    $outfit_player = "config/outfit.php?look=".$top_look."&addon=".$top_addon."&head=".$top_head."&body=".$top_body."&legs=".$top_legs."&feet=".$top_feet."&mount=0&direction=3&movement=1";
    if(isset($onlines) AND $onlines >= 0 )
        $status_servidor = "<a style='color:limegreen;'>ONLINE</a>";
    else
        $status_servidor = "<a style='color:red;'>OFFLINE</a>";

    $top_level = array(
        "nome_player" => $nome_player,
        "level_player" => $level_player,
        "outfit_player" => $outfit_player,
    );
    $news = array(
      "ultima_news" => $news,
    );
    $status = array(
        "status_servidor" => $status_servidor,
        "onlines" => $onlines,
    );

?>
