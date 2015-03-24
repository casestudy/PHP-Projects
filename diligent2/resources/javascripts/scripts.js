/**
 * Created by Femencha Azombo Fabr on 8/27/14.
 */


function validateForm(){
    $(document).ready(function(){
        $('#signup').submit(function(){
            $('#signup input').each(function(){
                if($(this).val() == '')
                {
                    alert($(this).attr('name') + ' cannot not be blank');
                    return false;
                }

            });

            if($('#password').val() != $('#confirmpassword').val()){
                alert('The password fields does not match. please type more carefully ' ) ;
                return false ;
            }
            return false;
        }) ;
    });
}