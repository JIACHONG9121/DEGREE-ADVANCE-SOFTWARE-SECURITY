<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #fffffd;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('background1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    Font-size: 40px;
  }

  .corner-button {
    position: fixed;
    padding: 10px 20px;
    top: 20px;
    right: 20px;
    background-color: #d9f758;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .leftcorner-button {
    position: fixed;
    padding: 10px 20px;
    top: 20px;
    Left: 20px;
    background-color: #d9f758;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .scrolling-text-container {
    overflow: hidden;
  }

  .scrolling-text {
    animation: marquee 15s linear infinite;
    white-space: nowrap;
    font-family: Verdana, sans-serif;
    font-size: 30px;
    color: #bbef44;
    text-shadow: 5px 5px 5px rgba(154, 183, 28, 0.1), 10px 10px 10px rgba(167, 243, 16, 0.2);

  }


  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .product-card {
    border: 1px solid #ccc;
    padding: 20px;
  }

  .product-image {
    max-width: 100%;
  }

  .product-title {
    font-size: 20px;
    font-weight: bold;
    margin-top: 10px;
  }

  .product-description {
    margin-top: 10px;
  }

  .product-price {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
  }

  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(-100%);
    }
  }
</style>

<body>
  <div class="scrolling-text-container">
    <p class="scrolling-text">Welcome To Vulnerable Book Price List Home Page</p>


    <div class="product-grid">
      <div class="product-card">
        <img class="product-image" src="product1_image.jpg" alt="Product 1">
        <h2 class="product-title">Product 1 Name</h2>
        <p class="product-description">
          Product 1 description goes here
        </p>
        <p class="product-price">$9.99</p>

      </div>

      <div class="product-card">
        <img class="product-image" src="product2_image.jpg" alt="Product 2">
        <h2 class="product-title">Product 2 Name</h2>
        <p class="product-description">
          Product 2 description goes here
        </p>
        <p class="product-price">$9.99</p>

      </div>

      <div class="product-card">
        <img class="product-image" src="product2_image.jpg" alt="Product 3">
        <h2 class="product-title">Product 3 Name</h2>
        <p class="product-description">
          Product 3 description goes here
        </p>
        <p class="product-price">$9.99</p>

      </div>

      <div class="product-card">
        <img class="product-image" src="product2_image.jpg" alt="Product 4">
        <h2 class="product-title">Product 4 Name</h2>
        <p class="product-description">
          Product 4 description goes here
        </p>
        <p class="product-price">$9.99</p>

      </div>

      <a href="Logout.php">
        <button class="corner-button">Logout</button>
      </a>

      <a href="LoginpageSecure.php">
        <button class="leftcorner-button">Login to secure website</button>
      </a>

</body>

</html>
