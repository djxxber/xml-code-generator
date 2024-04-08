<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Générateur XML - Exemple d'Information Client</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="input-section">
      <h2>Saisissez les informations du client :</h2>
      <div class="input-scrollable">
      <form id="xml-form" method="post" action="generate_xml.php"> 
          <label for="customer-name">Nom du Client :</label>
          <input type="text" id="customer-name" name="customer-name" required>

          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Téléphone :</label>
          <input type="tel" id="phone" name="phone" required>

          <label for="address">Adresse :</label>
          <textarea id="address" name="address" required></textarea>

          <label for="order-id">ID de la Commande :</label>
          <input type="text" id="order-id" name="order-id" required>

          <label for="product-name">Nom du Produit :</label>
          <input type="text" id="product-name" name="product-name" required>

          <label for="quantity">Quantité :</label>
          <input type="number" id="quantity" name="quantity" required>

          <label for="price">Prix :</label>
          <input type="number" id="price" name="price" required>

          <label for="notes">Notes :</label>
          <textarea id="notes" name="notes" placeholder="Entrez des notes supplémentaires sur la commande"></textarea>
        </form>
      </div>
      <button  type="submit" id="generate-btn">Générer XML</button>
    </div>

    <div class="output-section">
      <h2>XML généré :</h2>
      <div id="xml-output"></div>


    </div>
  </div>

  <script>
    const form = document.getElementById('xml-form');
    const output = document.getElementById('xml-output');
    const generateBtn = document.getElementById('generate-btn');

    generateBtn.addEventListener('click', () => {
      const customerName = document.getElementById('customer-name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const address = document.getElementById('address').value;
      const orderId = document.getElementById('order-id').value;
      const productName = document.getElementById('product-name').value;
      const quantity = document.getElementById('quantity').value;
      const price = document.getElementById('price').value;
      const notes = document.getElementById('notes').value;

      const xml = `
        <order>
          <customer>
            <name>${customerName}</name>
            <email>${email}</email>
            <phone>${phone}</phone>
            <address>${address}</address>
          </customer>
          <order-details>
            <id>${orderId}</id>
            <product>
              <name>${productName}</name>
              <quantity>${quantity}</quantity>
              <price>${price}</price>
            </product>
            <notes>${notes}</notes>
          </order-details>
        </order>
      `;

      output.innerText = xml;
    
    });
  </script>
</body>
</html>
