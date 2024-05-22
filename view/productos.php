<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../imagenes/logo.jpeg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilyooo.css">
    <title>Catalogo</title>
</head>
<body class="fondoprodu">
    <header>
        <nav class="menuprincipal">
            <ul class="menu">
                <div id="position-logo"> <img src="../imagenes/logo.jpeg" alt=""><h2>Floristeria palacio</h2></div>
                <li><a href="../view/inicio.php">Inicio</a></li>
                <li><a href="../view/productos.php">Productos</a></li>
                <li><a href="../view/sobrenosotros.php">Nosotros</a></li>
                <li><a href="#" class=" usuarioNavegacion"><img src="../imagenes/user.png" alt="user"></a>
                    <ul class="Submenu">
                        <li><a href="../view/index.php">Iniciar Sesión</a></li>
                        <li><a href="../view/register.php">Registrarme</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </header>
    <h1 id="name-catalogo">CATALOGO</h1>

  <!-- productos -->
    <div class="container-produ">
        <div class="product">
            <img src="../imagenes/producto1.jpeg" alt="Producto 1">
            <h2>Producto 1</h2>
            <p>Descripción del producto 1.</p>
            <span>Precio: $50.000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
  
        <div class="product">
            <img src="../imagenes/producto2.jpeg" alt="Producto 2">
            <h2>Producto 2</h2>
            <p>Descripción del producto 2.</p>
            <span>Precio: $15000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
  
 
        <div class="product">
            <img src="../imagenes/producto3.jpeg" alt="Producto 3">
            <h2>Producto 3</h2>
            <p>Descripción del producto 3.</p>
            <span>Precio: $50000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
  

        <div class="product">
            <img src="../imagenes/producto 4.jpeg" alt="Producto 4">
            <h2>Producto 4</h2>
            <p>Descripción del producto 4.</p>
            <span>Precio: $25000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
  
    
        <div class="product">
            <img src="../imagenes/producto5.jpeg" alt="Producto 5">
            <h2>Producto 5</h2>
            <p>Descripción del producto 5.</p>
            <span>Precio: $55000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
  
    </div>
    <div class="container-produ">
            <div class="product">
            <img src="../imagenes/producto6.jpeg" alt="Producto 6">
            <h2>Producto 5</h2>
            <p>Descripción del producto 5.</p>
            <span>Precio: $35000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="../imagenes/producto7.jpeg" alt="Producto 7">
            <h2>Producto 6</h2>
            <p>Descripción del producto 6.</p>
            <span>Precio: $15000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="../imagenes/producto8.jpeg" alt="Producto 8">
            <h2>Producto 7</h2>
            <p>Descripción del producto 7.</p>
            <span>Precio: $25000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="../imagenes/producto9.jpeg" alt="Producto 9">
            <h2>Producto 8</h2>
            <p>Descripción del producto 8.</p>
            <span>Precio: $50000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="../imagenes/producto10.jpeg" alt="Producto 10">
            <h2>Producto 9</h2>
            <p>Descripción del producto 9.</p>
            <span>Precio: $35000</span>
            <button class="addToCart">Agregar al carrito</button>
        </div>

  

    </div>
    <div class="cart">
        <h2>Carrito de Compras<button id="cartButton">Carrito (0)</button></h2>
        
        <ul id="cartItems">
            <!-- Los elementos del carrito se agregarán aquí dinámicamente con JavaScript -->
        </ul>
        <p>Total: $<span id="cartTotal">0</span></p>
        <button id="checkoutButton">Realizar Compra</button>

    </div>
    <script>
        const cartButton = document.getElementById('cartButton');
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');
        const checkoutButton = document.getElementById('checkoutButton');
        const addToCartButtons = document.querySelectorAll('.addToCart');

        let cart = [];
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const product = button.parentElement;
                const productName = product.querySelector('h2').textContent;
                const productPrice = parseFloat(product.querySelector('span').textContent.replace('Precio: $', ''));
                cart.push({ name: productName, price: productPrice });
                updateCart();
            });
        });

        function updateCart() {
            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach((item, index) => {
                const li = document.createElement('li');
                li.textContent = `${item.name} - $${item.price}`;
                
                const removeButton = document.createElement('button');
                removeButton.textContent = 'Eliminar';
                removeButton.addEventListener('click', () => {
                    cart.splice(index, 1);
                    updateCart();
                });

                li.appendChild(removeButton);
                cartItems.appendChild(li);
                total += item.price;
            });

            cartTotal.textContent = total.toFixed(2);
            cartButton.textContent = `Carrito (${cart.length})`;
        }

        checkoutButton.addEventListener('click', () => {
            if (cart.length > 0) {
                alert('¡Compra realizada con éxito!');
                cart = [];
                updateCart();
            } else {
                alert('El carrito está vacío. Agrega productos antes de realizar la compra.');
            }
        });
    </script>

    
            <footer> 
          
            <div class="footer-content">
               
                <div class="contact-info">
                    <h3>Contacto</h3>
                    <p>Dirección: Calle de las Flores, 123</p>
                    <p>Teléfono: 123-456-7890</p>
                    <p>Email: info@floristeria.com</p>
                </div>
                <div class="social-media">
                    <h3>Síguenos</h3>
                    <a href="https://instagram.com/carlossastoque_?igshid=MzMyNGUyNmU2YQ%3D%3D&utm_source=qr"><img src="../imagenes/insta.png" alt="Instagram"></a>
                    <a href="https://wa.link/vhezsk"><img src="../imagenes/whatsap.png" alt="whatsap"></a>
                    
                </div>
            </div>
            <p class="copyright">© 2023 Floristería Palacio. Todos los derechos reservados.</p>
        </footer>

    
</body>
</html>