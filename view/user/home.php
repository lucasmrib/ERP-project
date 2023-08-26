<div class="h-screen w-full px-20 py-4">
	<div class="flex justify-between items-center w-full h-12">
		<header class="ml-6">
	    	<h1 class="text-3xl font-semibold tracking-tight text-zinc-200"><?php echo strtoupper($this->parameters[1]); ?></h1>
	    </header>
	    <div class="mx-6 flex items-center gap-1">
	    	<a type="button" class="rounded-full px-2 py-1 hover:bg-zinc-800">
	    		<i class="bx bxs-moon text-2xl text-zinc-200"></i>
	    	</a>
	    	<a type="button" class="rounded-full px-2 py-1 hover:bg-zinc-800">
	    		<i class="bx bxs-bell text-2xl text-zinc-200"></i>
	    	</a>
	    	<a type="button" class="rounded-full px-2 py-1 hover:bg-zinc-800">
	    		<i class="bx bxs-cog text-2xl text-zinc-200"></i>
	    	</a>
	    	<a type="button" href="<?php echo HOME_URI.'access/logoff'; ?>" class="rounded-full px-2 py-1 hover:bg-zinc-800">
	    		<i class="bx bxs-log-out text-2xl text-zinc-200"></i>
	    	</a>
	    </div>
	</div>

	<div class="flex gap-5 items-center px-10 py-6 mt-16">
		<div class="flex flex-auto justify-between bg-zinc-800 rounded-lg p-6">
			<i class="bx bxs-upvote bx-lg text-blue-500"></i>
			<h1 class="text-zinc-200">Balance</h1>
		</div>
		<div class="flex flex-auto justify-between bg-zinc-800 rounded-lg p-6">
			<i class="bx bxs-upvote bx-lg text-blue-500"></i>
			<h1 class="text-zinc-200">Balance</h1>
		</div>
		<div class="flex flex-auto justify-between bg-zinc-800 rounded-lg p-6">
			<i class="bx bxs-upvote bx-lg text-blue-500"></i>
			<h1 class="text-zinc-200">Balance</h1>
		</div>
		<div class="flex flex-auto justify-between bg-zinc-800 rounded-lg p-6">
			<i class="bx bxs-downvote bx-lg text-red-500"></i>
			<h1 class="text-zinc-200">Balance</h1>
		</div>
	</div>

</div>

