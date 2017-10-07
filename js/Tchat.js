function recup()
    {$.post('get_msg.php',function(data){
        $('.chat .messages').html(data);});
    }//fonction trecuperi les infos mel base de données, sachant que msget oala usernames 

setInterval(recup,1000); //Fi kol 1sec lfunction recup temchi
recup();