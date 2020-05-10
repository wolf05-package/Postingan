<?php 
    $path =$_SERVER['DOCUMENT_ROOT'];
    $config = array(
        'path'          => $path,
        'wolf05'        => $path.'/wolf05',
        'application'   => $path.'/wolf05/application',
        'system'        => $path.'/wolf05/application/system/Wofl05require.php',
        'autoload'      => $path.'/wolf05/vendor/',
    );
    require_once($config['system']);
    use wolf05\helper\tatiyeNet;
    use wolf05\helper\tatiyeNetmodal;

/*
|--------------------------------------------------------------------------
| Initializes ESPLOID IF POST GET 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
   $explode= $_GET['tn'];
   $sgmt=explode('/',$explode);
   tatiyeNetmodal::value([
          'token'   =>$sgmt[0],
          'status'  =>$sgmt[1],
          'tabel'   =>'panel',
          'post'    =>[
                         'a1'=>'kategori',
                         
                      ],
   ]);


/*
|--------------------------------------------------------------------------
| Initializes FORUM
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/

 ?>
<div class="row">
     <div class="form-group col-md-12">
         <label id="a1">Title</label>
         <input type="text" class="form-control" name="a1" placeholder="Input field" value=""required>
     </div>
 </div>


