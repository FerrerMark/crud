<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table of data</title>
    <link rel="stylesheet" href="cssFolder/index.css">
</head>
<body>
    <div class="container">
        <div class="table-container">
            <h1>retrieve</h1>   
            <table id="table">
                <tr>
                    <td>user_id</td>
                    <td>fname</td>
                    <td>lname</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>ferrer</td> 
                    <td>mark</td>
                </tr>
            </table>
        </div>
        
        <div class="search-box">
            <h1>search</h1>
                <input type="text" name="search" onkeyup="search(this.value)" placeholder="search" id="input_search">
                result :<p id="result"></p>
        </div>

        <div class="insert">
            <h1>add</h1>
                <form id="addForm">
                    <input type="text" name="first_name" id="" placeholder="first name" required>
                    <input type="text" name="last_name" id="" placeholder="last name" required>
                    <button type="submit">submit</button>
                </form>
                <p id="response"></p>
        </div>

        <div class="table-container">
            <h1>Edit</h1>
            <input type="text" id="edit_user_id" placeholder="user_id" required>
            <button type="button" id="edit_submit">Submit</button>

            <div id="edit_form" style="display: none;">
                <input type="text" id="edit_first_name" placeholder="first name">
                <input type="text" id="edit_last_name" placeholder="last name">
                <button type="button" id="update_submit">Update</button>
            </div>
            <button type="submit" id="clear">clear</button>
        </div>

        <div class="table-container">
            <h1>Delete</h1>
            
        </div>
    </div>
    

    <script src=./js/retrieve.js></script>
    <script src=./js/search.js></script>
    <script src="./js/add.js"></script>
    <script src="./js/edit.js"></script>
    <script>
        retrieve();
        search();
    </script>
</body>
</html>