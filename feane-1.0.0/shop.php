<!-- DOCTYPE and HTML opening -->
<!DOCTYPE html>
<html lang="fr">

<!-- Head section with meta, title, and links -->
<head>
  <!-- Basic meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <!-- Page title -->
  <title>67 Drinks - Shop</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- Nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- Font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Custom styles for shop -->
  <style>
    .shop_section {
      padding: 60px 0;
      background: #ffffff;
    }

    .product-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 30px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .product-card h4 {
      color: #000000;
      margin-bottom: 10px;
    }

    .product-card .price {
      font-size: 18px;
      font-weight: bold;
      color: #ffbe33;
      margin-bottom: 15px;
    }

    .product-card .quantity-controls {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }

    .product-card .quantity-controls button {
      background: #ffbe33;
      border: none;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      color: #000000;
      font-weight: bold;
      cursor: pointer;
    }

    .product-card .quantity-controls span {
      margin: 0 15px;
      font-weight: bold;
    }

    .product-card .add-to-cart {
      background: #ffbe33;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      color: #000000;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
    }

    .product-card .add-to-cart:hover {
      background: #e69c00;
    }

    .cart-summary {
      position: fixed;
      top: 20px;
      right: 20px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      padding: 20px;
      min-width: 300px;
      z-index: 1000;
    }

    .cart-summary h3 {
      margin-bottom: 15px;
      color: #000000;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    .cart-total {
      font-weight: bold;
      font-size: 18px;
      margin-top: 15px;
      padding-top: 15px;
      border-top: 2px solid #ffbe33;
    }

    .checkout-btn {
      background: #ffbe33;
      border: none;
      padding: 12px;
      border-radius: 6px;
      color: #000000;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
      margin-top: 15px;
    }

    .checkout-btn:hover {
      background: #e69c00;
    }

    .login-required {
      text-align: center;
      padding: 50px;
      background: #f8f9fa;
      border-radius: 12px;
      margin: 50px;
    }

    .login-required h2 {
      color: #000000;
      margin-bottom: 20px;
    }

    .login-required a {
      background: #ffbe33;
      color: #000000;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
    }

    .login-required a:hover {
      background: #e69c00;
      color: #000000;
    }
  </style>
</head>

<!-- Body section -->
<body class="sub_page">

  <!-- Hero area with header section -->
  <div class="hero_area">
    <!-- Header section starts -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              67 Drinks
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="drinks.php">drinks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">contact</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="shop.php">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End header section -->
  </div>

  <!-- Shop section -->
  <section class="shop_section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center mb-5" style="color: #000000;">Notre Boutique</h2>
        </div>
      </div>

      <div id="shopContent">
        <!-- Content will be loaded by JavaScript -->
      </div>
    </div>
  </section>

  <!-- Cart Summary -->
  <div class="cart-summary" id="cartSummary" style="display: none;">
    <h3>Panier</h3>
    <div id="cartItems"></div>
    <div class="cart-total" id="cartTotal">Total: 0.00€</div>
    <button class="checkout-btn" onclick="checkout()">Commander</button>
  </div>

  <!-- Footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Don't Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Not our establishement
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Don't Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  itisascma@notarealwebsite.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              67 Drinks
            </a>
            <p>
              Helping alcoholics to become better ones since 1969
            </p>
            <div class="footer_social">
              <a href="../feane-1.0.0/surprise.php">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="../feane-1.0.0/surprise.php">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="../feane-1.0.0/surprise.php">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="../feane-1.0.0/surprise.php">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="../feane-1.0.0/surprise.php">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            "Everyday, I'm Hustling", Rick Ross
          </p>
          <p>
            4.00 Am - 3.00 Am
          </p>
        </div>
      </div>
      <div class="footer-info">
        <div class="footer-info">
          <p>
            &copy; <span id="displayYear"></span> Special Thanks to
            <a href="https://themewagon.com/">ThemeWagon.com</a><br><br>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer section -->

  <!-- Scripts -->
  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- Owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- Isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- Nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

  <!-- Shop functionality script -->
  <script>
    // Products data
    const products = [
      {
        id: 1,
        name: "Whisky Jack Daniel's",
        price: 45.99,
        image: "https://images.unsplash.com/photo-1527281400683-1ddc1e8b8c15?w=300&h=300&fit=crop",
        description: "Whisky américain emblématique"
      },
      {
        id: 2,
        name: "Vin Rouge Bordeaux",
        price: 25.50,
        image: "https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=300&h=300&fit=crop",
        description: "Vin rouge de qualité supérieure"
      },
      {
        id: 3,
        name: "Champagne Veuve Clicquot",
        price: 89.99,
        image: "https://images.unsplash.com/photo-1551538827-9c037cb4f32a?w=300&h=300&fit=crop",
        description: "Champagne prestigieux"
      },
      {
        id: 4,
        name: "Bière Heineken",
        price: 2.50,
        image: "https://images.unsplash.com/photo-1608270586620-248524c67de9?w=300&h=300&fit=crop",
        description: "Bière blonde internationale"
      },
      {
        id: 5,
        name: "Tequila Patron",
        price: 65.00,
        image: "https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=300&h=300&fit=crop",
        description: "Tequila premium mexicaine"
      },
      {
        id: 6,
        name: "Rhum Havana Club",
        price: 32.99,
        image: "https://images.unsplash.com/photo-1610873167013-2dd675d30ef4?w=300&h=300&fit=crop",
        description: "Rhum cubain authentique"
      }
    ];

    let cart = [];
    let currentUser = null;

    // Check if user is logged in
    function checkLogin() {
      currentUser = JSON.parse(localStorage.getItem('currentUser'));
      if (!currentUser) {
        document.getElementById('shopContent').innerHTML = `
          <div class="login-required">
            <h2>Connexion Requise</h2>
            <p>Vous devez être connecté pour accéder à la boutique.</p>
            <a href="login.php">Se connecter</a>
          </div>
        `;
        return false;
      }
      return true;
    }

    // Load products
    function loadProducts() {
      if (!checkLogin()) return;

      const productHTML = products.map(product => `
        <div class="col-md-4 col-sm-6">
          <div class="product-card">
            <img src="${product.image}" alt="${product.name}" onerror="this.src='https://via.placeholder.com/300x200?text=${product.name}'">
            <h4>${product.name}</h4>
            <p>${product.description}</p>
            <div class="price">${product.price.toFixed(2)}€</div>
            <div class="quantity-controls">
              <button onclick="changeQuantity(${product.id}, -1)">-</button>
              <span id="quantity-${product.id}">1</span>
              <button onclick="changeQuantity(${product.id}, 1)">+</button>
            </div>
            <button class="add-to-cart" onclick="addToCart(${product.id})">Ajouter au panier</button>
          </div>
        </div>
      `).join('');

      document.getElementById('shopContent').innerHTML = `
        <div class="row">${productHTML}</div>
      `;

      document.getElementById('cartSummary').style.display = 'block';
      updateCartDisplay();
    }

    // Change quantity
    function changeQuantity(productId, change) {
      const quantityElement = document.getElementById(`quantity-${productId}`);
      let quantity = parseInt(quantityElement.textContent) + change;
      if (quantity < 1) quantity = 1;
      quantityElement.textContent = quantity;
    }

    // Add to cart
    function addToCart(productId) {
      const product = products.find(p => p.id === productId);
      const quantity = parseInt(document.getElementById(`quantity-${productId}`).textContent);

      const existingItem = cart.find(item => item.id === productId);
      if (existingItem) {
        existingItem.quantity += quantity;
      } else {
        cart.push({
          id: product.id,
          name: product.name,
          price: product.price,
          quantity: quantity
        });
      }

      updateCartDisplay();
      alert(`${quantity} ${product.name} ajouté(s) au panier !`);
    }

    // Update cart display
    function updateCartDisplay() {
      const cartItemsElement = document.getElementById('cartItems');
      const cartTotalElement = document.getElementById('cartTotal');

      if (cart.length === 0) {
        cartItemsElement.innerHTML = '<p>Votre panier est vide</p>';
        cartTotalElement.textContent = 'Total: 0.00€';
        return;
      }

      const cartHTML = cart.map(item => `
        <div class="cart-item">
          <span>${item.name} (x${item.quantity})</span>
          <span>${(item.price * item.quantity).toFixed(2)}€</span>
        </div>
      `).join('');

      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

      cartItemsElement.innerHTML = cartHTML;
      cartTotalElement.textContent = `Total: ${total.toFixed(2)}€`;
    }

    // Checkout function
    function checkout() {
      if (cart.length === 0) {
        alert('Votre panier est vide !');
        return;
      }

      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
      const orderDetails = cart.map(item =>
        `${item.quantity}x ${item.name} - ${(item.price * item.quantity).toFixed(2)}€`
      ).join('\n');

      alert(`Commande confirmée !\n\n${orderDetails}\n\nTotal: ${total.toFixed(2)}€\n\nMerci pour votre achat !`);

      // Clear cart after successful order
      cart = [];
      updateCartDisplay();
    }

    // Initialize shop
    document.addEventListener('DOMContentLoaded', loadProducts);
  </script>

</body>

</html>
