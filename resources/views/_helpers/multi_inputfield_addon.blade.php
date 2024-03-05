<script>
  function addInputFields() {
    // Create a new div container for the input fields
    var newInputContainer = document.createElement('div');
    newInputContainer.classList.add('input-container');

    // Create new input elements for "name" and "price"
    var nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.name = 'title[]';
    nameInput.placeholder = 'Enter name';
    nameInput.classList.add('form-control');
    nameInput.classList.add('mt-2');
    nameInput.classList.add('ms-2');
    
    var priceInput = document.createElement('input');
    priceInput.type = 'text';
    priceInput.name = 'price[]';
    priceInput.placeholder = 'Enter price';
    priceInput.classList.add('form-control');
    priceInput.classList.add('mt-2');
    priceInput.classList.add('ms-2');
    // Append the new input elements to the container
    newInputContainer.appendChild(nameInput);
    newInputContainer.appendChild(priceInput);

    // Create a delete button for the new set
    var deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.onclick = function() {
      removeInputFields(this);
    };
    deleteButton.classList.add('btn', 'btn-danger');
    newInputContainer.appendChild(deleteButton);

    // Append the new div container to the main container
    document.getElementById('inputContainer').appendChild(newInputContainer);
  }

  function removeInputFields(button) {
    // Get the parent div container and remove it
    var container = button.parentNode;
    container.parentNode.removeChild(container);
  }
</script>