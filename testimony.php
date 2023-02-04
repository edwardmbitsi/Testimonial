<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>

<script>
  // Initialize Firebase
  var firebaseConfig = {
    apiKey: "AIzaSyCXw_HdlQorGAEuZvrwsZxs6iQEEob7SA0",
  authDomain: "form-25eb2.firebaseapp.com",
  databaseURL: "https://form-25eb2-default-rtdb.firebaseio.com",
  projectId: "form-25eb2",
  storageBucket: "form-25eb2.appspot.com",
  messagingSenderId: "238060808489",
  appId: "1:238060808489:web:ff12e3c49ca742bb87ef38"
  };
  firebase.initializeApp(firebaseConfig);
  
  // Get a reference to the database
  var database = firebase.database();

  // Get references to the form elements
  var form = document.getElementById("app");
  var nameInput = document.getElementById("description");
  var emailInput = document.getElementById("rating");
  
  // Listen for form submit
  form.addEventListener("submit", function(event) {
    event.preventDefault();
    
    // Get the form data
    var description = nameInput.value;
    var rating = emailInput.value;
    
    // Write the data to the Firebase database
    database.ref("users").push({
      rating: rating,
      description: description
    });
    
    // Clear the form
    ratingInput.value = "";
    descriptionInput.value = "";
  });
</script>
