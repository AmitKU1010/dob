@extends('backLayouts.adminlayout')

    @section('title')
        Add Partner | MoSeva Admin
    @endsection

    @section('content')

		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Partners</h4>
	 				<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Patner</li>
					</ol>
				</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

				<div class="row ">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class=" ">
								<ul class="nav nav-pills">
									<li class="nav-item m-2">
										<a class="nav-link btn btn-light" href="{{route('admin.vendors.index')}}">All Partners</a>
									</li>
			 						<li class="nav-item m-2">
										<a class="nav-link btn btn-primary" href="{{route('admin.vendors.create')}}">Add Partner</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="card mt-4">
							<div class="card-header">
								Create New Partner
							</div>
							<div class="card-body">
								<div class="container">
									<div class="p-5 border">
										<h4 class="mb-4 font-weight-bold">Personal Information</h4>
										 <form method="post" action="{{url('/')}}/admin/vendors/store" enctype="multiple/form-data">
										 	{{ csrf_field() }}

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Partner Name</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="name" class="form-control" id="managerNmae"  placeholder="Enter Name">

														<input type="hidden" name="role_id" value="3">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="gender">Gender</label>
													</div>
													<div class="col-md-9">
														<select class="form-control" name="gender">
															<option selected>Select Gender</option>
															<option value="male">Male</option>
															<option value="female">Female</option>
															<option value="others">Others</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Date Of Birth</label>
													</div>
													<div class="col-md-9">
														<input type="date" name="dob" class="form-control">
														<span class="form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group">
							 					<div class="row">
													<div class="col-md-3">
														<label class="form-label">Profile Image</label>
													</div>
													<div class="col-md-9">
														<input type="file" class="form-control" name="profile_image">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Qualification</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="qualification" class="form-control" id="managerNmae"  placeholder="Enter Qualification">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Id Proof</label>
													</div>
													<div class="col-md-9">
														<input type="file" class="form-control" name="id_proof" multiple>
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Official Information</h4>
											<div class="form-group">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Date Of Joining</label>
													</div>
													<div class="col-md-9">
														<input type="date" name="doj" class="form-control">
														<span class="form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Department</label>
													</div>
													<div class="col-md-9">
														<select name="department_name_user[]" class="form-control select2" multiple>
															<option>Choose</option>
						 							@if(count($Department) > 0)
                                                    @foreach($Department as $Departments)
																<option value="{{$Departments->id}}">{{$Departments->department_name}}</option>
											      	@endforeach
                                                    @endif
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Priority</label>
													</div>
													<div class="col-md-9">
														<select class="form-control" name="priority">
															<option selected>Select Priority</option>
															<option value="Royale">Royale</option>
															<option value="Royale">Normal</option>
														</select>
													</div>
												</div>
											</div>
 
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Strength</label>
													</div>
													<div class="col-md-9">
														<select class="form-control" name="strength">
															<option selected>Select Strength</option>
															<option value="Single">Single</option>
															<option value="Team">Team</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Work Area</label>
													</div>
													<div class="col-md-9">
														<select name="branch[]" class="form-control select2" data-placeholder="Choose Browser" multiple>
															<option>Choose</option>
						 							@if(count($Branch) > 0)
                                                    @foreach($Branch as $Branchs)
				 												<option value="{{$Branchs->id}}">{{$Branchs->name}}</option>
											      	@endforeach
                                                    @endif
														</select>
													</div>
												</div>
											</div>

											<!-- <div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">Working Pin Code</label>
													</div>
													<div class="col-md-9">
														<input type="number" name="name" class="form-control" id="managerNmae"  placeholder="Enter Working Pin">
													</div>
												</div>
											</div> -->

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Days</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<select class="form-control" name="working_days" id="working_days">
																<option>Choose</option>
																<option value="Monday">Monday</option>
																<option value="Tuesday">Tuesday</option>
																<option value="Wednesday">Wednesday</option>
																<option value="Thursday">Thursday</option>
																<option value="Friday">Friday</option>
																<option value="Saturday">Saturday</option>
																<option value="Sunday">Sunday</option>
															</select>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-In</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control"  name="working_time_in" placeholder="Set time" type="time">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Working Time-Out</label>
													</div>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">
																	<i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
																</div>
															</div><!-- input-group-prepend -->
															<input class="form-control" placeholder="Set time" type="time" name="working_time_out">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Account Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="account_number" class="form-control" data-inputmask="'mask' : '9999-9999-9999-9999'" placeholder="Enter Account Number">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label" for="name">IFSC Code</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="ifsc_code" class="form-control" id="managerNmae"  placeholder="Enter IFSC Code">
													</div>
												</div>
											</div>

											<h4 class="mb-4 font-weight-bold">Contact Information</h4>
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Email Address</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="email" class="form-control"  placeholder="info@Claylist.in">
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Phone Number</label>
													</div>
													<div class="col-md-9">
														<input type="text" name="phone_number" class="form-control">
														<span class=" form-control-feedback right" aria-hidden="true"></span>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Address</label>
													</div>
													<div class="col-md-9">
														<textarea class="form-control" name="address" rows="4" placeholder="Address.."></textarea>
													</div>
												</div>
											</div>

											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label">Password</label>
													</div>
													<div class="col-md-9">
														<input type="password" name="password" class="form-control" id="inputEmail5" placeholder="Enter Password">
													</div>
												</div>
											</div>

											<div class="row mt-5">
												<div class="col-lg-4"></div>
												<div class="col-lg-4">
													<button type="submit" class="btn btn-primary waves-effect waves-light btn-block">Add Vendor</button>
												</div>
												<div class="col-lg-4"></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
