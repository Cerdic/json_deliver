<?php
/**
 * Plugin Json Deliver
 * Licence GPL3
 *
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * un filtre pour json_encode avec les bonnes options, pour l'export json des modeles
 * @param $texte
 * @return string
 */
function filtre_json_encode_html($texte){
	#$texte = json_encode($texte,JSON_HEX_TAG);
	$texte = json_encode($texte);
	$texte = str_replace(array("<",">"),array("\u003C","\u003E"),$texte);
	return $texte;
}

?>