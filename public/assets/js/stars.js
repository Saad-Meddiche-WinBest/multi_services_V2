let stars = document.querySelectorAll('.ratings span');
let products = document.querySelectorAll('.ratings');
let ratings = [];

for (let star of stars) {
  star.addEventListener("click", function () {
    let children = star.parentElement.children;
    for (let child of children) {
      if (child.getAttribute("data-clicked")) {
        child.removeAttribute("data-clicked"); // Remove the data-clicked attribute to allow modification
      }
    }

    this.setAttribute("data-clicked", "true");
    let rating = this.dataset.rating;
    let productId = this.parentElement.dataset.productid;

    let data = {
      "stars": rating,
      "product-id": productId
    }

    // Remove any previous rating for the same product
    ratings = ratings.filter(item => item["product-id"] !== productId);

    ratings.push(data);
    localStorage.setItem("rating", JSON.stringify(ratings));
  });
}

if (localStorage.getItem("rating")) {
  ratings = JSON.parse(localStorage.getItem("rating"));
  for (let rating of ratings) {
    for (let product of products) {
      if (rating["product-id"] == product.dataset.productid) {
        let reversedStars = Array.from(product.children).reverse();
        let index = parseInt(rating["stars"]) - 1;
        reversedStars[index].setAttribute("data-clicked", "true");
      }
    }
  }
}
