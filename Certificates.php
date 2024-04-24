<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8"/>
	<link href="CertStyle.css" rel="stylesheet" type="text/css"/>
	<title>Ryan Hinchcliffe Certificates</title>
</head>
<body>
	<header>
			<a class="tabs" href="index.html#aMBody" id="aboutMe"><img src="Images\Buttons\AboutMe4.png"></img></a>
			<img src="Images\Logo.png" id="homeButton" alt="Ryan Hinchcliffe Logo" onclick="window.location.href = 'index.html'" ></img>
			<a class="tabs" href="index.html#formContents" id="contactMe"><img src="Images\Buttons\Contact5.png"></img></a>
	</header>
	<main class="container">
		<div id="greeting">
			<img src="Images\CertificationsPage.png" alt="Certifications page title"/>
		</div>
		<div id="navPrompt">
			Click the desired certificate to expand it and see the certificate verification link and number
		</div>
		<div id="returnButton">
			<img id="returnButtonImage" onclick="returnCerts()" src="Images\ReturnButton.png" alt="Press this button to reduce return to the Certificate selection screen"></img>
		</div>	
		<div id="certGrid">
			<img onclick="showMore(0)" class="certImage" src="Images\Cert1.PNG" alt="This is my Advanced HTML5 and CSS3 Specialist certificate"></img>
			<img onclick="showMore(1)" class="certImage" src="Images\Cert2.PNG" alt="This is my Internet Business Associate certificate"></img>
			<img onclick="showMore(2)" class="certImage" src="Images\Cert3.PNG" alt="This is my JavaScript Specialist certificate"></img>
			<img onclick="showMore(3)" class="certImage" src="Images\Cert4.PNG" alt="This is my Network Technology Associate certificate"></img>
			<img onclick="showMore(4)" class="certImage" src="Images\Cert5.PNG" alt="This is my User Interface Designer certificate"></img>
		</div>
		<div id="certLink">
		</div>
	</main>
</body>
<script>
	
	var returnButton = document.getElementById('returnButton');
	var certificates = document.getElementsByClassName('certImage');
	var grid = document.getElementById('certGrid');
	var navPrompt = document.getElementById('navPrompt');
	var rBImage = document.getElementById('returnButtonImage');
	
	function showMore(selectedIndex) {
			
		for (i = 0; i < certificates.length; i++) {
			certificates[i].classList.remove('selected');
			certificates[i].classList.remove('hidden');
		}
		
		certificates[selectedIndex].classList.add('selected');
		grid.style.padding = '5%';
		returnButton.style.display = 'block';
		rBImage.style.cursor = 'pointer';
		navPrompt.style.display = 'none';
		certificates[selectedIndex].style.cursor = 'default';
		
		
		for(i = 0; i < certificates.length; i++) {
			if(i !== selectedIndex) {
				certificates[i].classList.add('hidden');
			}
		}
	
		switch(selectedIndex) {
			case 0:
				document.getElementById('certLink').innerHTML = "Certificate link: cp.certmetrics.com/ciwcerts/en/public/verify/credential </br> Verification code: 91822ce1e08a47b2b2027c0b3574d40c</br></br>";
			break;
			case 1:
				document.getElementById('certLink').innerHTML = "Certificate link: cp.certmetrics.com/ciwcerts/en/public/verify/credential </br> Verification code: 985c0ddc972141a98a6baea04beb1bd7</br></br>";
			break;
			case 2:
				document.getElementById('certLink').innerHTML = "Certificate link: cp.certmetrics.com/ciwcerts/en/public/verify/credential </br> Verification code: b5cd3fa15f6240689388d8d91864a6e1</br></br>";
			break;
			case 3: 
				document.getElementById('certLink').innerHTML = "Certificate link: cp.certmetrics.com/ciwcerts/en/public/verify/credential </br> Verification code: ac0ba0504d3345c686727baa140d4b80</br></br>";
			break;
			case 4: 
				document.getElementById('certLink').innerHTML = "Certificate link: cp.certmetrics.com/ciwcerts/en/public/verify/credential </br> Verification code: 40b7ffbf8a2f4dcf8e0c1b1866109349</br></br>";
			break;
			default:
			break;
		}
	}
		
	function returnCerts() {
	
		for (i = 0; i < certificates.length; i++) {
		certificates[i].classList.remove('selected');
		certificates[i].classList.remove('hidden');
		certificates[i].style.cursor = 'pointer';
		}
		
		document.getElementById('certLink').innerHTML = '';
		returnButton.style.display = 'none';
		navPrompt.style.display = 'block';
		}

</script>
</html>