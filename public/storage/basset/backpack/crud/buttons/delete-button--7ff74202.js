if (typeof deleteEntry != 'function') {
  $("[data-button-type=delete]").unbind('click');

  function deleteEntry(button) {
	// ask for confirmation before deleting an item
	// e.preventDefault();
	var route = $(button).attr('data-route');

	swal({
	  title: "Warning",
	  text: "Are you sure you want to delete this item?",
	  icon: "warning",
	  buttons: ["Cancel", "Delete"],
	  dangerMode: true,
	}).then((value) => {
		if (value) {
			$.ajax({
		      url: route,
		      type: 'DELETE',
		      success: function(result) {
		          if (result == 1) {
					  // Redraw the table
					  if (typeof crud != 'undefined' && typeof crud.table != 'undefined') {
						  // Move to previous page in case of deleting the only item in table
						  if(crud.table.rows().count() === 1) {
						    crud.table.page("previous");
						  }

						  crud.table.draw(false);
					  }

		          	  // Show a success notification bubble
		              new Noty({
	                    type: "success",
	                    text: "<strong>Item Deleted</strong><br>The item has been deleted successfully."
	                  }).show();

		              // Hide the modal, if any
		              $('.modal').modal('hide');
		          } else {
		              // if the result is an array, it means 
		              // we have notification bubbles to show
		          	  if (result instanceof Object) {
		          	  	// trigger one or more bubble notifications 
		          	  	Object.entries(result).forEach(function(entry, index) {
		          	  	  var type = entry[0];
		          	  	  entry[1].forEach(function(message, i) {
				          	  new Noty({
			                    type: type,
			                    text: message
			                  }).show();
		          	  	  });
		          	  	});
		          	  } else {// Show an error alert
			              swal({
			              	title: "NOT deleted",
                            text: "There's been an error. Your item might not have been deleted.",
			              	icon: "error",
			              	timer: 4000,
			              	buttons: false,
			              });
		          	  }			          	  
		          }
		      },
		      error: function(result) {
		          // Show an alert with the result
		          swal({
	              	title: "NOT deleted",
                        text: "There's been an error. Your item might not have been deleted.",
	              	icon: "error",
	              	timer: 4000,
	              	buttons: false,
	              });
		      }
		  });
		}
	});

      }
}

// make it so that the function above is run after each DataTable draw event
// crud.addFunctionToDataTablesDrawEventQueue('deleteEntry');

