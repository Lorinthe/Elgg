<?php
/**
 * Elgg log rotator plugin settings.
 *
 * @package ElggLogRotate
 */

$period = $vars['entity']->period;
$delete = $vars['entity']->delete;
if (!$period) {
	$period = 'monthly';
}

if (!$delete) {
	$delete = 'monthly';
}		
?>
<div>
	<?php

		echo elgg_echo('logrotate:period') . ' ';
		echo elgg_view('input/select', array(
			'name' => 'params[period]',
			'options_values' => array(
				'weekly' => elgg_echo('logrotate:weekly'),
				'monthly' => elgg_echo('logrotate:monthly'),
				'yearly' => elgg_echo('logrotate:yearly'),
			),
			'value' => $period,
		));
	?>
</div>
<div>
	<?php

		echo elgg_echo('logrotate:delete') . ' ';
		echo elgg_view('input/select', array(
			'name' => 'params[delete]',
			'options_values' => array(
				'weekly' => elgg_echo('logrotate:week'),
				'monthly' => elgg_echo('logrotate:month'),
				'yearly' => elgg_echo('logrotate:year'),
			),
			'value' => $delete,
		));
	?>
</div>
