var xmlHttp;

if (window.XMLHttpRequest)
  {
  xmlHttp=new XMLHttpRequest();
  }
else
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

function show_rel_news(category_id){
    
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
               
            xmlHttp.open('get','get_news.php?category_id='+category_id,true);
           
            xmlHttp.onreadystatechange = handleServerResponse;
	    xmlHttp.send(null);
        }
}

function handleServerResponse(){ 
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            document.getElementById('news').innerHTML= xmlHttp.responseText;
        }
    }
}