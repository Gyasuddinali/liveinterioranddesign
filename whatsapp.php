<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhatsApp Floating Button</title>
  <style>
    /* Basic page styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      height: 2000px; 
    }

    /* WhatsApp floating button */
    .whatsapp-float {
      position: fixed;
      bottom: 20px;   /* distance from bottom */
      right: 20px;    /* distance from right */
      width: 60px;
      height: 60px;
      background-color: #25d366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 6px rgba(0,0,0,0.3);
      z-index: 1000;
      transition: transform 0.2s;
      text-decoration: none;
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
    }

    .whatsapp-float img {
      width: 35px;
      height: 35px;
    }
  </style>
</head>
<body>

  

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/+91 88409 18823" target="_blank" class="whatsapp-float">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
  </a>

</body>
</html>
