/**
 * Created by Femencha Azombo Fabr on 8/27/14.
 */

function showContact()
{
    document.getElementById("contact").style.display = "block" ;
    document.getElementById("pagination").style.display = "none" ;
}

function hideContact()
{
    document.getElementById("contact").style.display = "none" ;
    document.getElementById("pagination").style.display = "block"
}

function confirmDelete(){
    if(confirm("Do you really want to delete this contact?"))
        return true ;
    else
        return false ;
}

function edit(){
    document.getElementById("edit").style.display = "block" ;
}

function liveSearch(location){

    var $text = document.getElementById('searchid').value   ;
    //alert(location + "   ---   "  +   $text);
    /*$('#loading').css('visibility','visible');*/
    $.ajax({
        type: 'post',
        url: location,
        data: {search: text},
        dataType: "html",
        success: function ( msg ){/*
            $('#loading').css('visibility','hidden');
            msg = msg%10;
            if(msg == fail)
            {
                return fail;
            }
            else
            {
                document.getElementById(err).innerHTML="<span style=\"color: blue; font-size: 23px;\"><br>comment successfull</span>";
                return pass;
            }*/
        }
    })
    $.post({

    })
    alert("at the end");
}


/*
$(function(){
    $(".search").keyup(function(){
        var searchid = $(this).val() ;
        var dataString = 'search='+ searchid ;

        if(searchid != ''){
            $.ajax({
                type: "POST",
                url: "{{URL::route('search')}}",
                data: dataString,
                cache: false,
                success: function(html){
                    $("#result").html(html).show();
                }
            });
        } return false ;
    }) ;

    jQuery("#result").live("click" , function(e){
        var $clicked = $(e.target) ;
        var $name = $clicked.find('.name').html() ;
        var $decoded = $("<div/>").html($name).text() ;

        $('#searchid').val($decoded) ;
    })

    jQuery(document).live("click" , function(e){
        var $clicked = $(e.target) ;
        if(! $clicked.hasClass("search")){
            jQuery("#result").fadeOut() ;
        }
    }) ;

    $('#searchid').clicked(function(){
        jQuery("#result").fadeIn() ;
    });
});
*/

/*
function showUser(str) {
    if (str=="") {
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
}
*/
