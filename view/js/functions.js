url_home = () => window.location.protocol+"//"+window.location.hostname+"/"
function url() {
	var url = document.URL; //pega URL do navegador
	return url;
}

function url_id() {
	var get_url = url();
	var url_id = get_url.substring(get_url.lastIndexOf('/') + 1); //replace porem mantem o ID

	return url_id;
}

function swal_fire_carregando(){
    Swal.fire({title: 'Aguarde...',imageUrl: url_home()+'/view/assets/img/loading-gif-transparent.gif',imageWidth: 80, imageHeight: 80, showConfirmButton: false , allowOutsideClick: false});
}