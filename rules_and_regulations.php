<?
$page_title = 'Rules & Regulations';
include 'header.php'; 
?>

<?

$faq[1] = 'Bow to black belts of all levels when met.';
$faq[] = 'Bowing should be in a standing position with the body bending at an angle of 30 degrees, head down, without looking at the individual displaying trust and respect.';
$faq[] = 'Only senior black belt members can return the bow with a nod of acknowledgment instead of the prescribed bow to any junior rank members.';
$faq[] = 'Upon entering or leaving the training area (Dojang), bow to the flags when displayed or to the instructor in charge of the class.';
$faq[] = 'No profanity or loud talking.';
$faq[] = 'Students must maintain a proper attitude at all times.';
$faq[] = 'Never address others while standing with hands on the hips or hands folded in front. This shows a lack of respect for the other person.';
$faq[] = 'Discipline and proper attitude are the main principles in the training of Taekwondo.  In violation of such principles, students will be dismissed or suspended.';
$faq[] = 'Bad mouthing, negative comments or any actions harming the morale, spirit of members in regards to the Basran Taekwondo® Instructors of all levels, policies, training methods etc. shall result in dismissal.';
$faq[] = 'Students must address Grand Master, Master Instructors, Instructors or Black Belts as “Sir” orv “Madam”.';
$faq[] = 'All higher rank students are expected to help junior rank students.';
$faq[] = 'Only learn and practice the materials required for your rank and not beyond.';
$faq[] = 'Uniforms (Dobok) must be kept clean; not wrinkled and Basran Taekwondo® crest must be worn.';
$faq[] = 'Uniform must be treated with respect. Clean and neat when worn, hung or folded properly when not. The uniform is a symbol of Basran Taekwondo® and the belt represent your rank. The stripes which indicate your rank must be worn on the left side.';
$faq[] = 'Basran Taekwondo® uniforms (Dobok) are to be worn by members in good standing only for training, competitions on designated demonstrations.';
$faq[] = 'When students are attending demonstrations, Basran Taekwondo® activities or competitions, they must act in a behaviour or manner acceptable to the standards of Basran Taekwondo®.';
$faq[] = 'Approved sparring equipment is mandatory for sparring.';
$faq[] = 'Additional rules and regulations may be added at any time.';

?>

<ol>
<? foreach ( $faq as $key => $value ) { ?>
	<li><?=$value;?><br /><br /></li>
<? } ?>
</ol>
<? include 'footer.php'; ?>
