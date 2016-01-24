@extends('template')
@section('extraBodyClass','mobile-container places-listing')
@section('content')
 <h1>PLACES</h1>
 <div class="filters">
			<span class="btn filter" data-filter="all">All</span>
			<span class="btn filter" data-filter=".food"><i class="fa fa-cutlery"></i> Food</span>
			<span class="btn filter" data-filter=".drinks"><i class="fa fa-beer"></i> Drinks</span>
			<span class="btn filter" data-filter=".dance"><i class="glyphicon glyphicon-heart-empty"></i> Dance</span>
			<span class="btn filter" data-filter=".art"><i class="glyphicon glyphicon-music"></i> Art</span>
			<span class="btn filter" data-filter=".landmarks"><i class="fa fa-bank"></i> Landmarks</span>
			<span class="btn filter" data-filter=".dejour"><i class="glyphicon glyphicon-gift"></i> Dejour</span>
		</div>
		<div id="items">
			<div class="container-fluid mix  art">
				<h4><i class="glyphicon glyphicon-music"></i> Gallery Citronne <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/cashMoney.jpg"></div>
						<div class="col-xs-6">
							<ul>
								<li>Open: Tuesdays - Saturdays</li>
								<li>Operating Hours: 10:00-20:00</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							A set of simple samples that show how to get started with the ArcGIS API for JavaScript and PhoneGap/Cordova. These samples provide best practices for using PhoneGap and Cordova across different device operating systems and within the PhoneGap/Cordova application lifecycle.
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mix art">
				<h4><i class="glyphicon glyphicon-music"></i> Θέατρο οδού Κυκλάδων - Λευτέρης Βογιατζής <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/suarez bites.jpg"></div>
						<div class="col-xs-6">
							<ul>
								<li>Open: Tuesdays - Saturdays</li>
								<li>Operating Hours: 10:00-20:00</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							A set of simple samples that show how to get started with the ArcGIS API for JavaScript and PhoneGap/Cordova. These samples provide best practices for using PhoneGap and Cordova across different device operating systems and within the PhoneGap/Cordova application lifecycle.
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mix dance">
				<h4><i class="glyphicon glyphicon-heart-empty"></i> Rebound <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/watermellon_guy.jpg"></div>
						<div class="col-xs-6">
							<ul>
								<li>Open: Tuesdays - Saturdays</li>
								<li>Operating Hours: 10:00-20:00</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							A set of simple samples that show how to get started with the ArcGIS API for JavaScript and PhoneGap/Cordova. These samples provide best practices for using PhoneGap and Cordova across different device operating systems and within the PhoneGap/Cordova application lifecycle.
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mix  food">
				<h4><i class="fa fa-cutlery"></i> Rigani <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/watermellon_guy.jpg"></div>
						<div class="col-xs-6">
							<ul>
								<li>Open: Tuesdays - Saturdays</li>
								<li>Operating Hours: 10:00-20:00</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							A set of simple samples that show how to get started with the ArcGIS API for JavaScript and PhoneGap/Cordova. These samples provide best practices for using PhoneGap and Cordova across different device operating systems and within the PhoneGap/Cordova application lifecycle.
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mix landmarks">
				<h4><i class="fa fa-bank"></i> Kotzia bust <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/cashMoney.jpg"></div>
						<div class="col-xs-6">
							<ul>
								<li>Open: Tuesdays - Saturdays</li>
								<li>Operating Hours: 10:00-20:00</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							A set of simple samples that show how to get started with the ArcGIS API for JavaScript and PhoneGap/Cordova. These samples provide best practices for using PhoneGap and Cordova across different device operating systems and within the PhoneGap/Cordova application lifecycle.
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid mix landmarks">
				<span class="btn btn-xs close"> X </span>
				<h4><i class="fa fa-bank"></i> Dog Sculpture <span class="toggle"><i class="glyphicon glyphicon-search"></i></span></h4>
				<div class="content">
					<div class="row">
						<div class="col-xs-6"><img src="img/dog_statue.gif" loop="infinite"></div>
						<div class="col-xs-6">
							<ul>
								<li>Location: central square</li>
								<li>Made in 1900</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							Είχε τοποθετήθηκε στο τελευταίο παρτέρι της Φωκίωνος Νέγρη το 1940 χωρίς κάποια ιδιαίτερη αφορμή και έκτοτε έχει αλλάξει σημείο έκθεσης τουλάχιστον τρεις φορές. Ο γλύπτης το δημιούργησε έπειτα από ανάθεση του Δήμου Αθηναίων.
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('extrascripts')
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#items').mixItUp({
			callbacks: {
				onMixStart: function(state, futureState){
					$('.mix.toggled').removeClass('toggled');
				}
			}
		});
		$('.mix > h4').click(function(){
			$(this).parent().toggleClass('toggled')
		})
		$('.mix .close').click(function(){
			$(this).parent().removeClass('toggled')
		})
	});
</script>
@endsection