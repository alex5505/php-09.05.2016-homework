<!DOCTYPE html>
<html>
<head>
	<title>Homework for 16.06.2016</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<!-- Hotjar Tracking Code for http://biodit.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:232774,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

	
</head>
<body>
<header>
	<h1><center>Homework for 16.06.2016</center></h1>
</header>
<main>
<?php
	echo "<div class='container'>";
	echo "<table>
		<tr>
		<th colspan='4'>Students table</th>
		</tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mobile Number</th>
		<th>University</th>" ;
	$students = array(
			array("Vladimir", "Trifonov", "0886674688", "unknown"),
			array("Mihaela", "Etropolska", "0885665446", "unknown"),
			array("Anton", "Melqkov", "0896225356", "unknown"),
			array("Spas", "Bozhanov", "0886652826", "unknown"),
			array("Veselinka", "Blajeva", "0875228325", "unknown"),
			array("Nikolai", "Ivanov", "0887328827", "unknown"),
			array("Tihomir", "Dimitrov", "0884667775", "unknown"),
			array("Alex", "Sofroniev", "0887453583", "Homeschool"),
			array("Petia", "Spasova", "0882728757", "unknown"),
			array("Amir", "Plugarov", "0878257528", "unknown"),
			array("Tihomir", "Todorov", "0878635344", "unknown"),
			array("Petar", "Stoyanov", "0898437837", "unknown"),
		);
	foreach ($students as $value) {
		echo "<tr>";
		foreach ($value as $in_value) {
			echo "<td>";
			echo "<div class='table'>";
			echo $in_value;
			echo "</div>";
			echo "</td>";
		}
		echo "</tr>";
		
	}
	echo "</table></div>";

	$dictionary = array(
			"How are you?" => "Como estas?",
			"What's your name?" => "Como te llamas?",
			"My name is ..." => "Me llamo ...",
			"I'm from ..." => "Soy de ...",
			"Good morning" => "Buenos dias ",
			"Good evening" => "Buenas noches",
			"Good luck" => "Buena suerte",
			"Have a nice day" => "Buen dia",
			"I don't understand" => "No entiendo",
			"Please speak more slowly" => "Porfavor hable mas despacio",
			"Do you speak English?" => "Habla Ingles?",
			"Excuse me" => "Perdon",
			"Thank you" => "Gracias",
			"Help!" => "Ayuda !"
		);
	echo "<div class='container'><table>
		<tr>
		<th colspan='2'>Basic phrases in Spanish</th>
		</tr>
		<th>Phrase in English</th>
		<th>Phrase in Spanish</th>";

	foreach ($dictionary as $k => $v) {
		echo "<tr><td><div class='table'>" . $k . "</div></td><td><div class='table'>" . $v . "</div></td></tr>";
	}

	echo "</table></div>";

	//print_r($dictionary);
?>

</main>
</body>
</html> 