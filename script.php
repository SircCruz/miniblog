<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var name;
    //for logging in
    function login(action){
        var data = null;
        if($("#email").val() != "" && $("#password").val() != ""){
            $(document).ready(function () {
                data = {
                    action : action,
                    email : $("#email").val(),
                    password : $("#password").val(),
                };
            
                $.ajax({
                    url: 'function.php',
                    type: 'post',
                    data: data,
                    success: function(response){
                        if(response == "Error"){
                            alert("Wrong username or password");
                        }
                        else{
                            alert("Welcome, " + response + "!");
                            name = response;
                            window.location = "posts.php";
                        }
                    }
                });
            });
        }
        else{
            alert("All fields cannot be empty.");
        }
    }

    //for registration
    function submitUser(action){
        if($("#username").val() != "" && $("#email").val() != "" && $("#password").val() != "" && $("#cpassword").val() != ""){
            if($("#password").val() == $("#cpassword").val()){
                var data = null;
                $(document).ready(function () {
                    data = {
                        action : action,
                        username : $("#username").val(),
                        email : $("#email").val(),
                        password : $("#password").val(),
                    };
                
                    $.ajax({
                        url: 'function.php',
                        type: 'post',
                        data: data,
                        success: function(response){
                            alert("Thank you for signing up, " + response + "!");
                            name = response;
                            window.location = "posts.php";
                        }
                    });
                });
            }
            else{
                alert("Passwords doesn't match, try again");
            }
        }
        else{
            alert("All fields cannot be empty.");
        }
    }

    //for creating post
    function createPost(action){
        var data = null;
        $(document).ready(function () {
            data = {
                action : action,
                title : $("#title").val(),
                content : $("#content").val(),
            };
        
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    window.location = "posts.php";
                }
            });
        });
    }

    //for editing post
    function editPost(action){
        var data = null;
        $(document).ready(function () {
            data = {
                action : action,
                id : $("#id").val(),
                title : $("#title").val(),
                content : $("#content").val()
            };
        
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    window.location = "posts.php";
                }
            });
        });
    }

    //for deleting post
    function deletePost(action, id){
        $(document).ready(function () {
            data = {
                action : action,
                id : id
            };
        
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success: function(response){
                    alert(response);
                    window.location = "posts.php";
                }
            });
        });
    }
    function getName(){
        document.getElementById('name').innerHTML = name;
    }
</script>