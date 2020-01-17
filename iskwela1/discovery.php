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
<!-- ################################################################################################ --><br><br><br>
<div class="wrapper row3">
  <main class="hoc container clear"> <br><br><br>
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
     <br><br><br>
      
      <div id="comments">
        
			
				<div class="wrap">
				   <div class="search">
					  <input type="text" class="searchTerm" placeholder="What are you looking for?" id = "user-query">
					  <button type="submit" class="searchButton" onclick = "search()">
						<i class="fa fa-search"></i>
					 </button>

				   </div>
				</div>
		
        
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
<script>
	function search() {
	  var x = document.getElementById("user-query").value;
	  if (x == "how to prepare for an interview" || "How to prepare for an interview"){
		  location.replace("how_to_prepare.php")
	  } else {
		  location.replace("how_to_prepare.php")
	  } 
	  
}
</script>
</body>
</html>