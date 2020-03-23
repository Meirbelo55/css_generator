<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="image-2"></div>
	</body>
</html>
<?php
function my_merge_image($first_img_path = NULL, $second_img_path = NULL)
		{
	 		if (pathinfo($first_img_path,PATHINFO_EXTENSION) == 'png' AND pathinfo($second_img_path,PATHINFO_EXTENSION) == 'png')
				{
	 			echo "votre format est valide \n";
		    }
					else
						 	{
							echo "votre format n'est pas de format png\n";
						 	}
							 opendir('mes_images');
							$source1 = imagecreatefrompng($first_img_path); // stoker ds une variable imagedefine
							$source2 = imagecreatefrompng($second_img_path);
							$destination = imagecreatetruecolor(imagesx($source1) + imagesx($source2), imagesy($source1));
							//toile pour creer l'image fusion
							imagecopy($destination, $source1, 0, 0, 0, 0, imagesx($source1), imagesy($source1));
							//concatene les 2images
							imagecopy($destination, $source2, imagesx($source1), 0,  0,  0,  imagesx($source2),imagesx($source2));
							imagepng($destination, 'imagedefine.png');
              //sauvegarde l image sur le disque dur
												imagedestroy($destination);
												imagedestroy($source1);
		}
		//apel de fonction
my_merge_image('mes_images/image1.png', 'mes_images/image2.png');

function my_generate_css($array)
{
	$i = 0;
	$openfil = fopen('generator.css','w');
	foreach ($array  as  $value)
	{
		 $getimg = getimagesize($value);
		 $x = $getimg[0];
		 $resultat = substr($value, 13, -4);
		 	    $css =  '.'.$resultat.'
		 		{
		 			background:url(mes_images/sprite.png) -'.$i.'px  -0px ;

					width: '.$getimg[0].'px;
					height : '.$getimg[1].'px;
		 		}'."\n";
				file_put_contents('generator.css',$css,FILE_APPEND);'\n';
				$i += $x;
 	}
}'\n'
;


function my_scandir($dir_path)
{
	 $dir = opendir($dir_path);
	 $come = readdir($dir);
	if (pathinfo($dir_path,PATHINFO_EXTENSION) == 'png') {
		readdir($pathinfo);
	}
}
 $openadir = opendir('./mes_images');
$myarray = [];
function recursive($longeur=1,$largeur)
{
$longeur = 800;
}
$mondossier = opendir('./mes_images');
  while($lire = readdir($mondossier))
  {
    if (pathinfo($lire,PATHINFO_EXTENSION) !== 'png')
       {

       }
        else
           {
						array_push($myarray,'./mes_images/'.$lire);
						$imgcopy = imagecreatefrompng('./mes_images/'.$lire);
						 $lire;

           }
    }
		if ($lire !== '.' && $lire !== '..') {
		 $i = 0;
		 $u = 0;
		 $desti = imagecreatetruecolor(5000,5000);

		 foreach ($myarray  as  $value)
		 {
			  $value;
		  $value."\n";
			$getimg = getimagesize($value);
			$x =$getimg[0];
			$y =$getimg[1];
			 $source = imagecreatefrompng($value);
			$copyimg = 	imagecopy($desti, $source,$i, $u, 0,0,$x,$y);
			$imgpng = 	imagepng($desti,'./mes_images/sprite.png');
			   $i += $x;
		 }

		 my_generate_css($myarray);
  }
