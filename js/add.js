const form = document.getElementById('addForm');
form.addEventListener('submit', async (event) => {

    event.preventDefault(); // Prevent the default form 
    
    

    try {
        const formData = new FormData(form); // Create FormData object from form
        const response = await fetch('crud/create.php', {
            method: 'POST',
            body: formData
        });

        const data = await response.text(); // Display server response
        document.getElementById('response').innerHTML = data;
        console.log(data);

        // Clear the input fields
        const inputs = form.querySelectorAll('input[type="text"]');
        inputs.forEach(input => {
            input.value = '';
        });

    } catch (error) {
        console.error('Error:', error);
    }
});
