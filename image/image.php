<?php
if(isset($TopperSystemCpermFileImage)){
if(!empty($TopperSystemCpermFileImage)){
if($TopperSystemCpermFileImage == "01234567"){

ini_set('memory_limit', '-1');
ini_set('max_execution_time', '8');
set_time_limit (8);
ini_set('allow_url_fopen', 'On');
if((isset($_GET["src"]))&&(isset($_GET["w"]))){	
if (!defined('SHORTINIT')){
define('SHORTINIT', 'true');
}
if (!defined('WP_USE_THEMES')){
define('WP_USE_THEMES', 'false');
}
class TopperSystemSetFileimage {
public static function get_headers_curlts($url){
    $options = array(		
        CURLOPT_HEADER         => true,
        CURLOPT_NOBODY         => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT        => 8,
	    CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_DNS_USE_GLOBAL_CACHE => false
    );
    $ch= curl_init( $url );
    curl_setopt_array( $ch, $options );
    if(curl_errno($ch)){
        $content = "";
    }else{
        $content = curl_exec( $ch );
    }    
    curl_close( $ch );
	return "$content";
}

public static function file_curlimagets_contents($url){
    $options = array(		
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_HEADER         => false,
	    CURLOPT_FOLLOWLOCATION => true,
	    CURLOPT_ENCODING       => "",
	    CURLOPT_AUTOREFERER    => true,
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT        => 8,
	    CURLOPT_SSL_VERIFYPEER => false,
	    CURLOPT_DNS_USE_GLOBAL_CACHE => false
    );
    $ch= curl_init( $url );
    curl_setopt_array( $ch, $options );
    if(curl_errno($ch)){
        $content = "";
    }else{
        $content = curl_exec( $ch );
    }    
    curl_close( $ch );
	return "$content";
}

public static function img_exists($url,$modcurlts){
    if($modcurlts == "0"){
        stream_context_set_default( [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);
        $headers=get_headers($url);
        $n=0;
        foreach($headers as $result){
	        if(trim($result) != ""){
		        if(str_replace(array("200 OK", "image/jpeg", "image/gif", "image/png"),"",$result) != "$result"){
			       $n++;
		        }
	        }
		    $result="";
        }
	    if(is_array($headers)){$headers=array();} 
        unset($result);
    }else{
        $headers=TopperSystemSetFileimage::get_headers_curlts($url);
        $n=0;
        if(str_replace(array("200"),"",$headers) != "$headers"){
            $n++;
            if(str_replace(array("image/jpeg", "image/gif", "image/png"),"",$headers) != "$headers"){
                $n++;
            }
        }
    }
    if($n == "2"){
	    $return=true;
    }else{
		$return=false;
	}
    unset($n);
    return $return;
}

public static function getBytesFromHexString($hexdata)
{
	for($count = 0; $count < strlen($hexdata); $count+=2){
		$bytes[] = chr(hexdec(substr($hexdata, $count, 2)));
	}
	$hexdata="";
    unset($hexdata);
	return implode($bytes);
}

public static function getImageMimeType($imagedata)
{
	$imagemimetypes = array( 
		"jpeg" => "FFD8", 
		"png" => "89504E470D0A1A0A", 
		"gif" => "474946",
		"bmp" => "424D", 
		"tiff" => "4949",
		"tiff" => "4D4D"
	);

    foreach ($imagemimetypes as $mime => $hexbytes)
    {		
		$bytes = TopperSystemSetFileimage::getBytesFromHexString($hexbytes);
		if (substr($imagedata, 0, strlen($bytes)) == $bytes){
			return $mime;
		}		
		$mine="";
		$bytes="";
		$hexbytes="";
    }
    unset($mine);
    unset($bytes);
    unset($hexbytes);
	$imagedata="";	
    unset($imagedata);
	$imagemimetypes=array();
    return NULL;
}

public static function resize ($fade = 100, $data, $maxwidth, $maxheight = 0, $crop = '', $quality = '100', $mimetype, $newcontenttype){
	
	if(($data == "Page not found")||($data == "false")||(trim($data == ""))||($data == false)||($data == "false google")){
		return "noimageload";
	}

	if($mimetype == "png"){
		$type="3";

		if($quality >= "100"){
			$quality="0";
            $qualitywebp="10";
            $qualityjp2="10";
            $qualityjp2_2="100";
		}else if(($quality >= "90")&&($quality <= "99")){
			$quality="1";
            $qualitywebp="9";
            $qualityjp2="9";
            $qualityjp2_2="90";
		}else if(($quality >= "80")&&($quality <= "89")){
			$quality="2";
            $qualitywebp="8";
            $qualityjp2="8";
            $qualityjp2_2="80";
		}else if(($quality >= "70")&&($quality <= "79")){
			$quality="3";
            $qualitywebp="7";
            $qualityjp2="7";
            $qualityjp2_2="70";
		}else if(($quality >= "60")&&($quality <= "69")){
			$quality="4";
            $qualitywebp="6";
            $qualityjp2="6";
            $qualityjp2_2="60";
		}else if(($quality >= "50")&&($quality <= "59")){
			$quality="5";
            $qualitywebp="5";
            $qualityjp2="5";
            $qualityjp2_2="50";
		}else if(($quality >= "40")&&($quality <= "49")){
			$quality="6";
            $qualitywebp="4";
            $qualityjp2="4";
            $qualityjp2_2="40";
		}else if(($quality >= "30")&&($quality <= "39")){
			$quality="7";
            $qualitywebp="3";
            $qualityjp2="3";
            $qualityjp2_2="30";
		}else if(($quality >= "20")&&($quality <= "29")){
			$quality="8";
            $qualitywebp="2";
            $qualityjp2="2";
            $qualityjp2_2="20";
		}else if(($quality >= "10")&&($quality <= "19")){
			$quality="9";
            $qualitywebp="1";
            $qualityjp2="1";
            $qualityjp2_2="10";
		}else{
			$quality="9";
            $qualitywebp="1";
            $qualityjp2="1";
            $qualityjp2_2="10";
		}

	}else if($mimetype == "gif"){
		$type="1";
        $newcontenttype="";

		if($quality >= "100"){
			$quality="0";
		}else if(($quality >= "90")&&($quality <= "99")){
			$quality="1";
		}else if(($quality >= "80")&&($quality <= "89")){
			$quality="2";
		}else if(($quality >= "70")&&($quality <= "79")){
			$quality="3";
		}else if(($quality >= "60")&&($quality <= "69")){
			$quality="4";
		}else if(($quality >= "50")&&($quality <= "59")){
			$quality="5";
		}else if(($quality >= "40")&&($quality <= "49")){
			$quality="6";
		}else if(($quality >= "30")&&($quality <= "39")){
			$quality="7";
		}else if(($quality >= "20")&&($quality <= "29")){
			$quality="8";
		}else if(($quality >= "10")&&($quality <= "19")){
			$quality="9";
		}else{
			$quality="9";
		}
	}else if($mimetype == "jpeg"){
		$type="2";
        $qualitywebp="$quality";
        $qualityjp2_2="$quality";
		if($quality >= "100"){
			$qualityjp2="0";
		}else if(($quality >= "90")&&($quality <= "99")){
			$qualityjp2="1";
		}else if(($quality >= "80")&&($quality <= "89")){
			$qualityjp2="2";
		}else if(($quality >= "70")&&($quality <= "79")){
			$qualityjp2="3";
		}else if(($quality >= "60")&&($quality <= "69")){
			$qualityjp2="4";
		}else if(($quality >= "50")&&($quality <= "59")){
			$qualityjp2="5";
		}else if(($quality >= "40")&&($quality <= "49")){
			$qualityjp2="6";
		}else if(($quality >= "30")&&($quality <= "39")){
			$qualityjp2="7";
		}else if(($quality >= "20")&&($quality <= "29")){
			$qualityjp2="8";
		}else if(($quality >= "10")&&($quality <= "19")){
			$qualityjp2="9";
		}else{
			$qualityjp2="9";
		}


	}else{
		$type="0";
		return "noimageload";
	}
	$mimetype="";
    unset($mimetype);

    #da qui
	if($newcontenttype == "jp2"){
        $newWidth = $maxwidth;
        $newQuality=$qualityjp2;

        $img = new Imagick();
        try {
            if($type == "2"){
                $img->readImageBlob($data);
                $imageprops = $img->getImageGeometry();
                $width = $imageprops['width'];
                $height = $imageprops['height'];
                $newHeight = ($newWidth / $width) * $height;
                $img->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 1, true);
                $img->setImageFormat("jp2");
                $img->setImageCompression(Imagick::COMPRESSION_JPEG2000);
                $img->setImageCompressionQuality($newQuality);
                $img->setOption('jp2:quality', $qualityjp2_2);
            }else if($type == "3"){
                $img->readImageBlob($data);
                $imageprops = $img->getImageGeometry();
                $width = $imageprops['width'];
                $height = $imageprops['height'];
                $newHeight = ($newWidth / $width) * $height;
                $img->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 1, true);
                $img->setImageFormat("jp2");
                $img->setImageCompression(Imagick::COMPRESSION_JPEG2000);
                $img->setImageCompressionQuality($newQuality);
                $img->setOption('jp2:quality', $qualityjp2_2);
            }else{
                $img->clear();
                $img->destroy();
                $imageprops="";

                $img="noimageload";
            }
        }
        catch(ImagickException $e) {
            $img->clear();
            $img->destroy();
            $imageprops="";
            $img="noimageload";
        }
		if($img == "noimageload"){
			$img = new Imagick();
			try {
				if($type == "2"){
					$img->readImageBlob($data);
					$imageprops = $img->getImageGeometry();
					$width = $imageprops['width'];
					$height = $imageprops['height'];
					$newHeight = ($newWidth / $width) * $height;
					$img->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 1, true);
					$img->setImageCompression(Imagick::COMPRESSION_JPEG2000);
					$img->setImageCompressionQuality($newQuality);
					$img->setOption('jp2:quality', $qualityjp2_2);
				}else if($type == "3"){
					$img->readImageBlob($data);
					$imageprops = $img->getImageGeometry();
					$width = $imageprops['width'];
					$height = $imageprops['height'];
					$newHeight = ($newWidth / $width) * $height;
					$img->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 1, true);
					$img->setImageCompression(Imagick::COMPRESSION_JPEG2000);
					$img->setImageCompressionQuality($newQuality);
					$img->setOption('jp2:quality', $qualityjp2_2);
				}else{
					$img->clear();
					$img->destroy();
					$imageprops="";

					$img="noimageload";
				}
			}
			catch(ImagickException $e) {
				$img->clear();
				$img->destroy();
				$imageprops="";
				$img="noimageload";
			}
		}

        $data="";
        unset($data);
        if(is_array($imageprops)){$imageprops=array();}else{unset($imageprops);}
        $width="";
        unset($width);
        $height="";
        unset($height);
        $newHeight="";
        unset($newHeight);
        $newWidth="";
        unset($newWidth);
        $type="";
        unset($type);
        unset($newQuality);
        $return=$img;

        $img="";
        unset($img);
        return $return;
    }else{
	    if($type != "0"){
	        $im = @( imagecreatefromstring( $data ) ); 
	        unset($data);
	        $x=(int) @imagesx( $im );
	        $y=(int) @imagesy( $im );

	        if(($x == 0)||($y == 0)||($x == "")||($y == "")){
	        @ ( Imagedestroy( $im ) );
		        return "noimageload";
	        }
	           
	        if($x > $y){
		        $crop="um";
	        }else if($x < $y){
		        $crop="ut";
	        }else{
		        $crop="um";
	        }

	        $nx = $x;
	        $ny = $y;
	        
	        if ( $maxwidth && $nx > $maxwidth ) {
		        $ny = intval ( ( $ny * $maxwidth ) / $nx );
		        $nx = $maxwidth;
	        }
	        unset($maxwidth);  
	        if ( $maxheight && $ny > $maxheight && ( ! preg_match( "!^u(t|b|m)!" , $crop ) ) ) {
		        $nx = intval ( ( $nx * $maxheight) / $ny );
		        $ny = $maxheight;
	        } else {
		        if ( preg_match( "!^u(t|b|m)!" , $crop ) && $maxheight && $maxheight > $ny ) {
			        $nx = intval ( ( $x * $maxheight ) / $y );
			        $ny = $maxheight;
		        }
	        }
	        unset($maxheight);
	        unset($x);
	        unset($y);
	        unset($crop);

	        $src_x = 0;
	        $src_y = 0;
	           
	        $new = imagecreatetruecolor( $nx , $ny );

	        imagealphablending($new, false);
	        imagesavealpha($new, true);

	        $cpr = @( imagecopyresampled( $new , $im , 0 , 0 , $src_x , $src_y , $nx , $ny , ImageSX( $im ) , ImageSY( $im ) ) );
	        
	        unset($nx);
	        unset($ny);
	        unset($src_x);
	        unset($src_y);
	        unset($cpr);

            if($newcontenttype == "webp"){
	            if($type == "3"){
                    #png
                    if($qualitywebp == "10"){
                        ob_start();
                        imagewebp( $new , NULL);
		                $img = ob_get_contents();
		                ob_end_clean();	
                    }else{
                        ob_start();
		                imagewebp( $new , NULL, $qualitywebp );
		                $img = ob_get_contents();
		                ob_end_clean();	
                    }
	            }else{
                    #jpg
                    if($qualitywebp == "100"){
                        ob_start();
                        imagewebp( $new , NULL);
		                $img = ob_get_contents();
		                ob_end_clean();	
                    }else{
                        ob_start();
		                imagewebp( $new , NULL, $qualitywebp );
		                $img = ob_get_contents();
		                ob_end_clean();	
                    }
	            }
            }else{
	            if($type == "3"){
		            ob_start();
		            ImagePNG( $new , NULL, $quality );
		            $img = ob_get_contents();
		            ob_end_clean();
	            }else if($type == "1"){
		            ob_start();
		            ImageGIF( $new , NULL, $quality );
		            $img = ob_get_contents();
		            ob_end_clean();
	            }else{
		            ob_start();
		            imagejpeg( $new , NULL, $quality );
		            $img = ob_get_contents();
		            ob_end_clean();
	            }
	        }
	        $type="";
            unset($type);
	        $quality="";
            unset($quality);
	        Imagedestroy( $new );
	        @ ( Imagedestroy( $im ) );	
	        $im="";
            unset($im);
	        $new="";
            unset($new);     
            unset($newcontenttype);
	        return $img;
	    }
    }
    #fine da qui  
}
}

class TopperSystemExecuteFileimage {
public static function runts(){	
if(isset($_SERVER["HTTP_REFERER"])){
$paginaprovenienzatoppersystem=$_SERVER["HTTP_REFERER"];
}else{
$paginaprovenienzatoppersystem="";
}
$paginaprovenienzatoppersystem_controllo=str_replace(array($_SERVER['SERVER_NAME'], "google", "bing", "yahoo", "yandex"),"",$paginaprovenienzatoppersystem);

$pass_get="ok";
$conta_array_request=count($_GET);
if($conta_array_request <= "5")
{
	if(($conta_array_request == "0")||($conta_array_request == "1")){
		$pass_get="no";
	}
	
	if($conta_array_request == "2"){
	    if((isset($_GET["actimgts"]))&&(isset($_GET["src"]))){
			$pass_get="no";
		}
	}	

	if($conta_array_request == "3"){
	    if((isset($_GET["actimgts"]))&&(isset($_GET["src"]))&&(isset($_GET["w"]))){
			#niente
		}else{
			$pass_get="no";
		}
	}

	if($conta_array_request == "4"){
	    if((isset($_GET["src"]))&&(isset($_GET["w"]))&&(isset($_GET["r"]))&&(isset($_GET["actimgts"]))){
			#niente
		}else{
			$pass_get="no";
		}
	}

	if($conta_array_request == "5"){
	    if((isset($_GET["src"]))&&(isset($_GET["w"]))&&(isset($_GET["r"]))&&(isset($_GET["actimgts"]))&&(isset($_GET["t"]))){
			#niente
		}else{
			$pass_get="no";
		}
	}
}else{
	$pass_get="no";
}

if(($paginaprovenienzatoppersystem != "$paginaprovenienzatoppersystem_controllo")&&($pass_get == "ok")){
header('Accept-Ranges: bytes');
header('Age: 452174');
header("Expires: ".gmdate("D, d M Y H:i:s", time() + 31536000)." GMT"); 
header('Cache-Control: max-age=31536000, public');

unset($paginaprovenienzatoppersystem);
unset($paginaprovenienzatoppersystem_controllo);

$pathdirimg=TOPPERSYSTEM_UPLOAD_FILES_NOSQL."/toppersystem/nosql"."/img/";

if(isset($_GET["t"])){
    $val1=(int) $_GET["t"];
    if(($val1 >=40)&&($val1 <= 100)){
        #npt
    }else{
        $val1=76;
    }
}else{
    $val1=76;
}

if(isset($_GET["src"])){
$imagex=sanitize_text_field(urldecode($_GET["src"]));
$image=str_replace(" ","+",$imagex);
}else{
$imagex="";	
$image="";
}
if(isset($_GET["w"])){
$widthmax=(int) $_GET["w"];
}else{
$widthmax=0;
}
if(isset($_GET["r"])){
$newcontenttype=sanitize_text_field($_GET["r"]);
if($newcontenttype == "jp2"){
if(extension_loaded('imagick') || class_exists("Imagick")){

}else{
$newcontenttype="";
}
}
}else{
$newcontenttype="";
}
if($newcontenttype == "webp"){
$imagequality=$val1;
}else{
$imagequality=$val1;
}
$heightmax="0";
$fade="100";
if((trim($imagex) == "")||(trim($widthmax) == "")||(trim($heightmax) == "")||(trim($fade) == "")){
#niente
}else{	
$imagex="";
$immagine="";
$mimetype="";
$image_ok="";
$data="";

$render_image_save_webp="";
$render_image_save_jp2="";
$render_image_save_jpg="";
$render_image_save_png="";
$render_image_save_gif="";
$url_cripted=md5($_SERVER["REQUEST_URI"]);
if($newcontenttype == "webp"){
    if(file_exists($pathdirimg.$url_cripted.".webp")){
        $render_image_save_webp="ok";
    }
}else if($newcontenttype == "jp2"){
    if(file_exists($pathdirimg.$url_cripted.".jp2")){
        $render_image_save_jp2="ok";
    }
}else if(file_exists($pathdirimg.$url_cripted.".jpg")){    
    $render_image_save_jpg="ok";
}else if(file_exists($pathdirimg.$url_cripted.".png")){    
    $render_image_save_png="ok";
}else if(file_exists($pathdirimg.$url_cripted.".gif")){    
    $render_image_save_gif="ok";
}else{

}

unset($url_cripted);
if(($render_image_save_webp == "")&&($render_image_save_jp2 == "")&&($render_image_save_jpg == "")&&($render_image_save_png == "")&&($render_image_save_gif == "")){
if(function_exists('curl_init')) {
   $modcurlts="1"; 
}else{
   $modcurlts="0";
}

for($i=0;$i<=3;$i++){	
	if($image_ok != "ok"){		
		if($i == "0"){
			if(str_replace("+","",$image) == "$image"){
				$image_ok="ok";
			}
		}else if($i == "1"){			
			if(str_replace("+","",$image) != "$image"){
				$image=str_replace("+","%20",$image);				
			}else{
				$image_ok="ok";
			}			
		}else if($i == "2"){			
			if(str_replace("%20","",$image) != "$image"){
				$image=str_replace("%20"," ",$image);				
			}else{
				$image_ok="ok";
			}			
		}else{			
			if(str_replace(" ","",$image) != "$image"){
				$image=str_replace(" ","%2520",$image);				
			}else{
				$image_ok="ok";
			}			
		}		

		if(TopperSystemSetFileimage::img_exists("$image","$modcurlts")){
            if($modcurlts == "0") {
                $data=@file_get_contents("$image", false);
            }else{
                $data=@TopperSystemSetFileimage::file_curlimagets_contents("$image");
            }            
			$mimetype = TopperSystemSetFileimage::getImageMimeType($data);
			if(($mimetype == "png")||($mimetype == "gif")||($mimetype == "jpeg")){
                if(($data != "Page not found")&&($data != "false")&&(trim($data != ""))&&($data != false)&&($data != "false google")&&($newcontenttype == "jp2")){
                    if(($mimetype == "png")||($mimetype == "jpeg")){
                        $imagequality=100; 
                    }else{
                        $newcontenttype="";
                        $imagequality=$val1;        
                    }
                }
				$immagine = TopperSystemSetFileimage::resize ("$fade", "$data", "$widthmax", "$heightmax", "", "$imagequality", "$mimetype", "$newcontenttype");		
				if(($immagine != "noimageload")&&($immagine != "")){
					$image_ok="ok";
				}				
			}
			$data="";
		}
	}
}
unset($image);
unset($heightmax);
unset($fade);
unset($imagequality);
unset($data);
unset($modcurlts);

if(($immagine == "noimageload")||($immagine == "")){
    $mimetype="";
}

if(($newcontenttype == "webp")&&(($mimetype == "png")||($mimetype == "gif")||($mimetype == "jpeg"))){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".webp";
$textfilem_ts=fopen($filename, "w");
fwrite($textfilem_ts,$immagine);
fclose($textfilem_ts);
unset($immagine);
chmod($filename,0444);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");
header("Content-type: image/webp");
readfile($filename);
}else if(($newcontenttype == "jp2")&&(($mimetype == "png")||($mimetype == "jpeg"))){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".jp2";
$textfilem_ts=fopen($filename, "w");
fwrite($textfilem_ts,$immagine);
fclose($textfilem_ts);
chmod($filename,0444);
unset($immagine);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");
header("Content-type: image/jp2");
readfile($filename);	
}else{
if($mimetype == "png"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".png";
$textfilem_ts=fopen($filename, "w");
fwrite($textfilem_ts,$immagine);
fclose($textfilem_ts);
chmod($filename,0444);
unset($immagine);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");
header("Content-type: image/png");
readfile($filename);	
}else if($mimetype == "gif"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".gif";
$textfilem_ts=fopen($filename, "w");
fwrite($textfilem_ts,$immagine);
fclose($textfilem_ts);
chmod($filename,0444);
unset($immagine);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");
header("Content-type: image/gif");
readfile($filename);	
}else if($mimetype == "jpeg"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".jpg";
$textfilem_ts=fopen($filename, "w");
fwrite($textfilem_ts,$immagine);
fclose($textfilem_ts);
chmod($filename,0444);
unset($immagine);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", time())." GMT");
header("Content-type: image/jpeg");
readfile($filename);	
}else{
#niente
unset($immagine);
if(str_replace("\\","",__DIR__) != __DIR__){
    $hu="\image\\";
    $pathdirimage=str_replace("toppersystem\image","toppersystem",__DIR__).$hu;
}else{
    $hu="/image/";
    $pathdirimage=str_replace("toppersystem/image","toppersystem",__DIR__).$hu;
}
header("Content-type: image/png");
readfile($pathdirimage."noimageload.png");
unset($hu);
unset($pathdirimage);
}
}
unset($mimetype);
unset($newcontenttype);
}else{
#render_new
if($render_image_save_webp == "ok"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".webp";
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime($filename))." GMT");
header('Content-Type: image/webp');
header('Content-Length: ' . filesize($filename));
readfile($filename);
}else if($render_image_save_jp2 == "ok"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".jp2";
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime($filename))." GMT");
header('Content-Type: image/jp2');
header('Content-Length: ' . filesize($filename));
readfile($filename);
}else if($render_image_save_jpg == "ok"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".jpg";
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime($filename))." GMT");
header("Content-type: image/jpeg");
header('Content-Length: ' . filesize($filename));
readfile($filename);
}else if($render_image_save_png == "ok"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".png";
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime($filename))." GMT");
header("Content-type: image/png");
header('Content-Length: ' . filesize($filename));
readfile($filename);
}else if($render_image_save_gif == "ok"){
$filename=$pathdirimg.md5($_SERVER["REQUEST_URI"]).".gif";
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime($filename))." GMT");
header("Content-type: image/gif");
header('Content-Length: ' . filesize($filename));
readfile($filename);
}else{

}
}
}
}
}
}
@add_action('init', @TopperSystemExecuteFileimage::runts());
}

}
}
}
?>