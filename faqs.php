<?
$page_title = 'FAQs';
include 'header.php'; 
?>

<?

$faq[1] = array('How often should a student attend class?', 'A student should attend classes 3 times a week regularly in order to achieve expected technical improvement at Basran Taekwondo® to be promoted in our rank system.');
$faq[] = array('I can only come 2 times a week. Should I practice at home?', 'When a student attends classes 2 times a week, he/she will be expected to progress slower than the ones that attends classes 3 times a week.  The progress and improvement technically will still be there especially with practicing at home.  Instead of an expected 2 months progression, he/she might look at a 3 months progression.');
$faq[] = array('If a student attends everyday, won’t he/she progress faster?', 'Taekwondo training demands focus, concentration and discipline.  A student can get burnt out very quickly if he/she attends class everyday!');
$faq[] = array('What about “double up” classes in one day?', 'After a student takes one class, he/she should be pretty tired.  The mind and body have just been pushed to its limit – the ultimate goal in the training.  When the student takes the 2nd class, the mind will not be as focused and be able to deliver accurate and precise motions.    In that hour, the body will remember movements that are lacking accuracy and precision.  It becomes counter productive technically.');
$faq[] = array('When a student attends classes, what type of training attitude do you expect from him/her?', 'A student is expected to be focused and deliver his/her best effort in class.  The “bowing” before anyone enters the training hall (Dojang) is the commitment one makes to deliver one’s best.');

?>

<table width="550" border="0" cellpadding="3" cellspacing="0">
<? foreach ( $faq as $key => $value ) { ?>
 <tr>
	<td valign="top"><b><?=$key;?>.</b></td>
	<td><a href="#<?=$key;?>"><?=$value['0'];?></a></td>
 </tr>
<? } ?>
</table>

<br/>

<table width="550" border="0" cellpadding="3" cellspacing="0">
<? foreach ( $faq as $key => $value ) { ?>
 <tr>
	<td valign="top"><a name="<?=$key;?>"></a><b>Q:</b></td>
	<td><b><?=$value['0'];?></b></td>
 </tr>
 <tr>
	<td valign="top"><b>A:</b></td>
	<td><?=$value['1'];?></td>
 </tr>
 <tr>
	<td colspan="2"><img src="/images/spacer.gif" width="0" height="10"></td>
 </tr>
<? } ?>
</table>

<? include 'footer.php'; ?>
