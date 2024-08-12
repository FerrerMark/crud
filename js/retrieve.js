  //AJAX
function retrieve() {
    let xhr = new XMLHttpRequest();
    
    xhr.open('POST', './crud/retrieve.php', true);
    xhr.send();
    xhr.onload = function() {
      if (xhr.status == 200) {
        let data = xhr.responseText;
        let table = document.querySelector("#table")
  
        let tableHEAD = `
          <tr>
            <th>userID</th>
            <th>fname</th>
            <th>lname</th>
          </tr>
        `;
  
        table.innerHTML = tableHEAD + data;
  
        setTimeout(retrieve, 1000);
      }
    };
  }
