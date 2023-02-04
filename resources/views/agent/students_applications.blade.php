@extends('layouts.agent_app')
@section('content')
<div class="page-content applications">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="d-flex justify-content-between">
                        <h1>Applications</h1>
                        <div class="float-end">
                            <a href="/add-application" class="btn btn-primary" type="button"><i class="fa-solid fa-plus"></i> New Application</a>
                            <a href="" class="btn btn-primary pl-md-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#student-application-filters" aria-controls="student-application-filters"><i class="fa-solid fa-bars"></i> Filters </a>

                            <!--------------------Filter-------------------->

                            <div class="offcanvas offcanvas-end p-2" tabindex="-1" id="student-application-filters" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h3 class="offcanvas-title fs-4">Filters</h3>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <hr>
                                    <div class="border border-secondary rounded d-flex justify-content-between">
                                        <select class="form-select border-0 w-50" aria-label="Default select example">
                                            <option selected>Created On</option>
                                            <option value="1">Status Changed</option>
                                            <option value="2">Fee Due Date</option>
                                            <option value="3">Assigned</option>
                                        </select>
                                        <div class="border-0 w-100">  
                                            <input type="text" id="date-ranger" class="form-control border-0">
                                        </div>
                                    </div>

                                    <div class="border border-secondary rounded mt-3">

                                        <div class="border-0 rounded d-flex justify-content-between px-2">
                                            <div class="clg d-flex align-items-center"><span>College:</span></div>
                                                <div class="w-100">
                                                    <select class="form-select border-0">
                                                        <option class="sec1" selected>Select a college</option>
                                                        <option value="1">...</option>
                                                        <option value="2">...</option>
                                                        <option value="3">...</option>
                                                    </select>
                                                </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Destination Country:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select a country</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Destination State:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select a state</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Status:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select a status</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Intake:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select intake</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Intake Year:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select intake year</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>On Hold:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0" aria-label="Default select example">
                                                    <option class="sec1" selected>Select an option</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="border rounded border-secondary mt-3 px-2">

                                        <div class="border-0 rounded d-flex justify-content-between">
                                            <div class="clg d-flex align-items-center"><span>Is Deferred:</span></div>
                                            <div class="w-100">
                                                <select class="form-select border-0 " aria-label="Default select example">
                                                    <option class="sec1" selected>Select an option</option>
                                                    <option value="1">...</option>
                                                    <option value="2">...</option>
                                                    <option value="3">...</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------------Filter-------------------->
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between">
                    <div class="d-md-flex">
                        <span class="pe-3">Show results</span>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected="">25</option>
                            <option value="1">50</option>
                            <option value="2">100</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="application-card">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="main-progers-bar">
                            <div class="timeLine">
                                <div class="tlarea">
                                    <ul>
                                        <li>
                                            <span class="date topdate fwb">Est. Date</span>
                                            <div class="step">
                                                &nbsp;
                                            </div>
                                            <span class="date botdate fwb">Actual Date</span>
                                        </li>
                                        <li class="active pending">
                                            <span class="date topdate fwb">09-12-21</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Started & Submitted for options">
                                                        <span>AR</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line pending"></span>
                                                        <span class="line cancelled"></span>
                                                        <span class="line completed"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb color-g">09-12-21</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">10-12-21</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Review and Course finalization">
                                                        <span>CF</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">11-12-21</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Application fee Paid">
                                                        <span>AF</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>

                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">12-12-21</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Submitted">
                                                        <span>SI</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">22-12-21</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="LOA/OL">
                                                        <span>OL</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">11-01-22</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Tuition Fee Paid">
                                                        <span>TF</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">26-01-22</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Visa Applied">
                                                        <span>VP</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">20-02-22</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Visa Approved">
                                                        <span>VA</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                        <li class="active cancelled">
                                            <span class="date topdate fwb">XX-XX-XX</span>
                                            <div class="step-outer">
                                                <div class="step">
                                                    <div class="status-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Cancel Withdrawn">
                                                        <span>CW</span>
                                                    </div>
                                                    <div class="status-lines">
                                                        <span class="line"></span>
                                                        <span class="line cancelled"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="date botdate fwb" style="color: #e21d23;">26-02-22</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color);color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="application-card mt-md-4">
                        <div class="profile-holder">
                            <div class="profile-box">
                                <div class="profile-img">
                                    <img src="assetsAgent/img/dummy-profile-pic.jpg" alt="" />
                                </div>
                                <div class="profile-main-detalis">
                                    <div class="d-md-flex flex-row d-xs-inline d-sm-flex">
                                        <h2> <a href=""> Harnoor Kaur Bual </a> </h2>
                                        <span class="student-id">Student ID: 17428</span>
                                        <span class="studentl-id">Application ID: 27117</span>
                                        <span class="bar-chart" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to view courses ckecklist">
                                            <i class="fa fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="profile-detalis">
                                        <ul class="d-inline-flex flex-wrap justify-content-between">
                                            <li> <a href="tel:+91 9837025092"><i class="fa fa-phone"></i> +91 9837025092</a></li>
                                            <li> <a href="mailto:hrnorkaur01@gmail.com"><i class="fa fa-envelope"></i> hrnorkaur01@gmail.com</a> </li>
                                            <li> <span><i class="fa fa-calendar"></i> 10-Apr-2004</span></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex">
                                        <p>Jaskarn Arora (Study Advisor)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="application-collage-name">
                            <div class="heading-wrap">
                                <h4 data-bs-toggle="tooltip" data-bs-placement="top" title="Humber College"> Humber College, Canada</h4>
                                <p><b> Intake:</b> <span>Sep 2022</span></p>
                            </div>

                            <div class="d-flex align-items-center heading-wrap application-cencel">
                                <h5 class="bg--primary p-2 text-dark bg-opacity-80 text-white fs-6"> Cancel Withdrawn</h5>
                            </div>
                        </div>

                        <div class="view-more-content mb-2" title="Click to view application details">
                            <a href="javascript:;" class="view-more"> View More <i class="fa fa-angle-down"></i></a>
                            <div class="slide-view">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <h5>PREFFERED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Diploma in Business Management - 1400 CAD </h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>APPLIED COURSE AND POTENTIAL COMMISSION</h5>
                                        <h6>. Not Applied Yet</h6>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block available">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex cp-details mrgr_30">
                                                    <div class="flex-column mrgr_15">
                                                        <div class="appListimg">
                                                            <img class="circle" src="assetsAgent/img/dummy-profile-pic.jpg" alt="">
                                                        </div>
                                                        <div class="status-block away">
                                                            <p>Available</p>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <p><b>Unitravel</b></p>
                                                        <p style="font-size:10px;">Moga</p>
                                                        <p>Channel Partner </p>
                                                        <p>7888904210</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between created-date">
                            <p class="app-status ">Created on: 09-Dec-2021 08:41 AM | Created by: Sukhwinder Singh Brar</p>
                            <div class="d-flex float-end">
                                <a href="#" style="background-color: var(--color); color: #fff;" data-bs-toggle="tooltip" data-bs-placement="right" title="No Remarks"><i class="fa fa-info-circle"></i></a>
                                <a href="#" style="background-color: #ffb521;"><i class="fa fa-commenting"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
 
            </div>

        </div>
    </div>

@endsection