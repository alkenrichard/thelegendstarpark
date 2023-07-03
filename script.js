var a=0;
function show_hide()
{
    if(a==1)
    {
        document.getElementById("full").style.display="none";
        return a=0;
    }
    else
    {
        document.getElementById("full").style.display="block";
        return a=1;
    }
}