$(document).ready(function(){

var result = true;

$('form').submit(function(){ //si on clique sur poster

 if($('#nom').val()=="") // si le nom est vide
	{
		$('#nom').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#nom').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}
	
	
	
	if($('#prenom').val()=="") // si le nom est vide
	{
		$('#prenom').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#prenom').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}
	
	
	
	if($('#email').val()=="") // si le nom est vide
	{
		$('#email').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#email').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}
	
	
	
	
	if($('#tel').val()=="") // si le nom est vide
	{
		$('#tel').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#tel').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}

if($('#cin').val()=="") // si le nom est vide
	{
		$('#cin').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#cin').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}


if($('#date').val()=="") // si le nom est vide
	{
		$('#date').css('border-color','#ff0000'); // modifier le couleur de formulailre
		$('#date').next('.error').fadeIn('fast').text('Champ obligatoir'); //afficher le msg d'erroe
		 result = false;
		 
	}
	
return result;	
});
return result;		
});


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


$('#prenom').keyup(function(){ //si en taper un caractere dans le nom
		if($('#prenom').val().length<4) // si le nom est vide
			{
				$('#prenom').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#prenom').next('.error').fadeIn('fast').text('Le prenom doit contenir au minumum 4 caracteres'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#prenom').css('border-color','#00ff00'); // si non en valider le champ
				$('#prenom').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct


$('#email').keyup(function(){ //si en taper un caractere dans le nom
		if($('#email').val().length<8) // si le nom est vide
			{
				$('#email').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#email').next('.error').fadeIn('fast').text('Le E-mail doit contenir @ et . a 8 caractere'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#email').css('border-color','#00ff00'); // si non en valider le champ
				$('#email').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct



$('#tel').keyup(function(){ //si en taper un caractere dans le nom
		if($('#tel').val().length<8) // si le nom est vide
			{
				$('#tel').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#tel').next('.error').fadeIn('fast').text('Le Telephone doit contenir au exactement 8 chifre'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#tel').css('border-color','#00ff00'); // si non en valider le champ
				$('#tel').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct


$('#cin').keyup(function(){ //si en taper un caractere dans le nom
		if($('#cin').val().length<8) // si le nom est vide
			{
				$('#cin').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#cin').next('.error').fadeIn('fast').text('Le nurero de CIN doit contenir au exactement 8 caracteres'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#cin').css('border-color','#00ff00'); // si non en valider le champ
				$('#cin').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct


$('#date').keyup(function(){ //si en taper un caractere dans le nom
		if($('#date').val().length<4) // si le nom est vide
			{
				$('#date').css('border-color','#ff0000'); // modifier le couleur de formulailre
				$('#date').next('.error').fadeIn('fast').text('La date est obligatoire'); //afficher le msg d'erroe
				 result = false;
				 
			}else
			{
				$('#date').css('border-color','#00ff00'); // si non en valider le champ
				$('#date').next('.error').fadeOut(); // en cacher l'error
				result = true;	
			}
		 return result;
		
	}); //fin fct






