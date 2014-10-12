<script>	
    $(document).on("ready",function(){
		$(window).scroll(function(){
		    if (window.pageYOffset >= 0 && window.pageYOffset <= 1400) {
		        $('#div').css("background-image","url(http://dokdas.com/img/p2.jpg)");
		        var valor = ((window.pageYOffset)*-1);
		        $('#div').css("background-position","0% "+valor+"px");
		        var r = 480-((window.pageYOffset)/1.8);
		        $('#div').css("margin-top",r+"px");
		        $("#div").css("position","fixed");
		       }else{
		       	var r = 480-((window.pageYOffset)/1.8);
		        $('#div').css("margin-top",r+"px");
		       }
		});
	});
</script>
<style>
        	body{
        		background-color:#FFFFFF;
        		background-image: url(http://dokdas.com/img/p3.jpg);
        	}
        	
        	#div{
			    background-image: url(http://dokdas.com/img/p2.jpg);
			    width: 100%;
			    z-index:-10;
			    margin-top:480px;
			    height: 600px;
			    position:fixed;
			    background-repeat: no-repeat;
			}
			#div2{
			    background-image: url(http://dokdas.com/img/p3.jpg);
			    width: 100%;
			    z-index:-20;
			    margin-top:800px;
			    height: 1200px;
			    position:absolute;
			}
			form select{
				max-width: 100px;
			}
        </style>
</head>
<body>
<?echo $header;?>
    	<div id="div" class="hidden-phone">
    		&nbsp;
    	</div>
    	<div id="div2" class="hidden-phone">
    		&nbsp;
    	</div>
    	

<?echo $footer;?>
</body>
</html>