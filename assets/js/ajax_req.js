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
           
            xmlHttp.onreadystatechange = handleServerResponse_rel_news;
	    xmlHttp.send(null);
        }
}

function handleServerResponse_rel_news(){ 
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            document.getElementById('news').innerHTML= xmlHttp.responseText;
        }
    }
}


function get_server_pass(user_id){
    if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
           
            xmlHttp.open('get','database.php?user_id='+user_id,true);
            xmlHttp.onreadystatechange = handleServerResponse_server_pass;
	    xmlHttp.send(null);
        }
}

function handleServerResponse_server_pass(){ 
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
          pass= document.update_pass.c_pass.value= xmlHttp.responseText;
            
        }
    }
}