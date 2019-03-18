<!DOCTYPE HTML>
<html>

<?php
	include 'head.php';
?>
	
	
	<body onLoad="setCurrentMonth()">
	

	
	<?php include("header.php"); ?>
	
	
	<table id="tableau">
	
	<tr id="table">
		
		

		
		
	
	
	<td id="table">
			<section id="slideshow">
			
			<div class="container">
			
				<div class="c_slider"></div>
				
				<div class="slider">
				
						<a href=".html"><figure>
							<img src="image/bibli.png"width="640"height="310" />
							<figcaption></figcaption>
						</figure></a>
						
						<a href=".html"><figure>
							<img src="image/image5.JPG"width="640"height="310" />
							<figcaption></figcaption>
						</figure></a>
						
						<a href=".html"><figure>
							<img src="image/image3.JPG"width="640"height="310" />
							<figcaption></figcaption>
						</figure></a>
						
						<a href=".html"><figure>
							<img src="image/image1.JPG"width="640"height="310" />
							<figcaption></figcaption>
						</figure></a>
						
						
				</div>
				
			</div>
			</section>
			
			<section>
			
			
			
				<article>
				<h2 id="h2">15/12/2016 Le site de la musique en ligne bientot remis à neuf!</h2>
				<p>La musique a existé dans toutes les sociétés humaines, depuis la Préhistoire.</p>
				</article>
				
				<article>
				<h3>19/11/2016 Nouvel arrivage</h3>
				<p><br/>
				-...</p>
				</article>
				
			</section>
			

	</td>
	
	<td id="info">
	
		
		<script type="text/javascript">

			var todaydate=new Date()
			var curmonth=todaydate.getMonth()+1 //get current month (1-12)
			var curyear=todaydate.getFullYear() //get current year
			
			document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
		</script>
		
		<section>
			<article>
			<img src="image/vh.png"width="180"height="200" />
			<p>La musique est un art et une activité culturelle consistant à combiner sons et silences au cours du temps.
				Les ingrédients principaux sont le rythme (façon de combiner les sons dans le temps), la hauteur (combinaison dans les fréquences),
				les nuances et le timbre. Elle est aujourd'hui considérée comme une forme de poésie moderne.</p>
			</article>
			
			<article>
			<img src="image/dt.png"width="180"height="200" />
			<p>Venez découvrir les musiques du Monde
				Les musiques celtes seront à l'honneur mais vous pourrez aussi découvrir des ensembles originaux.
				Retrouvez les musiciens tout au long du festival, lors d’animations en ville et sur la place du Festival (guinguette, bar’n’bal, Grande Scène…)
				DC are directly responsible for the mess we are in. So why should we continue listening to them?

			It’s time to bring America back to its rightful owners—the American people.</p>
			</article>
		</section>
			
			
			
				
		
	</td>
	
	
	
	
	
	</tr>
	
	</table>
	</body>	
		
	<?php
		include 'Footer.html';
	?>
	
		
</html>