var stores_metadata_cols_to_be_searched="merchant_id,merchant_name,items_category,main_items,keywords,store_address";
var stores_metadata;
var maxCountOfEachMerchant=3;
var stores_metadata_srachable_cols_arr;
var storage_metadata_key="stores_metadata";
var storage_filtered_metadata_key="filtered_stores_metadata";
var website_url="website_url";
var filteredJSONArr=[];

(function($){
 
<!-- This function is called only once to load the stores metadata .....TODO Need to be optimized . Send event from server that data got updated and then update  in client side too-->
getStoresMetadata=function (){

	$.get( "storesmetadata.php", function( data ) {
        //stores_metadata=JSON.parse(data);
        
        //if(typeof(Storage)!=undefined){
        //localStorage.setItem(storage_metadata_key,JSON.stringify(stores_metadata));
        //}
        //else{
        //console.log("not able to set local storage for the client");
        //}
       
        
       });
       
      }  
    
    
       
    
<!-- On every key up on search page this function is triggered -->
 filterData=function( searchkeyword ){
	
	        searchkeyword=searchkeyword.toLowerCase();
	
		var tempItem;
		var col_name;
		
		
		for(searchable_col in stores_metadata_srachable_cols_arr){
		
		col_name=stores_metadata_srachable_cols_arr[searchable_col];
		
		
			//************************************************************
			var filteredJSON = $.grep(stores_metadata, function (e) {
			
			var value=e[col_name].toLowerCase();
			
				if(value.indexOf(searchkeyword)!=-1){
					   
					   return true;
					   
			         }
			        else{
					  
					   return false;
			          }
			
			
			});
			
			for(i=0;i<filteredJSON.length;i++){
			var name="\""+filteredJSON[i][col_name]+"\"";
			tempItem="<li onClick='selectdata("+name+")'>"+filteredJSON[i][col_name]+"     </li>";
			$("#merchant-data").append(tempItem);
			}
			
			
			
		
		
		     }
		
	         $("#suggesstion-box").show();

                             
	
              }
    

<!-- On every selection of suggested keyword in search box of Search page this function is triggered -->
 selectdata=function(val) {
			$("#search-box").val(val);
			$("#search-box").css("background","#FFF");
			$("#suggesstion-box").hide();
			
			
			val=val.toLowerCase();
			
		        for(searchable_col in stores_metadata_srachable_cols_arr){
		
		                col_name=stores_metadata_srachable_cols_arr[searchable_col];
		
		
			        //************************************************************
				var filteredJSON = $.grep(stores_metadata, function (e) {
				
				var value=e[col_name].toLowerCase();
				
					if(value.indexOf(val)!=-1){
						  
						   return true;
						   
				         }
				        else{
						   					  
						   return false;
				          }
				
				
				});
	
	                        console.log(filteredJSON);
				
				for(i=0;i<filteredJSON.length;i++){
		                 item = filteredJSON[i];
	                         filteredJSONArr.push(item);
				}
			
		
		     	}
		         
                     localStorage.setItem(storage_filtered_metadata_key,JSON.stringify(filteredJSONArr));
                     
                     console.log(JSON.stringify(filteredJSONArr));
			
		}
     

  
})(jQuery);