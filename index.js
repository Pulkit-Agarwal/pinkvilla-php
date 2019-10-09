var cards = document.getElementsByClassName('card');
	
if( cards ) {
	for(var i=0; i<cards.length; i++){
		imagesLoaded( cards[i], function(card) {
			var c = card.elements[0];
			setImage(c);
		});
	}
}

function setImage(card){
  
	var grid = document.getElementsByClassName('inner-wrapper')[0];

	var gap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
	var height = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'))
	var span = Math.ceil((card.querySelector('.details').getBoundingClientRect().height+gap)/(height+gap));
	card.style.gridRowEnd = 'span '+span;
}