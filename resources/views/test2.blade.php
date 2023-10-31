<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap Input Form</title>
</head>
<style>
    body {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

    .custom-form {
        width: 400px;
        margin-left: auto; /* Add this line */
        padding: 20px;
        background-color: #6db1f5;
        border-radius: 5px;
    }

    .custom-form .form-group {
        margin-bottom: 15px;
    }

    .custom-form label {
        font-weight: bold;
    }

    .custom-form input[type="text"],
    .custom-form input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .custom-form button[type="submit"] {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <div >
        <div class="container" style="margin-right: 500px" class="row justify">
            <div class="col-md-6">
                <form id="myForm" class="custom-form">
                    <div class="form-group">
                        {{-- <label for="name">Nonce:</label> --}}
                        <input type="text" class="form-control" id="name" placeholder="Enter ID...">
                    </div>
                    <div class="form-group">
                        {{-- <label for="email">Data:</label> --}}
                        <input type="email" class="form-control" id="email" placeholder="Enter Nonce ...">
                    </div>
                    <div class="form-group">
                        {{-- <label for="email">Data:</label> --}}
                        <input type="email" class="form-control" id="email" placeholder="Enter Data ...">
                    </div>

                    <button class="btn btn-primary">create Peer</button>
                </form>
            </div>
        </div>
        <br>
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="custom-data-box">

                            <p><strong>ID:</strong> 1</p>
                            <p><strong>Nonce:</strong>10136 </p>
                            <p><strong>Data:</strong>rrr </p>
                            <p><strong>Previous Hash:</strong> 0000000000000000000000
                                0000000000000000000000
                                00000000000000000000</p>
                            <p><strong>Hash:</strong>
                                0000s31ce3e2bf637a0a4fd8
                                3dbffc551f016f8a7a257bb2
                                f6dd26ee6632e3d
                                {{-- 787efd025c48b2f9536966ce
                                9a1a6b0fb4f6765329b3c15c
                                5c1ceafa01becafa --}}
                                {{-- 000abdb31b25d34e30d1789
                                e2e979c05874effd197a5ef9c
                                20d3d160d82dd2ad --}}
                            </p>
                            <span class="arrow-right"></span>
                            <button type="submit" class="btn btn-success">Mining</button>                                <style>
                                    .red-button {
                                        background-color: red;
                                        color: white;
                                        /* Add more styles as needed */
                                    }
                                </style>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-data-box">

                            <p><strong>ID:</strong> 2</p>
                            <p><strong>Nonce:</strong>7705 </p>
                            <p><strong>Data:</strong> Data block 2</p>
                            <p><strong>Hash:</strong>
                            0000e2r18120b37bbd40c5093
                            ba2cb0099cb3e64273fe38f5
                            030ab8beb8caa1qw
                            {{-- d8e06a00d1844a46552fcaf5
                            4e86883e1a8242cf60900dd4
                            dc7b34d9cbfc77b3 --}}
                            {{-- 000cd23b18ccdb423fbd23d9
                            9fe1c1cbc66cfd6ca5c5bd389
                            7744172b4e7a558 --}}
                        </p>
                            <p><strong>Previous Hash:</strong>
                            0000sd025c48b2f9536966ce
                            9a1a6b0fb4f6765329b3c15c
                            5c1ceafa01be3e4r
                            {{-- 787efd025c48b2f9536966ce9
                            a1a6b0fb4f6765329b3c15c5c
                            1ceafa01becafa --}}
                            {{-- 000abdb31b25d34e30d1789e2
                            e979c05874effd197a5ef9c20
                            d3d160d82dd2ad --}}
                            </p>
                            <span class="arrow-right"></span>

                            <button type="submit" class="btn btn-success">Mining</button>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="custom-data-box">

                                <p><strong>ID:</strong> 3</p>
                                <p><strong>Nonce:</strong>596 </p>
                                <p><strong>Data:</strong> Data block 3</p>
                                <p><strong>Previous Hash:</strong>
                                0000ed5fe733c82ecb67816
                                6a112f37d2da5136133c63a
                                ca94a2f25cae0swef2
                                {{-- d8e06a00d1844a46552fcaf
                                54e86883e1a8242cf60900d
                                d4dc7b34d9cbfc77b3 --}}
                                {{-- 000cd23b18ccdb423fbd23d
                                99fe1c1cbc66cfd6ca5c5bd3
                                897744172b4e7a558 --}}
                            </p>
                                <p><strong>Hash:</strong>
                                0000ecc0dbf4a676a4994b1c
                                b2185e0c6c84aa5b516cf811
                                03e47ad00fa90edw
                                {{-- 252c2288777d45705ea7eb9e
                                87c7bece1d17b656014374b9
                                3021590cd11a0f2d --}}
                                {{-- 000214d399b2c2c6faa2cbff
                                76f80d9f5ce296c47e889e30
                                f58e6c8174b672c0 --}}
                                </p>

                                <button type="submit" class="btn btn-success">Mining</button>
                            </div>
                        </div>

                        {{--
                        <div class="col-md-3">
                            <div class="data-box">

                                <p><strong>ID:</strong> dfdsf</p>
                                <p><strong>Data:</strong> </p>
                                <p><strong>Previous Hash:</strong> ${createHash(nonce, data)}</p>
                                <p><strong>Hash:</strong> ${createHash(nonce, data)}</p>
                            </div>
                        </div> --}}
                </div>
            </div>


            {{-- <script>
                    document.getElementById("myForm").addEventListener("submit", function(event) {
                        event.preventDefault(); // منع إرسال النموذج

                        var nonce = document.getElementById("name").value;
                        var data = document.getElementById("email").value;

                        // عرض البيانات في العنصر المحدد
                        var resultElement = document.getElementById("result");
                        var dataElement = document.createElement("div");
                        dataElement.classList.add("data-box");
                        dataElement.innerHTML = `
                            <h4>Data Information:</h4>
                            <p><strong>ID:</strong> ${nonce}</p>
                            <p><strong>Data:</strong> ${data}</p>
                            <p><strong>Hash Code:</strong> ${createHash(nonce, data)}</p>
                        `;

                        resultElement.appendChild(dataElement);

                        // مسح قيم الحقول
                        document.getElementById("name").value = "";
                        document.getElementById("email").value = "";
                    });

                    function createHash(nonce, data) {
                        // استبدل هذا بخوارزمية إنشاء الهاش الفعلية
                        // يمكنك استخدام مكتبات مثل crypto-js لتنفيذ عمليات الهاش

                        // مثال بسيط لإنشاء الهاش
                        var hash = nonce + data; // يمكنك استخدام خوارزمية هاش أكثر أمانًا هنا
                        return hash;
                    }
                </script> --}}
                <style>
                    .custom-data-box {
                        position: relative;
                        padding: 20px;
                        background-color: rgba(89, 249, 21, 0.5);
                        border-radius: 50%;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                        text-align: center;
                    }
                    .custom-data-box1 {
                        position: relative;
                        padding: 20px;
                        background-color: rgba(255, 87, 87, 0.5);
                        border-radius: 50%;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                        text-align: center;
                    }

                    .custom-data-box h4 {
                        color: #333;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }

                    .custom-data-box p {
                        color: #666;
                        font-size: 14px;
                        margin-bottom: 5px;
                    }

                    .custom-data-box strong {
                        font-weight: bold;
                    }
                    .custom-data-box1 h4 {
                        color: #333;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }

                    .custom-data-box1 p {
                        color: #666;
                        font-size: 14px;
                        margin-bottom: 5px;
                    }

                    .custom-data-box1 strong {
                        font-weight: bold;
                    }

                    .arrow-right {
                        position: absolute;
                        top: 50%;
                        right: -38px;
                        width: 0;
                        height: 0;
                        border-top: 38px solid transparent;
                        border-bottom: 38px solid transparent;
                        border-left: 38px solid #666;
                        transform: translateY(-50%);
                    }
                </style>



    </div>

</body>

</html>
