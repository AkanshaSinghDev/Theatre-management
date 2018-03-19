slide=['slide1.png','slide2.png','slide3.png','slide4.png','slide5.png','slide6.png'];
pos=0;
var programmingSkills = [
    {
      value: 0,
      label: 'Sale',
      color: '#4dcc95'
    },
    {
      value: 100,
      label: 'Investment',
      color: '#ffd073'
    }
];
$(document).ready(function(){
	setInterval(function() {
		pos=(pos+1)%6;
		slides=$('#slide-wrap div');
		$(slides).animate({'opacity':0},500, function(){
			for (var i = 0; i < slides.length; i++)
			$(slides[i]).css('background-image','url("images/'+slide[(pos+i)%6]+'")');
			$(slides).css('opacity',1);
		})		
	},3500);
	$('form #open').click(function(){
		if($('#user').trim().val().match(/\W/))
			$('.info').text('Invalid username');
	});
	$('#exp').click(function() {
		if($('#exp strong').html()=='-'){
			$('#exp span').text('view');
			$('#exp strong').text('+');
		}
		else{
			$('#exp span').text('hide');
			$('#exp strong').text('-');
		}
		$('#expand').toggle('fast');
	});
	execute();
});