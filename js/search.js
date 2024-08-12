async function search(searchTerm){    
    try{

        if (!searchTerm || searchTerm.trim() === "") {
            document.querySelector("#result").innerHTML = "";   
            return; 
        }

        let response = await fetch('crud/search.php',{
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `search=${encodeURIComponent(searchTerm)}`
        });

            let data = await response.text(); // Process the response as plain text
            
            document.querySelector("#result").innerHTML = data;
        

    }catch(error){
        console.error('Fetch error:', error);
    }
}