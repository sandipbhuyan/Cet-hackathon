@extends('layouts.sidebar')

@section('content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <i class="ace-icon fa fa-cog home-icon"></i>
                <a href="{{ url('machine-learning') }}">Machine-learning</a>
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
               Machine Learning
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    learn &amp; train
                </small>
            </h1>
        </div><!-- /.page-header -->
    </div>
    <div class="row">
        <div class="col-xs-12">


            <!-- PROFILE -->

            <div>
                <div id="user-profile-2" class="user-profile">
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-18">
                            <li class="active">
                                <a data-toggle="tab" href="#syllabus-tab">
                                    <i class="green ace-icon fa fa-comment bigger-120"></i>
                                    About
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#seniors-tab">
                                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                                    Seniors
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#discussion-tab">
                                    <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                    Discussion Forum
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#resource-tab">
                                    <i class="pink ace-icon fa fa-book bigger-120"></i>
                                    Resources
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#alumni-tab">
                                    <i class="black ace-icon fa fa-users bigger-120"></i>
                                    Alumni
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#clubs">
                                    <i class="black ace-icon fa fa-users bigger-120"></i>
                                    Clubs
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#internships">
                                    <i class="black ace-icon fa fa-users bigger-120"></i>
                                    Internships
                                </a>
                            </li>


                        </ul>



                        <div class="tab-content no-border padding-24">
                            <!-- SYLLABUS TAB -->
                            <div id="syllabus-tab" class="tab-pane in active">
                                <div class="row">
                                    <p>Machine learning is a type of artificial intelligence (AI) that provides computers with the ability to learn without being explicitly programmed. This area is also concerned with issues both theoretical and practical.</p>

                                    <p>In this, we will present algorithms and approaches in such a way that grounds them in larger systems as you learn about a variety of topics, including:</p>
                                    <ol>
                                        <li>Statistical Learning</li>
                                        <li>Randomized search Techniques</li>
                                        <li>Bayesian learning methods</li>
                                        <li>Reinforcement learning</li>
                                        <li>Basic Algebra and concepts of Vectorization</li>
                                        <li>Concept of Probability</li>
                                        <li>Supervised and unsupervised learning</li>
                                    </ol>

                                    <h4 style="color:#438EB9">Prerequisites</h4>
                                        <p>General representational issues in AI, some AI programming, and at least some background in statistics and information theory.</p>

                                        <h4 style="color:#438EB9">Intro to machine learning</h4>

                                            ​<iframe width="560" height="315" src="https://www.youtube.com/embed/PPLop4L2eGk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div><!-- /.row -->

                                <div class="space-20"></div>

                            </div>
                            <!-- END SYLLABUS TAB -->

                            <!-- DISCUSSION FORUMS TAB -->
                            <div id="discussion-tab" class="tab-pane">

                                <div class="widget-box">
                                    <div class="widget-header">
                                        <h4 class="widget-title lighter smaller">
                                            <i class="ace-icon fa fa-comment blue"></i>
                                            Conversation
                                        </h4>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <div class="dialogs">
                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/sandip.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">10 mins</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Sandip Bhuyan</a>
                                                        </div>
                                                        <div class="text">I want to learn machine learning</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/rishav.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">7 mins</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Rishab Agrawal</a>
                                                        </div>
                                                        <div class="text">Hello sandip you can start from the basics I am sending you some link that will help you</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/sandip.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">6 mins</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Sandip Bhuyan</a>
                                                        </div>
                                                        <div class="text">Thank you bhai for your help</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/harsit.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green"> 4 mins</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Harshit Mohapatra</a>
                                                        </div>
                                                        <div class="text">Don't forget to learn supervised and unsupervised learning</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/sandip.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">2 mins</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Sandip Bhuyan</a>
                                                        </div>
                                                        <div class="text">Sure bhai</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="{{url('img/rishav.jpg')}}" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">40 sec</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Rishav</a>
                                                        </div>
                                                        <div class="text">You can work in my projects</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <form ng-app="">
                                                <div class="form-actions">
                                                    <div class="input-group">
                                                        <input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
                                                        <span class="input-group-btn">
																				<button class="btn btn-sm btn-info no-radius" type="button">
																					<i class="ace-icon fa fa-share"></i>
																					Send
																				</button>
																			</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.widget-box -->

                            </div>
                            <!-- /#END DISCUSSION FORUMS TAB -->

                            <!-- SERNIORS TAB -->
                            <div id="seniors-tab" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('asutosh')}}">
                                                    <img src="{{url('img/ashutosh.jpg')}}" alt="Bob Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Ashutosh Hota
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Technical Secretary</div>
                                                    <div>4th Year</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('sai')}}">
                                                    <img src="{{url('img/sai.jpg')}}" alt="Rose Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Saisankar Gochhayat
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Data Analyst</div>
                                                    <div>4th Year</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('rishab')}}">
                                                    <img src="{{url('img/rishav.jpg')}}" alt="Jim Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-busy"></span>
                                                        Rishav Agarwal
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Computer Vision Expert</div>


                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                                        <span class="grey"> 1 hour ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('harshit')}}">
                                                    <img src="{{url('img/harsit.jpg')}}" alt="Alex Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-idle"></span>
                                                        Harshit Mahapatra
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Neural Netowrks Expert</div>


                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class=""> 40 minutes idle </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('reddy')}}">
                                                    <img src="{{url('img/reddy_bhai.jpg')}}" alt="Alex Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-idle"></span>
                                                        Sanjay Reddy
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Neural Netowrks Expert</div>


                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class=""> 40 minutes idle </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">&larr; Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next &rarr;</a>
                                    </li>
                                </ul>
                            </div>


                            <div id="internships" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="col-xs-16 col-sm-12 widget-container-col" id="widget-container-col-9">
                                        <div class="widget-box widget-color-pink" id="widget-box-9">
                                            <div class="widget-header" style="background: #468eb7;">
                                                <h5 class="widget-title">SawApps</h5>

                                                <div class="widget-toolbar">
                                                    <a href="#" data-action="collapse">
                                                        <i class="1 ace-icon fa fa-chevron-up bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <p class="alert alert-info">
                                                        
                                                        Service based and Product based Startup. We focus on a range of different technologies that we use in life without giving them a second thought such as Websites, Android, IOS apps
                                                    </p>
                                                    <p class="alert alert-info">
                                                        <i class="fas fa-cloud"></i>
                                                        Unity Developer Intern/Full Time
                                                    </p>
                                                </div>

                                                <div class="widget-toolbox padding-8 clearfix">
                                                    <button class="btn btn-xs btn-success pull-right">
                                                        <span class="bigger-110">Apply now</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">&larr; Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next &rarr;</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END SENIROS TAB -->
                            <div id="clubs" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="{{url('img/zairza.jpg')}}" alt="Bob Doe's avatar" style="height: 67px;" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Zairza
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Technical Secretary</div>
                                                    <div>4th Year</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('sai')}}">
                                                    <img src="{{url('img/en.jpg')}}" alt="Rose Doe's avatar"  />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Energy Club
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Data Analyst</div>
                                                    <div>4th Year</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">&larr; Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next &rarr;</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- RESOURCES -->
                            <div id="resource-tab" class="tab-pane">
                                <main>

                                    <input id="tab1" type="radio" name="tabs" checked>
                                    <label for="tab1">Books</label>

                                    <input id="tab2" type="radio" name="tabs">
                                    <label for="tab2">Courses</label>

                                    <input id="tab3" type="radio" name="tabs">
                                    <label for="tab3">Groups</label>


                                    <section id="content1">
                                        <ul>
                                            <li><a href="https://books.google.co.in/books?id=AGQ4DQAAQBAJ&printsec=frontcover&dq=machine+learning&hl=en&sa=X&ved=0ahUKEwjAndCv4ePZAhWLQo8KHTM0DcIQ6AEIMDAB#v=onepage&q=machine%20learning&f=false">Machine Learning: The New AI</a></li>

                                            <li><a href="https://books.google.co.in/books?id=NZP6AQAAQBAJ&printsec=frontcover&dq=machine+learning&hl=en&sa=X&ved=0ahUKEwjAndCv4ePZAhWLQo8KHTM0DcIQ6AEIPTAD#v=onepage&q=machine%20learning&f=false">Machine Learning: A Probabilistic Perspective</a></li>

                                            <li><a href="https://books.google.co.in/books?id=NZP6AQAAQBAJ&printsec=frontcover&dq=machine+learning&hl=en&sa=X&ved=0ahUKEwjAndCv4ePZAhWLQo8KHTM0DcIQ6AEIPTAD#v=onepage&q=machine%20learning&f=false">Machine Learning: A Constraint-Based Approach</a></li>

                                            <li><a href="https://books.google.co.in/books?id=TNg5qVoqRtUC&printsec=frontcover&dq=machine+learning&hl=en&sa=X&ved=0ahUKEwjAndCv4ePZAhWLQo8KHTM0DcIQ6AEISTAF#v=onepage&q=machine%20learning&f=false">Elements of Machine Learning</a></li>

                                            <li><a href="https://books.google.co.in/books?id=ttJkAwAAQBAJ&printsec=frontcover&dq=machine+learning&hl=en&sa=X&ved=0ahUKEwjAndCv4ePZAhWLQo8KHTM0DcIQ6AEIVDAH#v=onepage&q=machine%20learning&f=false">Understanding Machine Learning: From Theory to Algorithms</a></li>
                                        </ul>


                                    </section>

                                    <section id="content2">
                                        <ul>
                                            <li><a href="https://www.udemy.com/machinelearning/">UDEMY</a></li>

                                            <li><a href="https://www.edx.org/course/machine-learning-columbiax-csmm-102x-2">EDX</a></li>

                                            <li><a href="https://www.coursera.org/learn/machine-learning">COURSERA</a></li>

                                            <li><a href="https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-867-machine-learning-fall-2006/">OPEN MIT COURSE</a></li>
                                        </ul>
                                    </section>

                                    <section id="content3">
                                        <ul>
                                            <Li><a href="https://www.facebook.com/groups/codingintelligence/">Machine Learning</a></Li>
                                            <li><a href="https://www.facebook.com/machinelearningpython/"> Machine Learning with Python</a></li>
                                            <li><a href="https://www.facebook.com/groups/idliai/">IDLI-Deep Learning</a></li>
                                        </ul>
                                    </section>


                                </main>
                            </div>
                            <!-- END RESOURCES TAB -->

                            <!-- ALUMNI TAB -->
                            <div id="alumni-tab" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('rounak')}}">
                                                    <img src="{{url('img/ronak.jpg')}}" alt="Bob Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Rounak Samantray
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Co-Founder Nowfloats</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('prayash')}}">
                                                    <img src="{{url('img/prayash.jpg')}}" alt="Rose Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Prayash Mohapatra
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Backend Developer Nowfloats</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="{{url('ayushman')}}">
                                                    <img src="{{url('img/ayushman.jpg')}}" alt="Rose Doe's avatar" />
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Ayushman Dash
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Backend Developer Nowfloats</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">&larr; Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next &rarr;</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- END ALUMNI TAB -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROFILE ENDS -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
