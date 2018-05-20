<!DOCTYPE html>
<html>
<head>
	<title>iterating over arrays</title>
</head>
<body>
	<p>
		<?php 
			$name = array('rushdi','sunny','rajiv');
			$number = array('math'=>98,
							'physics'=>90,
							'chemistry'=>70);  // array(ingredients = > invclude)

			$length = count($name);

			for($i = 0 ; $i <$length ; $i++){
				echo $number[i]. '<br>';
			}

			echo '<br/><br/> I have got  in : <br/>'

			//loop through the associative arrays using  for each

			foreach ($number as $subject=>$score) {
				# code...
				echo $score . ' ' .$subject . '<br>';
			}

			echo '<br/><br/>';
		?>
	</p>
</body>
</html>