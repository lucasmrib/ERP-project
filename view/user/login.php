<div class="right p-2 w-20"></div>
<div class="h-screen w-full flex flex-col space-y-10 items-center justify-center pb-10">
	<div class="flex flex-col items-center justify-center space-y-4">
		<i class="bx bxs-dollar-circle text-8xl text-indigo-300 font-semibold"></i>
		<h1 class="text-indigo-300 font-bold">COMPANY'S NAME</h1>
	</div>

	<form id="formLogin" method="POST" class="space-y-3 bg-zinc-800 p-20 pb-5 rounded-lg shadow-black/70 shadow-lg">
		<div class="bg-zinc-300 flex items-center rounded-lg p-2 mb-2 hover:shadow-black hover:shadow-lg focus-within:shadow-black focus-within:shadow-lg duration-200">
			<i class="bx bx-user mr-2 font-semibold"></i>
			<input class="text-base bg-transparent w-full mr-2 font-semibold text-zinc-800 focus:outline-none" type="text" name="login" placeholder="Username" autocomplete="off">
		</div>
		<div class="bg-zinc-300 flex items-center rounded-lg p-2 mb-2 hover:shadow-black hover:shadow-lg focus-within:shadow-black focus-within:shadow-lg duration-200">
			<i class="bx bx-lock-alt mr-2 font-semibold"></i>
			<input class="text-base bg-transparent w-full mr-2 font-semibold text-zinc-800 focus:outline-none" type="password" name="password" placeholder="Password" autocomplete="off">
		</div>
		<button type="submit" class="bg-indigo-400 hover:bg-indigo-300 hover:shadow-lg hover:shadow-black duration-200 w-full font-semibold rounded-lg p-2 mb-2">Login</button>
		<div class="pt-14 w-full flex justify-center">
			<a href="" class="text-indigo-300 hover:text-indigo-100">Forgot your password?</a>
		</div>
	</form>
</div>
<div class="left p-2 w-20">
	
</div>

<script type="text/javascript">

$('#formLogin').on('submit', function(){

    swal_fire_loading();

    $.post(url_home()+'access/access', $(this).serialize(), function(res){
        if (res.error == 1) {
            Swal.fire({title: res.title, icon: res.icone})
        }else{
            window.location.href=url_home()+'user/dashboard';
        }
    }, 'json')
    return false
})

</script>