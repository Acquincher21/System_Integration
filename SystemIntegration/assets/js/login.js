   function validateForm() {
        const username = document.forms["loginForm"]["username"].value.trim();
        const password = document.forms["loginForm"]["password"].value.trim();

         if (username === "") {
                alert("Please enter your username.");
                return false;
         }

         if (password === "") {
                alert("Please enter your password.");
                return false;
         }

         // You can add more validation here (e.g., length, special chars)

         return true; // allow form submit
    }
