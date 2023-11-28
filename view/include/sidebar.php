<aside class="sidebar fixed flex flex-col justify-between h-screen left-0 p-5 pt-8 pb-3 w-60 bg-zinc-800 select-none">
	
	<!-- <i class="bx bx-chevron-left bx-sm rounded-full absolute -right-3 top-14 pt-0.5 pr-0.5 bg-zinc-300 cursor-pointer"></i> -->
	<div class="inline-flex w-full pl-3 items-center">
		<i class="bx bx-dollar-circle bx-md bg-amber-300 rounded cursor-pointer block float-left mr-4"></i>
		<h1 class="text-zinc-200 origin-left font-medium text-xl">COMPANY</h1>
	</div>

	<nav class="space-y-1 mt-10">
		<div class="gap-2 bg-zinc-300 flex items-center rounded-lg p-2 pl-3 mb-2">
			<i class="bx bx-search mr-2 font-semibold"></i>
			<input class="text-base bg-transparent w-full mr-2 font-semibold text-zinc-800 focus:outline-none" type="search" name="search" placeholder="Search..." autocomplete="off">
		</div>

		<a href="<?php echo HOME_URI.'user/home'; ?>" class="flex items-center gap-4 p-2 pl-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700">
			<i class="bx bx-home"></i>
			Home
		</a>
	</nav>

	<nav class="space-y-1 mt-3 py-3 border-t border-zinc-700 h-full overflow-y-auto">

		<div class="item rounded-lg transition-all duration-700">
			<a class="has-submenu flex items-center justify-between py-2 px-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700 cursor-pointer">
				<div class="flex items-center gap-4">
					<i class="bx bx-folder-open"></i>
					Records
				</div>
				<i class="bx bx-chevron-right"></i>
			</a>
			<ul class="pl-8 mr-4 font-semibold text-zinc-300 hidden transition-all duration-700">
				<a href="<?php echo HOME_URI.'records/employees'; ?>">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Employees</li>
				</a>
				<a href="<?php echo HOME_URI.'records/customers'; ?>">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Customers</li>
				</a>
				<a href="<?php echo HOME_URI.'records/Suppliers'; ?>">
					<li class="pl-3 py-2 rounded-lg hover:bg-zinc-800 cursor-pointer">Suppliers</li>
				</a>
			</ul>
		</div>

		<div class="item rounded-lg transition-all duration-500">
			<a class="has-submenu flex items-center justify-between py-2 px-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700 cursor-pointer">
				<div class="flex items-center gap-4">
					<i class="bx bx-dollar-circle"></i>
					Finances
				</div>
				<i class="bx bx-chevron-right"></i>
			</a>
			<ul class="pl-8 mr-4 font-semibold text-zinc-300 hidden transition-all duration-700">
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Billing</li>
				</a>
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Generate Invoice</li>
				</a>
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">A/P</li>
				</a>
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">A/R</li>
				</a>
			</ul>
		</div>

		<div class="item rounded-lg transition-all duration-500">
			<a class="has-submenu flex items-center justify-between py-2 px-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700 cursor-pointer">
				<div class="flex items-center gap-4">
					<i class="bx bx-bar-chart-alt-2"></i>
					Analytics
				</div>
				<i class="bx bx-chevron-right"></i>
			</a>
			<ul class="pl-8 mr-4 font-semibold text-zinc-300 hidden transition-all duration-700">
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Graphs</li>
				</a>
				<a href="#">
					<li class="pl-3 py-1 rounded-lg hover:bg-zinc-800 cursor-pointer">Reports</li>
				</a>
			</ul>
		</div>

		<a href="" class="flex items-center gap-4 p-2 pl-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700">
			<i class="bx bx-package"></i>
			Storage
		</a>
		<a href="" class="flex items-center gap-4 p-2 pl-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700">
			<i class="bx bx-chat"></i>
			Messages
		</a>
	</nav>
	
	
	<nav class="space-y-1 mt-3 pt-3 border-t border-zinc-700">
		<a href="" class="flex items-center gap-4 p-2 pl-3 rounded-lg font-semibold text-zinc-300 hover:bg-zinc-700">
			<i class="bx bx-user"></i>
			Profile
		</a>
	</nav>
	
</aside>

<script type="text/javascript">

	//Config to open/close submenus
	$('.has-submenu').on('click', function(){
		var button = $(this).parent()
		var submenu = $(this).next()
		var icon = $(this).children('i')

		if(submenu.hasClass('hidden')){
			//Only one submenu can be opened simultaneously
			$('.item').removeClass('pb-3 bg-zinc-700')
			$('ul').addClass('hidden')
			$('.bx-chevron-down').addClass('bx-chevron-right')
			$('.bx-chevron-down').removeClass('bx-chevron-down')

			button.addClass('pb-3 bg-zinc-700')
			submenu.removeClass('hidden')
			icon.removeClass('bx-chevron-right')
			icon.addClass('bx-chevron-down')
		}else{
			button.removeClass('pb-3 bg-zinc-700')
			submenu.addClass('hidden')
			icon.removeClass('bx-chevron-down')
			icon.addClass('bx-chevron-right')
		}
	})

</script>