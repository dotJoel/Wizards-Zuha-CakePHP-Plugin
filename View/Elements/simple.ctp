<?php
echo $this->Html->tag('div',
		'<a class="close" data-dismiss="wizard" href="#">&times;</a>'.
		$wizard['text'],
		array('id' => 'simpleWizard'.$wizard['position'], 'class' => 'wizardBox')
		);
