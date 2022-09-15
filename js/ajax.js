$(document).ready(function(){
    $('#submit').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var city = $('#city').val();

        if(name == ''||email == ''|| phone==''|| city == ''){
            alert("Please Fill all fields");
            return false;
        }

        $.ajax({
            type: "POST",
            url: 'store.php',
            data:{
                name : name,
                email : email,
                phone : phone,
                city : city
            },
            cache: false,
            success: function(data){
                alert(data);
            },
            error: function(xhr, status, error){
                console.error(xhr);
            }
        });
    });
});
