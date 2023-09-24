<div class="body-content">  
    <div id="Generate">
      <h1> QR Code Generator</h1>
          <p>Enter a URL or text to generate a QR code as a 500x500px PNG file, suitable for use in print or on the web.</p>
          <p>If you are entering a URL, remember to include http://</p>
 
        <form id="qrcode-form">
          <input id="QRformData" type="text" placeholder="http://opencuny.org"/>
          <button id="button">Generate QR code</button>
        </form>
    </div>
    <div class="qr-code">
    
      <!-- Where the generated QR code will be. -->
      <div id="qr-code"></div>
