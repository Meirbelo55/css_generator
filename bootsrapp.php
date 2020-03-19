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
							//header('content-type: image/png');
							imagepng($destination, 'imagedefine.png');
              //sauvegarde l image sur le disque dur
								 	if (imagesx($source1) > imagesx($source2))
									 	{
									 		//echo 'c bon';
									 	}
										 elseif(imagesx($source1) != imagesx($source2))
										 	{
										 		//echo 'mdrrrr';
							        }
												imagedestroy($destination);
												imagedestroy($source1);
		}
		//apel de fonction
my_merge_image('mes_images/image1.png', 'mes_images/image2.png');

function my_generate_css($name)
{
	$open = opendir($name);
	// $entre = readdir($open);
	$openfil = fopen('generator.css','w');
	while($jelis = readdir($open))
	{
		//echo $jelis;
		if ($jelis !== '.' && $jelis !== '..')
		{
		  $rest = substr($jelis, 0, -4);
		    $css =  '.'.$rest.'
			{
			width: 40px;
			height: 50px;
		}';

			file_put_contents('generator.css',$css,FILE_APPEND);'\n';
	 }
	'\n';
//$css = 'left : 50px';
}
}
my_generate_css('mes_images');

function my_scandir($dir_path)
{
	 $dir = opendir($dir_path);
	// echo $dir;
	 $come = readdir($dir);
	 //echo $dir;
	if (pathinfo($dir_path,PATHINFO_EXTENSION) == 'png') {
		readdir($pathinfo);
	//	echo pathinfo($dir_path);
	}
}
//my_scandir('mes_images');
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
          //echo 'alert!!!!!! le sprite peut se faire q"avec les extensions png . <br>';
       }
        else
           {
						array_push($myarray,'./mes_images/'.$lire);
						$imgcopy = imagecreatefrompng('./mes_images/'.$lire);
						echo $lire;

           }
    }
		if ($lire !== '.' && $lire !== '..') {
		 //$array =  array($lire . '<br>');
		 //echo $lire.'<br>';
		 //var_dump($imgcopy).'<br>';
		 //$dest = imagecreatetruecolor(imagesx($imgcopy),imagesy($imgcopy));
		 //imagecopy($dest,$imgcopy,0,0,0,0,128,128);

		 // echo $x;
		 // echo $y;
		 //var_dump($myarray);
		 $i = 0;
		 $u = 0;
		 $desti = imagecreatetruecolor(2000,2000);

		 foreach ($myarray  as  $value)
		 {
		  $value."\n";
		 // echo $i++;
			//echo recursive();
			//$width++;
			$getimg = getimagesize($value);
			$x =$getimg[0];
			$y =$getimg[1];
			 $source = imagecreatefrompng($value);
		 //	echo $source;
		 //	echo $desti.'<br>';
			$copyimg = 	imagecopy($desti, $source,$i, $u, 0,0,$x,$y);
		 // var_dump($copyimg);
			$imgpng = 	imagepng($desti,'./mes_images/sprite.png');
			 //var_dump($imgpng);
			//$dest1 =	imagedestroy($desti);//
			//var_dump($dest1);
			 //$dest2 = imagedestroy($source);//
		 //	var_dump($dest2);
			 $i += $x;
			 var_dump($x);
			 var_dump($y);
			 //echo $u += $y;
			   //$x."\n";
		 }

  }
