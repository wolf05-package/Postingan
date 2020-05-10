<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
    'path'          => $PATH,
    'upload'        => $PATH.'/upload/',
    'wolf05'        => $PATH.'/wolf05',
    'application'   => $PATH.'/wolf05/application',
    'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
    'autoload'      => $PATH.'/wolf05/vendor/',
    'package'       => __DIR__.'/SendDestroyLoader.php',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
use wolf05\helper\tatiyeNetmodal;
/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $DIR=$ROOT['package'];
/*
|--------------------------------------------------------------------------
| Initializes CEK SESS_MEMBER_ID LOGIN  
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:54:08  WITA
*/

 if (isset($_SESSION['SESS_MEMBER_ID'])) { 
/*
|--------------------------------------------------------------------------
| Initializes IF GET POST 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:41:38  WITA
*/
    if($SEGMENT[0] == 'News') { 
       /*
       |--------------------------------------------------------------------------
       | Initializes POST INSERT 
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
        /* Getting file name */
        $filename = $_FILES['file']['name'];
        /* Location */
        $location = $ROOT['upload'].$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        /* Valid Extensions */
        $valid_extensions = array("jpg","jpeg","png");
        /* Check file extension */
        if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
           $uploadOk = 0;
        }
        if($uploadOk == 0){
           echo 0;
        }else{
           /* Upload file */
           if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){

               $data = new tatiyeNet();     
               $arr = array(); 
               $arr["ulr_id"]       = tatiyeNet::Format("EN").'/'.tatiyeNet::Text('strreplace',[$_POST['a1'],'-']);     
               $arr["title"]        = tatiyeNet::XSS($_POST['a1']);     
               $arr["deskripsi"]    = tatiyeNet::Text('substr',[$_POST['a2'],0,180]); ;   
               $arr["detail"]       = $_POST['a3'];   
               $arr["categori"]     = $_POST['a4'];   
               $arr["content"]      = $_POST['a5'];   
               $arr["nama_file"]    =$filename;   
               $arr["date"]         =tatiyeNet::Format("EN");
               $arr["time"]         =tatiyeNet::Format("Time"); 
               $arr["user_id"]      =ID; 
               $count=$data->insert(" news ", $arr );


           }else{
              echo 0;
           }
        }



    
     } elseif ($SEGMENT[0] == 'update-text'){

          $ID=tatiyeNet::paramDecrypt($SEGMENT[1]);
          $data = new tatiyeNet();     
          $arr = array(); 
          $arr["ulr_id"]       = tatiyeNet::Format("EN").'/'.tatiyeNet::Text('strreplace',[$_POST['a1'],'-']);     
          $arr["title"]        = tatiyeNet::XSS($_POST['a1']);     
          $arr["deskripsi"]    = tatiyeNet::Text('substr',[$_POST['a2'],0,180]); ;   
          $arr["detail"]       = $_POST['a3'];   
          $arr["categori"]     = $_POST['a4'];   
          $arr["content"]      = $_POST['a5'];    
          $arr["date"]         =tatiyeNet::Format("EN");
          $arr["time"]         =tatiyeNet::Format("Time"); 
          $count=$data->update(" news ", $arr, " `id` = '".$ID."'","user_id='".ID."'"); 


     } elseif ($SEGMENT[0] == 'update-text-img'){

        $filename = $_FILES['file']['name'];
        /* Location */
        $location = $ROOT['upload'].$filename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

        /* Valid Extensions */
        $valid_extensions = array("jpg","jpeg","png");
        /* Check file extension */
        if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
           $uploadOk = 0;
        }
        if($uploadOk == 0){
           echo 0;
        }else{
           /* Upload file */
           if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                  $ID=tatiyeNet::paramDecrypt($SEGMENT[1]);
                  $data = new tatiyeNet();     
                  $arr = array(); 
                  $arr["ulr_id"]       = tatiyeNet::Format("EN").'/'.tatiyeNet::Text('strreplace',[$_POST['a1'],'-']);     
                  $arr["title"]        = tatiyeNet::XSS($_POST['a1']);     
                  $arr["deskripsi"]    = tatiyeNet::Text('substr',[$_POST['a2'],0,180]); ;   
                  $arr["detail"]       = $_POST['a3'];   
                  $arr["categori"]     = $_POST['a4'];   
                  $arr["content"]      = $_POST['a5'];   
                  $arr["nama_file"]    =$filename;   
                  $arr["date"]         =tatiyeNet::Format("EN");
                  $arr["time"]         =tatiyeNet::Format("Time"); 
                  $count=$data->update(" news ", $arr, " `id` = '".$ID."'","user_id='".ID."'"); 


           }else{
              echo 0;
           }
        }



     } elseif ($SEGMENT[0] == tatiyeNetmodal::validasi('categori')){
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
       $data = new tatiyeNet();     
       $arr = array();   
       $arr["kategori"]       = $_POST['a1'];   
       $arr["name"]           = tatiyeNet::Text('strreplace',[$_POST['a1'],'-']);
       $arr["data_id"]        ='Postingan';   
       $arr["user_id"]        =ID; 
       $count=$data->insert(" panel ", $arr );


     } elseif ($SEGMENT[0] == 'section'){
       /*
       |--------------------------------------------------------------------------
       | Initializes  POST UPDATE
       |--------------------------------------------------------------------------
       | Develover Tatiye.Net 2018
       | @Date Sel 21 Apr 2020 12:45:57  WITA
       */
    
       $data = new tatiyeNet();     
       $arr = array();   
       $arr["kategori"]       = $_POST['a1'];   
       $arr["name"]           = tatiyeNet::Text('strreplace',[$_POST['a1'],'-']);
       $arr["data_id"]        ='Postingan';   
       $arr["user_id"]        =ID; 
       $count=$data->insert(" panel ", $arr );

     } elseif ($SEGMENT[0] == 'delete-categori'){
      /*
      |--------------------------------------------------------------------------
      | Initializes DELETE POST ID 
      |--------------------------------------------------------------------------
      | Develover Tatiye.Net 2018
      | @Date Sel 21 Apr 2020 01:28:33  WITA
      */
      $ID=tatiyeNet::paramDecrypt($_POST['id']); 
      $data = new tatiyeNet();     
      $count  =  $data->delete("panel", " `id` = '".$ID."'","user_id='".ID."'");
     } 
/*
|--------------------------------------------------------------------------
| Initializes AND  SESS_MEMBER_ID
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date 
*/
}
require_once($ROOT['package']);
?>
