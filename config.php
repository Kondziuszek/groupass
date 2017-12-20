<?php

    /*
		GroupAssigner 1.1
		Author: Borygard
		v-Author: Multivitamin
    */

    $config = array();

    /*
    ******************************
    **** Teamspeak GŁÓWNY Config****
    ******************************
    */
    //Teamspeak Adres IP
    $config['teamspeak']['ip'] = 'localhost';      
    //Teamspeak Query Port
    $config['teamspeak']['queryport'] = '10011';   
    //Teamspeak Server IP
    $config['teamspeak']['serverport'] = '9987';      
    //Teamspeak Login Query
    $config['teamspeak']['loginname'] = 'serveradmin'; 
    //Teamspeak Hasło Query
    $config['teamspeak']['loginpass'] = 'password';              
    //Teamspeak Nick bota 
    $config['teamspeak']['displayname'] = 'PAGE GroupAssigner';   
    //Limit grup ( 0 = brak limitu)
    $config['teamspeak']['maxgroups'] = 6;
    //Weryfikacja adresu IP true=tak | false=nie
    $config['teamspeak']['ip-verify'] = true;
    //Które grupa nie może korzystać w skryptu
    $config['teamspeak']['groups'] = "8";
    //Only = te grupy mogą korzystać ze skryptu
    //ignore =  te grupy nie mogą korzystać ze skryptu
    $config['teamspeak']['group-mode'] = "ignore";

    /*
        Kopiowanie:
        -----------------------
        
    $config['groups'][] = array(
        'grpid' => '',                  //ID grupy
        'name' => '',                   //Nazwa grupy
        'icon' => '',                   //Ikonka grupy
    );
        
        
    */
    
    //KONFIGURACJA GRUPY
	
    $config['groups'][] = array(
        'grpid' => '21',
        'name' => 'Siła',
        'icon' => 'http://zagrajnia.pl/img/sila',
    );
    
    $config['groups'][] = array(
        'grpid' => '22',
        'name' => 'Przyjeb',
        'icon' => 'http://zagrajnia.pl/img/przyjeb',
    );
    
    $config['groups'][] = array(
        'grpid' => '23',                  //ID grupy
        'name' => 'Diabeł',                   //Nazwa grupy
        'icon' => 'http://zagrajnia.pl/img/diabel',                   //Ikonka grupy
    );
    $config['groups'][] = array(
        'grpid' => '24',
        'name' => 'Inwalida',
        'icon' => 'http://zagrajnia.pl/img/inwa',
    );
    
    $config['groups'][] = array(
        'grpid' => '25',
        'name' => 'Pan Policjant',
        'icon' => 'http://zagrajnia.pl/img/pan',
    );

?>