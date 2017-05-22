<!DOCTYPE html>
<html lang="en-us">
   <head>
      <title>TechEdu++ data editor</title>
     
      <link rel="stylesheet" href="/ex/css/bootstrap.min.css"/> 
   </head>
   <body>

    <div class="container">
		<div class="row panel panel-primary">
			<div class="panel-heading">
				<h4>Ученическа система</h4>
			</div>
			<div class="row panel-body">
				<div class="row">
					<div class="col-md-2"> <a href="infocourse/?table=Trainers" class="btn btn-raised btn-primary">Trainers</a> </div>
				</div>
				<div class="row" style="height: 15px"> </div>
				<div class="row">
					<div class="col-md-2"> <a href="infocourse/?table=Comments" class="btn btn-raised btn-primary">Coomments</a> </div>
					<div class="col-md-2"> <a href="infocourse/?table=Tracks" class="btn btn-raised btn-primary">Traks</a> </div>
					<div class="col-md-2"> <a href="infocourse/?table=Seminars" class="btn btn-raised btn-primary">Seminars</a> </div>
					<div class="col-md-2"> <a href="infocourse/?table=News" class="btn btn-raised btn-primary">News</a> </div>
					<div class="col-md-2"> <a href="infocourse/?table=Courses" class="btn btn-raised btn-primary">Courses</a> </div>
					<div class="col-md-2"> <a href="infocourse/?table=Videos" class="btn btn-raised btn-primary">Videos</a> </div>
				</div>
			</div>
		</div>
		<div class="row panel panel-primary">
			<div class="panel-heading">
				<h4>Тестваща система</h4>
			</div>
			<div class="row panel-body">
				<div class="row">
					<div class="col-md-2"> <a href="judge/?table=Users" class="btn btn-raised btn-primary">Users</a> </div>
				</div>
				<div class="row" style="height: 15px"> </div>
				<div class="row">
					<div class="col-md-2"> <a href="judge/?table=Contests" class="btn btn-raised btn-primary">Contests</a> </div>
					<div class="col-md-2"> <a href="judge/?table=Tasks" class="btn btn-raised btn-primary">Tasks</a> </div>
					<div class="col-md-2"> <a href="judge/?table=Submissions" class="btn btn-raised btn-primary">Submissions</a> </div>
					<div class="col-md-2"> <a href="judge/?table=Quizes" class="btn btn-raised btn-primary">Quizes</a> </div>
					<div class="col-md-2"> <a href="judge/?table=QuizesResults" class="btn btn-raised btn-primary">QuizesResults</a> </div>
					<div class="col-md-2"> <a href="judge/?table=QuizesTasks" class="btn btn-raised btn-primary">QuizesTasks</a> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href="/logout.php" class="btn btn-raised btn-primary">Log out</a>
		</div>
    </div>

    <script src="/ex/js/jquery-2.2.3.min.js"></script>
    <script src="/ex/js/bootstrap.min.js"></script>
	<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/ss/check.php"); ?>
   </body>
</html>
