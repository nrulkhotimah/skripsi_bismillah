$(document).ready(function(){
    $('#content').load('application/views/admin/Home.php');

    $('ul li a').click(function(){
        var page = $(this).attr('href');
        $('#content').load('application/views/admin/'+ page +'.php');
        return false;
    });
});