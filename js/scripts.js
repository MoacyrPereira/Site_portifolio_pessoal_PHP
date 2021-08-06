

$(function(){
	$('nav.mobile').click(function(){
		//Oque vai acontecer quando clicarmos na nav mobile
		var listaMenu = $('nav.mobile ul');
		//Abrir atraves do fadein
		
		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}

	});
//==========Sroll na pagina============= 
	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll},2000)
	}

	carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');

			$('.container-principal').load('/Projeto_01/pages/'+pagina+'php');
			//alterar para false Quandop resolver o erro
			return true;
		})
	}

})
