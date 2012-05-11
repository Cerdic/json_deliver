<?php
/**
 * Plugin oEmbed
 * Licence GPL3
 *
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function action_api_json_dist(){

	$arg = _request('arg');
	$arg = explode("/",$arg);
	$debut = _request('p');

	$table = reset($arg);

	$res = "";
	if (in_array($table,array('articles'))){
		$res = recuperer_fond("modeles/{$table}.json",array());
	}
	if (!$res) {
		include_spip('inc/headers');
		http_status(404);
		echo "404 Not Found";
	}
	else {
		$content_type = "application/json";
		header("Content-type: $content_type; charset=utf-8");
		echo $res;
	}
}