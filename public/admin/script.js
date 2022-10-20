console.log('response: 200')

/* just popup  */
const click_exit = document.querySelector('.p-click').onclick = render_modal
const click_close = document.querySelector('.no').onclick = close_modal
const click_tp = document.querySelector('.yes').onclick = exit

function render_modal() {
	document.querySelector('.wp-popup').style.display = 'flex'	
}

function close_modal() {
	document.querySelector('.wp-popup').style.display = 'none';
}



function exit() {
	window.location.href = "/kils4";
}
/*and popup*/