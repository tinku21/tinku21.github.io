<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="HIPAA Email encryption service for any email account. Send secure and HIPAA compliant email from your existing email account."/>
	<meta name="keywords" content="HIPAA compliant email, Hipaa email encryption, encrypted email, secure email" />
    <meta name="author" content="" />
	<link rel="shortcut icon" href="#" />
    <title>HIPAA Email Compliance</title>  
  <style>

    	.kwicks {
				height: 80px;
			}
			.kwicks > li {
				height: 80px;
				margin:0px;
				padding:0px;
			}
			.kwicks > li:hover {
				height:80px;
				margin:0px;
				padding:0px;
				font-size:1.2em;
				z-index:2;
				
			}
		.ron {
				margin:0px;
				padding:0px;
				width:100%;
				height:100%;
				font-size:12px;
				z-index:2;
				}
				.ron:hover {
				margin:0px;
				padding:0px;
				font-size:16px;
				z-index:2;
				
			}
		
		

			#panel-1 { background-color: #ac50dc; padding:10px; color:#fff;}
			#panel-2 { background-color: #5baf0a; padding:10px; color:#fff;}
			#panel-3 { background-color: #16a3fd; padding:10px; color:#fff;}
			#panel-4 { background-color: #ef880e; padding:10px; color:#fff;}
			
		.roundright{
		-moz-border-radius: 10px 0px 0px 10px;
-webkit-border-radius: 10px 0px 0px 10px;
border-radius: 10px 0px 0px 10px; 
-khtml-border-radius: 10px 0px 0px 10px;
		}
		.roundleft{
		-moz-border-radius: 0px 10px 10px 0px;
-webkit-border-radius: 0px 10px 10px 0px;
border-radius: 0px 10px 10px 0px; 
-khtml-border-radius: 0px 10px 10px 0px;
		}
		
a.icons1:link{
	color:#fff;
	text-decoration:none;
}
a.icons1:visited{
	color:#fff;
	text-decoration:none;
}
a.icons1:hover{
	color:#fff;
	text-decoration:none;
}

.gradient{
background: #fbfaaf; /* Old browsers */
background: -moz-linear-gradient(top, #fff 0%, #aeaeae 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fff), color-stop(100%,#aeaeae)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #fff 0%,#aeaeae 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #fff 0%,#aeaeae 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #fff 0%,#aeaeae 100%); /* IE10+ */
background: linear-gradient(to bottom, #fff 0%,#aeaeae 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#aeaeae',GradientType=0 ); /* IE6-9 */
}
.business-header {
    height: 400px;
    background: url(images/banner.png) no-repeat scroll center center / cover transparent;
	max-width:100%;
}

    </style>

    <link href="css/bootstrap.min.css" rel="stylesheet" />


    <link href="css/modern-business.css" rel="stylesheet" />
	<link href="fonts/flaticon.css" rel="stylesheet" />

    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel='stylesheet' type='text/css' href="css/jquery.kwicks.css" />
     <link rel='stylesheet' type='text/css' href="css/style6.css" />
 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    	<script src="js/jquery-1.11.0.js"></script>

    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-1.8.1.min.js" type='text/javascript'></script>
		<script src="js/jquery.kwicks.js" type='text/javascript'></script>
		
		<script type='text/javascript'>
			$(function() {
				$('.kwicks').kwicks({
					maxSize: '75%',
					behavior: 'menu'
				});
			});
		</script>
        <script>
 	$(document).ready(function(){
 		// This is the simple bit of jquery to duplicate the hidden field to subfile
 		$('#pdffile').change(function(){
			$('#subfile').val($(this).val());
		}); 

		// This bit of jquery will show the actual file input box
		$('#showHidden').click(function(){
			$('#pdffile').css('visibilty','visible');
		});
 	});
 	</script>
  
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding:9px; background-color:#fff; box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.3);">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <div class="logo"><span><img src="images/cry_logo.png" style="max-width:100%;height:auto;" alt=""/></span></div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right" style="padding-top:5px;">
                    <li>
                        <a href="#" style="background-color:#5baf0b;">Home</a>
                    </li>
                    <li>
                        <a href="howitworks.html">How it Works</a>
                    </li>
                    <li>
                        <a href="https://cryptnsend.com/CryptNsendTrail.aspx" target="_blank">Free Trial</a>
                    </li>
                   
                    <li>
                        <a href="#C1">Pricing</a>
                    </li>
                     <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                  
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




<div class="container" style="padding-top:25px; padding-bottom:48px;">
<div class="col-lg-12"> 


<div style="width:500px; margin-left:auto; margin-right:auto; margin-top:15%; font-size:1.4em; text-align:center; font-weight:600;"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:#fbba0a;"></i>
“Temporarily we are not taking new subscriptions for this service. We suggest you to subscribe for <a href="https://mdofficemail.com/subscriptions/orderservices.aspx">MDofficeMail Email Account</a> service. Inconvenience is regretted.”
      </div>
</div>


                        </div>




</div>

    

 
<div style="background-color:#333333; color:#fff; width:100%; padding:16px; position:fixed; font-size:10px; margin-top:70px; bottom:0px;"><div class="container">© Copyright 2012.Crypt-n-Send. All Rights Reserved</div></div>
<!-- BoldChat Visitor Monitor HTML v4.00 (Website=- None -,ChatButton=MDOM button,ChatInvitation=My Invite Ruleset) -->
<script type="text/javascript">
  var _bcvma = _bcvma || [];
  _bcvma.push(["setAccountID", "461456758140052184"]);
  _bcvma.push(["setParameter", "InvitationDefID", "2698474070870641710"]);
  _bcvma.push(["addFloat", {type: "chat", id: "2531959689083549381"}]);
  _bcvma.push(["pageViewed"]);
  (function(){
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/461456758140052184/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  })();
</script>
<noscript>
<a href="http://www.boldchat.com" title="Live Chat Software" target="_blank"><img alt="Live Chat Software" src="https://vms.boldchat.com/aid/461456758140052184/bc.vmi" border="0" width="1" height="1" /></a>
</noscript>
<!-- /BoldChat Visitor Monitor HTML v4.00 -->
<div class="modal fade" id="modal-1" >
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crypt-n-Send Email Encryption Service</h4>
      </div>
      <div class="modal-body" style="color:#000; font-size:1.2em;">
        “Temporarily we are not taking new subscriptions for this service. We suggest you to subscribe for <a href="https://mdofficemail.com/subscriptions/orderservices.aspx">MDofficeMail Email Account</a> service. Inconvenience is regretted.”
      </div>
      
    </div>
  </div>
</div>
</body>

</html>

