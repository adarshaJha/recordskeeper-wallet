<?php

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>RecordsKeeper</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="theme-color" content="#212739">
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=1, target-densitydpi=device-dpi">
		 <!-- Bootstrap core CSS -->
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<meta name="author" content="http://psdhtml.me">
		<link rel="stylesheet" media="screen" href="styles/screen.css">

		
		<link rel="stylesheet" media="print" href="styles/print.css">
		<link rel="icon" type="image/x-icon" href="images/fav.png">
		<link rel="stylesheet" media="screen" href="styles/wallet.css">
		<!-- link for table to css cdn here  -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/css/tableexport.css">
		
		<meta property="og:title" content="">
		<meta property="og:type" content="website">
		<meta property="og:description" content=".">
		<meta property="og:site_name" content="">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		
		<script type='application/ld+json'>
			{
				"@context": "http://schema.org/",
				"@type": "Organization",
				"url": "",
				"name": "Vault0x",
				"legalName": "Vault0x",
				"description": "",
				"logo": "",
				"image": "",
				"author": "psdHTML.me",
				"contactPoint": {
					"@type": "ContactPoint",
					"contactType": "Customer service",
					"telephone": ""
				},
				"address": {
					"@type": "PostalAddress",
					"streetAddress": "",
					"addressLocality": "",
					"addressRegion": "",
					"postalCode": "",
					"addressCountry": ""
				}
			}
		</script>
		<style type="text/css">
			html {
  height: 100%;
}
body {
  min-height: 100% !important;
  display: grid !important;
  grid-template-rows: 1fr auto !important;
}
footer {
  grid-row-start: 2 !important;
  grid-row-end: 3 !important;
}
#signersend{
	display: block !important  !important; 
}
#content {
    position: relative;
    z-index: 2;
    min-height: 68vh;
}
		</style>
	</head>
	<body>
		<div class="se-pre-con"></div>
		<div id="root">
			<header id="top">
				<p id="logo">
					<a href="./">
					<img src="images/logo.svg">
					</a>
				</p>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul>
						<!-- <li class="sub"><a accesskey="1" href="./">Tosh-2 <span>(Switch Device)</span></a> <em>(1)</em>
						<ul>
							<li><a href="./">Toshendra</a></li>
							<li class="active"><a href="./">Tosh-2</a></li>
							<li class="a"><a href="./">Add Device</a></li>
						</ul> -->
						<div id="togglecont">
							<input class="tgl tgl-light" id="cb1" type="checkbox"/>
    					    <label class="tgl-btn" for="cb1"></label>
						</div>
						<span >
							<label id="togglecontlabel">Main Network</label>
						</span>
						 
					
				</ul>
				
			</nav>
		</header>
		
	
		<article id="content">
			<div class="container">
			  
			   <div class="row">
			   		
			   		<div class="col-md-1 col-sm-12">
			   			<p class="text-right walletpngcont"></p>
			   				
				   		<p class="text-right">
				   			
				   		</p>
			   		</div>
			   </div>
			  
			</div>
			<div >
				
				<div class="signerdiv">
					
				<label class="signlabel">
					Private Key : 
				</label>
				<input type="password" name="signerprivkey" id="signerprivkey" value="" placeholder="Enter your private key">
				 <button  class="createwalletBtn margintop30" id="signersend">Sign Transaction</button>
				<div class="signtransUrl signurlCont">
				
				<a href="" class="asignhref">
					
				<p class="signershareUrl">Click here and Share this url to other signers to complete the transaction</p>	
					</p>
				</a>
			</div>
			</div>

	
		</div>
</article>


<footer id="footer">
<ul>
		<li>&copy; RecordsKeeper @ 2016-2018. All rights reserved</li>
		<li><a href="./" target="_blank">Terms</a></li>
		<li><a href="./" target="_blank">Privacy Policy</a></li>
		<li><a href="http://explorer.recordskeeper.co/" target="_blank">Mainnet Explorer</a></li>
		<li><a href="http://test-explorer.recordskeeper.co/" target="_blank">Testnet Explorer</a></li>
	
		<li><a href="http://faucet.recordskeeper.co/" target="_blank">Faucet</a></li>
		<li><a href="http://stats.recordskeeper.co/" target="_blank">Blockchain Statistics</a></li>
		<li><a href="http://miner.recordskeeper.co/" target="_blank">Miner Statistics</a></li>
		<li><a href="http://airdrop.recordskeeper.co/" target="_blank">Airdrop</a></li>
		<li><a href="http://demo.recordskeeper.co/" target="_blank">Demo</a></li>
	    <li><a href="https://docs.recordskeeper.co/" target="_blank">Docs</a></li>


</ul>
</footer>
</div>

<!-- all the script here to make the page load faster -->



<script src = "javascript/jquery.js"></script>
<script src="javascript/scripts.js"></script>
<script src="javascript/custom.js"></script>
<script src="javascript/mobile.js"></script>

<script src="javascript/table2CSV.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="javascript/bitcore-lib/bitcore-lib.min.js"></script>
<script src="javascript/bitcore-mnemonic/bitcore-mnemonic.min.js"></script>
<script src="javascript/bitcore-explorers/bitcore-explorers.min.js"></script>
<script src="javascript/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="javascript/wallet.js"></script>
<script src="javascript/signer.js"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/js/tableexport.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	
});







</script>
</body>
</html>
