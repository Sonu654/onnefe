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


function add_new_news(){
    heading=document.add_news.heading.value;
    content=document.add_news.content.value;
    main_cat=document.add_news.main_cat.value;
    sub_cat=document.add_news.sub_cat.value;
    ack=document.add_news.ack.value;
    
     if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
            xmlHttp.open('get','add_news.php?heading='+heading+'&content='+content+'&main_cat='+main_cat+'&sub_cat='+sub_cat+'&ack='+ack,true);
            xmlHttp.onreadystatechange = handleServerResponse_server_add_news;
	    xmlHttp.send(null);
        }
}

function handleServerResponse_server_add_news(){
     if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
        get_db_news();
        document.getElementById('add_result').innerHTML=xmlHttp.responseText;  
        }
    }
}

function get_db_news(){
    if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
            xmlHttp.open('get','get_news.php',true);
            xmlHttp.onreadystatechange = handleServerResponse_db_news;
	    xmlHttp.send(null);
        }
}

function handleServerResponse_db_news(){ 
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            document.getElementById('recent_news').innerHTML= xmlHttp.responseText;
        }
    }
}

function edit_news_(news_id){
        document.getElementById('add_news_form').style.opacity='0';
        document.getElementById('news_block').style.opacity='0';
    //    document.getElementById('add_result').style.z-index='1';
        document.getElementById('add_result').style.display='block';
            var form=document.getElementById('add_news');
            var elements=form.elements;
           // alert(elements.length);
            for(i=0; i<elements.length;i++){
               // alert(elements[i].name+"is blocked");
                elements[i].setAttribute("readonly","true");
            }
      //  document.getElementById('add_news_form').getElementById('*').disabled();
        if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
            xmlHttp.open('get','edit_news.php?news_id='+news_id,true);
            //  alert('working');
            xmlHttp.onreadystatechange = handleServerResponse_edit_news;
	    xmlHttp.send(null);
        }
       // document.getElementById('crud').innerHTML='<div>Add'+news_id+'</div>';
}

function handleServerResponse_edit_news(){
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            document.getElementById('crud').innerHTML=xmlHttp.responseText;
        }
    }
}

function close_opened_block(){
        document.getElementById('add_result').style.display='none';
        document.getElementById('add_news_form').style.opacity='1.0';
        document.getElementById('news_block').style.opacity='1.0';
        var form=document.getElementById('add_news');
            var elements=form.elements;
                    //alert(elements.length);
            for(i=0; i<elements.length;i++){
               // alert(elements[i].name+"is blocked");
                elements[i].removeAttribute("readonly","true");
            }
}
function view_loged_user(){
    alert("Sahil");
}