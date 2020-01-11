<!DOCTYPE html>


<html lang="">

<head>
<title>Watson Dicovery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 42px;
  height: 40px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 5%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  &nbsp;
  &nbsp;
    </div>
    <!-- ################################################################################################ -->
  </div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="one_half first">
      <h1 class="logoname"><a href="index.html"><img src = "images/logo.png" style = "height:100px;width:250px;">&nbsp;<img src = "images/head.jpg"></a></h1>
    </div>
    
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="index.html">Home</a></li>
      <li><a href="personality.php">Personality Insights</a></li>
	  <li><a href="../index.php">PBEd</a></li>
      </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/discovery.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    &nbsp;<br>
	&nbsp;
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
     
      
      <div id="comments">
        
			
				<div class="wrap">
				   <div class="search">
					  <input type="text" class="searchTerm" placeholder="What are you looking for?">
					  <button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					 </button>
				   </div>
				</div>
		<h2>Search Results</h2>
        <ul>
          <li>
            <article>
              <header>
               
                <address style = "font-size:20px;">
                <a href="landingpage.html">Preparing for an interview</a>
                </address>
                <h6 style = "font-size:15px;">By Indeed Career Guide</h6>
              </header>
              <div class="comcont">
                <p>1. Carefully examine the job description <br>
					2. Consider why you are interviewing and your qualifications <br>
					3.Perform research on the company and role<br>
					4.Consider your answers to common interview questions...</p>      <!-- https://www.indeed.com/career-advice/interviewing/how-to-prepare-for-an-interview-->       </div>
            </article>
          </li>
          <li>
            <article>
              <header>
               
                <address style = "font-size:20px;">
                <a href="landingpage.html">15 Tips for a Successful Job Interview in the Philippines</a>
                </address>
                <h6 style = "font-size:15px;">By BusinessTips.ph</h6>
              </header>
              <div class="comcont">
                <p>
				1. Do a research about the company.<br>
				2. Review common interview questions.<br>
				3. Wear your best formal outfit.<br>
				4. Arrive early... <!-- https://businesstips.ph/tips-for-a-successful-job-interview-in-the-philippines/ -->
				
				</p>             </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                
                <address style = "font-size:20px;">
                <a href="landingpage.html">Your Guide to Making a Great First Impression</a>
                </address>
                <h6 style = "font-size:15px;">By Jobstreet</h6>
              </header>
              <div class="comcont">
                <p>
				1. Do your research.<br>
				2. Prepare your own questions.<br>
				3. Plan your outfit.<br>
				4. Practice your answers... <!-- https://www.jobstreet.com.ph/career-resources/guide-making-great-first-impression#.Xhnx8yMRVEY -->
				
				
				</p>             </div>
            </article>
          </li>
        </ul>
        
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>