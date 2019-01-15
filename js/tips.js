$('.tips-boodschappen').on('click', () =>{
	$('.boodschappenlijstje').slideToggle();
	$('.tips-boodschappen').toggleClass('tips-active');
	$('.tips-boodschappen').toggleClass('roundborder');
	$('.tips-boodschappen').toggleClass('shadow');
	$('.boodschappen-button').toggleClass('tips-button-active');
	});

$('.tips-bewaren').on('click', () =>{
	$('.bewaren').slideToggle();
	$('.tips-bewaren').toggleClass('tips-active');
	$('.tips-bewaren').toggleClass('roundborder');
	$('.tips-bewaren').toggleClass('shadow');
	$('.bewaren-button').toggleClass('tips-button-active');
	});

$('.tips-koken').on('click', () =>{
	$('.koken').slideToggle();
	$('.tips-koken').toggleClass('tips-active');
	$('.tips-koken').toggleClass('roundborder');
	$('.tips-koken').toggleClass('shadow');
	$('.koken-button').toggleClass('tips-button-active');
	});