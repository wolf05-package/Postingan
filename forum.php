        <?php 
      use wolf05\helper\tatiyeNet;
      tatiyeNet::Modal([
          'status'    =>'dialog',
          'package'   =>SEGMENT_2,
          'model'     =>'auto', //Facebook Mac ,Bootstrap ,auto
          'view'      =>'guide1', //guide
       ]);
        $En1 = new tatiyeNet();
        $count  =  $En1->select_Group(" * ", "news", " `id` = '".tatiyeNet::paramDecrypt(SEGMENT_5)."' ");
        $En = $En1->getObjectResults();

         ?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
        <?php  
            tatiyeNet::Format("Calender",[
             'style'=>[
                  'width'     =>'100%',
                  'background'=>'#2F62FF',
                  'color'     =>'#FFF'
              ],
              'SendDestroyLoader'=>[
                  'send'     =>'off', //on ,off
                  'format'   =>'EN', // IN,EN
                  'url'      =>'Account/calenderData.php',
                  'resultsID'=>'#LiID',
              ]
            ]);
        ?>
                            <div class="card">
                                <div class="card-heading is-bordered">
                                    <h4> Categori</h4>
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
                                    ?>
                                    <div class="page-block transition-block" id="page<?php echo $Key?>">
                                        <i class="WFsvg1 file 40"></i>
                                        <div class="page-meta">
                                            <span><?php echo $ngi->kategori;?></span>
                                            <span>200 File <br><small>waktu: <?php echo tatiyeNet::Format("stamp-$ngi->date");?></small></span>
                                        </div>
                                        <div class="add-page add-transition">
                                                    <label class="el-switch el-switch-sm">
                                                          <input id="WFcheckbox-<?php echo $no?>" class="<?php echo $ngi->kategori;?>/aaa" type="checkbox"name="cek<?php echo $no?>" value="">
                                                      <span class="el-switch-style"></span>
                                                    </label>
                                        </div>
                                    </div>
                                   <?php }?>
                                   <div id="PagesSosialMedia"></div>
                                </div>
                            </div>


    </div>
    <div class="col-md-9">
     <div class="WFeditor" id="WFeditor-1">
                        <div class="stats-wrapper">
                                <div class="stats-header">
                                    <div class="avatar-wrapper">
                                        <img class="avatar" src="<?php echo tatiyeNet::IMG('account');?>" data-demo-src="#" data-user-popover="0" alt="">
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="user-info">
                                      <?php tatiyeNet::options('Postingan') ?>
                                    <div class="main-stats">
                                     <svg class="sparkline sparkline--blue sparkline--filled" width="160" height="70" stroke-width="2"></svg>
                                    </div>
                                </div>
                            </div>


         <div id='WFeditor' class="WFeditorAria" contenteditable>
           <?php
            if(SEGMENT_4 == 'update-text-img') {
              echo $En->content;
            ?>
            <?php } elseif (SEGMENT_4 == 'update-text'){
              echo $En->content;
             } else {?>
           <h2 id="title">Tulis judul berita disini</h2>
           <span id="wfdate"><span><i class="picons-23"></i> Minggu, 10/05/2020  <i class="picons-35"></i>:undefined</span></span> 
           
           <br>
           <br>
           <label for="imageUpload" class="">
                 <img class="img-responsive pull-left mr-15px w-540 h-300"id="imagePreview"src="<?php echo tatiyeNet::URL('img?tn=540x300/2F62FF');?>">
           </label>
            <div id="detail">
            <p ><b>Tulis detail isi dari berita disin</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
            </div>
           <?php }?>
        </div>
     
    </div>

     <div class="row">
       <div class="col-md-8">
          <?php
           if(SEGMENT_4 == 'update-text') {?>
           <button id="Submittext"type="button" class="btn btn-primary">Submit</button>
          <?php } else {?>
           <button id="Submit"type="button" class="btn btn-primary">Submit</button>
          <?php }?>
          
       </div>
       <div class="col-md-4">1</div>
       <div class="col-md-12 h-100"></div>
     </div>
    </div>

  </div>
</div>




  <form id="form"method='post' action='' enctype="multipart/form-data">
     <input type="hidden" id="WFtitle"name="a1" value="" >
     <input type="hidden" id="WFdeskripsi"name="a2" value="" >
     <input type="hidden" id="WFredactor"name="a3" value="" >
     <input type="hidden" id="WFCategori"name="a4" value="" >
     <input type="hidden" id="WFcontent"name="a5" value="" >
     <input type="file" name="file" id="imageUpload"  class="hidden"/> 
</form>  
<div class="hidden" id="nugi"></div>
<div class="hidden"id="Postingan"></div>
<script type="text/javascript">
$(document).ready(function(){
    $("#Submit").click(function(){
        var form_data = new FormData();
        var a1    = $('input[name=a1]').val();
        var a2    = $('input[name=a2]').val();
        var a3    = $('input[name=a3]').val();
        var a4    = $('input[name=a4]').val();
        var a5    = $('input[name=a5]').val();
        var files = $('#imageUpload')[0].files[0];
        form_data.append('file',files);
        form_data.append("a1",  a1);
        form_data.append("a2",  a2);
        form_data.append("a3",  a3);   
        form_data.append("a4",  a4);   
        form_data.append("a5",  a5);   
        $.ajax({
            url: '<?php echo tatiyeNet::URLdirektori('package','Postingan/send.php?tn='.SEGMENT_4.'/'.SEGMENT_5)?>',
            type: 'post',
            data: form_data,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#Postingan").html(response); 
                    
                }else{
                   
                }
            },
        });
    });
});
/*
|--------------------------------------------------------------------------
| Initializes Update Text 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Min 10 Mei 2020 09:37:34  WITA
*/
  $(document).ready(function() {
            $("#Submittext").click(function(){
            var form_data = $('#form').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo tatiyeNet::URLdirektori('package','Postingan/send.php?tn='.SEGMENT_4.'/'.SEGMENT_5)?>',
                data: form_data,
                success: function(Insert) {
                    $('#Postingan').html(Insert); 
                    
                }
            });
        });
  });



</script>