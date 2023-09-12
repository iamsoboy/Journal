<x-guest-layout>
@include('layouts.page_header')
    <div class="bg-indigo-500 py-4 px-6">
        <div class="flex flex-col text-center w-full">
            <p class="lg:w-2/3 mx-auto leading-relaxed text-lg text-white">
                IIGD charges a minimal amount as publication fee to cover operational cost. <br> Such as: peer-review,
                hard copy production and distribution, website maintenance, Staffing and editorial expenses.<br>
                There is a variety of payment options listed below:
            </p>
        </div>
    </div>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-12">
                <div class="p-12 md:w-1/2 flex flex-col items-start">
                    <div>
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-900 text-lg font-medium tracking-widest">BANK WIRE TRANSFER</span>
                        <p class="leading-relaxed mb-8">
                            All payments should be made into the Company's registered account name (IIGD Publication Company).
                            We will never ask you to pay into a personal account or through a third party’s account.
                            The payment details will be sent to you after the acceptance of your paper.
                        </p>
                    </div>
                    <div>
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-900 text-lg font-medium tracking-widest">WESTERN UNION OR MONEYGRAM</span>
                        <p class="leading-relaxed mb-8">
                            Please contact the editorial office to obtain the payment details of the recipient.
                            Please email a copy of the bank teller, receipt, or payment code to editor@iigdjournals.org
                            for payment confirmation after a successful payment.
                        </p>
                    </div>
                    <div>
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-900 text-lg font-medium tracking-widest">WORLD REMIT</span>
                        <p class="leading-relaxed mb-8">
                            World remit is the fastest payment option we’ve witness so far. It is our most preferred payment option.
                            You can visit worldremit.com to send, Please contact the editorial office to obtain the payment
                            details of the recipient. After successful payment, kindly email a copy of the teller, receipt,
                            or payment code to editor@iiardjournals.org for payment confirmation.
                        </p>
                    </div>
                    <div>
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-900 text-lg font-medium tracking-widest">CRYPTOCURRENCY</span>
                        <p class="leading-relaxed mb-8">
                            Please contact the editorial office to obtain the cryptocurrency token address (BTC, USDT, BNB, etc).
                            After successful transfer, please email transfer receipt or payment code to
                            editor@iiardjournals.org for payment confirmation
                        </p>
                    </div>
                </div>
                <div class="p-12 md:w-1/2 flex flex-col items-start">
                    <div class="flex flex-wrap -m-12">
                        <div class="p-12 flex flex-col items-start">
                            <span class="inline-block py-1 px-2 rounded bg-yellow-50 text-yellow-500 text-lg font-medium tracking-widest">SECURE ONLINE PAYMENT</span>
                            <form method="post" action="#" class="pt-8">
                                @csrf
                                <div class="flex flex-wrap -m-2 pb-4">
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Full Name</label>
                                            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="amount" class="leading-7 text-sm text-gray-600">Amount</label>
                                            <input type="number" id="amount" name="amount" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>
                                    <div class="p-2 w-1/2">
                                        <div class="relative">
                                            <label for="currency" class="leading-7 text-sm text-gray-600">Currency</label>
                                            <select name="currency" id="currency" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <option value="USD" selected>Dollar - USD</option>
                                                <option value="NGN">Naira - NGN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="metadata" class="leading-7 text-sm text-gray-600">Address</label>
                                            <textarea id="metadata" name="metadata" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <button type="button" onclick="SquadPay()" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Make Payment</button>
                                    </div>
                                </div>
                                <div class="w-full py-2 items-center block border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                    <div class="flex items-center justify-between px-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 141.732 141.732" class="w-14 h-14"><g fill="#2566af">
                                            <path d="M62.935 89.571h-9.733l6.083-37.384h9.734zM45.014 52.187L35.735 77.9l-1.098-5.537.001.002-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s4.691.976 10.181 4.273l8.456 32.479h10.141l15.485-37.385H45.014zM121.569 89.571h8.937l-7.792-37.385h-7.824c-3.613 0-4.493 2.786-4.493 2.786L95.881 89.571h10.146l2.029-5.553h12.373l1.14 5.553zm-10.71-13.224l5.114-13.99 2.877 13.99h-7.991zM96.642 61.177l1.389-8.028s-4.286-1.63-8.754-1.63c-4.83 0-16.3 2.111-16.3 12.376 0 9.658 13.462 9.778 13.462 14.851s-12.075 4.164-16.06.965l-1.447 8.394s4.346 2.111 10.986 2.111c6.642 0 16.662-3.439 16.662-12.799 0-9.72-13.583-10.625-13.583-14.851.001-4.227 9.48-3.684 13.645-1.389z"/></g><path d="M34.638 72.364l-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s7.373 1.528 14.445 7.253c6.762 5.472 8.967 12.292 8.967 12.292z" fill="#e6a540"/>
                                            <path fill="none" d="M0 0h141.732v141.732H0z"/>
                                        </svg>
                                        <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 1556" class="w-14 h-14">
                                            <defs>
                                                <style>.cls-1{fill:#231f20;}.cls-2{fill:#f79410;}.cls-3{fill:#ff5f00;}.cls-4{fill:#eb001b;}.cls-5{fill:#f79e1b;}</style>
                                            </defs>
                                            <title>Tekengebied 1</title>
                                            <path class="cls-1" d="M1960.59,1534.9v4h3.73a3.93,3.93,0,0,0,2-.51,1.78,1.78,0,0,0,.75-1.53,1.71,1.71,0,0,0-.75-1.49,3.59,3.59,0,0,0-2-.51h-3.73Zm3.77-2.83a6.92,6.92,0,0,1,4.48,1.3,4.3,4.3,0,0,1,1.57,3.54,4.06,4.06,0,0,1-1.26,3.11,6.14,6.14,0,0,1-3.58,1.49l5,5.7h-3.85l-4.6-5.66h-1.49v5.66h-3.22v-15.13h7Zm-1,20.36a12,12,0,0,0,4.91-1,12.86,12.86,0,0,0,4-2.71,12.63,12.63,0,0,0,2.71-4,12.94,12.94,0,0,0,0-9.9,13.07,13.07,0,0,0-2.71-4,12.89,12.89,0,0,0-4-2.71,12.59,12.59,0,0,0-4.91-.94,13.12,13.12,0,0,0-5,.94,12.77,12.77,0,0,0-4.09,2.71,12.92,12.92,0,0,0-2.67,14,11.92,11.92,0,0,0,2.67,4,12.81,12.81,0,0,0,4.09,2.71,12.45,12.45,0,0,0,5,1m0-29a16.74,16.74,0,0,1,11.75,4.8,16,16,0,0,1,3.54,5.19,16.09,16.09,0,0,1,0,12.65,16.88,16.88,0,0,1-3.54,5.19,17.85,17.85,0,0,1-5.27,3.5,16.33,16.33,0,0,1-6.48,1.3,16.6,16.6,0,0,1-6.56-1.3,17.08,17.08,0,0,1-5.31-3.5A16.88,16.88,0,0,1,1948,1546a16.09,16.09,0,0,1,0-12.65,16,16,0,0,1,3.54-5.19,15.8,15.8,0,0,1,5.31-3.5,16.6,16.6,0,0,1,6.56-1.3M432.16,1465.1c0-28.85,18.9-52.55,49.79-52.55,29.52,0,49.44,22.68,49.44,52.55s-19.92,52.55-49.44,52.55c-30.89,0-49.79-23.7-49.79-52.55m132.88,0V1383H529.35V1403c-11.32-14.78-28.49-24.05-51.84-24.05-46,0-82.1,36.08-82.1,86.19s36.08,86.19,82.1,86.19c23.34,0,40.52-9.28,51.84-24.05v19.93H565V1465.1Zm1205.92,0c0-28.85,18.9-52.55,49.8-52.55,29.55,0,49.44,22.68,49.44,52.55s-19.89,52.55-49.44,52.55c-30.89,0-49.8-23.7-49.8-52.55m132.92,0v-148h-35.72V1403c-11.32-14.78-28.49-24.05-51.84-24.05-46,0-82.1,36.08-82.1,86.19s36.08,86.19,82.1,86.19c23.35,0,40.52-9.28,51.84-24.05v19.93h35.72V1465.1ZM1008,1410.86c23,0,37.77,14.42,41.54,39.81H964.38c3.81-23.7,18.2-39.81,43.63-39.81m.71-32c-48.1,0-81.75,35-81.75,86.19,0,52.19,35,86.19,84.14,86.19,24.72,0,47.36-6.17,67.28-23l-17.49-26.45c-13.76,11-31.28,17.17-47.75,17.17-23,0-43.94-10.65-49.09-40.2h121.87c.35-4.44.71-8.92.71-13.72-.36-51.17-32-86.19-77.94-86.19m430.9,86.19c0-28.85,18.9-52.55,49.79-52.55,29.52,0,49.44,22.68,49.44,52.55s-19.92,52.55-49.44,52.55c-30.89,0-49.8-23.7-49.8-52.55m132.88,0V1383H1536.8V1403c-11.36-14.78-28.49-24.05-51.84-24.05-46,0-82.1,36.08-82.1,86.19s36.08,86.19,82.1,86.19c23.35,0,40.48-9.28,51.84-24.05v19.93h35.68V1465.1Zm-334.42,0c0,49.79,34.66,86.19,87.56,86.19,24.72,0,41.19-5.5,59-19.57l-17.14-28.85c-13.4,9.63-27.47,14.78-43,14.78-28.49-.35-49.44-20.95-49.44-52.55s20.95-52.19,49.44-52.55c15.49,0,29.56,5.15,43,14.78l17.14-28.85c-17.84-14.07-34.31-19.57-59-19.57-52.9,0-87.56,36.39-87.56,86.19m460.1-86.19c-20.59,0-34,9.63-43.27,24.05V1383h-35.37v164.12h35.73v-92c0-27.16,11.67-42.25,35-42.25a57.87,57.87,0,0,1,22.32,4.13l11-33.64c-7.9-3.11-18.2-4.48-25.43-4.48m-956.64,17.17c-17.17-11.32-40.83-17.17-66.93-17.17-41.58,0-68.35,19.93-68.35,52.54,0,26.76,19.93,43.27,56.63,48.42l16.86,2.4c19.57,2.75,28.81,7.9,28.81,17.17,0,12.69-13,19.93-37.41,19.93-24.72,0-42.56-7.9-54.59-17.17L599.74,1530c19.57,14.42,44.29,21.3,71.06,21.3,47.4,0,74.87-22.32,74.87-53.57,0-28.85-21.62-43.94-57.34-49.09l-16.82-2.44c-15.45-2-27.83-5.11-27.83-16.11,0-12,11.67-19.22,31.25-19.22,20.95,0,41.23,7.9,51.17,14.07l15.45-28.85ZM1202,1378.91c-20.59,0-34,9.63-43.23,24.05V1383h-35.37v164.12h35.69v-92c0-27.16,11.67-42.25,35-42.25a57.87,57.87,0,0,1,22.32,4.13l11-33.64c-7.9-3.11-18.2-4.48-25.43-4.48M897.44,1383H839.08v-49.79H803V1383H769.71v32.62H803v74.87c0,38.08,14.78,60.76,57,60.76,15.49,0,33.33-4.8,44.65-12.69L894.34,1508c-10.65,6.17-22.32,9.28-31.6,9.28-17.84,0-23.66-11-23.66-27.47v-74.16h58.36ZM363.85,1547.16v-103c0-38.79-24.72-64.89-64.57-65.24-20.95-.35-42.56,6.17-57.69,29.2-11.32-18.2-29.16-29.2-54.24-29.2-17.53,0-34.66,5.15-48.07,24.37V1383H103.56v164.12h36v-91c0-28.49,15.8-43.63,40.2-43.63,23.7,0,35.69,15.45,35.69,43.27v91.34h36.08v-91c0-28.49,16.47-43.63,40.16-43.63,24.37,0,36,15.45,36,43.27v91.34Z"/>
                                            <path class="cls-2" d="M1980.94,1001.22v-24h-6.25l-7.23,16.47-7.19-16.47H1954v24h4.44V983.14l6.76,15.6h4.6l6.76-15.64v18.12h4.4Zm-39.65,0V981.33h8v-4.05h-20.44v4.05h8v19.89h4.4Z"/>
                                            <path class="cls-3" d="M1270.57,1104.15H729.71v-972h540.87Z"/>
                                            <path class="cls-4" d="M764,618.17c0-197.17,92.32-372.81,236.08-486A615.46,615.46,0,0,0,618.09,0C276.72,0,0,276.76,0,618.17s276.72,618.17,618.09,618.17a615.46,615.46,0,0,0,382-132.17C856.34,991,764,815.35,764,618.17"/>
                                            <path class="cls-5" d="M2000.25,618.17c0,341.41-276.72,618.17-618.09,618.17a615.65,615.65,0,0,1-382.05-132.17c143.8-113.19,236.12-288.82,236.12-486s-92.32-372.81-236.12-486A615.65,615.65,0,0,1,1382.15,0c341.37,0,618.09,276.76,618.09,618.17"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0 0 192.756 192.756">
                                            <g fill-rule="evenodd" clip-rule="evenodd"><path fill="#fff" d="M0 0h192.756v192.756H0V0z"/>
                                                <path d="M8.484 177.699h-.551c0-.275-.138-.689-.138-.828 0-.137 0-.412-.414-.412h-.828v1.24h-.414v-2.896h1.242c.552 0 .965.139.965.689 0 .414-.138.553-.275.689.138.139.275.277.275.553v.551c0 .139 0 .139.138.139v.275zm-.551-2.068c0-.414-.276-.414-.414-.414h-.966v.828h.828c.276 0 .552-.139.552-.414zm2.345.551c0-1.654-1.379-3.035-3.173-3.035-1.655 0-3.035 1.381-3.035 3.035 0 1.793 1.38 3.174 3.035 3.174 1.793-.001 3.173-1.381 3.173-3.174zm-.414 0c0 1.518-1.241 2.621-2.759 2.621s-2.621-1.104-2.621-2.621c0-1.379 1.104-2.621 2.621-2.621s2.759 1.242 2.759 2.621zM179.818 120.451c0 4.139-2.621 6.068-7.312 6.068h-8.965v-4.139h8.965c.828 0 1.518-.137 1.795-.412.275-.277.551-.691.551-1.242 0-.553-.275-1.104-.551-1.379-.277-.277-.828-.414-1.656-.414-4.275-.139-9.656.137-9.656-5.932 0-2.76 1.793-5.795 6.621-5.795h9.242v4.139h-8.553c-.826 0-1.379 0-1.793.275-.414.414-.689.828-.689 1.518s.414 1.104.965 1.381c.553.137 1.105.275 1.795.275h2.482c2.621 0 4.277.551 5.381 1.518.826.965 1.378 2.208 1.378 4.139zm-19.451-4.139c-1.104-.967-2.76-1.518-5.381-1.518h-2.482c-.689 0-1.242-.139-1.793-.275-.553-.277-.965-.691-.965-1.381s.137-1.104.689-1.518c.414-.275.965-.275 1.793-.275h8.553v-4.139h-9.242c-4.967 0-6.623 3.035-6.623 5.795 0 6.068 5.381 5.793 9.658 5.932.826 0 1.379.137 1.654.414.275.275.553.826.553 1.379 0 .551-.277.965-.553 1.242-.414.275-.965.412-1.793.412h-8.967v4.139h8.967c4.689 0 7.311-1.93 7.311-6.068 0-1.931-.551-3.174-1.379-4.139zm-17.658 6.208h-10.896v-3.863h10.621v-3.861h-10.621v-3.588h10.896v-4H127.26v19.312h15.449v-4zm-20.416-14.346c-1.518-.828-3.311-.967-5.656-.967h-10.621v19.312h4.689v-7.035h4.967c1.654 0 2.621.139 3.311.828.828.965.828 2.621.828 3.863v2.344h4.551v-3.725c0-1.793-.137-2.621-.689-3.586-.414-.553-1.24-1.242-2.344-1.656 1.24-.412 3.311-2.068 3.311-5.104-.001-2.206-.829-3.448-2.347-4.274zm-26.21-.967H81.322l-5.932 6.346-5.656-6.346H51.111v19.312h18.348l5.932-6.346 5.656 6.346h8.967v-6.482h5.794c4 0 8.002-1.104 8.002-6.484-.001-5.242-4.14-6.346-7.727-6.346zm22.485 8.002c-.689.275-1.379.275-2.207.275l-5.656.139v-4.416h5.656c.828 0 1.656 0 2.207.414.553.277.965.828.965 1.656s-.412 1.518-.965 1.932zm-22.485.965h-6.07v-4.967h6.07c1.656 0 2.759.691 2.759 2.346 0 1.656-1.104 2.621-2.759 2.621zm-17.796.689l7.173-7.586v15.588l-7.173-8.002zm-11.174 5.657h-11.45v-3.863h10.208v-3.861H55.663v-3.588h11.588l5.104 5.656-5.242 5.656zm99.875-29.246h-6.621l-8.691-14.485v14.485h-9.379l-1.795-4.277h-9.656l-1.793 4.277h-5.381c-2.207 0-5.104-.552-6.758-2.208-1.518-1.655-2.346-3.862-2.346-7.311 0-2.897.414-5.518 2.482-7.587 1.379-1.518 3.863-2.207 7.035-2.207h4.414V78.1h-4.414c-1.654 0-2.621.276-3.586 1.104-.828.828-1.242 2.345-1.242 4.414s.414 3.587 1.242 4.553c.689.689 1.932.965 3.172.965h2.07l6.621-15.174h6.898l7.725 18.209v-18.21h7.174l8.139 13.381V73.961h4.689v19.313h.001zm-54.765-19.313h-4.689v19.313h4.689V73.961zm-9.795.828c-1.518-.828-3.172-.828-5.517-.828H86.288v19.313h4.552v-7.036h4.966c1.656 0 2.76.138 3.449.828.828.966.689 2.622.689 3.725v2.483h4.689v-3.863c0-1.655-.137-2.483-.826-3.449-.414-.552-1.242-1.242-2.207-1.655 1.24-.552 3.311-2.069 3.311-5.104.001-2.207-.966-3.449-2.483-4.414zM82.977 89.274h-10.76v-3.863h10.622v-4H72.217v-3.449h10.76v-4h-15.45v19.313h15.45v-4.001zM64.078 73.961h-7.587l-5.656 13.105-6.07-13.105h-7.449V92.17l-7.863-18.209h-6.897l-8.277 19.313h4.966l1.793-4.277h9.656l1.793 4.277h9.381V78.1l6.759 15.174h4l6.76-15.174v15.174h4.69V73.961h.001zm74.77 10.898l-3.174-7.587-3.172 7.587h6.346zm-40.006-3.034c-.689.414-1.379.414-2.345.414H90.84v-4.276h5.656c.828 0 1.792 0 2.345.276.551.414.828.966.828 1.793s-.276 1.516-.827 1.793zm-76.149 3.034l3.173-7.587 3.173 7.587h-6.346zm156.022-71.458H14.14v69.527l5.656-12.829h12.001l1.656 3.173v-3.173h14.071l3.173 6.897 3.035-6.897h44.834c2.068 0 3.861.414 5.242 1.517v-1.517h12.277v1.517c2.068-1.104 4.689-1.517 7.725-1.517h17.795l1.656 3.173v-3.173h13.105l1.932 3.173v-3.173h12.828v27.038H158.16l-2.482-4.138v4.138h-16.141l-1.793-4.414h-4.002l-1.793 4.414h-8.414c-3.311 0-5.795-.828-7.449-1.655v1.655H96.083v-6.208c0-.828-.138-.966-.69-.966h-.689v7.173H56.077v-3.449l-1.379 3.449h-8.139l-1.379-3.311v3.311H29.591l-1.655-4.414h-4.001l-1.793 4.414H14.14v81.529h164.575V129.14c-1.793.828-4.277 1.242-6.76 1.242h-12.002v-1.656c-1.379 1.105-3.863 1.656-6.207 1.656h-37.799v-6.207c0-.828-.137-.828-.828-.828h-.689v7.035h-12.416v-7.311c-2.068.965-4.414.965-6.483.965h-1.38v6.346H78.977l-3.586-4.139-4 4.139H46.972v-27.037h24.831l3.587 4.137 3.863-4.137h16.692c1.93 0 5.104.275 6.483 1.654v-1.654h14.898c1.518 0 4.416.275 6.346 1.654v-1.654h22.486V105c1.242-1.104 3.588-1.654 5.656-1.654h12.553V105c1.381-.965 3.311-1.654 5.795-1.654h8.553V13.401z" fill="#0077a6"/>
                                            </g>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 74.375 85" class="w-14 h-14" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round"><use xlink:href="#A" x="2.188" y="2.5"/>
                                            <symbol id="A" overflow="visible">
                                                <g stroke="none">
                                                    <path d="M35.006 80l-.9-.278c-.355-.116-8.869-2.86-17.295-11.716-5.068-5.4-8.998-11.609-11.593-18.315C1.605 40.12-.157 30.047.011 19.925v-2.478h2.686c2.42 0 6.931-.729 8.73-2.373 2.534-2.315 2.99-6.68 2.99-6.727l.127-1.586 1.622-.567c6.043-2.027 12.406-3.149 18.841-3.323 6.404.211 12.736 1.312 18.777 3.265l1.66.556.127 1.609s.405 4.307 3.041 6.715c1.672 1.528 6.614 2.188 8.742 2.315l2.635.093v2.408c.17 10.149-1.592 20.249-5.207 29.847-2.592 6.722-6.523 12.947-11.593 18.362-8.438 8.81-16.915 11.566-17.282 11.67z" fill="#7d7c7c"/>
                                                    <path d="M35.006 77.129l-.9-.278c-.355-.116-8.869-2.86-17.295-11.716-5.068-5.4-8.998-11.609-11.593-18.316C1.605 37.249-.157 27.176.011 17.054V14.53h2.686c2.42 0 6.931-.729 8.73-2.373 2.534-2.315 2.99-6.68 2.99-6.726l.127-1.586 1.622-.567A64.8 64.8 0 0 1 35.006 0a68.41 68.41 0 0 1 18.777 3.265l1.66.556.127 1.609s.405 4.307 3.041 6.715c1.672 1.528 6.614 2.188 8.742 2.316l2.635.093v2.408c.17 10.149-1.592 20.249-5.207 29.847-2.592 6.722-6.523 12.947-11.593 18.362-8.438 8.868-16.94 11.577-17.295 11.739z" fill="#d2d3d3"/>
                                                    <path d="M35.007 70.761l-1.039-.428c-5.255-2.301-9.908-5.605-13.646-9.69-8.869-9.459-13.811-23.028-14.191-39.236v-2.084l2.255-.266c3.294-.394 5.879-1.308 7.285-2.593 1.668-1.731 2.766-3.859 3.168-6.136l.279-1.343 1.419-.428a53.95 53.95 0 0 1 14.52-2.315c4.932.138 9.816.918 14.507 2.316l1.432.417.291 1.354c.413 2.272 1.52 4.391 3.193 6.113 1.267 1.158 3.915 2.061 7.26 2.478l2.243.278v2.072c-.38 16.208-5.296 29.87-14.203 39.363-3.734 4.094-8.388 7.407-13.646 9.713zM11.263 23.294c.697 14.229 5.131 26.072 12.898 34.327 3.02 3.287 6.702 6.014 10.846 8.035 4.145-2.024 7.827-4.755 10.846-8.046 7.78-8.278 12.214-20.168 12.911-34.454-2.938-.462-5.676-1.665-7.906-3.473-2.071-1.994-3.535-4.449-4.245-7.12-3.772-1.022-7.673-1.59-11.606-1.69-3.931.092-7.831.668-11.593 1.713-.69 2.687-2.146 5.159-4.219 7.167-2.227 1.84-4.976 3.072-7.932 3.554z"/>
                                                    <path d="M45.346 32.613v-7.109c-.633-4.74-5.037-8.304-10.263-8.304s-9.63 3.564-10.263 8.304v7.109h-5.309V48.37h30.992V32.613zm-5.068 0H29.761v-7.109c.015-1.234.595-2.405 1.599-3.23s2.34-1.228 3.684-1.111c2.762-.112 5.114 1.82 5.284 4.342z" fill="#7d7c7c"/>
                                                </g>
                                            </symbol>
                                        </svg>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <script src="https://checkout.squadco.com/widget/squad.min.js"></script>

    <script>
    function SquadPay() {
        const squadInstance = new squad({
        onClose: () => console.log("Widget closed"),
        onLoad: () => console.log("Widget loaded successfully"),
        onSuccess: () => console.log(`Linked successfully`),
        key: "sandbox_pk_3ed305e3a9f9146ace3527196772b47d43e672e0816d",
        //Change key (test_pk_sample-public-key-1) to the key on your Squad Dashboard
        email: document.getElementById("email").value,
        metadata: document.getElementById("metadata").value,
        amount: document.getElementById("amount").value * 100,
        //Enter amount in Naira or Dollar (Base value Kobo/cent already multiplied by 100)
        currency_code: document.getElementById("currency").value,
        });
        squadInstance.setup();
        squadInstance.open();

        }
    </script>
</x-guest-layout>
