<?php
	global $db;
	
	
	// Define Output HTML Formating
	$html = '';
	$html .= '<li class="result">';
	$html .= '<a target="_blank" href="urlString">';
	$html .= '<h3>nameString</h3>';
	$html .= '<h4>typeString</h4>';
	$html .= '<h4>placeString</h4>';
	$html .= '</a>';
	$html .= '</li>';
	

	// Get Search
	$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
	$search_string = $db->real_escape_string($search_string);


	// Check Length More Than One Character
	if (strlen($search_string) >= 1 && $search_string !== ' ') {
		// Build Query

		$stmt = $db->prepare('SELECT * FROM events WHERE privado = ? AND (name LIKE %?% OR tipo LIKE %?% OR place LIKE %?%)
			UNION ALL
			SELECT events.id_event, name, dat, description, tipo, place, time_init, time_end, privado
			FROM events, users, events_users 
			WHERE privado = ? AND users.id_user = (SELECT id_user FROM users WHERE username = ?) AND (users.id_user = events_users.id_user OR users.id_user = events_users.id_host)
			AND events.id_event = events_users.id_event AND (name LIKE %?% OR tipo LIKE %?% OR place LIKE %?%)');
		$stmt->execute(array('false', $search_string, $search_string, $search_string, 'true', $_SESSION['username'], $search_string, $search_string, $search_string));
	
		while($results = $stmt->fetch_array()) {
			$result_array[] = $results;
		}

		// Check If We Have Results
		if (isset($result_array)) {
			foreach ($result_array as $result) {

				// Format Output Strings And Hightlight Matches ---> TODO
				//$display_type = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['tipo']); //format the type
				//$display_place = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['place']); //format the place
				//$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']); //format the name
				//$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['function']).'&lang=en'; //format the url
				
				$display_type = $result['tipo'];
				$display_place = $result['place'];
				$display_name = $result['name'];
				
				// Insert Name
				$output = str_replace('nameString', $display_name, $html);

				// Insert type
				$output = str_replace('typeString', $display_type, $output);
			
				// Insert place
				$output = str_replace('placeString', $display_place, $output);

				// Insert URL
				$output = str_replace('urlString', $display_url, $output);

				// Output
				echo($output);
			}
		}else{

			// Format No Results Output
			$output = str_replace('urlString', 'javascript:void(0);', $html);
			$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
			$output = str_replace('typeString', 'Sorry', $output);
			$output = str_replace('placeString', ':(', $output);

			// Output
			echo($output);
		}
	}
?>