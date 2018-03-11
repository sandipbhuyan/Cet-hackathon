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

                                    <h4 style="color:#438EB9">Prerequisites</h3>
                                        <p>General representational issues in AI, some AI programming, and at least some background in statistics and information theory.</p>

                                        <h4 style="color:#438EB9">Intro to machine learning</h3>

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
                                                        <img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">4 sec</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Manaswini D</a>
                                                        </div>
                                                        <div class="text">Machine Learning is Awesome!</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="John's Avatar" src="assets/images/avatars/avatar.png" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="blue">38 sec</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Rishav A</a>
                                                        </div>
                                                        <div class="text">Everything is awesome!</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Bob's Avatar" src="assets/images/avatars/user.jpg" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="orange">2 min</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Ashutosh H</a>
                                                            <span class="label label-info arrowed arrowed-in-right">admin</span>
                                                        </div>
                                                        <div class="text">When you are part of a team.</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Jim's Avatar" src="assets/images/avatars/avatar4.png" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="grey">3 min</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Sanjay R</a>
                                                        </div>
                                                        <div class="text">Everything is awesoooooome!</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="itemdiv dialogdiv">
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
                                                    </div>

                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o"></i>
                                                            <span class="green">4 min</span>
                                                        </div>

                                                        <div class="name">
                                                            <a href="#">Manaswini D</a>
                                                        </div>
                                                        <div class="text">When you're living your Dreams. :)</div>

                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only ace-icon fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form>
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
                                                <a href="{{url('ashutosh')}}">
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
