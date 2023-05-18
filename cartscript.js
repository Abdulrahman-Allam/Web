// Add event listener to all "Add To Cart" buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');
if (addToCartButtons.length) {
  addToCartButtons.forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();

      // Get the selected item's data from the button's data attributes
      const itemName = button.dataset.name;
      const itemPrice = parseFloat(button.dataset.price);
      const itemImage = button.dataset.image;

      // Retrieve the saved cart items from localStorage
      const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

      // Check if the item is already in the cart
      const existingItemIndex = cartItems.findIndex(item => item.name === itemName && item.price === itemPrice && item.image === itemImage);

      if (existingItemIndex >= 0) {
        // If the item is already in the cart, increase the quantity and update the price
        const existingItem = cartItems[existingItemIndex];
        existingItem.quantity += 1;
        existingItem.price += itemPrice;
      } else {
        // If the item is not in the cart yet, create a new cart item object
        let cartItem = {
          name: itemName,
          price: itemPrice,
          quantity: 1,
          image: itemImage
        };

        // Add the new cart item to the cart items array
        cartItems.push(cartItem);
      }

      // Save the updated cart items back to localStorage
      localStorage.setItem('cart', JSON.stringify(cartItems));

      // Redirect to the cart page
      //window.location.href = '/cart.html';
    });
  });
}

