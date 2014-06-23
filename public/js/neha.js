var functions={
    mainFormsubmit:function(){
        document.forms['searchquerybox'].submit();
    },
    delete:function(path){
        if(confirm('Are You confirm to delete')){
            window.location.assign(ADMINPATH+path);
        }
    }
    
    
};

