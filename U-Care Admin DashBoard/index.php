<?php include("layouts/header.php") ?>

	<div class="grid grid-cols-12 gap-6">
		<div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">

			<!-- BEGIN: General Report -->
			<div class="col-span-12 mt-8">
				<div class="intro-y flex items-center h-10">
					<h2 class="text-lg font-medium truncate mr-5">
						General Report
					</h2>
				</div>

				<div class="grid grid-cols-12 gap-6 mt-5">
					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">4.510</div>
								<div class="text-base text-gray-600 mt-1">Item Sales</div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">3.521</div>
								<div class="text-base text-gray-600 mt-1">New Orders</div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">2.145</div>
								<div class="text-base text-gray-600 mt-1">Total Products</div>
							</div>
						</div>
					</div>

					<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y text-center">
						<div class="report-box zoom-in">
							<div class="box p-5">
								<div class="flex justify-center">
									<i data-feather="user" class="report-box__icon text-theme-9"></i> 
								</div>
								<div class="text-3xl font-bold leading-8 mt-6">152.000</div>
								<div class="text-base text-gray-600 mt-1">Unique Visitor</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END: General Report -->

		</div>

		<div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
			<div class="xxl:pl-6 grid grid-cols-12 gap-6">
				<!-- BEGIN: Schedules -->

				<div class="col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">

					<div class="intro-x flex items-center h-10">
						<h2 class="text-lg font-medium truncate mr-5 ml-5">
							Schedules
						</h2>
						<a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate flex items-center"> 
							<i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules 
						</a>
					</div>

					<div class="mt-5">
						<div class="intro-x box">
							<div class="p-5">


								<div class="overflow-x-auto"> 
									<table class="table"> 
										<thead> 
											<tr> 
												<th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
												<th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">First Name</th> 
												<th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Last Name</th> 
												<th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Username</th> 
											</tr> 
										</thead>

										<tbody> 
											<tr class="bg-gray-200 dark:bg-dark-1"> 
												<td class="border-b dark:border-dark-5">1</td> 
												<td class="border-b dark:border-dark-5">Angelina</td> 
												<td class="border-b dark:border-dark-5">Jolie</td> 
												<td class="border-b dark:border-dark-5">@angelinajolie</td> 
											</tr> 

											<tr> 
												<td class="border-b dark:border-dark-5">2</td> 
												<td class="border-b dark:border-dark-5">Brad</td> 
												<td class="border-b dark:border-dark-5">Pitt</td> 
												<td class="border-b dark:border-dark-5">@bradpitt</td> 
											</tr> 

											<tr class="bg-gray-200 dark:bg-dark-1"> 
												<td class="border-b dark:border-dark-5">3</td> 
												<td class="border-b dark:border-dark-5">Charlie</td> 
												<td class="border-b dark:border-dark-5">Hunnam</td> 
												<td class="border-b dark:border-dark-5">@charliehunnam</td>
											</tr> 
										</tbody> 
									</table> 
								</div> 



							</div>
							
						</div>
					</div>
				</div>
				<!-- END: Schedules -->
			</div>
		</div>
	</div>

<?php include("layouts/footer.php") ?>