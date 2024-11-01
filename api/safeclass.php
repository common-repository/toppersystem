<?php
class TopperSystemSafeNOSQL {
	public static function stripLargeTags($html){
		$searches = array (
			"/<!\[CDATA\[(.*)\]\]>/si",
			"/<script[^>]*>.*?<\/script>/si",
			"/<style[^>]*>.*?<\/style>/si",
			"/<code[^>]*>.*?<\/code>/si",
			"/<!--.*?-->/s",
			"/<!.*>/Us",
			"/<\?.*>/Us"
		);
		$replace = array();
		foreach($searches as $search){
			array_push($replace, '');
		} reset($searches);
		$text = preg_replace($searches, $replace, $html);
		return $text;
	}

	public static function get_html_translation_table_CP1252() {
		$trans = get_html_translation_table(HTML_ENTITIES);
		$trans[chr(130)] = '&sbquo;';
		$trans[chr(131)] = '&fnof;';
		$trans[chr(132)] = '&bdquo;';
		$trans[chr(133)] = '&hellip;';
		$trans[chr(134)] = '&dagger;';
		$trans[chr(135)] = '&Dagger;';
		$trans[chr(136)] = '&circ;';
		$trans[chr(137)] = '&permil;';
		$trans[chr(138)] = '&Scaron;';
		$trans[chr(139)] = '&lsaquo;';
		$trans[chr(140)] = '&OElig;';
		$trans[chr(145)] = '&lsquo;';
		$trans[chr(146)] = '&rsquo;';
		$trans[chr(147)] = '&ldquo;';
		$trans[chr(148)] = '&rdquo;';
		$trans[chr(149)] = '&bull;';
		$trans[chr(150)] = '&ndash;';
		$trans[chr(151)] = '&mdash;';
		$trans[chr(152)] = '&tilde;';
		$trans[chr(153)] = '&trade;';
		$trans[chr(154)] = '&scaron;';
		$trans[chr(155)] = '&rsaquo;';
		$trans[chr(156)] = '&oelig;';
		$trans[chr(159)] = '&Yuml;'; 
		ksort($trans);
		return $trans;
	}

	public static function unhtmlentities($string){
		#$string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
		#$string = preg_replace('~&#([0-9]+);~e', 'chr("\\1")', $string);

		$trans_tbl = TopperSystemSafeNOSQL::get_html_translation_table_CP1252();
		$trans_tbl = array_flip($trans_tbl);
		return strtr($string, $trans_tbl);
	}

	public static function sanitizeNosql($html,$stripAttributes =false,$keepTags =false,$stripHtmlChars =true,$stripSpaces =true,$stripImages =true,$stripAcronyms =true){
        #Attention use with NOSQL db. This string is processed for only specific functions the plugin Topper System
		$tags2Separate = "div|p|td|li|acronym|img";
		$tags2Separate = preg_split("/[^a-z]/i",$tags2Separate);
		$html = preg_replace("/<(\/?".implode("|",$tags2Separate).")([^>]+)>/i"," <\\1\\2>",$html);

		if($stripImages){
			$html=preg_replace("/<img[^>]+?alt=\"([^\"]*)\"[^>]*>/si","\\1",$html);
		}

		if($stripAcronyms){
			$html=preg_replace("/<acronym.*title=\"([^\"]*)\"[^>]*>.*<\/acronym>/Ui","\\1",$html);
		}
		$text = TopperSystemSafeNOSQL::stripLargeTags($html);
		if($stripAttributes){
			if(preg_match_all("@<[^\s>]+\s.+?>@si", $text, $tags)){
				$tags = $tags[0]; array_unique($tags);
				foreach($tags as $tag){
				if(!strchr($tag,' ')) continue;
				$tagml = $tag; $tag = trim($tag,"<>"); $tag = trim($tag);
				if(!preg_match("@^([^\s]+)\s.*$@is", $tag, $pcs)) continue;
				$tag_name = $pcs[1];
				if($tag_name[0]=='/'){
					$tag_name = substr($tag_name, 1);
					$text = str_replace($tagml, "</".$tag_name.">", $text);
					continue;
				}
				if($tag_name[strlen($tag_name)-1]=='/'){
					$tag_name = substr($tag_name, 0, strlen($tag_name)-1);
					$text = str_replace($tagml, "<".$tag_name."/>", $text);
					continue;
				}
					$text = str_replace($tagml, "<".$tag_name.">", $text);
				}
			}
		}

		if(is_bool($keepTags)){
			if(!$keepTags){
				$text = preg_replace("@<[^>]+>@si", "", $text);
			}
		}else{
			if(is_string($keepTags)){
				$keepTags = preg_split("/[^a-z]/i",$keepTags);
			}
			if(is_array($keepTags)){
				if(preg_match_all("/<([^\/\s>]+)[^>]*>/si",$text,$tags)){
				$tags=$tags[1];
				$stripTags = array_diff($tags, $keepTags);
				$text=preg_replace("/<\/?(".implode("|",$stripTags).
					")(\s|)[^>]*>/","",$text
				);
					
				}
			}
		}

		$text=str_replace("&amp;","&",$text);
		if($stripHtmlChars){
			$text = TopperSystemSafeNOSQL::unhtmlentities($text);
			$text = preg_replace("/&[^;]+;/Ui"," ",$text);
		}

		if($stripSpaces){
			$text=str_replace("&nbsp;"," ",$text);
			$text=preg_replace("/[ \t]+/"," ",$text);
		}
		return trim($text);
	}
	
	public static function sanitizeNosqlUTF($str){
		return $str;
	}
}
?>