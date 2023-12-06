<div class="flex justify-start font-semibold pb-2">
    <a href="<?php echo HOME_URI.'records/employees'; ?>" class="flex items-center justify-center bg-zinc-400 hover:bg-zinc-300 w-36 rounded-lg p-1.5 mb-2 ring-1 ring-zinc-500 gap-2">
    	<i class="bx bx-arrow-back"></i>
        Return
    </a>
</div>

<div  class="space-y-6">
	<form id="formCredentials" method="POST">
		<input class="hidden" type="text" name="uid_user" value="<?php echo $employee['uid_user']; ?>"/>

		<div class="flex-col items-center bg-zinc-800 p-16 rounded-lg">
			<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">User Credentials</h1>
			<div class="grid grid-cols-12 gap-6">
				<div class="col-span-7 space-y-1">
					<label class="font-semibold text-zinc-300">Name</label>
					<input type="text" name="name" value="<?php echo $employee['name']; ?>"
					class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none" required>
				</div>
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">Login</label>
					<input type="text" name="login" value="<?php echo $employee['login']; ?>"
					class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none" required>
				</div>
				<div class="col-span-1 space-y-2">
					<label class="font-semibold text-zinc-300">Status</label>
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="status" id="status" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in"
					    onchange="$(this).val(this.checked? '1': '0');"
					    <?php echo $employee['status'] ? 'checked' : '' ?>>
					    <label for="status" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
				</div>

				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">CPF</label>
					<input type="text" name="cpf" value="<?php echo $employee['cpf']; ?>"
					class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
				</div>
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">E-mail</label>
					<input type="text" name="email" value="<?php echo $employee['email']; ?>"
					class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
				</div>
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">Phone</label>
					<input type="text" name="phone" value="<?php echo $employee['phone']; ?>"
					class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
				</div>
			</div>
			<div class="flex font-semibold pt-10">
			    <button class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-full rounded-lg p-1.5 ring-1 ring-indigo-500" name="submit" type="submit">
			        Update Credentials
			    </button>
			</div>
		</div>
	</form>

	<form id="formAccess" method="POST">
		<input class="hidden" type="text" name="uid_user" value="<?php echo $employee['uid_user']; ?>"/>

		<div class="flex-col items-center bg-zinc-800 p-16 rounded-lg">
			<div class="grid grid-cols-6 gap-6">
				<div class="col-span-2 space-y-2">
					<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">Access</h1>
					<div class="inline-flex w-full gap-1">
						<div class="relative w-10 mr-2 select-none">
						    <input type="checkbox" name="access" id="master" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'master': '0');"
						    <?php echo $employee['access'] == 'master' ? 'checked' : '' ?>>
						    <label for="master" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
						</div>
						<label class="font-semibold text-zinc-300">Master</label>
					</div>
					<div class="inline-flex w-full gap-1">
						<div class="relative w-10 mr-2 select-none">
						    <input type="checkbox" name="access" id="adm" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'adm': '0');"
						    <?php echo $employee['access'] == 'adm' ? 'checked' : '' ?>>
						    <label for="adm" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
						</div>
						<label class="font-semibold text-zinc-300">Administrator</label>
					</div>
					<div class="inline-flex w-full gap-1">
						<div class="relative w-10 mr-2 select-none">
						    <input type="checkbox" name="access" id="finance" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'finance': '0');"
						    <?php echo $employee['access'] == 'finance' ? 'checked' : '' ?>>
						    <label for="finance" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
						</div>
						<label class="font-semibold text-zinc-300">Finance</label>
					</div>
					<div class="inline-flex w-full gap-1">
						<div class="relative w-10 mr-2 select-none">
						    <input type="checkbox" name="access" id="user" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in" onchange="$(this).val(this.checked? 'user': '0');"
						    <?php echo $employee['access'] == 'user' ? 'checked' : '' ?>>
						    <label for="user" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
						</div>
						<label class="font-semibold text-zinc-300">User</label>
					</div>
				</div>
				<div class="col-span-4 space-y-2">
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
				</div>
			</div>
			<div class="flex font-semibold pt-10">
			    <button class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-full rounded-lg p-1.5 ring-1 ring-indigo-500" name="submit" type="submit">
			        Update Accesses
			    </button>
			</div>
		</div>
	</form>

	<form id="formPassword" method="POST">
		<input class="hidden" type="text" name="uid_user" value="<?php echo $employee['uid_user']; ?>"/>

		<div class="flex-col items-center bg-zinc-800 p-16 rounded-lg">
			<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">Password Change</h1>
			<div class="grid grid-cols-12 gap-6">
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">Old Password</label>
					<div class="gap-2 bg-zinc-300 flex items-center rounded-lg p-1 px-3">
						<input class="text-base bg-transparent w-full font-semibold text-zinc-800 focus:outline-none" type="password" name="old_password" id="old_password" autocomplete="off">
						<i class="bx bx-show font-semibold cursor-pointer"></i>
					</div>
				</div>
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">Type new password</label>
					<div class="gap-2 bg-zinc-300 flex items-center rounded-lg p-1 px-3">
						<input class="text-base bg-transparent w-full font-semibold text-zinc-800 focus:outline-none" type="password" name="new_password" id="new_password" autocomplete="off">
						<i class="bx bx-show font-semibold cursor-pointer"></i>
					</div>
				</div>
				<div class="col-span-4 space-y-1">
					<label class="font-semibold text-zinc-300">Confirm new password</label>
					<div class="gap-2 bg-zinc-300 flex items-center rounded-lg p-1 px-3">
						<input class="text-base bg-transparent w-full font-semibold text-zinc-800 focus:outline-none" type="password" name="password_confirmation" id="password_confirmation" autocomplete="off">
						<i class="bx bx-show font-semibold cursor-pointer"></i>
					</div>
				</div>
			</div>
			<div class="flex font-semibold pt-10">
			    <button class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-full rounded-lg p-1.5 ring-1 ring-indigo-500" name="submit" type="submit">
			        Submit Password
			    </button>
			</div>
		</div>
	</form>
</div>

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
$('#formCredentials').on('submit', function() {

	swal_fire_loading()

	$.post(url_home()+'records/update_credentials', $(this).serialize(), function(res) {
        Swal.fire({title: res.title, icon: res.icone})
	}, 'json')
	return false

})

$('#formAccess').on('submit', function() {

	swal_fire_loading()

	$.post(url_home()+'records/update_access', $(this).serialize(), function(res) {
        Swal.fire({title: res.title, icon: res.icone})
	}, 'json')
	return false

})

$('#formPassword').on('submit', function() {

	swal_fire_loading()

	$.post(url_home()+'records/update_password', $(this).serialize(), function(res) {
		$('#old_password').val()
		$('#new_password').val()
		$('#password_confirmation').val()
        Swal.fire({title: res.title, icon: res.icone})
	}, 'json')
	return false

})

</script>