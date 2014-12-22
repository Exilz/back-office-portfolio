	function createProject(selectedProject){
		var imagesList = [];
		for(key in selectedProject.images){
			imagesList.push("<li><img src='" + selectedProject.images[key].src + "' alt='" + selectedProject.images[key].alt + "'/><div class='orbit-caption'>"+selectedProject.images[key].caption + "</div></li>");
		}

        var res = "<div class='close-drawer'><a href='#' id='close'><i class='fa fa-times-circle-o'></i></a></div><h3>" + selectedProject.title + "</h3><h4>" + selectedProject.subtitle + "</h4><ul class='slider' data-orbit>" + imagesList + "</ul><div class='row'><div class='desc-project'>"+ selectedProject.desc;
        
        if(selectedProject.link != "")
            res += "<p class='center'><a href='" + selectedProject.link + "'target='_blank'>Voir le projet</a></p></div></div>";
        else
            res += "<p class='center'>Ce projet n'a pas de lien.</p></div></div>";
        
		return res;
	}

$(document).ready(function(){




	jQuery.getJSON("js/projects.json", function(data){
		var thumbnails = [];
        for(var i = data.nb_items -1 ; i > 0; i--){
            thumbnails.push("<li><a class='pentry' href='#' title='" + data[i].title + "' id='" + i + "'></a><img src='"+ data[i].logo +"' alt='"+ i + "'/></li>");
        }
//		$.each(data, function(key, val){
//			thumbnails.push("<li><a class='pentry' href='#' title='" + val.title + "' id='" + key + "'></a><img src='"+ val.logo +"' alt='"+ key + "'/></li>");
//		});
        
		$('#projects').prepend(thumbnails);

		$('.pentry').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			$('#showcase').prepend(createProject(data[id]));
			$('#projects').fadeOut(function(){
				$(document).foundation({orbit: {variable_height : true}});
				$('#showcase').fadeIn();
			});
			$('.close-drawer').click(function(){
				$('#showcase').fadeOut(function(){
					$('#showcase').empty();
					$('#projects').fadeIn();
				});
			});
		});

	});





});