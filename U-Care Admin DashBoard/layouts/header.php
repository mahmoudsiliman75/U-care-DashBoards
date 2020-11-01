<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/icon.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>UCare Admin DashBoard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />
    <link rel="stylesheet" href="dist/css/custom-style.css" />
    <link rel="stylesheet" href="dist/css/app-ar.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="app">

	<!-- BEGIN: Mobile Menu -->
	<div class="mobile-menu md:hidden">
			<div class="mobile-menu-bar">
					<a href="" class="flex mr-auto">
							<img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
					</a>
					<a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
			</div>
			<ul class="border-t border-theme-24 py-5 hidden">
					<li>
							<a href="index.html" class="menu menu--active">
									<div class="menu__icon"> <i data-feather="home"></i> </div>
									<div class="menu__title"> Dashboard </div>
							</a>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="box"></i> </div>
									<div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="index.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Side Menu </div>
											</a>
									</li>
									<li>
											<a href="simple-menu-light-dashboard.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Simple Menu </div>
											</a>
									</li>
									<li>
											<a href="top-menu-light-dashboard.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Top Menu </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="side-menu-light-inbox.html" class="menu">
									<div class="menu__icon"> <i data-feather="inbox"></i> </div>
									<div class="menu__title"> Inbox </div>
							</a>
					</li>
					<li>
							<a href="side-menu-light-file-manager.html" class="menu">
									<div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
									<div class="menu__title"> File Manager </div>
							</a>
					</li>
					<li>
							<a href="side-menu-light-point-of-sale.html" class="menu">
									<div class="menu__icon"> <i data-feather="credit-card"></i> </div>
									<div class="menu__title"> Point of Sale </div>
							</a>
					</li>
					<li>
							<a href="side-menu-light-chat.html" class="menu">
									<div class="menu__icon"> <i data-feather="message-square"></i> </div>
									<div class="menu__title"> Chat </div>
							</a>
					</li>
					<li>
							<a href="side-menu-light-post.html" class="menu">
									<div class="menu__icon"> <i data-feather="file-text"></i> </div>
									<div class="menu__title"> Post </div>
							</a>
					</li>
					<li class="menu__devider my-6"></li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="edit"></i> </div>
									<div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="side-menu-light-crud-data-list.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Data List </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-crud-form.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Form </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="users"></i> </div>
									<div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="side-menu-light-users-layout-1.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Layout 1 </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-users-layout-2.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Layout 2 </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-users-layout-3.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Layout 3 </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="trello"></i> </div>
									<div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="side-menu-light-profile-overview-1.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Overview 1 </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-profile-overview-2.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Overview 2 </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-profile-overview-3.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Overview 3 </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="layout"></i> </div>
									<div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-wizard-layout-1.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 1</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-wizard-layout-2.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 2</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-wizard-layout-3.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 3</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-blog-layout-1.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 1</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-blog-layout-2.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 2</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-blog-layout-3.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 3</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-pricing-layout-1.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 1</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-pricing-layout-2.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 2</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-invoice-layout-1.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 1</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-invoice-layout-2.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 2</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-faq-layout-1.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 1</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-faq-layout-2.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 2</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-faq-layout-3.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Layout 3</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="login-light-login.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Login </div>
											</a>
									</li>
									<li>
											<a href="login-light-register.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Register </div>
											</a>
									</li>
									<li>
											<a href="main-light-error-page.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Error Page </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-update-profile.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Update profile </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-change-password.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Change Password </div>
											</a>
									</li>
							</ul>
					</li>
					<li class="menu__devider my-6"></li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="inbox"></i> </div>
									<div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="javascript:;" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Grid <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
											</a>
											<ul class="">
													<li>
															<a href="side-menu-light-regular-table.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Regular Table</div>
															</a>
													</li>
													<li>
															<a href="side-menu-light-tabulator.html" class="menu">
																	<div class="menu__icon"> <i data-feather="zap"></i> </div>
																	<div class="menu__title">Tabulator</div>
															</a>
													</li>
											</ul>
									</li>
									<li>
											<a href="side-menu-light-accordion.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Accordion </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-button.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Button </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-modal.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Modal </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-alert.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Alert </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-progress-bar.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Progress Bar </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-tooltip.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Tooltip </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-dropdown.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Dropdown </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-toast.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Toast </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-typography.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Typography </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-icon.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Icon </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-loading-icon.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Loading Icon </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="sidebar"></i> </div>
									<div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="side-menu-light-regular-form.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Regular Form </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-datepicker.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Datepicker </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-tail-select.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Tail Select </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-file-upload.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> File Upload </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-wysiwyg-editor.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Wysiwyg Editor </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-validation.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Validation </div>
											</a>
									</li>
							</ul>
					</li>
					<li>
							<a href="javascript:;" class="menu">
									<div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
									<div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
							</a>
							<ul class="">
									<li>
											<a href="side-menu-light-chart.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Chart </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-slider.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Slider </div>
											</a>
									</li>
									<li>
											<a href="side-menu-light-image-zoom.html" class="menu">
													<div class="menu__icon"> <i data-feather="activity"></i> </div>
													<div class="menu__title"> Image Zoom </div>
											</a>
									</li>
							</ul>
					</li>
			</ul>
	</div>
	<!-- END: Mobile Menu -->

	<div class="flex">
	<!-- BEGIN: Side Menu -->
	<nav class="side-nav">
		<a href="index.php" class="intro-x flex items-center pl-5 pt-4">
			<img alt="Midone Tailwind HTML Admin Template" class="w-16" src="dist/images/icon.png">
			<span class="hidden xl:block text-white text-lg ml-3"> U<span class="font-medium">Care</span> </span>
		</a>

		<div class="side-nav__devider my-6"></div>

		<ul>
			<li>
				<a href="index.php" class="side-menu side-menu--active">
						<div class="side-menu__icon"> <i class="ml-3" data-feather="home"></i> </div>
						<div class="side-menu__title"> Home </div>
				</a>
			</li>

			<li>
				<a href="inbox.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="inbox"></i> </div>
					<div class="side-menu__title"> Inbox </div>
				</a>
			</li>

			<li>
				<a href="edit-profile.php" class="side-menu">
					<div class="side-menu__icon"> <i class="ml-3" data-feather="settings"></i> </div>
					<div class="side-menu__title"> Edit Profile </div>
				</a>
			</li>

				<li>
						<a href="side-menu-light-point-of-sale.html" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
								<div class="side-menu__title"> Point of Sale </div>
						</a>
				</li>
				<li>
						<a href="side-menu-light-chat.html" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
								<div class="side-menu__title"> Chat </div>
						</a>
				</li>
				<li>
						<a href="side-menu-light-post.html" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
								<div class="side-menu__title"> Post </div>
						</a>
				</li>
				<li class="side-nav__devider my-6"></li>
				<li>
						<a href="javascript:;" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="edit"></i> </div>
								<div class="side-menu__title"> Crud <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
						</a>
						<ul class="">
								<li>
										<a href="side-menu-light-crud-data-list.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Data List </div>
										</a>
								</li>
								<li>
										<a href="side-menu-light-crud-form.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Form </div>
										</a>
								</li>
						</ul>
				</li>
				<li>
						<a href="javascript:;" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="users"></i> </div>
								<div class="side-menu__title"> Users <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
						</a>
						<ul class="">
								<li>
										<a href="side-menu-light-users-layout-1.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Layout 1 </div>
										</a>
								</li>
								<li>
										<a href="side-menu-light-users-layout-2.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Layout 2 </div>
										</a>
								</li>
								<li>
										<a href="side-menu-light-users-layout-3.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Layout 3 </div>
										</a>
								</li>
						</ul>
				</li>

				<li>
						<a href="javascript:;" class="side-menu">
								<div class="side-menu__icon"> <i data-feather="layout"></i> </div>
								<div class="side-menu__title"> Pages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
						</a>
						<ul class="">
								<li>
										<a href="javascript:;" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Wizards <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
										</a>
										<ul class="">
												<li>
														<a href="side-menu-light-wizard-layout-1.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 1</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-wizard-layout-2.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 2</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-wizard-layout-3.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 3</div>
														</a>
												</li>
										</ul>
								</li>
								<li>
										<a href="javascript:;" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Blog <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
										</a>
										<ul class="">
												<li>
														<a href="side-menu-light-blog-layout-1.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 1</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-blog-layout-2.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 2</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-blog-layout-3.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 3</div>
														</a>
												</li>
										</ul>
								</li>
								<li>
										<a href="javascript:;" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Pricing <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
										</a>
										<ul class="">
												<li>
														<a href="side-menu-light-pricing-layout-1.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 1</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-pricing-layout-2.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 2</div>
														</a>
												</li>
										</ul>
								</li>
								<li>
										<a href="javascript:;" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Invoice <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
										</a>
										<ul class="">
												<li>
														<a href="side-menu-light-invoice-layout-1.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 1</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-invoice-layout-2.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 2</div>
														</a>
												</li>
										</ul>
								</li>
								<li>
										<a href="javascript:;" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> FAQ <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
										</a>
										<ul class="">
												<li>
														<a href="side-menu-light-faq-layout-1.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 1</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-faq-layout-2.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 2</div>
														</a>
												</li>
												<li>
														<a href="side-menu-light-faq-layout-3.html" class="side-menu">
																<div class="side-menu__icon"> <i data-feather="zap"></i> </div>
																<div class="side-menu__title">Layout 3</div>
														</a>
												</li>
										</ul>
								</li>
								<li>
										<a href="login-light-login.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Login </div>
										</a>
								</li>
								<li>
										<a href="login-light-register.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Register </div>
										</a>
								</li>
								<li>
										<a href="main-light-error-page.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Error Page </div>
										</a>
								</li>
								<li>
										<a href="side-menu-light-update-profile.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Update profile </div>
										</a>
								</li>
								<li>
										<a href="side-menu-light-change-password.html" class="side-menu">
												<div class="side-menu__icon"> <i data-feather="activity"></i> </div>
												<div class="side-menu__title"> Change Password </div>
										</a>
								</li>
						</ul>
				</li>
				<li class="side-nav__devider my-6"></li>

		</ul>
	</nav>
	<!-- END: Side Menu -->

	<!-- BEGIN: Content -->
	<div class="content">
	<!-- BEGIN: Top Bar -->
	<div class="top-bar">

        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
        <!-- END: Breadcrumb -->

        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search hidden sm:block">
                <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
                <i data-feather="search" class="search__icon dark:text-gray-300"></i> 
            </div>
            <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
        </div>
        <!-- END: Search -->

        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown relative mr-auto  ml-2 sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
            <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center ">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a> 
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->

        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8 relative">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
            </div>
            <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                        <div class="font-medium">Angelina Jolie</div>
                        <div class="text-xs text-theme-41 dark:text-gray-600">Software Engineer</div>
                    </div>
                    <div class="p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="user" class="w-4 h-4 mr-2 ml-2"></i> Profile 
                        </a>

                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                            <i data-feather="lock" class="w-4 h-4 mr-2 ml-2"></i> Reset Password 
                        </a>

                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                            <i data-feather="help-circle" class="w-4 h-4 mr-2 ml-2"></i> Help 
                        </a>
                    </div>
                    <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                            <i data-feather="power" class="w-4 h-4 mr-2 ml-2"></i> Logout 
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <!-- END: Top Bar -->