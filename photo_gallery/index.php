<?

////////////////////////////////////////////////////////////////////////////////////////////////////
// Maknet Easy Photo Gallery! :}
// syntax : $image[] => array ('image', 'alt'),
////////////////////////////////////////////////////////////////////////////////////////////////////
//$image[] = array ('demo', 'Demo at Chingcousy Park', 'jpg');
//$image[] = array ('black_belt_seminar', 'A recent black belt seminar', 'jpg');
//$image[] = array ('masters', 'Grand Master Cheung and his Masters', 'jpg');
//$image[] = array ('sparring_drills', 'Sparring drills', 'jpg');
//$image[] = array ('sparring_drills_2', 'Sparring drills', 'jpg');
//$image[] = array ('arial_attack_drills', 'Arial Attacking Drills', 'jpg');
//$image[] = array ('sparring_kick', 'Some fancy footwork', 'jpg');
//$image[] = array ('training', 'One of our instructors helping some new students', 'jpg');
//$image[] = array ('class', 'One of our children\'s classes', 'jpg');
//$image[] = array ('cheungs', 'Cheungs Takewondo', 'jpg');
//$image[] = array ('meditating', 'Children Meditating', 'jpg');
//$image[] = array ('warmup', 'Children\'s Warmup', 'jpg');
//$image[] = array ('sparring_kick_2', 'Practicing a spinning kick', 'jpg');
$image[] = array('DSC02373','','jpg');
$image[] = array('DSC02494','','jpg');
$image[] = array('DSC03205','','jpg');
$image[] = array('DSC03207','','jpg');
$image[] = array('DSC03224','','jpg');
$image[] = array('DSC03227','','jpg');
$image[] = array('DSC03313','','jpg');
$image[] = array('DSC03317','','jpg');
$image[] = array('DSC03329','','jpg');
$image[] = array('DSC03333','','jpg');
$image[] = array('DSC03379','','jpg');
$image[] = array('DSC03409','','jpg');
$image[] = array('DSC03411','','jpg');
$image[] = array('DSC03412','','jpg');
$image[] = array('DSC03464','','jpg');
$image[] = array('DSC03472','','jpg');
$image[] = array('DSC03475','','jpg');
$image[] = array('DSC04210','','jpg');
$image[] = array('DSC05237','','jpg');
$image[] = array('DSC05238','','jpg');
$image[] = array('DSC05241','','jpg');
$image[] = array('DSC05243','','jpg');
$image[] = array('DSC05278','','jpg');
$image[] = array('DSC05281','','jpg');
$image[] = array('DSC05329','','jpg');
$image[] = array('DSC05331','','jpg');
$image[] = array('DSC06201','','jpg');
$image[] = array('DSC06230','','jpg');
$image[] = array('DSC06329','','jpg');
$image[] = array('DSC06332','','jpg');
$image[] = array('DSC06339','','jpg');
$image[] = array('DSC06340','','jpg');
$image[] = array('DSC06345','','jpg');
$image[] = array('DSC06368','','jpg');
$image[] = array('DSC06376','','jpg');
$image[] = array('DSC06378','','jpg');
$image[] = array('DSC06381','','jpg');
$image[] = array('DSC06383','','jpg');
$image[] = array('DSC06384','','jpg');
$image[] = array('DSC06385','','jpg');
$image[] = array('DSC06386','','jpg');
$image[] = array('DSC06387','','jpg');
$image[] = array('DSC06390','','jpg');
$image[] = array('DSC06393','','jpg');

?>

<? 
$page_title = 'Photo Gallery'; 
include '../header.php'; 
?>

<!-- lboxjs image script -->

<script src="/lboxjs/js/prototype.js" type="text/javascript"></script>
<script src="/lboxjs/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="/lboxjs/js/lightbox.js" type="text/javascript"></script>

<link rel="stylesheet" href="/lboxjs/css/lightbox.css" type="text/css" media="screen" />

<!-- lboxjs image script -->

<table cellpadding="2" cellspacing="5">
 <tr>
<? 
for ( $x = 0; $x < count($image); $x++ )
{
	if ( $x % 3 == 0 && $x != 0 ) 
	{
?>
 </tr>
 <tr>
<?
	}
?>
	<td valign="top">

		<table width="150" cellpadding="2" cellspacing="0">
		 <tr>
			<td style="border-style: solid; border-width: 1px; border-color: #999999;"><a href="images/<?=$image[$x][0] . '.' . $image[$x][2];?>" rel="lightbox[gallery]" title="<?=$image[$x][1];?>"><img src="images/<?=$image[$x][0] . '_sm.' . $image[$x][2];?>" width="150" height="120" border="0" alt="<?=$image[$x][1];?>"></a></td>
		 </tr>
		 <tr>
			<td align="center" style="color: #666666; font-size: 11px; font-family: Tahoma, Arial, Verdana, sans-serif;"><?=$image[$x][1];?></td>
		 </tr>
		</table>
	
	</td>
<?
}
?>
 </tr>
</table>

<table>
 <tr>
	<td colspan="3"><img src="images/spacer.gif" width="1" height="20"></td>
 </tr>
 <tr>
	<td colspan="3" style="color: #666666; font-size: 10px;"><small>Please note JavaScript should be enabled for the images to enlarge properly. <br/> For more information about this script, click here: <a href="http://www.huddletogether.com/projects/lightbox2/" target="_blank" class="lboxjs">Lightbox JS v2.0</a></small> <br/> <br/> <br/> </td>
 </tr>
</table>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<? include '../footer.php'; ?>
