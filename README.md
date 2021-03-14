# blog-w3css-with-ci3
aplikasi blog sederhana yang dibuat dengan CI3 dan framework css w3.css dari https://www.w3schools.com/, 

Cara menggunakan:
  Copykan file-file dibawah ini, ke folder lokal project ci3 kamu.
  - app/config/config.php
  - app/controllers/*.php
  - app/core/TS_Controller.php
  - app/libraries/Tscrud.php
  - app/helpers/tshelp_helper.php
  - app/views/*

  Kemudian buka file app/core/TS_Controller.php dengan editor yg kamu gunakan, 
  lalu ubah variable $dbconfig (username, password, dan database), sesuai dengan user mysql localhost mu. 
  
    
    
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
    $this->tsdata['urlberkas' ] = 'berkas/';
    
    
   
    

Berikutnya buatlah database di mysql dan lakukan restore database blogdb.sql
    
    
untuk menjalankan projectnya, entri address browser dengan url dibawah ini:

  http:/localhost/projectmu/

