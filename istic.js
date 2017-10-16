function recup() {
    $.post('get_msg.php', function (data) {
        $('.chat .messages').html(data);
    });
} //fonction trecuperi les infos mel base de données, sachant que msget oala usernames 

setInterval(recup, 2000); //Fi kol 1sec lfunction recup temchi
recup();

//function send info to database
function send_msg() {
    $('.chat .enter').keyup(function (e) {
        var messages = $('.chat .enter').val();
        messages = $.trim(messages);
        if (messages !== "" && e.keyCode === 13 && e.shiftKey === false){
            $.post('send_msg.php',{messages:messages},function(){
                recup();
                $('.chat .enter').val('');   
            });
        }
    });
}
send_msg();