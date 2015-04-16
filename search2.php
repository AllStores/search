<!DOCTYPE html>
<html>

<head>

    <style>
	.frmSearch {width:95%;height:80%;z-index:-1;}
	#merchant-data{float: left;list-style: none;margin: 0;padding: 0;width: 100%;height:200px;overflow:auto;}
	#merchant-data li{padding: 3px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;font-size:smaller}
	#merchant-data li:hover{background:#F0F0F0;}
	#search-box{padding: 10px;border: #F0F0F0 1px solid;margin-right:auto;  margin-left: 40%;width: 30%;}
	body{background-image: url('./bgtop.jpg')}
    </style>
	

        <title>AllStores</title>
        <script type="text/javascript" src="./jquery-2.1.1.min.js" ></script>
        <script type="text/javascript" src="./global.js"></script>
        <link rel="stylesheet" href="./bootstrap.min.css">

       

     
     
     
</head>


<body>
	
	<br/><br/><br/><br/><br/>
	
	<p style="margin-right:auto;  margin-left: 40%;width: 30%;color:white;font-size:large" >Your stores under one roof . Search your store</p>
	
	<div class="frmSearch" width="400px" height="400px">
           <?php include("./searchbar.php"); ?>
	</div>
	
	

</body>
</html>