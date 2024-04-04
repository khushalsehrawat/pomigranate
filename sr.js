function searchDish() {
    const inputValue = document.getElementById("searchInput").value.toLowerCase();
    const productContainers = document.querySelectorAll("#productContainer >.product-image");
  
    productContainers.forEach((productContainer) => {
      const dishName = productContainer.querySelector(".summary > h3").textContent.toLowerCase();
  
      if (dishName.includes(inputValue)) {
        productContainer.style.display = "flex";
      } else {
        productContainer.style.display = "none";
      }
    });
  }