<?php
function my_merge_image($first_img_path = NULL, $second_img_path = NULL)
		{
	if (pathinfo($first_img_path,PATHINFO_EXTENSION) == 'png' AND pathinfo($second_img_path,PATHINFO_EXTENSION) == 'png') {
	 	echo "votre format est valide \n";
		}
	else
	 	{
		echo "votre format n'est pas de format png\n";
	 	}
$source1 = imagecreatefrompng($first_img_path); // stoker ds une variable imagedefine
$source2 = imagecreatefrompng($second_img_path);
$destination = imagecreatetruecolor(imagesx($source1) + imagesx($source2), imagesy($source1));
//toile pour creer l'image fusion
imagecopy($destination, $source1, 0, 0, 0, 0, imagesx($source1), imagesy($source1));
//concatene les 2images
imagecopy($destination, $source2, imagesx($source1), 0,  0,  0,  imagesx($source2),imagesx($source2));
//header('content-type: image/png');
imagepng($destination, 'mes_images/');
//sauvegarde l image sur le disque dur
	 	if (imagesx($source1) > imagesx($source2))
	 	{
	 		echo 'c bon';
	 	}
	 	elseif(imagesx($source1) != imagesx($source2))
	 	{
	 		echo 'mdrrrr';
	 	}
	 //tant quil ya des photo je recupere leur taille puis je les places 20 px de longeur plus loin que la precedente et 0 px de hauteur qd jarrive a 0px a droite de l'image je place mon image a 20 px de hauteur par rapport a la hauteur de l'image au dessus
echo imagesx($source1) ."\n";
echo imagesx($source2) ."\n";
echo imagesy($source1) ."\n";
echo imagesy($source2);
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

	//$css = left : 50px;
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
