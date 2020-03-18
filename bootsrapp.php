<?php
function my_merge_image($first_img_path = NULL, $second_img_path = NULL)
 //verifie l extension
		{
	if (pathinfo($first_img_path,PATHINFO_EXTENSION) == 'png' AND pathinfo($second_img_path,PATHINFO_EXTENSION) == 'png') {
	 	echo "votre format est valide \n";
		}
	else
	 	{
		echo "votre format n'est pas de format png\n";
	 	}
    opendir('mes_images');
$source1 = imagecreatefrompng($first_img_path); // stoker ds une variable imagedefine
$source2 = imagecreatefrompng($second_img_path);
//echo  'et en 2eme je suis .$source2. numero2';
$destination = imagecreatetruecolor(imagesx($source1) + imagesx($source2), imagesy($source1));
//echo 'je suis la destination . $destination';
//toile pour creer l'image fusion
imagecopy($destination, $source1, 0, 0, 0, 0, imagesx($source1), imagesy($source1));
//concatene les 2images
imagecopy($destination, $source2, imagesx($source1), 0,  0,  0,  imagesx($source2),imagesx($source2));
//header('content-type: image/png');
imagepng($destination, 'mes_images/imagedefine.png');
//sauvegarde l image sur le disque dur
	 	if (imagesx($source1) > imagesx($source2))
	 	{
	 		//echo 'c bon';
	 	}
	 	elseif(imagesx($source1) != imagesx($source2))
	 	{
	 		//echo 'mdrrrr';
	 	}
	 	//tant quil ya des photo je recupere leur taille puis je les places 20 px de longeur plus loin que la precedente et 0 px de hauteur qd jarrive a 0px a droite de l'image je place mon image a 20 px de hauteur par rapport a la hauteur de l'image au dessus
//echo imagesx($source1) ."\n";
//echo imagesx($source2) ."\n";
//echo imagesy($source1) ."\n";
//echo imagesy($source2);
imagedestroy($destination);//
imagedestroy($source1);//
		}
my_merge_image('mes_images/image1.png', 'mes_images/image2.png');

function my_generate_css($name)
{
$css = '#'.$name.'
	{
	width: 40px;
	height: 50px;
	}
	#moto
	{
   background-image: url(mes_images/imagedefine.png);
   background-position: 45px 0px;
	}
#foot
	{
    width: 128px;
    height: 128px;
    background-position: -45px -5px;
	}';

//	$css = 'left : 50px';
file_put_contents('generator.css', $css, FILE_APPEND);
}
my_generate_css("nb");
function my_scandir($dir_path)
{
	opendir($dir_path);
	if (pathinfo($dir_path,PATHINFO_EXTENSION) == 'png') {
		readdir($pathinfo);
		echo pathinfo($dir_path);
	}
}
 $openadir = opendir('mes_images');
 //var_dump($openadir);
 //$read = readdir($openadir);
 // foreach ($openadir as $value) {
 // 	$read = readdir($openadir);
	// echo $read;
 // }
   // echo $read;
$myarray = [];
$height = 700;
$width = 800;
function recursive()
{

}
$mondossier = opendir('./mes_images');
  while($lire = readdir($mondossier))
  {
    if (pathinfo($lire,PATHINFO_EXTENSION) !== 'png')
       {
          //echo 'alert!!!!!! le sprite peut se faire q"avec les extensions png . <br>';

       }
        else
           {
						  array_push($myarray,'./mes_images/'.$lire);
						 if ($lire !== '.' && $lire !== '..') {
							 //$array =  array($lire . '<br>');
							 //echo $lire.'<br>';
							 $imgcopy = imagecreatefrompng('./mes_images/'.$lire);
							 //var_dump($imgcopy).'<br>';
							 //$dest = imagecreatetruecolor(imagesx($imgcopy),imagesy($imgcopy));
							 //imagecopy($dest,$imgcopy,0,0,0,0,128,128);
							 $x = imagesx($imgcopy);
							 $y = imagesy($imgcopy);
							 // echo $x;
							 // echo $y;
							 //var_dump($myarray);
							 $i = 0;
							 foreach ($myarray  as  $value) {
							 //	echo $value."<br>";
							 // echo $i++;
								//echo recursive();
								//$width++;
								 $source = imagecreatefrompng($value);
							 //	echo $source;
								 $desti = imagecreatetruecolor(700,800);
							 //	echo $desti.'<br>';
								$copyimg = 	imagecopy($desti, $source,0, 0, 0, 0,$width,$height);
							 // var_dump($copyimg);
								$imgpng = 	imagepng($desti,'./mes_images/sprite.png');
								 //var_dump($imgpng);
								$dest1 =	imagedestroy($desti);//
								//var_dump($dest1);
								 $dest2 = imagedestroy($source);//
							 //	var_dump($dest2);
							 }
      }
    }
  }
