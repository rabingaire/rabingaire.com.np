$('.my-text').typeIt({
     strings: [
	 	"Hello Welcome.   ",
    	"Hey I am Happy to See You.   ",
    	"Life is Beautiful Isn't it?   ",
    	"And so is my CODE.   "
	 ],
	 speed:250,
     breakLines: false,
	 breakWait:3000,
	 loop: true,
	 startDelay:2000,
	 deleteSpeed:200
}).tiPause(3000);


$(document).ready(function() {
	$('#thumbsup').click(function(){
		$.ajax({
			type: 'GET',
			url: 'likeaction.php',
			success:function(dta) {
				$('#display-number').text(dta);
			}
		});
	});
});
