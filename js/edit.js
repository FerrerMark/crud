const clearButton = document.querySelector("#clear");
   if (clearButton) {
     clearButton.addEventListener("click", function() {
        document.getElementById('edit_user_id').value = '';
        document.getElementById('edit_first_name').value = '';
        document.getElementById('edit_last_name').value = '';
        document.getElementById('edit_form').style.display = 'none';
     });
   } else {
     console.error("Element with ID 'clear' not found.");
   }


document.getElementById('edit_submit').addEventListener('click', function() {
    var userId = document.getElementById('edit_user_id').value;
    if (userId) {
        fetch(`./crud/get_user.php?user_id=${userId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    console.log(data);
                    console.log(" User ID: " + data.user_id);
                    document.getElementById('edit_first_name').value = data.fname;
                    document.getElementById('edit_last_name').value = data.lname;
                    document.getElementById('edit_form').style.display = 'block';
                }
            })
            .catch(error => console.error('Fetch error:', error));
    } else {
        alert('Please enter a user ID.');
    }
});


document.getElementById('update_submit').addEventListener('click', function() {
    var userId = document.getElementById('edit_user_id').value;
    var firstName = document.getElementById('edit_first_name').value;
    var lastName = document.getElementById('edit_last_name').value;

    if (userId && firstName && lastName) {
        var formData = new FormData();
        formData.append('user_id', userId);
        formData.append('first_name', firstName);
        formData.append('last_name', lastName);

        fetch('./crud/update_user.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            alert(result);
        })
        .catch(error => console.error('Fetch error:', error));
    } else {
        alert('Please fill in all fields.');
    }
});
