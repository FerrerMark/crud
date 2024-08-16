document.getElementById("delete_submit").addEventListener("click", function(){
    let userId = document.getElementById("delete_user_id").value;

    if(userId){
        console.log("userid = " + userId);
        fetch(`./crud/get_user.php?user_id=${userId}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                console.log(data);
                document.getElementById("info").style.display = 'block';
                document.getElementById("userId").innerHTML = data.user_id;
                document.getElementById("fname").innerHTML = data.fname;
                document.getElementById("lname").innerHTML = data.lname;
                
            }
        })
    }
});

document.getElementById("delete_user").addEventListener("click",function(){
    let userId = document.getElementById("delete_user_id").value;

    if(userId){
        if(confirm('Are you sure you want to delete this user?')){
            fetch(`./crud/delete.php?user_id=${userId}`)
            .then(response => response.json())
            .then(data => {
            console.log(data);
            document.getElementById("delete_user_id").value = "";
            document.getElementById("info").style.display = 'none';
            document.getElementById("delete_result").innerHTML = 'data deleted succesfully';
        })
        }else{
            
        }
    }
});