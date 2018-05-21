<!-- Main sidebar -->
<div class="sidebar sidebar-main">
	<div class="sidebar-fixed ">
		<div class="sidebar-content">

			<!-- Main navigation -->
			<div class="sidebar-category sidebar-category-visible">
				<div class="category-title h6">
					<ul class="icons-list">
						<li><a href="#" data-action="collapse"></a></li>
					</ul>
				</div>

				<div class="category-content sidebar-user">
					<div class="media">
						<a href="#" class="media-left">
							{{--<img src="/assets/images/image.png" class="img-circle img-sm" alt="">--}}
						</a>
						<div class="media-body">
							<span class="media-heading text-semibold">{{Auth::user()->first_name}}</span>
							<div class="text-size-mini text-muted">
							</div>
						</div>

					</div>
				</div>
				<div class="category-content no-padding">
					<ul class="navigation navigation-main navigation-accordion">

						<!-- Main -->
						<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
						</li>
						<li><a href="{{route('adminSite')}}"><i class="icon-home4"></i>
								<span>Dashboard</span></a></li>

						<li><a href="#"><i class="icon-cog3"></i>
								<span>Manage</span></a>
							<ul>
								<li><a href="#"><i class=" icon-user-tie"></i><span>Admin</span></a>
									<ul>
										<li class="{{Route::is('admin/create') ? 'active' : ''}}">
											<a href="{{route('admin.create')}}"><span>Create New Admin</span></a>
										</li>
										<li class="{{Route::is('admin/index') ? 'active' : ''}}">
											<a href="{{route('admin.index')}}"><span></span>Update
												Admin</a>
										</li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-user"></i><span>Client</span></a>
									<ul>
										<li class
										    ="{{Route::is('user') ? 'active' : ''}}">
											<a href="{{route('user.index')}}"><i></i><span>View Clients Purchases</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#"><i class="icon-database-add"></i> <span>Collections</span></a>
							<ul>
								<li class="{{Route::is('collection/create') ? 'active' : ''}}">
									<a href="{{route('collection.create')}}">New Collection</a>
								</li>
								<li class="{{Route::is('collection/index') ? 'active' : ''}}">
									<a href="{{route('collection.index')}}">Existing Collections</a>
								</li>
								<li class="{{Route::is('product/report') ? 'active' : ''}}">
									<a href="">Collection Reports</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class=" icon-database-menu"></i> <span>Products</span></a>
							<ul>
								<li class="{{Route::is('product/create') ? 'active' : ''}}">
									<a href="{{route('product.create')}}">New Product</a>
								</li>
								<li class="{{Route::is('product/index') ? 'active' : ''}}">
									<a href="{{route('product.index')}}">Existing Products</a>
								</li>
								<li class="{{Route::is('product/report') ? 'active' : ''}}">
									<a href="">Products Reports</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class=" icon-database-edit2"></i> <span>Update</span></a>
							<ul>
								<li class="{{Route::is('collection/index') ? 'active' : ''}}">
									<a href="{{route('collection.index')}}">Existing Collections</a>
								</li>
								<li class="{{Route::is('product/index') ? 'active' : ''}}">
									<a href="{{route('product.index')}}">ExistingProducts</a></li>
							</ul>
						</li>
						<li>
							<a href="#"><i class=" icon-database-remove"></i> <span>Delete</span></a>
							<ul>
								<li class="{{Route::is('collection/index') ? 'active' : ''}}">
									<a href="{{route('collection.index')}}">Collection</a>
								</li>
								<li class="{{Route::is('product/index') ? 'active' : ''}}">
									<a href="{{route('product.index')}}">Product</a>
								</li>
							</ul>
						</li>
						<!-- /main -->

					</ul>
				</div>
			</div>
			<!-- /main navigation -->

		</div>
	</div>
</div>
<!-- /main sidebar -->