$(function(){
	$window= $(window);
	//SIDEBAR
	recalculateBarHeight();
	
	//PARALLAX EFFECT
	$('section[data-type="background"]').each(function(){ 		//per ogni section che abbia ' data-type="background" '
		var $bgObj= $(this);									//assegna l'oggetto corrente
		$(window).scroll(function(){							//quando l'utente inizia a scrollare..
			var yPos = -($window.scrollTop() / $bgObj.data('speed'));	//determiniamo di quanto abbiamo scrollato e dividiamo per la speed
			var coords = '50% '+ yPos + 'px';						//calcoliamo la nuova posizione finale
			$bgObj.css({backgroundPosition:coords});				//e aggiorniamo la posizione del background
		});
	})
	//NAV MENU
	$('.nav-item').each(function(){
	var dest = $(this).data('target'); 	//ricava la destinazione sottraendo all id del btn 'btn-'
		$(this).click(function() { 					//quando si clicca…
			$('html, body').animate({ 				//animiamo la transizione
   	      scrollTop: $("."+dest).offset().top 		//andiamo alla section 'dest'
  		   }, 2000); 								//in 2000 millisec
		});
	});
$(window).resize(function() {
	  recalculateBarHeight();
	});
});
///HELPER FUNCTIONS
function recalculateBarHeight(){ 				//ricalcola la dimensione della barra superiore
	var minBar = 380; 							//dimensione minima della barra in alto
	var barHeight = $window.height() - $('#bottom-bar').height()+50; // calcoliamo la nuova dimensione della barra
	if (barHeight < minBar){barHeight = minBar}; // se la dimensione calcolata è maggiore della dimensione minima la impostiamo come dimensione
	$('#top-bar').height(barHeight);			//impostiamo la dimensione
	//MARGINS
	
};



//------

$('#invia_form_btn').click(function(e) {
	// check form
	e.preventDefault();
	var error = 0;
	var error_border_color = '#e5332a';
	$('.required').each(function() {
		if ( $(this).val() == '' ) {
			$(this).css('border','3px solid '+error_border_color);
			error ++;
		}else{
			$(this).css('border','none');
			if($('[name=email]').val().indexOf('@') != -1) {
				$('#mail_non_valida').hide();
			}else{
				$('[name=email]').css('border','1px solid '+error_border_color);
				$('#mail_non_valida').show();
				error ++;
			}
		}
	});

	// invio
	if (error == 0) {
		//$('#contatti-form').submit();
		$.ajax({
			url: '/assets/php/mail_sender.php',
			cache: false,
			data:{
				nome: ''+$('[name="nome"]').val()+'',
				cognome: ''+$('[name="cognome"]').val()+'',
				data: ''+$('[name="data"]').val()+'',
				ora: ''+$('[name="ora"]').val()+'',
				persone: ''+$('[name="persone"]').val()+'',
				email: ''+$('[name="email"]').val()+'',
				telefono: ''+$('[name="telefono"]').val()+'',
				richieste: ''+$('[name="richieste"]').val()+''
				},
			type: 'post'
		}).done(function(data) {
			
			console.log(data);
			if( data == 'ok') {
				
				var message = 'Il messaggio è stato inviato con successo <br><em>Your message has been succesfully sent</em>';
				$('#mail-error')
				.removeClass('error')
				.addClass('success')
				.html(message)
				.fadeIn(400);
			} else {
				var message = "Siamo spiacenti, si è verificato un errore. Riprovare, grazie <br><em>We're sorry, an error has occurred, please try again in a moment</em>";
				$('#mail-error')
				.addClass('error')
				.html(message)
				.fadeIn(400);
			}
		});
	} else {
		var message = "Per favore, compila correttamente tutti i campi indicati <br><em>Please fill out all fields correctly</em>";
		$('#mail-error')
		.addClass('error')
		.html(message)
		.fadeIn(400);
	}
	return false		
	//conferma
});