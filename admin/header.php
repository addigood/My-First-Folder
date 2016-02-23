
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />		
		<title>Treemo Labs Dashboard | Stats Center</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				if (!($.browser.safari || $.browser.mozilla)) {
					$("form").hide();
					$("<div class='error' />").html("<h2>Browser Not Supported</h2>The Treemo Labs Dashboard utilizes cutting-edge browser technologies.<br /><br />We currently only support <ul><li>Firefox (version &gt; 3.5 recommended)</li><li>Safari (version &gt; 3 recommended)</li></ul>").appendTo('#login-content');
				}
			});
		</script>
		<link href="style.css" rel="stylesheet" type="text/css" />
				
	</head>
  
	<body id="login">
		