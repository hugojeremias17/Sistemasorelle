<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
  

</head>
<body>



<form id="myForm"> 
    <h1> Fatura</h1>
    <form id="myForm">
    <input type="text" id="name" placeholder="Name" required>
    <input type="email" id="email" placeholder="Email" required>
    <button type="submit">Download PDF</button>
</form>

<script>
    const form = document.getElementById('myForm');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const imageUrl = "Assets/img/sorellelogo.png";
      pdf.addImage(imageUrl, "PNG", 10, 10, 180, 180);

    
      // Create a new jsPDF instance
      const pdf = new jsPDF();
    
      // Add content to the PDF
      pdf.text(`Name: ${name}`, 10, 10);
      pdf.text(`Email: ${email}`, 10, 20);
      pdf.addImage(imageUrl, "PNG", 10, 10, 180, 180);


    
      // Save the PDF
      pdf.save('form.pdf');
    });
</script>

</html>
