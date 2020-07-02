<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Remote datasource</title>
  <!--  Required JS library inclusion - START -->
  <link rel="stylesheet" href="js/easy-autocomplete.css">
  <link rel="stylesheet" href="js/easy-autocomplete.themes.css">
  <style>

  </style>
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery.easy-autocomplete.js"></script>
  <!--  Required JS library inclusion - END -->
  <script>
  $( function() {

	  var options = {

			  url: function(phrase) {
			    return "search.php"; //url to be posted with user entered value
			  },

			  getValue: function(element) {
			    return element.name; //response data filtering option
			  },

			  ajaxSettings: {
			    dataType: "json",
			    method: "GET",
			    data: {
			      dataType: "json"  //URL posting strategy
			    }
			  },

			  preparePostData: function(data) {
			    data.term = $("#dealerName").val();
			    return data;  
			  },

			  requestDelay: 400
			};


			$("#dealerName").easyAutocomplete(options); //Binding the auto complete option to the text box
  } );



  </script>
</head>
<body>
 <div>
  Dealer Name <input id="dealerName" name="dealerName"/>
  </div>
</body>
</html>