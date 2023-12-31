<div class="h-fit ml-60 w-full pl-16 pr-20 pt-4 pb-20">
	<div class="flex justify-between items-center w-full h-12 mb-16">
		<header class="ml-4">
	    	<h1 class="text-3xl font-semibold tracking-tight text-zinc-200"><?php echo strtoupper(str_replace('_', ' ', $this->parameters[1])); ?></h1>
	    </header>
	    <div class="flex items-center gap-2">
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