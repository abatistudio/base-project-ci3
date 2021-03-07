# base-project-ci3
revo ini dibuat untuk dijadikan base project ci3 bagi tim di abatistudio 

Cara menggunakan:
  Copykan semua file .php dibawah ini, ke folder lokal project ci3 kamu.
  - app/config/config.php
  - app/controllers/Welcome.php
  - app/core/TS_Controller.php
  - app/libraries/Tscrud.php

  Kemudian buka file app/core/TS_Controller.php dengan editor yg kamu gunakan, 
  lalu ubah variable $dbconfig (username, password, dan database), sesuai dengan lingkungan localhost mu. 
  
    
    
    var $dbconfig = array(
      'hostname' => 'localhost',
      'username' => 'simak',
      'password' => '123',
      'database' => 'belajardb',
      'dbdriver' => 'mysqli',
      'dbprefix' => '',
      'pconnect' => FALSE,
      'db_debug' => (ENVIRONMENT !== 'production'),
      'cache_on' => FALSE,
      'cachedir' => '',
      'char_set' => 'utf8',
      'dbcollat' => 'utf8_general_ci',
      'swap_pre' => '',
      'encrypt'  => FALSE,
      'compress' => FALSE,
      'stricton' => FALSE,
      'failover' => array(),
      'save_queries' => TRUE
    );
    
    Jangan lupa ubah juga beberapa variable dibawah ini, jika diperlukan:
  
    $this->tsdata['versi'] = '0.1';
    $this->tsdata['app'  ] = 'nameOfApp';
    $this->tsdata['copyright' ] = 'CopyRight '.date('Y').' &copy; nameOfTeam, IT Support. Semua Hak Dilindungi Undang-undang';
    $this->tsdata['urlberkas' ] = 'berkas/'; // folder ini harus dibuat di project ci3
    
    
    Berikutnya buatlah table users di database yang kamu gunakan:
    
    Create table users
    ==================

    CREATE TABLE `users` (
      `userid` int(10) NOT NULL AUTO_INCREMENT,
      `login` varchar(15) NOT NULL DEFAULT '',
      `password` varchar(255) NOT NULL DEFAULT '',
      `username` varchar(50) NOT NULL DEFAULT '',
      `useremail` varchar(50) DEFAULT NULL,
      PRIMARY KEY (`userid`),
      UNIQUE KEY `SECONDARY` (`login`,`password`)
    ) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1

    isi datanya:
    insert  into `users`(`userid`,`login`,`password`,`username`,`useremail`) values (1,'admin','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','Administrator','admin@gmail.com');
    
    
    Create table users_session
    ==========================
    
    CREATE TABLE `users_session` (`id` varchar(128) NOT NULL,`ip_address` varchar(45) NOT NULL,`timestamp` int(10) unsigned NOT NULL DEFAULT 0,`data` blob NOT NULL,KEY `ci_sessions_timestamp` (`timestamp`)) ENGINE=MyISAM DEFAULT CHARSET=latin1

    
untuk menjalankan projectnya, entri address browser dengan url dibawah ini:

menampilkan variable configurasi:

  http:/localhost/projectmu/index.php/welcome

untuk test login:

  http:/localhost/projectmu/index.php/welcome/userin

untuk test logout:

  http:/localhost/projectmu/index.php/welcome/userout
