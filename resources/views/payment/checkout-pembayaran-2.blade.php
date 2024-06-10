<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,width=device-width">
    <link rel="stylesheet" href="{{ asset('/css/payment/checkout-pembayaran-1.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
</head>

<body>
    <div class="checkout-pembayaran-1">
        <div class="checkout-pembayaran-1-child"></div>
        <div class="checkout-pembayaran-1-item"></div>
        <div class="checkout-pembayaran-1-inner"></div>
        <section class="container1">
            <div class="container2">
                <div class="container3">
                    <h1 class="pembayaran-online-mentoring-container2">
                        <span>Pembayaran Paket</span>
                        <span class="mentoring2">Mentoring</span>
                    </h1>
                </div>
                <div class="container4">
                    <div class="container5">
                        <div class="ellipse-container">
                            <div class="frame-child30"></div>
                            <div class="line-wrapper12">
                                <div class="frame-child31"></div>
                            </div>
                            <div class="frame-child32"></div>
                            <div class="line-wrapper13">
                                <div class="frame-child33"></div>
                            </div>
                            <div class="frame-child34"></div>
                        </div>
                    </div>
                    <nav class="profile-container">
                        <div class="package-container1">
                            <div class="paket2">Paket</div>
                        </div>
                        <div class="profil2">Pembayaran</div>
                        <div class="pembayaran2">Konfirmasi</div>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container6">
            <div class="container7">
                <div class="bank-options">
                    <div class="frame-parent62">
                        <div class="frame-parent63">
                            <div class="bank-transfer-frame">
                                <div class="bank-transfer4">
                                    <span class="bank-transfer5">Bank Transfer</span>
                                    <span class="span2"></span>
                                </div>
                            </div>
                            <div class="menerima-dari-semua2">| Menerima dari semua Bank</div>
                        </div>
                        <div class="component-1-container">
                            <button class="CircleButton" data-placeholder="Bank Details"
                                onclick="changeColor(event,!1)"></button>
                        </div>
                    </div>
                    <div class="frame-parent66">
                        <div class="frame-parent67">
                            <div class="qris-frame">
                                <div class="qris">QRIS</div>
                            </div>
                            <div class="gopay-shopee-pay2">| Gopay, Shopee Pay, & Dana</div>
                        </div>
                        <div class="component-3-container">
                            <button class="CircleButton" data-placeholder="QRIS Details"
                                onclick="changeColor(event,!0)"></button>
                        </div>
                    </div>
                </div>
                <div class="container8">
                    <div class="container9">
                        <div class="voice-call-container">
                            <div class="voice-call2">Paket Standard</div>
                            <div class="subtotal-total-container">
                                <div class="subtotal-total-labels-parent">
                                    <div class="subtotal-total-labels">
                                        <div class="subtotal2">SubTotal</div>
                                        <b class="total2">Total</b>
                                    </div>
                                    <div class="subtotal-total-labels1">
                                        <div class="rp-2000004">Rp 150.000</div>
                                        <b class="rp-2000005">Rp 150.000</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container10">
                            <form class="container11">
                                <div class="input-fields-container">
                                    <div class="input-fields-labels1">
                                        <select id="bankNameDropdown" class="form-control" oninput="checkForm()"
                                            disabled>
                                            <option value="">Pilih Bank</option>
                                            <option value="Bank Mandiri">Bank Mandiri</option>
                                            <option value="BRI">BRI</option>
                                            <option value="BCA">BCA</option>
                                            <option value="BNI">BNI</option>
                                            <option value="BTN">BTN</option>
                                            <option value="BSI">BSI</option>
                                            <option value="CIMB Niaga">CIMB Niaga</option>
                                            <option value="Permata Bank">Permata Bank</option>
                                            <option value="OCBC NISP">OCBC NISP</option>
                                            <option value="Citibank">Citibank</option>
                                        </select>
                                    </div>
                                    <div class="input-fields-labels2">
                                        <input id="input2" class="e-wallet-details3" placeholder="Rincian"
                                            type="text" oninput="checkForm()" readonly="readonly">
                                    </div>
                                </div>
                                <div id="qrcode" style="display:none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="end-container">
                <div class="cancel-order-container">
                    <button class="container-cancel-order" onclick="redirectToPlansLogin()">
                        <div class="cancel-order-text">Batal Order</div>
                    </button>
                </div>
                <div class="checkout-container">
                    <button class="container-checkout" onclick="redirectToConfirmationPage()">
                        <div class="checkout-text">Konfirmasi Order</div>
                    </button>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        const bankVA = {
            "Bank Mandiri": "1234567890123456",
            "BRI": "2345678901234567",
            "BCA": "3456789012345678",
            "BNI": "4567890123456789",
            "BTN": "5678901234567890",
            "BSI": "6789012345678901",
            "CIMB Niaga": "7890123456789012",
            "Permata Bank": "8901234567890123",
            "OCBC NISP": "9012345678901234",
            "Citibank": "0123456789012345"
        };

        function toggleBankDetails(show) {
            const bankDropdown = document.getElementById('bankNameDropdown');
            if (show) {
                bankDropdown.disabled = false;
            } else {
                bankDropdown.disabled = true;
            }
        }

        function checkForm() {
            const selectedButton = document.querySelector('.CircleButton.active');
            const bankNameDropdown = document.getElementById('bankNameDropdown').value.trim();
            const input2 = document.getElementById('input2');
            const checkoutButton = document.querySelector('.container-checkout');

            if (selectedButton && bankNameDropdown) {
                input2.value = bankVA[bankNameDropdown] || "";
                checkoutButton.classList.remove('disabled'); // Enable the button
            } else {
                input2.value = "";
                checkoutButton.classList.add('disabled'); // Disable the button
            }
        }

        // Call checkForm initially to set button state based on initial conditions
        checkForm();

        function generateQRCode(text) {
            const qrcodeContainer = document.getElementById('qrcode');
            qrcodeContainer.innerHTML = "";
            new QRCode(qrcodeContainer, text);
            qrcodeContainer.style.display = 'block';
        }

        function changeColor(event, isQRIS = false) {
            const buttons = document.querySelectorAll('.CircleButton');
            buttons.forEach(button => button.classList.remove('active'));
            event.target.classList.add('active');
            const inputFieldsContainer = document.querySelector('.input-fields-container');
            const checkoutButton = document.querySelector('.container-checkout'); // Get the checkout button

            if (isQRIS) {
                generateQRCode('QRIS Payment');
                toggleBankDetails(false);
                inputFieldsContainer.style.display = 'none'; // Hide input fields container
                checkoutButton.classList.remove('disabled'); // Enable the checkout button for QRIS payment
            } else {
                const qrcodeContainer = document.getElementById('qrcode');
                qrcodeContainer.style.display = 'none'; // Hide QR code container
                toggleBankDetails(true);
                inputFieldsContainer.style.display = 'block'; // Show input fields container
                checkForm(); // Call checkForm to update the checkout button state for bank transfer
            }
        }


        function handleDropdownHover() {
            const input1 = document.getElementById('bankNameDropdown');
            input1.addEventListener('mouseenter', () => {
                input1.size = input1.options.length;
            });
            input1.addEventListener('mouseleave', () => {
                input1.size = 1;
            });
        }
        // Call the hover function on page load
        window.addEventListener('load', handleDropdownHover);

        function redirectToPlansLogin() {
            window.location.href = "{{ url('plans-login') }}";
        }

        function redirectToConfirmationPage() {
            const checkoutButton = document.querySelector('.container-checkout');
            if (!checkoutButton.classList.contains('disabled')) {
              window.location.href = "{{ url('confirmation-page') }}";
            }
        }
    </script>
</body>

</html>
