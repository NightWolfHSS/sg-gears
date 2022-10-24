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

/*
* get status | popup
*/
// no status
if (window.location.hash == '') {
	document.querySelector('.box-spawn-log').innerHTML = ``;
}
// success
if (window.location.hash == '#success') {
	document.querySelector('.box-spawn-log').innerHTML = `
 		<div class="spawn_logi_green">
 			Успех!
 		</div>
 	`;
 	setTimeout(set_success_poppup, 3000);
}
// error
if (window.location.hash == '#error') {
	document.querySelector('.box-spawn-log').innerHTML = `
 		<div class="spawn_logi_red">
 			Ошибка!
 		</div>
 	`;
 	setTimeout(set_success_poppup, 3000);
}

/*
* hide status
*/
function set_success_poppup() {
	document.querySelector('.box-spawn-log').innerHTML = '';
}