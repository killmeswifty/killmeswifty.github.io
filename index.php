

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Дарова бандиты</title>
        
    </head>
    <body>
        <img src="http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg" alt="" />
    </body>
</html>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    var flag = true;
    function changeTitle(){
        if (flag) {
            $('title').html('Чики');
        } else {
            $('title').html('Брики');
        }
        flag = !flag;
    };

    $( document ).ready(function() {
        //Chiki briki every 2 seconds
        setInterval(changeTitle,2000);
    });
</script>