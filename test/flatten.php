<?php
	if(isset($_POST['number_array']) && !empty($_POST['number_array'])) {
        function flatten($array) {
			if (!is_array($array)) {
				// nothing to do if it's not an array
				return array($array);
			}

			$result = array();
			foreach ($array as $value) {
				// explode the sub-array, and add the parts
				$result = array_merge($result, flatten($value));
			}

			return $result;
		}

		$posted_array = $_POST['data'];
		$output_array = [];
		foreach (flatten($posted_array) as $value) {
			array_push($output_array, $value);
		}

		echo '<pre>'; print_r($output_array); echo '</pre>';
    }
