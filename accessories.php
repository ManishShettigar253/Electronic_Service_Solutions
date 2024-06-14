
<!DOCTYPE html>
<html>
<head>
  <style>
    /* Add CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    h2 {
        text-align: center;
      margin-top: 30px;
      color: #333;
      font-size: 28px;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-bottom: 2px solid #333;
      padding-bottom: 10px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
      justify-items: center;
      margin-top: 30px;
    }

    .grid-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .grid-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .grid-item img {
      width: 150px;
      height: auto;
      margin-bottom: 10px;
    }

    .rating {
      font-weight: bold;
      color: #008cba;
      margin-top: 10px;
    }
    .name {
      font-weight: bold;
      color:black;
      margin-top: 10px;
    }
    .name:hover{
      font-weight: bold;
      color:blue;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h2>Things we sell</h2>
  <div class="grid-container">
    <div class="grid-item">
      <img src="./productPics/sandiskPendrive.jfif" alt="Sandisk Pendrive 8GB">
      <div class="name">Sandisk Pendrive 8GB</div>
      <div class="rating">Rs 449</div>
    </div>
    <div class="grid-item">
      <img src="./productPics/LogitechWiredMouse.webp" alt="Logitech Wired Mouse"><br>
      <div class="name">Logitech Wired Mouse</div>
      <div class="rating">Rs 329</div>
    </div>
    <div class="grid-item">
      <img src="./productPics/LogitechWirelessMouse.jpg" alt="Logitech Wireless Mouse"><br>
      <div class="name">Logitech Wireless Mouse</div>
      <div class="rating">Rs 599</div>
    </div>
    <div class="grid-item">
      <img src="./productPics/LogitechWirelessKeyboard.jpg" alt="Logitech Wired Keyboard">
      <div class="name">Logitech Wired Keyboard</div>
      <div class="rating">Rs 599</div>
    </div>
    <div class="grid-item">
      <img src="./productPics/LogitechWiredKeyboard.jpg" alt="Logitech Wireless Keyboard">
      <div class="name">Logitech Wireless Keyboard</div>
      <div class="rating">Rs 899</div>
    </div>
    <div class="grid-item">
      <img src="./productPics/USBcable.jpg" alt="USB Cables">
      <div class="name">USB Cables</div>
      <div class="rating">Rs 400</div>
    </div>
    <!-- Add more grid items as needed -->
  </div>
</body>
</html>
