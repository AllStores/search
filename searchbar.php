	             
	             
    <script type="text/javascript">
	        $(document).ready(function(){
	        
	        	        
	        getStoresMetadata();
	      	
	        
           	
		$("#search-box").keyup(function(){
		
		$("#search-box").css("background","#FFF url(loadericon.gif) no-repeat 100%");
		$("#merchant-data").empty();
		if($(this).val()) {
		  filterData($(this).val());
		  }
		  else{
		  	  $("#search-box").css("background","#FFF");
		  }
		});
	      
	    });
  
    </script>
	         
	         
	         
	             <form method="POST" action="./searchresults.php">
		            <input type="text" id="search-box" placeholder="Type here" autocomplete="off"/> <input type="submit" value="Search" class="btn btn-info btn-lg" />
		     </form>
		     <div id="suggesstion-box" style="margin-right:auto;  margin-left: 40%;width: 30%;">
		             <!--    Placeholder for metadata search items listing    -->
		     <ul id="merchant-data" style="float: left;list-style: none;margin: 0;padding: 0;width: 100%;height: 100%;"></ul>
		     </div>