 <html>
 
 
 
      <head>
	        <title>Meu primeiro site!!</title>
	 </head>
	 
	    <script scr= "https://code.jquery.com/jquery-3.5.1.js"></script>
		
		<style type="text/css">
		    .linha	{
				font-weight: bold;
				color: red;
				padding-left: 10px;
				line-height: 50px;
				
			}
		</style>
	</head>
		
		<body>
		
		<?php
		
       for ( $i = 0 ; $i < 10 ; $i++ ){
		   printf( "<span class=\"Linha\">Linha número " . $i . "</span><br />");
	   }
	   ?>
	   
	  </body>
	  
	  <script type="text/javascript">
	    $(document).ready (function () {
			alert("BOAAAAAAA!");		
			});
		
		</script>
		
</html>
	

	