
<!DOCTYPE html>
<html>
  
<head>
  <!-- Include Bootstrap for styling -->
  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  
  <style>
    .qr-code {
      max-width: 300px;
      margin: 100px;
    }
  </style>
  
  <title>QR Code Generator</title>
</head>
  
<body>
  <div class="container-fluid">
    <div class="text-center">
  
      <!-- Get a Placeholder image initially,
       this will change according to the
       data entered later -->
      <img src=
"E:\shruthi\SR\QRcode.jpg"
        class="qr-code img-thumbnail img-responsive" />
    </div>
  
    <div class="form-horizontal">
      <div class="form-group">
        
        <div class="col-sm-10">
  
         
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10"><!-- Button to generate QR Code for
           the entered data -->
          <button type="button" class=
            "btn btn-default" id="SCAN HERE">
            SCAN HERE
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src=
    "https://code.jquery.com/jquery-3.5.1.js">
  </script>
  
  <script>
    // Function to HTML encode the text
    // This creates a new hidden element,
    // inserts the given text into it 
    // and outputs it out as HTML
    function htmlEncode(value) {
      return $('<div/>').text(value)
        .html();
    }
  
        let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
          htmlEncode($('#content').val()) +
          '&chs=160x160&chld=L|0'
  
        // Replace the src of the image with
        // the QR code image
        $('.qr-code').attr('src', finalURL);
      });
    });
  </script>
</body>
  </html>
