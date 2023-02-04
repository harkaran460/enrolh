@extends('layouts.student_app')
@section('content')

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>


	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.27.1/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/css/jquery.fileupload.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/css/jquery.fileupload-ui.min.css">


	<style>
		.error {
			color: #FF0000;
		}

		.circular {
			margin: auto;
			width: 200px;
			height: 200px;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			overflow: hidden;
		}

		.circular img {
			position: absolute;
			left: 50%;
			top: 50%;
			height: 100%;
			width: auto;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div id="success_profile_update" class="alert alert-success" style="display: none;">
				<strong><span style="color: black;"></span></strong>
			</div>
			<div class="col-md-12">
				<div class="profile-info-holder">
					<div class="profile-info-box">
						<div class="d-flex align-items-center justify-content-center profile-image">
							<img class="profile-pic" id="profile-pic" src="assetsStudent/img/dummy-profile-pic.jpg" alt="img" />

							<button type="button" class="edit" data-bs-toggle="modal" data-bs-target="#myModal">
								<i class="fa-solid fa-pencil"></i>
							</button>
						</div>
						<div class="profile-info">
							<h1 id="my_name">Name</h1>
							<ul class="info-list">
								<li id="date_of_birth">DOB:</li>
								<li id="gender">Gender</li>
								<li id="marital_status">Marital Status</li>
							</ul>
							<span class="city" id="city_country">City, Country</span>
							<ul class="contact-list style">
								<li>
									<i class="fa-solid fa-phone"></i>
									<a href="tel:+919999999999" id="phone_number">+91 9999999999</a>
								</li>
								<li>
									<i class="fa-solid fa-envelope"></i>
									<a id="email">Email</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="edit-btn-right">
						<a class="button" href="/edit_student_profile">
							<i class="fa-solid fa-pen-to-square"></i>
							<span class="text">Edit Profile</span>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<ul class="nav nav-pills mb-3 my-profile" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Student Documents</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Application</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Shortlisted</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-doc" type="button" role="tab" aria-controls="pills-doc" aria-selected="false">Assigned Staff</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-agree" type="button" role="tab" aria-controls="pills-agree" aria-selected="false">Transactions</a>
				</li>

				<li class="nav-item" role="presentation">
					<a class="nav-link" id="bank-information-tab" data-bs-toggle="pill" data-bs-target="#bank-information" type="button" role="tab" aria-controls="pills-agree" aria-selected="false">Bank Information</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">

				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success fs-5" id="picture_message">
								<span><strong>Info!</strong> Accepted Max File Size is 2MB. Accepted File Types are .jpg,.png and .pdf</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="myapplication-block">
									<h3>Education Documents</h3>
									<div class="col-md-12" id="fileupload1">
										<form id="fileupload" action="{{ route('studentEducationDocuments.store') }}" method="post" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="fa-solid fa-plus"></i>
														<span>Add files...</span>
														<input type="file" accept="image/*" name="files[]" multiple>
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="fa-solid fa-cloud-arrow-up"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="fa-solid fa-ban"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="fa-solid fa-trash-can"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
											</div>
											<!-- The global progress state -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress state -->
												<div class="progress-extended">&nbsp;</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
										</form>
										<!-- The blueimp Gallery widget -->
										<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											<div class="slides"></div>
											<h3 class="title"></h3>
											<a class="prev">‹</a>
											<a class="next">›</a>
											<a class="close">×</a>
											<a class="play-pause"></a>
											<ol class="indicator"></ol>
										</div>
									</div>
								</div>

								<div class="myapplication-block">
									<h3>Work Experience</h3>
									<div class="col-md-12">
										<form id="fileupload_1" action="{{ route('workExperienceDocuments.store') }}" method="post" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="fa-solid fa-plus"></i>
														<span>Add files...</span>
														<input type="file" accept="image/*" name="files[]" multiple>
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="fa-solid fa-cloud-arrow-up"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="fa-solid fa-ban"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="fa-solid fa-trash-can"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
											</div>
											<!-- The global progress state -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress state -->
												<div class="progress-extended">&nbsp;</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
										</form>
										<!-- The blueimp Gallery widget -->
										<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											<div class="slides"></div>
											<h3 class="title"></h3>
											<a class="prev">‹</a>
											<a class="next">›</a>
											<a class="close">×</a>
											<a class="play-pause"></a>
											<ol class="indicator"></ol>
										</div>
									</div>
								</div>

								<div class="myapplication-block">
									<h3>Emergency Contact & Other Document Uploads</h3>
									<div class="col-md-12">
										<form id="fileupload_2" action="{{ route('emergencyContactDocuments.store') }}" method="post" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="fa-solid fa-plus"></i>
														<span>Add files...</span>
														<input type="file" accept="image/*" name="files[]" multiple>
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="fa-solid fa-cloud-arrow-up"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="fa-solid fa-ban"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="fa-solid fa-trash-can"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
											</div>
											<!-- The global progress state -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress state -->
												<div class="progress-extended">&nbsp;</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
										</form>
										<!-- The blueimp Gallery widget -->
										<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											<div class="slides"></div>
											<h3 class="title"></h3>
											<a class="prev">‹</a>
											<a class="next">›</a>
											<a class="close">×</a>
											<a class="play-pause"></a>
											<ol class="indicator"></ol>
										</div>
									</div>
									<div class="card-text-info">
										<div class="heading-box">
											<strong class="title">EMERGENCY CONTACT DETAILS</strong>
											<p>No Emergency Contact Details</p>
										</div>
										<div class="heading-box">
											<strong class="title">REMARKS</strong>
											<p>Yes</p>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<div class="myapplication-block">
									<h3>English Test Score</h3>
									<div class="col-md-12">
										<form id="fileupload_3" action="{{ route('englishTestScoreDocuments.store') }}" method="post" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="fa-solid fa-plus"></i>
														<span>Add files...</span>
														<input type="file" accept="image/*" name="files[]" multiple>
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="fa-solid fa-cloud-arrow-up"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="fa-solid fa-ban"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="fa-solid fa-trash-can"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
											</div>
											<!-- The global progress state -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress state -->
												<div class="progress-extended">&nbsp;</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
										</form>
										<!-- The blueimp Gallery widget -->
										<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											<div class="slides"></div>
											<h3 class="title"></h3>
											<a class="prev">‹</a>
											<a class="next">›</a>
											<a class="close">×</a>
											<a class="play-pause"></a>
											<ol class="indicator"></ol>
										</div>
									</div>
								</div>

								<div class="myapplication-block">
									<h3>Passport & Travel History</h3>
									<div class="col-md-12">
										<form id="fileupload_4" action="{{ route('passportAndTravelHistoryDocuments.store') }}" method="post" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="fa-solid fa-plus"></i>
														<span>Add files...</span>
														<input type="file" accept="image/*" name="files[]" multiple>
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="fa-solid fa-cloud-arrow-up"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="fa-solid fa-ban"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="fa-solid fa-trash-can"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
											</div>
											<!-- The global progress state -->
											<div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													<div class="progress-bar progress-bar-success" style="width:0%;"></div>
												</div>
												<!-- The extended global progress state -->
												<div class="progress-extended">&nbsp;</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
										</form>
										<!-- The blueimp Gallery widget -->
										<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
											<div class="slides"></div>
											<h3 class="title"></h3>
											<a class="prev">‹</a>
											<a class="next">›</a>
											<a class="close">×</a>
											<a class="play-pause"></a>
											<ol class="indicator"></ol>
										</div>
									</div>
									<div class="card-text-info">
										<div class="heading-box">
											<strong class="title">Visa Refusal</strong>
											<p>No Refusals</p>
										</div>
										<div class="heading-box">
											<strong class="title">Travel History</strong>
											<p>Not Travelled Abroad</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class="row">
						<div class="col-md-12">
							<div class="application-apply-holder pt-5">
								<div class="icon-holder">
									<i class="fa fa-file-text"></i>
								</div>
								<p><b> No applied application yet</b></p>
								<p class="mb-md-3">You have not application any course yet.</p>
								<a class="btn btn-primary" href="">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row">
						<div class="col-md-12">
							<div class="application-apply-holder pt-5">
								<div class="icon-holder">
									<i class="fa fa-file-text"></i>
								</div>
								<p><b> No courses shortlisted yet</b></p>
								<p class="mb-md-3">You have not shortlisted any course yet.</p>
								<a class="btn btn-primary" href="">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-doc" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row">
						<div class="col-md-12">
							<h5>Add Documents</h5>

							<div class="appListStaff d-flex mrgt_15">
								<div class="d-flex cp-details mrgr_20">
									<div class="flex-column">
										<div class="appListimg mrgr-15">
											<img class="circle" src="assetsStudent/img/dummy-profile-pic.jpg" />
										</div>
										<p class="status-block available mt-1 x12">Available</p>
									</div>
									<div>
										<p><b> Muskan Vashishth</b></p>
										<p>Client Executive</p>
										<p><a class="tel-link" href="tel:+91-9999999999">+91-999-9999-999</a></p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-agree" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class="row">
						<div class="col-md-12">
							<table class="table tab1 table-borderless">
								<thead>
									<tr>
										<th> ID</th>
										<th>TRANSACTION NUMBER</th>
										<th>TRANSACTION AMOUNT</th>
										<th>COLLEGE (APPLICATION ID)</th>
										<th>STATUS</th>
										<th>PAID BY </th>
										<th>DATE</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>200030657096</td>
										<td>200000</td>
										<td>200030657096</td>
										<td>Student</td>
										<td>Bank</td>
										<td>20-05-2019</td>
									</tr>
									<tr>
										<td>2</td>
										<td>200030657096</td>
										<td>200000</td>
										<td>200030657096</td>
										<td>Student</td>
										<td>Bank</td>
										<td>20-05-2019</td>
									</tr>
									<tr>
										<td>3</td>
										<td>200030657096</td>
										<td>200000</td>
										<td>200030657096</td>
										<td>Student</td>
										<td>Bank</td>
										<td>20-05-2019</td>
									</tr>
									<tr>
										<td>4</td>
										<td>200030657096</td>
										<td>200000</td>
										<td>200030657096</td>
										<td>Student</td>
										<td>Bank</td>
										<td>20-05-2019</td>
									</tr>
									<tr>
										<td>5</td>
										<td>200030657096</td>
										<td>200000</td>
										<td>200030657096</td>
										<td>Student</td>
										<td>Bank</td>
										<td>20-05-2019</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="bank-information" role="tabpanel" aria-labelledby="bank-information-tab">
					<div class="row">
						<div id="success_messae" class="alert alert-success" style="display: none;">
							<strong><span style="color: black;"></span></strong>
						</div>
						<div class="col-md-4">
							<form class="rounded" name="updateMyProfile" id="updateMyProfile" method="post" action="javascript:void(0)">
								<div class="mb-3">
									<label for="validationCustom01" class="form-label">ACCOUNT NAME<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="account_name" id="account_name" placeholder="Eg: John Doe" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom02" class="form-label">ACCOUNT NUMBER<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="account_number" id="account_number" placeholder="Your account number" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom03" class="form-label">BANK NAME<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Add bank name" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom04" class="form-label">BANK ADDRESS<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="bank_address" id="bank_address" placeholder="Add bank address" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom05" class="form-label">ORGANIZATION NUMBER (OPTIONAL)</label>
									<input type="text" class="form-control" name="organization_number" id="organization_number" placeholder="Add organization number" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom06" class="form-label">INSTITUTION NUMBER (ONLY FOR BANKS OF CANADA)</label>
									<input type="text" class="form-control" name="institution_number" id="institution_number" placeholder="Add institution number" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom07" class="form-label">TRANSIT NUMBER (ONLY FOR BANKS OF CANADA)</label>
									<input type="text" class="form-control" name="transit_number" id="transit_number" placeholder="Add transit name" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom08" class="form-label">SWIFT CODE<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="swift_code" id="swift_code" placeholder="Add swift code" required="">
								</div>
								<div class="mb-3">
									<label for="validationCustom09" class="form-label">IFSC CODE<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="ifsc_code" id="ifsc_code" placeholder="Add ifsc code" required="">
								</div>
								<div class="mb-3">
									<label for="exampleFormControlTextarea1" class="form-label">COMMENTS</label>
									<textarea class="form-control" name="comments" id="comments" placeholder="N/A" rows="3"></textarea>
								</div>
								<button type="submit" id="submit" class="btn btn-primary">Save</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Upload Student Picture</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<form id="profileUpdate">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-2">
								<div class="drag text-center">
									<label for="file-uploads" class="custom-file-upload" onclick="document.getElementById('selectedFile').click();">
										<i class="fa fa-cloud-upload"></i> Drag &amp; Drop Files
									</label>
									<input id="selectedFile" name="selectedFile" style="display: none;" accept="image/*" type="file">
								</div>
							</div>
							<div class="col-md-2 circular" id="circular">
								<img id="Imgprofile" />
							</div>
						</div>
					</div>

					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
						<button type="submit" id="submit" class="btn btn-danger">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@section('js')
@include('_partials.x-template')
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/vendor/jquery.ui.widget.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-JavaScript-Templates/3.11.0/js/tmpl.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-load-image/2.17.0/load-image.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/blueimp-canvas-to-blob@3.29.0/js/canvas-to-blob.min.js"> </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.27.1/js/jquery.blueimp-gallery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.iframe-transport.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-process.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-image.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-validate.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.1/js/jquery.fileupload-ui.min.js"></script>
<script src="{{ asset('js/upload_app.js') }}"></script>
<script src="{{ asset('js/emergency_contact_app.js') }}"></script>
<script src="{{ asset('js/english_test_score_app.js') }}"></script>
<script src="{{ asset('js/passport_and_travel_history_app.js') }}"></script>
<script src="{{ asset('js/work_experience_app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>
@endsection

<script>
	$(document).ready(function() {
		$(window).keydown(function(event) {
			if (event.keyCode == 13) {
				event.preventDefault();
				return false;
			}
		});
		getMyProfile();
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.getElementById("circular").style.border = "1px solid gray";
				$('#Imgprofile').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#selectedFile").change(function() {
		readURL(this);
	});
</script>


<script>
	function getMyProfile() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: "{{ route('getMyProfile') }}",
			type: "POST",
			success: function(response) {
				if (response.studentProfile != null) {

					var first_name = response.studentProfile.first_name;
					var middle_name = response.studentProfile.middle_name;
					var last_name = response.studentProfile.last_name;
					var email = "{{ Auth::user()->email }}";
					var dob = moment(response.studentProfile.date_of_birth).format('DD-MMM-YYYY');

					$("#my_name").text(first_name + ' ' + middle_name + ' ' + last_name);
					$("#date_of_birth").text("DOB: " + dob);
					$("#gender").text(response.studentProfile.gender);
					$("#marital_status").text(response.studentProfile.marital_status);
					$("#city_country").text(response.studentProfile.city_town + ', ' + response.studentProfile.country);
					$("#phone_number").text(response.studentProfile.phone_number);
					$("#email").text(email);

				}
				if (response.myProfile != null) {
					var url = "{{ URL::to('/') }}";
					if (response.myProfile.student_profile_picture != '' || response.myProfile.student_profile_picture != null) {
						$("#profile-pic").attr("src", url + '/images/' + response.myProfile.student_profile_picture);
					}
					$('#submit').html('Update');
					$("#account_name").val(response.myProfile.account_name);
					$("#account_number").val(response.myProfile.account_number);
					$("#bank_name").val(response.myProfile.bank_name);
					$("#bank_address").val(response.myProfile.bank_address);
					$("#organization_number").val(response.myProfile.organization_number);
					$("#institution_number").val(response.myProfile.institution_number);
					$("#transit_number").val(response.myProfile.transit_number);
					$("#swift_code").val(response.myProfile.swift_code);
					$("#ifsc_code").val(response.myProfile.ifsc_code);
					$("#comments").val(response.myProfile.comments);



				}
			}
		});
	}
</script>
<script>
	if ($("#updateMyProfile").length > 0) {
		$("#updateMyProfile").validate({
			ignore: [],
			rules: {
				account_name: {
					required: true,
					maxlength: 100,
				},
				account_number: {
					required: true,
					maxlength: 100
				},
				'bank_name': {
					required: true,
					maxlength: 100
				},
				'bank_address': {
					required: true,
					maxlength: 100
				},
				organization_number: {
					required: false,
					maxlength: 100
				},
				institution_number: {
					required: false,
					maxlength: 100
				},
				transit_number: {
					required: false,
					maxlength: 100
				},
				swift_code: {
					required: true,
					maxlength: 100
				},
				ifsc_code: {
					required: true,
					maxlength: 100
				},
				comments: {
					required: false,
					maxlength: 500
				}
			},
			messages: {
				account_name: {
					required: "Please select college logo",
				},
				account_number: {
					required: "Please enter college name",
				},
				bank_name: {
					required: "Please enter college country",
				},
				bank_address: {
					required: "Please enter college address",
				},
				organization_number: {
					required: "Please enter details about college",
				},
				institution_number: {
					required: "Please enter feature question",
				},
				transit_number: {
					required: "Please enter feature answer",
				},
				swift_code: {
					required: "Please enter application fee",
				},
				ifsc_code: {
					required: "Please enter application fee",
				},
				comments: {
					required: "Please enter application fee",
				}

			},
			submitHandler: function(form) {
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$('#submit').html('Please Wait...');
				var formData = new FormData()

				var account_name = $('input[name="account_name"]').val();
				var account_number = $('input[name="account_number"]').val();
				var bank_name = $('input[name="bank_name"]').val();
				var bank_address = $('input[name="bank_address"]').val();
				var organization_number = $('input[name="organization_number"]').val();
				var institution_number = $('input[name="institution_number"]').val();
				var transit_number = $('input[name="transit_number"]').val();
				var swift_code = $('input[name="swift_code"]').val();
				var ifsc_code = $('input[name="ifsc_code"]').val();

				var comments = $('textarea#comments').val();


				formData.append('account_name', account_name);
				formData.append('account_number', account_number);
				formData.append('bank_name', bank_name);
				formData.append('bank_address', bank_address);
				formData.append('organization_number', organization_number);
				formData.append('institution_number', institution_number);
				formData.append('transit_number', transit_number);
				formData.append('swift_code', swift_code);
				formData.append('ifsc_code', ifsc_code);
				formData.append('comments', comments);



				$.ajax({
					url: "{{ route('updateMyProfile') }}",
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						$("html, body").animate({
							scrollTop: 0
						}, "slow");
						document.getElementById("updateMyProfile").reset();
						$("#success_messae span").html(response.success);
						$('#success_messae').show();
						window.setTimeout(function() {
							location.reload()
						}, 2000)
					}
				});
			}
		})
	}

	if ($("#profileUpdate").length > 0) {
		$("#profileUpdate").validate({
			ignore: [],
			rules: {
				selectedFile: {
					required: true,
					maxlength: 100,
				},
			},
			messages: {
				selectedFile: {
					required: "Please select profile image",
				}

			},
			submitHandler: function(form) {
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$('#submit').html('Please Wait...');
				var formData = new FormData()

				var image = $("#selectedFile")[0].files[0];

				formData.append('profile_image', image);

				$.ajax({
					url: "{{ route('updateProfilePicture') }}",
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					success: function(response) {
						$("html, body").animate({
							scrollTop: 0
						}, "slow");
						$('#submit').html('Update');
						$('#myModal').modal('hide');

						document.getElementById("profileUpdate").reset();
						$("#success_profile_update span").html(response.success);
						$('#success_profile_update').show();
						window.setTimeout(function() {
							location.reload()
						}, 2000)
					}
				});
			}
		})
	}
</script>
@endsection