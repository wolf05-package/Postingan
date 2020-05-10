<?php 
$PATH =$_SERVER['DOCUMENT_ROOT'];
$ROOT = array(
       'path'          => $PATH,
       'wolf05'        => $PATH.'/wolf05',
       'system'        => $PATH.'/wolf05/application/system/Wofl05require.php',
       'plugin'        => '/wolf05/application/assets',
);
require_once($ROOT['system']);
use wolf05\helper\tatiyeNet;
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.css');
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('admin','assets'),'core.css');
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('admin','assets'),'bootstrap.min.css');




/*
|--------------------------------------------------------------------------
| Initializes LOADMORE RESULT_PER_PAGE
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
  $EXPLODE= $_GET['tn'];
  $SEGMENT=explode('/',$EXPLODE);
  $TABEL=$SEGMENT[0];

/*
|--------------------------------------------------------------------------
| Initializes FORUM
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sel 21 Apr 2020 02:53:53  WITA
*/
 ?>
      <?php
      $no=0;
      $data = new tatiyeNet();
      $count  =  $data->select_Group(" * ", "news", " `date` = '".$_POST['id']."' ");
      while ($ngi = $data->getObjectResults()){
        $id=$ngi->id;
        $id_trm=tatiyeNet::paramEncrypt($id);
        $no=$no+1;
      ?>

      <div class="card-heading">
          <div class="user-block">
              <div class="image">
                  <img src="<?php echo tatiyeNet::IMG('api-imgEncode','50x50/upload/'.$ngi->nama_file);?>">
              </div>
              <div class="user-info">
                  <a onclick="WFupdate('Detail/Newsdetail/x/x/off/<?php echo $id_trm?>/120x1100x-200');"><strong><?php echo $ngi->title;?></strong></a>
                  <span class="time"><i class="picons-23"></i> <?php echo tatiyeNet::Format("stamp-$ngi->time");?> <i class="picons-35"></i> <?php echo $ngi->categori;?></span>
              </div>
          </div>
          <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
              <div>
                  <div class="button">
                      <i data-feather="more-vertical"></i>
                  </div>
              </div>
              <div class="dropdown-menu" role="menu">
                  <div class="dropdown-content">
                      <a href="<?php echo tatiyeNet::ULRsession('postingan/forum/update-text/'.$id_trm)?>" class="dropdown-item">
                          <div class="media">
                              <i class="picons-3 fs-18 w-28"></i>
                              <div class="media-content">
                                  <h3>Updates text</h3>
                                  <small>Koreksi text postingan</small>
                              </div>
                          </div>
                      </a>
                      <a href="<?php echo tatiyeNet::ULRsession('postingan/forum/update-text-img/'.$id_trm)?>" class="dropdown-item">
                          <div class="media">
                             <i class="picons-10 fs-18 w-28"></i>
                              <div class="media-content">
                                  <h3>Text and img updates</h3>
                                   <small>Koreksi text dan images postingan</small>
                              </div>
                          </div>
                      </a>
                      <hr class="dropdown-divider">
                       <a onclick="WFupdate('Flag/Flag/x/x/off/<?php echo $id_trm?>/120x400x300');" class="dropdown-item">
                          <div class="media">
                              <i data-feather="flag"></i>
                              <div class="media-content">
                                  <h3>Flag</h3>
                                  <small>Kebijakan Modul Postingan</small>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          </div>        
        </div>
      <div class="card-body"></div>
    <?php }?>

    <?php 
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('assets',''),'wolf05.js');
tatiyeNet::DirStyle(tatiyeNet::URLdirektori('admin','assets'),'global.js');
     ?>