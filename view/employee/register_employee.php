<div class="flex justify-start font-semibold pb-2">
    <a href="<?php echo HOME_URI.'records/employees'; ?>" class="flex items-center justify-center bg-zinc-500 hover:bg-zinc-400 w-36 rounded-lg p-1.5 mb-2 ml-4 ring-1 ring-zinc-600 gap-2">
    	<i class="bx bx-arrow-back"></i>
        Return
    </a>
</div>

<form id="formEmployee" method="POST" class="space-y-4 pb-12">

	<div class="flex-col items-center bg-zinc-800 p-10 rounded-lg">
		<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">User Credentials</h1>
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-5 space-y-1">
				<label class="font-semibold text-zinc-300">Name</label>
				<input type="text" name="name" class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
			<div class="col-span-3 space-y-1">
				<label class="font-semibold text-zinc-300">Login</label>
				<input type="text" name="cpf" class="bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
			<div class="col-span-3 space-y-1">
				<label class="font-semibold text-zinc-300">Temporary Password</label>
				<input type="password" name="password" class="text-md bg-zinc-300 rounded-lg w-full px-2 py-1 font-semibold text-zinc-800 focus:outline-none">
			</div>
			<div class="col-span-1 space-y-2">
				<label class="font-semibold text-zinc-300">Status</label>
				<div class="relative w-10 mr-2 select-none">
				    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
				    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
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

	<div class="flex-col items-center bg-zinc-800 p-10 rounded-lg">
		<div class="grid grid-cols-6 gap-6">
			<div class="col-span-2 space-y-2">
				<h1 class="font-bold text-xl text-zinc-300 pl-6 mb-6">Access</h1>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="master" id="master" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
					    <label for="master" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Master</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="adm" id="adm" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
					    <label for="adm" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Administrator</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="finance" id="finance" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
					    <label for="finance" class="toggle-label block overflow-hidden h-6 rounded-full bg-zinc-300 cursor-pointer"></label>
					</div>
					<label class="font-semibold text-zinc-300">Finance</label>
				</div>
				<div class="inline-flex w-full gap-1">
					<div class="relative w-10 mr-2 select-none">
					    <input type="checkbox" name="user" id="user" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition duration-900 ease-in">
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
	</div>

	<div class="flex justify-end font-semibold pt-2">
		<a class="flex items-center justify-center bg-zinc-500 hover:bg-zinc-400 w-36 rounded-lg p-1.5 mb-2 mr-4 ring-1 ring-zinc-600 cursor-pointer">
	        Return
	    </a>
	    <button class="flex items-center justify-center bg-indigo-400 hover:bg-indigo-300 w-36 rounded-lg p-1.5 mb-2 mr-4 ring-1 ring-indigo-500" name="submit" type="">
	        Submit
	    </button>
	</div>

</form>

<script type="text/javascript">
	


</script>