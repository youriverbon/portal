
<!-- saved from url=(0040)http://localhost/portal/portal/user.php# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script>alert("post inserted successfully..");</script>



 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="http://localhost/favicon.ico">
 
 <!-- http://draganzlatkovski.com/code-projects/toggle-jquery-side-bar-menu-in-bootstrap-free-template/ -->
 
 <title>Job Post Pannel</title>
 
 <!-- jQuery -->
 
 <script src="./user1_files/jquery-latest.js.download"></script>
<script src="./user1_files/jquery.js.download"></script>
 
  
 
 <!-- Bootstrap core CSS -->
 <link href="./user1_files/bootstrap.min.css" rel="stylesheet">
 
 <!-- Custom styles for this template -->
 <link href="./user1_files/simple-sidebar.css" rel="stylesheet">
  <link href="./user1_files/postmodal.css" rel="stylesheet">
  <link href="./user1_files/fbbox.css" rel="stylesheet">

 

 

 
 
</head>

<body class="modal-open">
 
 
 


 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container-fluid">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="http://localhost/portal/portal/user.php#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
 </div>
 <div id="navbar" class="navbar-collapse collapse">
  
  
    <label class="navbar-text text-center text-primary" style="vertical-align:10px;font-size:medium ">HelpEachOther </label>
    <label class="navbar-text text-center text-primary" style="vertical-align:10px;font-size:medium ">Hello! <font style="font-size:13px"> mo</font> </label>


   <ul class="nav navbar-nav navbar-right">
  
<li><a href="http://localhost/portal/portal/user.php#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Notification(0) </a></li>
 

 <li><a href="http://localhost/portal/portal/logout1.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
 </ul>
 <form class="navbar-form navbar-right" action="http://localhost/portal/portal/search.php" method="post">
 <div class="input-group" style="margin-right:200px">
 <input type="text" class="form-control" placeholder="Search..." id="query" name="search" value="">
 <div class="input-group-btn">
 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
 </div>
 </div>
 </form>
    


 
 </div>
     </div>
 
 
 
 <!--
<div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Post Task</button></div>
-->

 


<!-- line modal -->
<div class="modal fade in" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: block;">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">What's your Task?</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			  <form action="http://localhost/portal/portal/user.php" method="post" enctype="multipart/form-data">

			   						
              <div class="form-group">
                <label for="exampleInputEmail1">Task Title</label>
                <textarea name="status_title" class="form-control" placeholder="eg:need a cleaner"></textarea>
                  
              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1">Describe your task in more detail</label>
         <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="status" required=""></textarea>
                                </div>
                            </div>
                                          </div>

		
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal" role="button">Delete</button>
				</div>
				<div class="btn-group" role="group">
					<button type="submit" name="submit" class="btn btn-default btn-hover-green" value="Post">Post</button>
				</div>
			</div>
		</div>
            </form>
		
	</div>
  </div>
    </div>
     </div>
 <div id="wrapper" class="toggled">
 <div class="container-fluid">
 <!-- Sidebar -->
 <div id="sidebar-wrapper">
 <ul class="sidebar-nav">
 <li class="sidebar-brand">
 <br>
 </li>
 <li class="sidebar-brand">
 <a href="http://localhost/portal/portal/user.php#" class="navbar-brand">
  
  
               
 <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
 </a>
 </li>
 <li>
 <a href="http://localhost/portal/portal/home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <font style="color:white"> Home </font></a>
 </li>
 <!--
 <li>
 <a href="#"><span  class="glyphicon glyphicon-comment"  aria-hidden="true"></span> Notification</a>
 </li> 
 
 -->
 <li>
  <a href="http://localhost/portal/portal/mytask.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> My Task</a>
 </li>
 
 <li>
 
 </li><li>
 
 </li></ul>
 </div>
 <!-- /#sidebar-wrapper -->
 

 
 
 
 <!-- /#page-content-wrapper -->
 </div>
 </div>
 <!-- /#wrapper -->

  
  <!-- Page Content -->
 <div id="page-content-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <br>

 </div>
 </div>
 <div class="row">
 <div class="col-lg-12">

     <div>
</div>
 </div>
 </div>
 </div>
 </div>
  
  
  <!-- this is div for user post -->
<div class="fluid-container">
<div class="row" style="clear:both">
 <div class="col-lg-12">
 	    <div class="col-lg-4">
		<div class="list-group" style="margin-left:0px">
 
   <a href="http://localhost/portal/portal/user.php" class="list-group-item active" style="background-color:black;">
    All task</a>
  
 <a href="http://localhost/portal/portal/ourskill.php" class="list-group-item">Profile
  </a>
  <a href="http://localhost/portal/portal/my_task.php" class="list-group-item">My task
  </a>
  <a href="http://localhost/portal/portal/user.php" data-toggle="modal" data-target="#squarespaceModal" class="list-group-item">
  	Post Task
  </a>
  <a href="http://localhost/portal/portal/notification.php" class="list-group-item">
  	Notification(0)
  </a>
  
  <a href="http://localhost/portal/portal/changepass.php" class="list-group-item">Change Password
  </a>
  <a href="http://localhost/portal/portal/logout1.php" class="list-group-item">Log Out
  </a>
</div>
</div>
 	     <div class="col-lg-8">

          
						<div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=11"><img src="./user1_files/ennie.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=11">	mo</a> </b>
														<li><small>just now</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=14&amp;s_title=hallo">
							  hoi</a>
							  
							                 <p>hallo</p>

											 <br><br><a href="http://localhost/portal/portal/project_description.php?id=14&amp;s_title=hallo" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=11"><img src="./user1_files/ennie.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=11">	mo</a> </b>
														<li><small>3 minutes ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=13&amp;s_title=hallo">
							  hoi</a>
							  
							                 <p>hallo</p>

											 <br><br><a href="http://localhost/portal/portal/project_description.php?id=13&amp;s_title=hallo" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=11"><img src="./user1_files/ennie.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=11">	mo</a> </b>
														<li><small>3 minutes ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=12&amp;s_title=hallo">
							  hoi</a>
							  
							                 <p>hallo</p>

											 <br><br><a href="http://localhost/portal/portal/project_description.php?id=12&amp;s_title=hallo" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=6"><img src="./user1_files/Hydrangeas - Copy.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=6">	tasneem</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=11&amp;s_title=hfgvhfgjgjgj">
							  jgjgjhg</a>
							  
							                 <p>hfgvhfgjgjgj</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=11"><img style="height:20px; width=" 20px"="" src="./user1_files/ennie.jpg"></a>
										&nbsp; &nbsp;hgfhfj
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>11 minutes ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=11"> mo</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=11"><img style="height:20px; width=" 20px"="" src="./user1_files/ennie.jpg"></a>
										&nbsp; &nbsp;ewaaaa
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>10 minutes ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=11"> mo</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=11&amp;s_title=hfgvhfgjgjgj" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=2"><img src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=2">	shafik</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=10&amp;s_title=fdjsiogjodisjgpo">
							  kjdhskjfg</a>
							  
							                 <p>fdjsiogjodisjgpo</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;kjdsahfkj kjhdfs dgafa jdahsfj 
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;ksdhgkjf fdhgui kjfdh
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;kjdhvkjsdh
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;dskjhfdkj
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=6"><img style="height:20px; width=" 20px"="" src="./user1_files/Hydrangeas - Copy.jpg"></a>
										&nbsp; &nbsp;hhhhhhhhhhhhhhhhhhhhhhhhh
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=6"> tasneem</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=6"><img style="height:20px; width=" 20px"="" src="./user1_files/Hydrangeas - Copy.jpg"></a>
										&nbsp; &nbsp;aaaaaaaaaaaaaaaaaaaaaaaaaa
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=6"> tasneem</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=10&amp;s_title=fdjsiogjodisjgpo" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=2"><img src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=2">	shafik</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=9&amp;s_title=hdfgsihidfshi">
							  kljfgjfdl</a>
							  
							                 <p>hdfgsihidfshi</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;kdfhgkj jfdhg fgds
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=9&amp;s_title=hdfgsihidfshi" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=1"><img src="./user1_files/New Doc 2017-02-26_2.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=1">	rahul</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=8&amp;s_title=sahdgiyosiad">
							  lsdhgio</a>
							  
							                 <p>sahdgiyosiad</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=2"><img style="height:20px; width=" 20px"="" src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a>
										&nbsp; &nbsp;fdhgkfjds
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=2"> shafik</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=2"><img style="height:20px; width=" 20px"="" src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a>
										&nbsp; &nbsp;kjkghtrkjh jrhtgkjtrk
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=2"> shafik</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=2"><img style="height:20px; width=" 20px"="" src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a>
										&nbsp; &nbsp;ksjfdgkjhs
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=2"> shafik</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=8&amp;s_title=sahdgiyosiad" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=1"><img src="./user1_files/New Doc 2017-02-26_2.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=1">	rahul</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=7&amp;s_title=ksadhiufyiusdyaiu">
							  kjdshfguhisad</a>
							  
							                 <p>ksadhiufyiusdyaiu</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=2"><img style="height:20px; width=" 20px"="" src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a>
										&nbsp; &nbsp;lfjgkldflsg kjdhgkjhk kjfdshgkjjf
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=2"> shafik</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=6"><img style="height:20px; width=" 20px"="" src="./user1_files/Hydrangeas - Copy.jpg"></a>
										&nbsp; &nbsp;luliuououoiuo
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=6"> tasneem</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=7&amp;s_title=ksadhiufyiusdyaiu" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=1"><img src="./user1_files/New Doc 2017-02-26_2.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=1">	rahul</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=6&amp;s_title=dflijoisfjougo">
							  mknfvkjdf</a>
							  
							                 <p>dflijoisfjougo</p>

											 <br><br><a href="http://localhost/portal/portal/project_description.php?id=6&amp;s_title=dflijoisfjougo" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="post-show" style="width:90%;border-radius:5px">
									<div class="post-show-inner">
										<div class="post-header">
											<div class="post-left-box">
												<div class="id-img-box"><a href="http://localhost/portal/portal/otheruser.php?userid=1"><img src="./user1_files/New Doc 2017-02-26_2.jpg"></a></div>
												<div class="id-name">
													<ul>
													<b><a href="http://localhost/portal/portal/otheruser.php?userid=1">	rahul</a> </b>
														<li><small>2 years ago</small></li>
													</ul>
												</div>
											</div>
											<div class="post-right-box"></div>
										</div>
									
											<div class="post-body">
											<div class="post-header-text">
							 <a href="http://localhost/portal/portal/project_description.php?id=5&amp;s_title=oifdiogjfsio">
							  kfgkl</a>
							  
							                 <p>oifdiogjfsio</p>

											 <br><br><div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=1"><img style="height:20px; width=" 20px"="" src="./user1_files/New Doc 2017-02-26_2.jpg"></a>
										&nbsp; &nbsp;oidfugioudsi
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=1"> rahul</a></font>
													</ul>
											</div>
										</div>
										
										<div style="margin-left:50px">
										<a href="http://localhost/portal/portal/otheruser.php?userid=2"><img style="height:20px; width=" 20px"="" src="./user1_files/1888448_898409750258226_6887486239911226423_n.jpg"></a>
										&nbsp; &nbsp;kjchvuds
											 </div>
											 <div style="margin-left:50px"><div class="id-name">
													<ul>
													
														<small>2 years ago</small> &nbsp; &nbsp; &nbsp;<font style="color:blue"> comment by :</font> <font style="font-size:12px"><a href="http://localhost/portal/portal/otheruser.php?userid=2"> shafik</a></font>
													</ul>
											</div>
										</div>
										
										<a href="http://localhost/portal/portal/project_description.php?id=5&amp;s_title=oifdiogjfsio" class="btn btn-default">Post Your Comment</a></div>

								</div>
								</div></div><br> <div class="col-lg-8" style="text-align:center; font-size:20px"><a href="http://localhost/portal/portal/user.php?page=1">|&lt; Prev </a> <a href="http://localhost/portal/portal/user.php?page=1">1</a> <a href="http://localhost/portal/portal/user.php?page=2">2</a> <a href="http://localhost/portal/portal/user.php?page=2"> Next &gt;|</a> </div>                            

</div>

		<!--content -->
			
						




</div>

</div>

</div>



 
<!-- Bootstrap Core JavaScript -->
<script src="./user1_files/bootstrap.min.js.download"></script>

<!-- Menu Toggle Script -->
<script>
 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


	<script type="text/javascript">
		$(document).ready(function(){
			$('.status').click(function() { $('.arrow').css("left", 0);});
			$('.photos').click(function() { $('.arrow').css("left", 146);});
		});
	</script>
	

    </nav>
    
</body></html>