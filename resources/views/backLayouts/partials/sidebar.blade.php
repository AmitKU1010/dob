   	@php
         $auth_id=Auth::user()->role_id;

         if($auth_id=='2')
         {
			@endphp
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{ asset('assets/images/faces/male/25.jpg') }}" alt="user-img" class="avatar avatar-lg brround">
								<a href="#!" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>

							<div class="user-info">
								<h2>{{Auth::user()->name}}</h2>
								<span>ADMIN</span>
							</div>
						</div>
					</div>

					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Master Setup</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.catagorylist.index')}}" class="slide-item">Merge All</a>
								</li>

								<li>
									<a href="{{route('admin.departments.index')}}" class="slide-item">Add Department</a>
								</li>

								<li>
									<a href="{{route('admin.categories.create')}}" class="slide-item">Add Category</a>
								</li>

								<li>
									<a href="{{route('admin.subcategories.index')}}" class="slide-item">Add Sub-category</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-sitemap"></i><span class="side-menu__label">MoSeva Branches</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.branches.index')}}" class="slide-item">All Branches</a>
								</li>

								<li>
									<a href="{{route('admin.pins.index')}}" class="slide-item">Add Pin Code</a>
								</li>

								<li>
									<a href="{{route('admin.branches.create')}}" class="slide-item">Add Branch</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-shopping-bag"></i><span class="side-menu__label">Services</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.services.index')}}" class="slide-item">All Services</a>
								</li>

								<li>
									<a href="{{route('admin.services.create')}}" class="slide-item">Add Service</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Managers</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.managers.index')}}" class="slide-item">All Managers</a>
								</li>

								<li>
									<a href="{{route('admin.managers.create')}}" class="slide-item">Add Manager</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-group"></i><span class="side-menu__label">Partners</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.vendors.index')}}" class="slide-item">All Partners</a>
								</li>

								<li>
									<a href="{{route('admin.vendors.create')}}" class="slide-item">Add Partner</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-circle-o"></i><span class="side-menu__label">Customers</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.profiles.index')}}" class="slide-item">All Customers</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-university"></i><span class="side-menu__label">Accounts & Tax</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="#!" class="slide-item">MIC Reports</a>
								</li>

								<li>
									<a href="#!" class="slide-item">Sales Analytic Reports</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-database"></i><span class="side-menu__label">CRM</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<!-- <li>
									<a href="#!" class="slide-item">MIC Reports</a>
								</li>

								<li>
									<a href="#!" class="slide-item">Sales Analytic Reports</a>
								</li> -->
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-clone"></i><span class="side-menu__label">Manage Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="#!" class="slide-item">Price Lists</a>
								</li>
								
								<li>
									<a href="#!" class="slide-item">Offers</a>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
			@php

         } else {

        	@endphp

				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="{{ asset('assets/images/faces/male/25.jpg') }}" alt="user-img" class="avatar avatar-lg brround">
								<a href="#!" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>{{Auth::user()->name}}</h2>
								<span>MANAGER</span>
							</div>
						</div>
					</div>

					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
					</ul>
				</aside>

            @php
         }
    @endphp





