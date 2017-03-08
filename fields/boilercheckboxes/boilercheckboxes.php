<?php
// Rename "boilercheckboxes" folder and "boiler.php" file to your field name
// Rename "Boilercheckboxes" on line 5 to your field name

class BoilercheckboxesField extends CheckboxesField {
	public function options() {
		$options = parent::options();
		$values = array(
			'value1' => 'Value 1',
			'value2' => 'Value 2'
		);
		return a::merge($options, $values);
	}
}