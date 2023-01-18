<script src="https://code.jquery.com/jquery-3.6.3.js">

</script>

<script type="text/javascript">
    function login(action){
        var data = null;
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
                    alert(response);
                    if(response == "Success"){
                        window.location = "posts.php";
                    }
                }
            });
        });
    }
</script>

<script type="text/javascript">
    function submitUser(action){
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
                        alert(response);
                        window.location = "posts.php";
                    }
                });
            });
        }
        else{
            alert("Passwords doesn't match, try again");
        }
    }
</script>

<script>
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
</script>

<script>
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
</script>

<script>
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
</script>