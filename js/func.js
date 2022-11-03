$(document).ready(function(){

var result = true;

$('form').submit(function(){ //si on clique sur poster

			if($('#nom').val()=="") // si le nom est vide
			{
				$('#nom').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#nom').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
				 result = false;
				 
			}
			
			if($('#mail').val()=="") // si le mail est vide
			{
				$('#mail').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#mail').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
				 result = false;
				 
			}
			
			if($('#message').val()=="") // si le message est vide
			{
				$('#message').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#message').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
				 result = false;
				 
			}
		
	return result;
	
});	//fin fct

	$('#nom').keyup(function(){ //si en taper un caractere dans le nom
		if($('#nom').val().length<4) // si le nom est vide
			{
				$('#nom').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#nom').next('.error').fadeIn('fast').text('Le nom doit contenir au minumum 4 caracteres'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#nom').css('border-color','#00ff00'); // si non en valider le champ
				$('#nom').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct
	
		$('#mail').keyup(function(){ //si en taper un caractere dans le mail
		if($('#mail').val().length<8 ) // si le nom est vide
			{
				$('#mail').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#mail').next('.error').fadeIn('fast').text('Le E-nail doit contenir au minumum 8 caracteres'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#mail').css('border-color','#00ff00'); // si non en valider le champ
				$('#mail').next('.error').fadeOut(); // en cacher l'error	
			result = true;	
			}
		 return result;
		
		
	}); //fin fct
	
	$('#message').keyup(function(){ //si en taper un caractere dans le message
		if(($('#message').val().length<10)) // si le nom est vide
			{
				$('#message').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#message').next('.error').fadeIn('fast').text('Le E-nail doit contenir au minumum 10 caracteres'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#message').css('border-color','#00ff00'); // si non en valider le champ
				$('#message').next('.error').fadeOut(); // en cacher l'error	
			result = true;	
			}
		 return result;
		
		
	}); //fin fct
	






});

