const form = document.querySelector("#qrcode-form");
const qrCode = document.querySelector("#qr-code");
 
const generateSubmit = (e) => {
  e.preventDefault();
  clearQR();
 
  const url = document.querySelector("#QRformData").value;
  console.log(url);
 
  //form validation
  if (url === "") {
    alert("Please enter a url or text.");
  } else {
    generateQrCode(url);
  }
};
 
const generateQrCode = (url) => {
  const qr = new QRCode(document.getElementById("qr-code"), {
    text: url,
    width: 500,
    height: 500,
  });
};
 
const clearQR = () => {
  qrCode.innerHTML = "";
};
 
form.addEventListener("submit", generateSubmit);
