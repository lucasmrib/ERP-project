<div class="flex justify-start font-semibold pb-2">
    <a href="<?php echo HOME_URI.'records/employees'; ?>" class="flex items-center justify-center bg-zinc-400 hover:bg-zinc-300 w-36 rounded-lg p-1.5 mb-2 ring-1 ring-zinc-500 gap-2">
    	<i class="bx bx-arrow-back"></i>
        Return
    </a>
</div>

<form id="formEmployee" method="POST" class="space-y-4">

	<div class="flex-col items-center bg-zinc-800 p-16 rounded-lg">
		<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">User Credentials</h1>
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-5 space-y-1">
				<label class="font-semibold text-zinc-300">Name</label>
				<input type="text" name="name" class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none" required>
			</div>
			<div class="col-span-3 space-y-1">
				<label class="font-semibold text-zinc-300">Login</label>
				<input type="text" name="login" class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none" required>
			</div>
			<div class="col-span-3 space-y-1">
				<label class="font-semibold text-zinc-300">Temporary Password</label>
				<input type="password" name="password" class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none" required>
			</div>
			<div class="col-span-1 space-y-2">
				<label class="font-semibold text-zinc-300">Status</label>
				<div class="relative w-10 mr-2 select-none">
				    <input type="checkbox" name="status" id="status" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in"
				    onchange="$(this).val(this.checked? '1': '0');">
				    <label for="status" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
				</div>
			</div>

			<div class="col-span-4 space-y-1">
				<label class="font-semibold text-zinc-300">CPF</label>
				<input type="text" name="cpf" class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
			<div class="col-span-4 space-y-1">
				<label class="font-semibold text-zinc-300">E-mail</label>
				<input type="text" name="email" class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
			<div class="col-span-4 space-y-1">
				<label class="font-semibold text-zinc-300">Phone</label>
				<input type="text" name="phone" class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
		</div>
	</div>

	<div class="flex-col items-center bg-zinc-800 p-16 rounded-lg">
		<div class="grid grid-cols-6 gap-6">
			<div class="col-span-2 space-y-2">
				<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">Access</h1>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="access" id="master" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'master': '0');">
					    <label for="master" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Master</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="access" id="adm" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'adm': '0');">
					    <label for="adm" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Administrator</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="access" id="finance" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'finance': '0');">
					    <label for="finance" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Finance</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="access" id="user" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'user': '0');">
					    <label for="user" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">User</label>
				</div>
			</div>
			<!-- <div class="col-span-4 space-y-2">
				<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">Modules</h1>

				<div class="grid grid-cols-3">

					<div class="col-span-1 space-y-1">
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
					</div>
					<div class="col-span-1 space-y-1">
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
					</div>
					<div class="col-span-1 space-y-1">
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
						<div class="inline-flex w-full gap-1">
							<div class="relative w-10 mr-2 select-none">
							    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
							    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
							</div>
							<label class="font-semibold text-zinc-300">Status</label>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<div class="flex font-semibold pt-2">
	    <button class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-full rounded-lg p-1.5 ring-1 ring-indigo-500" name="submit" type="submit">
	        Submit
	    </button>
	</div>

</form>

<script type="text/javascript">
	
//Garantee that the user has only one access
$('#master').on('change', function() {
	if(this.checked) {
		$('#adm').prop('checked', false)
		$('#finance').prop('checked', false)
		$('#user').prop('checked', false)
	}
})

$('#adm').on('change', function() {
	if(this.checked) {
		$('#master').prop('checked', false)
		$('#finance').prop('checked', false)
		$('#user').prop('checked', false)
	}
})

$('#finance').on('change', function() {
	if(this.checked) {
		$('#master').prop('checked', false)
		$('#adm').prop('checked', false)
		$('#user').prop('checked', false)
	}
})

$('#user').on('change', function() {
	if(this.checked) {
		$('#master').prop('checked', false)
		$('#adm').prop('checked', false)
		$('#finance').prop('checked', false)
	}
})

//form submition for the employee creation
$('#formEmployee').on('submit', function() {

	swal_fire_loading()

	$.post(url_home()+'records/create_employee', $(this).serialize(), function(res) {
		if (res.error == 1) {
            Swal.fire({title: res.title, icon: res.icone})
        }else{
        	Swal.fire({title: res.title, icon: res.icone}).then((value) => {
            	window.location.href=url_home()+'records/employees';
            })
        }
	}, 'json')
	return false

})

</script>