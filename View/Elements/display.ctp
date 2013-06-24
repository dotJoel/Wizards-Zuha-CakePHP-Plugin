<?php
$wizard = $this->requestAction('/wizards/wizards/display/'.$this->request->params['plugin'].'/'.$this->request->params['controller'].'/'.$this->request->params['action']);
if ( $wizard !== false ) {
	echo $this->Html->css('/wizards/css/'.$wizard['type']); // can't queue from an element ? :(
	echo $this->element('Wizards.'.$wizard['type'], array('wizard' => $wizard));
}
