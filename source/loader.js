window.onload=progress;

function progress()
{
	$(".login_box").hide();
    var i = 0;
    setInterval(function ()
    {
        if (i != 101)
        {
            $("#progress").css('width', i + '%');
            i++;
        }
        else if(i == 100 || i == 101)
        {
            $(".background").fadeOut("fast");
			$(".login_box").fadeIn("fast");
        }
    }, 10);
}

