function addItem(price, itemNumber){
    
    var priceAndItem = "price=" + price + "&itemNumber=" + itemNumber;
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
        }
      };

    xhttp.open("POST", "addItem.php", true);
    xhttp.send(priceAndItem); 
}