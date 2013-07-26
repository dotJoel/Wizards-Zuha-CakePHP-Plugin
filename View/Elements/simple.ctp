<?php
echo $this->Html->tag('div',
		'<a class="close" id="closeWizard" href="#">&times;</a>'.
		$wizard['text'],
		array('id' => 'simpleWizard'.$wizard['position'], 'class' => 'wizardBox')
		);
?>

<script type="text/javascript">
	$(document).ready(function() {
		$("#menuWizard").click(function(){
			$("#simpleWizard<?php echo $wizard['position'] ?>").fadeIn();
		});
		$("#closeWizard").click(function(){
			$("#simpleWizard<?php echo $wizard['position'] ?>").fadeOut();
		});
	});
</script>