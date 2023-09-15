// public/js/signature-pad.js

const canvas = document.querySelector("canvas");
const signaturePad = new SignaturePad(canvas);

const clearButton = document.getElementById("clear-button");
const saveButton = document.querySelector("form button[type=submit]");
const signatureInput = document.getElementById("signature");

clearButton.addEventListener("click", function () {
    signaturePad.clear();
});

saveButton.addEventListener("click", function () {
    if (!signaturePad.isEmpty()) {
        const signatureData = signaturePad.toDataURL();
        signatureInput.value = signatureData;
    }
});
