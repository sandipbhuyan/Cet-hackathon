@extends('layouts.sidebar')

@section('content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{ route('home') }}">Home</a>
            </li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
            </form>
        </div><!-- /.nav-search -->
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                Dashboard
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    subjects &amp; topics
                </small>
            </h1>
        </div><!-- /.page-header -->
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div id="sec-more" class="custom-pages-container">
                <a class="elegant-card z-depth-1 hoverable" href="{{ url('machine-learning') }}">
                    <span>Machine Learning</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>Web Designing</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>Android</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>IOS</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>IoT</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>Robotics</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>Data Analytics</span>
                </a>
                <a class="elegant-card z-depth-1 hoverable" href="">
                    <span>Web hosting</span>
                </a>
            </div>
        </div>
    </div>
@endsection
