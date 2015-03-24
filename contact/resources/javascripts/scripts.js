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
    if(confirm("Do you really want to delete this contact?")){
        return true ;
    }
    else
    return false ;
}