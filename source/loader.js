window.onload=progress;

function progress()
{
    var i = 0;
    setInterval(function ()
    {
        if (i != 101)
        {
            $("#bar").html(i + "%");
            $("#progress").css('width', i + '%');
            i++;
        }
        else if(i == 100 || i == 101)
        {
            $(".background").fadeOut("slow");
        }
    }, 100);
}
