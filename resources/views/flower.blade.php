<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>I Missed You Flower</title>
  <style>
    body {
      background-color: #fff0f5;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    img {
      width: 300px; /* Bigger size */
      height: 300px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
      margin-bottom: 20px;
      border: 5px solid white;
    }

    h1 {
      color: #e91e63;
      margin-bottom: 20px;
      font-size: 48px;
      font-weight: bold;
      animation: pulse 2s infinite;
      text-align: center;
    }

    .flower {
      width: 100px;
      height: 100px;
      position: relative;
      animation: spin 10s linear infinite;
    }

    .petal {
      width: 60px;
      height: 60px;
      background-color: #ff69b4;
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 20px;
      transform-origin: center;
    }

    .petal:nth-child(2) { transform: rotate(45deg); }
    .petal:nth-child(3) { transform: rotate(90deg); }
    .petal:nth-child(4) { transform: rotate(135deg); }
    .petal:nth-child(5) { transform: rotate(180deg); }
    .petal:nth-child(6) { transform: rotate(225deg); }
    .petal:nth-child(7) { transform: rotate(270deg); }
    .petal:nth-child(8) { transform: rotate(315deg); }

    .center {
      width: 40px;
      height: 40px;
      background-color: yellow;
      border-radius: 50%;
      position: absolute;
      top: 30px;
      left: 30px;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.7; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

  <!-- Bigger image -->
  <img src="{{ asset('images/jesha.jpg') }}" alt="Jesha">

  <h1>I Love You Mahal 💖</h1>

   <h2>from Dagol!</h2>

  <div class="flower">
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="petal"></div>
    <div class="center"></div>
  </div>

</body>
</html>
