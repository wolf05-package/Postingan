
<?php
 use wolf05\helper\tatiyeNet;

 if($SEGMENT[0] == '#') {?>
<!-- 
|--------------------------------------------------------------------------
| Initializes SEGMENT 
|--------------------------------------------------------------------------
| Develover Tatiye.Net 2018
| @Date Sen 27 Apr 2020 02:19:05  WITA
-->
 	<script type="text/javascript">
	$(document).ready(function(){
	   // var pageURL = $(location).attr("href");
	   // $("#LiID").load(pageURL+' #LiID')
	});
	 </script>

<?php } elseif ($SEGMENT[0] == '#'){?>

	<script type="text/javascript">
	$(document).ready(function(){

	});
	 </script>


<?php } else {?>
	<script type="text/javascript">
		$(document).ready(function(){
	       window.location.href = '<?php echo  tatiyeNet::ULRsession('postingan');?>';
		});
	 </script>
<?php }?>


