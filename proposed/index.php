<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>SQL Fiddle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<!-- Le styles -->
	<link href="/css/all.css" rel="stylesheet">
	<link href="/css/codemirror.css" rel="stylesheet">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="sqlfiddle-icon" href="./index.html">
					<img src="/img/sql_runner_reasonably_small_icon.png">
				</a>
				<a class="brand" href="./index.html">SQL Fiddle</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active">
							<a href="#!/run"><i class="icon-play"></i>Run</a>
						</li>
						<li class="">
							<a href="#!/clear"><i class="icon-refresh"></i>Clear</a>
						</li>
						<li class="">
							<a href="#!/save"><i class="icon-inbox"></i>Save</a>
						</li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"data-toggle="dropdown">
								 Share <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="twitter">
									<a href="#!/twitter"><i class="icon-retweet"></i>Twitter</a>
								</li>
								<li class="facebook">
									<a href="#!/facebook"><i class="icon-user"></i>Facebook</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2" id="sidebar">
				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">
							Databse Type
						</li>
						<li>
							<a href="#">
								<i class="icon-tag"></i>MS SQL Server 2008 R2
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-tag"></i>MySQL 5.5.20
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-tag"></i>Oracle 11g R2
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-tag"></i>PostgreSQL 9.1.2
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="span10" id="content">
				<div class="span12" id="schema-output">
					<div class="span6 panel schema">
						<ul class="nav nav-tabs" id="schema-tab">
							<li class="active">
								<a href="#schema-ddl" data-toggle="tab">DDL</a>
							</li>
							<li>
								<a href="#schema-csv" data-toggle="tab">CSV</a>
							</li>
							<li>
								<a href="#schema-text" data-toggle="tab">Text</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="schema-ddl">
								<form id="fiddleFormDDL" method="post" action="">
									<textarea id="result-ddl" name="result-ddl" class=""></textarea>
								</form>
							</div>
							<div class="tab-pane" id="schema-csv">
								<form id="fiddleFormCSV" method="post" action="">
									<textarea id="result-csv" name="result-csv" class=""></textarea>
								</form>
							</div>
							<div class="tab-pane" id="schema-text">
								<form id="fiddleFormText" method="post" action="">
									<textarea id="result-text" name="result-text" class=""></textarea>
								</form>
							</div>
						</div>
					</div>
					<div class="span6 panel sql">
						<form id="fiddleFormSQL" method="post" action="">
							<label for="sql-ta" class="well">SQL</label>
							<textarea id="sql-ta" name="sql-ta" class=""></textarea>
						</form>
					</div>
				</div>
				<div class="span12 panel" id="output">
					<form id="fiddleFormResult" method="post" action="">
						<label for="sql-ta" class="well">Result</label>
						<textarea id="result-ta" name="result-ta" class=""></textarea>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	<script src="/js/libs/codemirror.js"></script>
	<?php
	/*
	<script src="/js/libs/bootstrap-transition.js"></script>
	<script src="/js/libs/bootstrap-alert.js"></script>
	<script src="/js/libs/bootstrap-modal.js"></script>
	
	<script src="/js/libs/bootstrap-scrollspy.js"></script>
	
	<script src="/js/libs/bootstrap-tooltip.js"></script>
	<script src="/js/libs/bootstrap-popover.js"></script>
	<script src="/js/libs/bootstrap-button.js"></script>
	<script src="/js/libs/bootstrap-collapse.js"></script>
	<script src="/js/libs/bootstrap-carousel.js"></script>
	<script src="/js/libs/bootstrap-typeahead.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/script.js"></script>
	*/
	?>
	<script src="/js/libs/bootstrap-dropdown.js"></script>
	<script src="/js/libs/bootstrap-tab.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/script.js"></script>
	
  </body>
</html>