document.getElementById('ticketForm').addEventListener('submit', function(event) {
        // Prevent the default form submission to show the alert first
        event.preventDefault(); 
        
        alert('Your ticket has been successfully submitted. A representative will respond to your inquiry within 24 business hours.');
        
        this.reset();
    });