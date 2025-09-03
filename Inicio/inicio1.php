<?php
session_start();

// Procesar agregar favorito y redirigir a favoritos.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_favorito'])) {
    $plato = trim($_POST['plato'] ?? '');

    if ($plato !== '') {
        if (!isset($_SESSION['favoritos'])) {
            $_SESSION['favoritos'] = [];
        }
        if (!in_array($plato, $_SESSION['favoritos'])) {
            $_SESSION['favoritos'][] = $plato;
        }
    }

    header('Location: favoritos.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio1.css">
    <title>inicio</title>

    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <!--Github link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="Logo DashDine.png" class="logo-img" alt="Logo DashDine">
            <span class="brand-text">DashDine</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="inicio1.html">Home</a>
                </li>

                 </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="promociones.html">Promotions</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="promociones del dia.html">About us</a>
                </li>
            
                
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="dealsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dealsDropdown">
                        <h6 class="dropdown-header text-dark">Promotions</h6>
                        <a class="dropdown-item" href="#">Vegan Food 🌱</a>
                        <a class="dropdown-item" href="#">Vegetarian Food 🥕</a>
                        <a class="dropdown-item" href="#">Meat Dishes 🍖</a>
                        <a class="dropdown-item" href="#">Natural Drinks 🥤🍊</a>
                        <a class="dropdown-item" href="#">Coffee & Tea ☕🍵</a>
                        <a class="dropdown-item" href="#">Desserts 🍦🎂</a>
                        <a class="dropdown-item" href="#">Gluten-Free Options 🌾</a>
                    </div>
               
            </ul>

            <!-- Search -->
            <form class="form-inline ml-3" id="Buscar">
                <input class="form-control form-control-sm mr-2" type="search" placeholder="Search..." aria-label="Search">
            </form>

           <a href="inicioPro.html"> <i class="bi bi-person-circle" id="profileCount"></i></a>
             
        


        </div>
    </div>
</nav>

                <!-- Botón flotante del chat bot -->
                <button type="button" class="btn btn-outline-light chat-toggle-icon btnbot chatbot-float-btn" data-bs-toggle="modal" data-bs-target="#chatModal" title="Chat with Bot">
                    🤖
                </button>
                <style>
                .chatbot-float-btn {
                    position: fixed;
                    right: 30px;
                    bottom: 30px;
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 2rem;
                    z-index: 1050;
                    background: #198754;
                    color: #fff;
                    border: none;
                    transition: background 0.2s;
                }
                .chatbot-float-btn:hover {
                    background: #145c32;
                    color: #fff;
                }
                </style>
            </div>
        </div>
    </nav>

   

    <!-- Chatbot Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Chat with DashDine Bot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="chat-body">
                        <div class="bot-msg">👋 Hi! I'm your food assistant. Ask me about dishes, menu, or
                            recommendations!</div>
                    </div>
                    <div class="chat-input-group">
                        <input type="text" id="user-input" class="form-control" placeholder="Type a message..."
                            onkeypress="if(event.key==='Enter') sendMessage()">
                        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chatbot Logic -->
    <script>
        const foodOption = [
            "🍕 Pizza Margherita",
            "🍔 Classic Cheeseburger",
            "🥗 Caesar Salad",
            "🍣 Sushi Combo",
            "🌮 Chicken Tacos",
            "🍝 Spaghetti Bolognese",
            "🥪 Turkey Club Sandwich",
            "🍛 Chicken Curry with Rice",
            "🥞 Pancakes with Maple Syrup",
            "🍤 Shrimp Tempura",
            "🧁 Chocolate Cupcake",
            "🍇 Fruit Platter"
        ];

        function sendMessage() {
            const input = document.getElementById('user-input');
            const msg = input.value.trim();
            if (!msg) return;

            const chatBody = document.getElementById('chat-body');

            // Show user message
            const userMsg = document.createElement('div');
            userMsg.className = 'user-msg';
            userMsg.textContent = msg;
            chatBody.appendChild(userMsg);

            // Create bot response
            const botMsg = document.createElement('div');
            botMsg.className = 'bot-msg';

            const lowerMsg = msg.toLowerCase();

            if (lowerMsg.includes("thank you") || lowerMsg.includes("thanks")) {
                botMsg.textContent = "You're very welcome! Enjoy your food! 😊";
                chatBody.appendChild(botMsg);
                input.value = '';
                chatBody.scrollTop = chatBody.scrollHeight;

                // Close the modal after a short delay
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('chatModal'));
                    modal.hide();
                }, 1500);
                return;
            }

            if (lowerMsg.includes("hi") || lowerMsg.includes("hello")) {
                botMsg.textContent = "Hi there! I'm here to help you explore tasty options. What are you in the mood for?";
            } else if (lowerMsg.includes("menu") || lowerMsg.includes("recommend") || lowerMsg.includes("food") || lowerMsg.includes("dish") || lowerMsg.includes("eat") || lowerMsg.includes("options") || lowerMsg.includes("hungry") || lowerMsg.includes("suggest")) {
                const shuffled = foodOptions.sort(() => 0.5 - Math.random());
                const selected = shuffled.slice(0, 5).join("<br>");
                botMsg.innerHTML = `Here are some dishes you might enjoy:<br>${selected}`;
            } else {
                botMsg.textContent = "Hmm, I didn’t fully get that, but I'm here for anything food-related! Try asking about dishes, menu items, or suggestions.";
            }

            chatBody.appendChild(botMsg);
            input.value = '';
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    </script>

    <!-- Footer superior debajo del navbar -->

<div class="EspacioGrande">
 <div class="info-footer position-relative text-white text-center">
   <img src="https://media.istockphoto.com/id/1457889029/es/foto/grupo-de-alimentos-con-alto-contenido-de-fibra-diet%C3%A9tica-dispuestos-uno-al-lado-del-otro.jpg?s=612x612&w=0&k=20&c=fGmnVlAU6yDfG29kEMoNZg28DWA5I_CjprvK2L1HhT8=" alt="Food Banner" class="w-300 info-img">
   <div class="info-text position-absolute top-100 start-100 translate-middle text-center">
     <h1 class="info-title">Enjoy fresh and healthy meals every day</h5>
     <p class="info-subtitle">With DashDine, eating well has never been easier</p>
   </div>
 </div>
</div>

   <!-- MINI CARRUSEL DE LOGOS -->
<div class="clients">
  <div class="clients-slider swiper-container">
    <div class="swiper-wrapper">
      
      <!-- Logos originales -->
      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/plato1.png.png" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/plato2.png.png" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/plato3.png.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/plato4.png.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/la tecleña logo.jpeg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/macdonals logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/papa-johns-logo.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/Wendys-logo-1.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/burguer king logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/pollo-campestre-logo.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/pollo campero.jpeg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/Subway-logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/piza hut.png" class="img-fluid" alt="">
        </div>
      </div>

      <!-- Logos duplicados (copia exacta para efecto loop) -->
      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/dominos-pizza-logo-.png" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/kfc logo.png" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/kfc logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/little-caesars-logo-png.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/la tecleña logo.jpeg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/macdonals logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/papa-johns-logo.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/Wendys-logo-1.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/burguer king logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/pollo-campestre-logo.jpg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/pollo campero.jpeg" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/Subway-logo.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="client-logo">
          <img src="imagenes/piza hut.png" class="img-fluid" alt="">
        </div>
      </div>

    </div>
  </div>
</div>


   <!-- CARDS ROWS - 2 CARDS POR LÍNEA -->
<div class="row p-5 cajitas">
    <!-- Card 1 -->
   <div class="col-md-6 mb-4">
  <div class="card h-100 shadow border-0 hover-shadow">
    <img src="imagenes/hamburger.jpg" class="card-img-top" alt="Beef burger" />
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title">Beef Burger</h5>
      <p class="card-text">
        Juicy beef burger with fresh vegetables, crispy fries, and a cold beverage of your choice.
      </p>
      <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
        <span class="card-price">$6.99</span>
        <div>
          <button class="btn btn-sm btn-outline-secondary me-2 btn-add-cart" title="Add to Cart">🛒</button>

          <form method="POST" action="favoritos.php" class="d-inline">
            <input type="hidden" name="plato" value="Beef Burger" />
            <button type="submit" name="agregar_favorito" class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
          </form>

        </div>
      </div>
      <div class="mt-4">
        <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
      </div>
    </div>
  </div>
</div>


    <!-- Card 2 -->
    <!-- Card 2 -->
<div class="col-md-6 mb-4">
    <div class="card h-100 shadow border-0 hover-shadow">
        <img src="imagenes/food-4188662_640.jpg" class="card-img-top" alt="Vegetarian burrito">
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">Burrito</h5>
            <p class="card-text">
                A soft tortilla filled with fresh, seasoned vegetables and vibrant flavors.
            </p>
            <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
                <span class="card-price">$5.49</span>
                <div class="d-flex">
                    <!-- Botón carrito -->
                    <form method="POST" action="favoritos.php" class="d-inline me-2">
                        <input type="hidden" name="plato" value="Burrito" />
                        <button type="submit" name="agregar_favorito" class="btn btn-sm btn-outline-secondary btn-add-cart" title="Add to Cart">🛒</button>
                    </form>

                    <!-- Botón favorito -->
                    <form method="POST" action="favoritos.php" class="d-inline">
                        <input type="hidden" name="plato" value="Burrito" />
                        <button type="submit" name="agregar_favorito" class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
                    </form>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
            </div>
        </div>
    </div>
</div>


    <!-- Card 3 -->
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow border-0 hover-shadow">
            <img src="imagenes/tacos.avif" class="card-img-top" alt="Mexican tacos">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">Tacos</h5>
                <p class="card-text">
                    Traditional tacos with juicy beef, fresh cilantro, and a splash of lime.
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
                    <span class="card-price">$4.99</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary me-2 btn-add-cart" title="Add to Cart">🛒</button>
                        <button class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow border-0 hover-shadow">
            <img src="imagenes/comida colombiana.jpeg" class="card-img-top" alt="Colombian breakfast">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">Traditional Breakfast</h5>
                <p class="card-text">
                    A hearty breakfast with rice, plantain, egg, sausage, and beef. Energy to start your day!
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
                    <span class="card-price">$6.49</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary me-2 btn-add-cart" title="Add to Cart">🛒</button>
                        <button class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow border-0 hover-shadow">
            <img src="imagenes/torrejas.jpeg" class="card-img-top" alt="Torrejas dessert">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">Torrejas</h5>
                <p class="card-text">
                    Golden, soft, freshly baked sweet bread. Perfect for any time of the day.
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
                    <span class="card-price">$2.49</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary me-2 btn-add-cart" title="Add to Cart">🛒</button>
                        <button class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow border-0 hover-shadow">
            <img src="imagenes/fresh-salad_934640-645.avif" class="card-img-top" alt="Fresh salad">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title">Fresh Salad</h5>
                <p class="card-text">
                    Mixed greens with tomato, cucumber, carrot, and natural dressing.
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3 card-footer">
                    <span class="card-price">$4.49</span>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary me-2 btn-add-cart" title="Add to Cart">🛒</button>
                        <button class="btn btn-sm btn-outline-danger btn-favorite" title="Add to Favorites">❤️</button>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary btn-sm w-100">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Chatbot Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Chat with DashDine Bot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="chat-body">
                        <div class="bot-msg">👋 Hi! I'm your food assistant. Ask me about dishes, menu, or
                            recommendations!</div>
                    </div>
                    <div class="chat-input-group">
                        <input type="text" id="user-input" class="form-control" placeholder="Type a message..."
                            onkeypress="if(event.key==='Enter') sendMessage()">
                        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chatbot Logic -->
<script>
  const foodOptions = [
    "🍕 Pizza Margherita",
    "🍔 Classic Cheeseburger",
    "🥗 Caesar Salad",
    "🍣 Sushi Combo",
    "🌮 Chicken Tacos",
    "🍝 Spaghetti Bolognese",
    "🥪 Turkey Club Sandwich",
    "🍛 Chicken Curry with Rice",
    "🥞 Pancakes with Maple Syrup",
    "🍤 Shrimp Tempura",
    "🧁 Chocolate Cupcake",
    "🍇 Fruit Platter"
  ];

  function sendMessage() {
    const input = document.getElementById('user-input');
    const msg = input.value.trim();
    if (!msg) return;

    const chatBody = document.getElementById('chat-body');

    // Show user message
    const userMsg = document.createElement('div');
    userMsg.className = 'user-msg';
    userMsg.textContent = msg;
    chatBody.appendChild(userMsg);

    // Create bot response
    const botMsg = document.createElement('div');
    botMsg.className = 'bot-msg';

    const lowerMsg = msg.toLowerCase();

    if (lowerMsg.includes("thank you") || lowerMsg.includes("thanks")) {
      botMsg.textContent = "You're very welcome! Enjoy your food! 😊";
      chatBody.appendChild(botMsg);
      input.value = '';
      chatBody.scrollTop = chatBody.scrollHeight;

      // Close the modal after a short delay
      setTimeout(() => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('chatModal'));
        modal.hide();
      }, 1500);
      return;
    }

    if (lowerMsg.includes("hi") || lowerMsg.includes("hello")) {
      botMsg.textContent = "Hi there! I'm here to help you explore tasty options. What are you in the mood for?";
    } else if (lowerMsg.includes("menu") || lowerMsg.includes("recommend") || lowerMsg.includes("food") || lowerMsg.includes("dish") || lowerMsg.includes("eat") || lowerMsg.includes("options") || lowerMsg.includes("hungry") || lowerMsg.includes("suggest")) {
      const shuffled = foodOptions.sort(() => 0.5 - Math.random());
      const selected = shuffled.slice(0, 5).join("<br>");
      botMsg.innerHTML = `Here are some dishes you might enjoy:<br>${selected}`;
    } else {
      botMsg.textContent = "Hmm, I didn’t fully get that, but I'm here for anything food-related! Try asking about dishes, menu items, or suggestions.";
    }

    chatBody.appendChild(botMsg);
    input.value = '';
    chatBody.scrollTop = chatBody.scrollHeight;
  }
</script>
<script>
  function saveToLocalStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
  }

  function getFromLocalStorage(key) {
    return JSON.parse(localStorage.getItem(key)) || [];
  }

  function updateCart(productName) {
    let cart = getFromLocalStorage('cart');
    if (!cart.includes(productName)) {
      cart.push(productName);
      saveToLocalStorage('cart', cart);
      alert(`"${productName}" added to cart! 🛒`);
    } else {
      alert(`"${productName}" is already in your cart.`);
    }
  }

  function updateFavorites(productName, button) {
    let favorites = getFromLocalStorage('favorites');
    if (favorites.includes(productName)) {
      favorites = favorites.filter(item => item !== productName);
      button.classList.remove('favorited');
      alert(`"${productName}" removed from favorites.`);
    } else {
      favorites.push(productName);
      button.classList.add('favorited');
      alert(`"${productName}" added to favorites! ❤️`);
    }
    saveToLocalStorage('favorites', favorites);
  }

  // Cuando la página cargue
  document.addEventListener('DOMContentLoaded', () => {
    const favorites = getFromLocalStorage('favorites');

    document.querySelectorAll('.btn-add-cart').forEach(button => {
      button.addEventListener('click', () => {
        const productName = button.closest('.card').querySelector('.card-title').textContent;
        updateCart(productName);
      });
    });

    document.querySelectorAll('.btn-favorite').forEach(button => {
      const productName = button.closest('.card').querySelector('.card-title').textContent;
      if (favorites.includes(productName)) {
        button.classList.add('favorited');
      }

      button.addEventListener('click', () => {
        updateFavorites(productName, button);
      });
    });
  });
</script>

<!-- FOOTER -->
<footer id="footer" class="footer bg-black text-white pt-5 pb-4">

  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- About -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold">DashDine</h5>
        <p>San Salvador, 1st North Avenue</p>
        <p>El Salvador</p>
        <p><strong>Phone:</strong> +503 9087-5643</p>
        <p><strong>Email:</strong> info@example.com</p>
      </div>

      <!-- Resources -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold">Resources</h5>
        <ul class="list-unstyled">
          <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
          <li><a href="#"><i class="bi bi-github"></i> GitHub</a></li>
          <li><a href="mailto:info@example.com"><i class="bi bi-envelope"></i> Email</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold">Services</h5>
        <ul class="list-unstyled">
          <li><a href="inicio1.html">Home</a></li>
          <li><a href="promociones del dia.html">Promotions</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="">More</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-4 col-md-12 mb-4">
        <h5 class="text-uppercase fw-bold">Newsletter</h5>
        <p>Subscribe to our newsletter and get the latest updates on our delicious dishes, exclusive offers, and culinary news!</p>
        <form action="#" method="post" class="d-flex">
          <input type="email" name="email" class="form-control me-2" placeholder="Your email">
          <button type="submit" class="btn btn-success">Subscribe</button>
        </form>
      </div>

    </div>

    <hr class="my-3" style="border-color: rgba(255,255,255,0.1);">

    <div class="text-center">
      <p>© All rights reserved <strong>DashDine</strong></p>
    </div>
  </div>

</footer>

    <!--linkjs-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

    