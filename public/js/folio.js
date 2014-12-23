$(document).ready(function(){

	// Clic sur un élément du portfolio
	$('.pentry').click(function(){
		var id = $(this).attr('id');
		$.ajax({
			url : "/project/" + id,
			method : "GET",
			success : function(data){
				console.log(data);
				createProjectHTML(data);
			}
		});
	});

	// Créé le contenu HTML à afficher dans la div #showcase
	function createProjectHTML(data){
		var imageList = "";
		$.each(data.images, function(key, val){
			imageList += "<li><img src='img/projectsImages/" + data.images[key].src + "' alt='" + data.images[key].alt + "'/><div class='orbit-caption'>" + data.images[key].caption + "</div></li>";
		});
		$('#showcase').empty();
		$('#showcase').append('<div class="close-drawer"><a href="#" id="close"><i class="fa fa-times-circle-o"></i></a></div>');
		$('#showcase').append('<h3>' + data.title + '</h3>');
		$('#showcase').append('<h4>' + data.subtitle+ '</h4>');
		$('#showcase').append("<ul class='slider' data-orbit>" + imageList + "</ul>");
		$('#showcase').append("<div class='row'><div class='desc-project'>" + data.desc);

		if(data.link != ""){
			$('#showcase').append("<p class='center'><a href='" + data.link + "'target='_blank'>Voir le projet</a></p></div></div>");
		}else{
			$('#showcase').append("<p class='center'>Ce projet n'a pas de lien.</p></div></div>");
		}

		// Fermer #showcase lors du clic sur la croix
		$('#close').click(function(){
			projects();
		});

		// Raffraîchir le carousel après l'ajout en AJAX
		$(document).foundation({orbit: {variable_height : true}});
		showCase();
	}

	// Afficher le projet choisi
	function showCase(){
		$('#projects').fadeOut(function(){
			$('#showcase').fadeIn();
		});
	}

	// Afficher la liste des projets
	function projects(){
		$('#showcase').fadeOut(function(){
			$('#projects').fadeIn();
		});
	}
});