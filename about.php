<?php include "./head.php" ?>


<div class="template about">

	<?php include "./navigation.php" ?>

	<header class="header">
		<a href="frontpage.php" class="frontpage-link">
			<svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path d="M17.885 3.77L16.115 2L6.11499 12L16.115 22L17.885 20.23L9.65499 12L17.885 3.77Z" fill="currentColor"/>
			</svg>
			<span>
				Tilbake til forsiden
			</span>
		</a>
		<div class="container">
			<h1 class="header-title">
				Kort om denne nettsiden
			</h1>
		</div>
	</header>

	<div class="content">
		<div class="container">
			<h2 class="section-subtitle">
				Denne nettsiden benytter følgende kodespråk:
			</h2>
			<p class="text-section">
				HTML, SASS(CSS), PHP og Javascript
			</p>
			<h2 class="section-subtitle">
				Struktur i prosjektmappen:
			</h2>
			<p class="text-section">
				Alt av HTML ligger i root, disse er lagret som php for å kunne benytte php include funksjonen. <br>
				Videre er alt av CSS skrevet med SASS, som er en CSS extention. Denne gjør at man kan enkelere skrive variabler for hva man vil, benytte mixins, skrive nested CSS kode og benytte import funksjonalitet for å importe kode fra andre filer. Fordelen med dette er at vi da kan skille SASS filer, slik at det er enklere å finne frem til koden man ønsker, derav bedre prosjektstruktur. Se gjerne i folder assets/SASS. Der har vi bygget prosjektet med forskjellige SASS filer og alle disse importeres i main.scss. For at dette skal bli til vanlig CSS som nettleseren kan lese, så benyttes en compiler, i dette tilfellet <a href="https://gulpjs.com/" target="_blank">GULP</a>, som compiler alt dette til en CSS fil. Denne ligger her: assets/dist/css/main.css. I filen package.json kan du se hvilke node moduels som er benyttet i dette prosjektet (selve node moduels mappen er ikke med i besvarelsen).
				Det er også greit å merke seg at det benyttes et SASS bibliotek i dette prosjektet. Dette ligger under assets/sass/lib. Dette bilioteket gjør et par ting. Normalize og reset nullstiller alt av padding, margin og andre ting som enkelte html tags har som native. De gjør også standardiseringer slik at mest mulig content er likt i alle nettlesere. Vi har også et bibliotek for flex-box. 

				Grunnen til dette er at man da har en standardisert måte å skrive flexbox på i SASS koden, så slipper man å skrive feil. Se gjerne i filen grid-mixins, der ligger mixin row og mixin col som er brukt i prosjektet. Mixin col er en funksjon som gjør at man enkelt kan implementere kolonne system inni en container. Funksjonen benytter en calc() for max-width, som gjør at den skalerer bra på forskjellige skjermstørrelser, uten for mye kode. Antall kolonner og gutter defineres i filen config.scss.
			</p>

		</div>
	</div>
	
</div>

<?php include "./footer.php" ?>


<script>
	$(function() {


	});

</script>
