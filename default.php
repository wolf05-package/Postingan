        <?php 
      use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);

     

         ?>
            <div class="container is-custom">
                <div id="pages-about" class="view-wrap is-headless">
                    <div class="columns has-portrait-padding">
                        <div class="column is-4">
                        <?php  
                            tatiyeNet::Format("Calender",[
                             'style'=>[
                                  'width'     =>'100%',
                                  'background'=>'#2F62FF',
                                  'color'     =>'#FFF'
                              ],
                              'SendDestroyLoader'=>[
                                  'send'     =>'on', //on ,off
                                  'format'   =>'EN', // IN,EN
                                  'url'      =>'Postingan/calenderData.php',
                                  'resultsID'=>'#LiID',
                              ]
                            ]);
                        ?>



                            <div class="card">
                                <div class="card-heading is-bordered">
                                    <h4> Categori Postingan</h4>
                                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                                        <div>
                                            <div class="button">
                                            <a onclick="WFinsert('Categori News/forumCategori/Insert Categori/categori/on/X/120x400x0');"><i data-feather="plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body no-padding">
                                    <?php
                                    $no=0;
                                    $data = new tatiyeNet();
                                    $count  =  $data->select_Group(" * ", " panel ", " `row` = '1' ","AND data_id='Postingan' ");
                                    while ($ngi = $data->getObjectResults()){
                                        $Key=tatiyeNet::paramEncrypt($ngi->id);
                                        $no=$no+1;
                                          $ngiry=mysql_fetch_array(mysql_query("SELECT SUM(row) FROM news WHERE categori='".$ngi->kategori."' "));  
                                          $Jnum=$ngiry['SUM(row)'] |0;
                                    ?>
                                    <div class="page-block transition-block" id="page<?php echo $Key?>">
                                        <i class="WFsvg1 file 30"></i>
                                        <div class="page-meta">
                                            <span><?php echo $ngi->kategori;?></span>
                                            <span><?php echo $Jnum?> Document <br></span>
                                        </div>
                                        <div class="add-page add-transition">
                                           <?php
                                            if($Jnum == 0) {?>
                                             <a onclick="WFdelete('delete-categori/id/<?php echo $Key?>');"><i data-feather="trash-2"></i></a>
                                           <?php } else {?>
                                           <?php echo $Jnum?>
                                           <?php }?>
                                           
                                           
                                        </div>
                                    </div>
                                   <?php }?>
                                   <div id="PagesSosialMedia"></div>
                                </div>
                            </div>


                        </div>
                        <div class="column is-8">
                               <div class="stats-wrapper">
                                <div class="stats-header">
                                    <div class="avatar-wrapper">
                                        <img class="avatar" src="<?php echo tatiyeNet::IMG('account');?>" data-demo-src="#" data-user-popover="0" alt="">
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="user-info">
                                        <h4><?php echo tatiyeNet::Account('name');?></h4>
                                        <a class="button is-follow" href="<?php echo tatiyeNet::ULRstepget('2','forum/News/'.tatiyeNet::paramEncrypt(ID.tatiyeNet::Format("Time")))?>">Add News</a>
                                    </div>
                                    <div class="main-stats">
                                        <div class="stat-block">
                                            <h4>Access</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','VISIT');?></p>
                                        </div>
                                        <div class="stat-block is-centered">
                                            <h4>Postingan</h4>
                                            <p><?php echo tatiyeNet::UserAgents('Session','PAC');?></p>
                                        </div>
                                     <svg class="sparkline sparkline--blue sparkline--filled" width="160" height="70" stroke-width="2"></svg>
                                    </div>
                                </div>
                            </div>
 <!--=====================================
 =            Section comment            =
 ======================================-->

                             <div class="card is-post">
                                <div class="content-wrap"id="LiID">
                                    <?php
                                    $no=0;
                                    $data = new tatiyeNet();
                                    $count  =  $data->select_Group(" * ", "news", " `row` = '1' ");
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
                                                    <a href="<?php echo tatiyeNet::ULRstepget('2','forum/update-text/'.$id_trm)?>" class="dropdown-item">
                                                        <div class="media">
                                                            <i class="picons-3 fs-18 w-28"></i>
                                                            <div class="media-content">
                                                                <h3>Updates text</h3>
                                                                <small>Koreksi text postingan</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="<?php echo tatiyeNet::ULRstepget('2','forum/update-text-img/'.$id_trm)?>" class="dropdown-item">
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
                                  </div>
                                </div>

                            
                            
                            
                        
  
 <!--====  End of Section comment  ====-->
 

                        </div>
                    </div>
                </div>
            </div>
