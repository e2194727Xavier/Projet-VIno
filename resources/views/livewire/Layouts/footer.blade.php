<footer class="fixed bottom-0 w-full left-0 right-0 flex items-center">
    <div class="justify-around flex w-full text-white bg-red-wine ">
        <!-- ICÔNE CATALOGUE  -->
        <button class='hover:bg-pale-pink flex flex-col items-center p-2 w-1/3' wire:click="redirectToCatalogue">
            <!-- <a href="/index" class='hover:bg-pale-pink flex flex-col items-center p-2'> -->
            <svg viewBox="0 -15 100 130" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
                <g data-name="Layer 2" transform="matrix(0.9999999999999999, 0, 0, 0.9999999999999999, -1.7763568394002505e-15, 0)">
                    <path stroke='#fff' stroke-width='0.8' d="M54.625 10.341a2.407 2.407 0 0 0-2.4-2.4h-8.77a2.408 2.408 0 0 0-2.405 2.4V31.45a14.408 14.408 0 0 0-7.6 12.685v45.524a2.407 2.407 0 0 0 2.405 2.4h23.963a2.407 2.407 0 0 0 2.405-2.4V44.135a14.381 14.381 0 0 0-7.6-12.683ZM36.449 51.5H48.87v22.533H36.449ZM55.89 36.086a11.311 11.311 0 0 1 3.333 8.049v44.929H36.449V77.033H50.37a1.5 1.5 0 0 0 1.5-1.5V50a1.5 1.5 0 0 0-1.5-1.5H36.449v-4.36a11.4 11.4 0 0 1 6.713-10.384 1.5 1.5 0 0 0 .884-1.368V10.936h7.579V24.46h-4.342a1.5 1.5 0 0 0 0 3h4.342v4.923a1.5 1.5 0 0 0 .881 1.367 11.439 11.439 0 0 1 3.384 2.336ZM94 87.364V61.519a25.029 25.029 0 0 0-3.134-12.109l-2.9-5.264a32.639 32.639 0 0 1-4.071-15.77v-5.437a1.5 1.5 0 0 0 1.271-1.477V15a7.1 7.1 0 0 0-14.2 0v6.465a1.5 1.5 0 0 0 1.272 1.477v5.437a32.639 32.639 0 0 1-4.071 15.77 1.5 1.5 0 1 0 2.622 1.451 35.653 35.653 0 0 0 4.446-17.223v-5.415h.213a1.5 1.5 0 0 0 0-3h-1.485V15a4.1 4.1 0 0 1 8.2 0v4.965H79.67a1.5 1.5 0 0 0 0 3h1.223v5.414A35.65 35.65 0 0 0 85.338 45.6l2.18 3.953-9.454 6.531L71 51.2a1.5 1.5 0 1 0-1.7 2.467l7.914 5.469a1.505 1.505 0 0 0 1.706 0l10.01-6.915a22.026 22.026 0 0 1 2.07 9.3v25.843a1.708 1.708 0 0 1-1.712 1.7H66.84a1.5 1.5 0 0 0 0 3h22.448a4.711 4.711 0 0 0 4.712-4.7Z" style="fill: rgb(255, 255, 255); paint-order: stroke;" />
                    <path stroke='#fff' stroke-width='0.8' d="M85.856 80.36a1.5 1.5 0 0 0 1.5-1.5V67.636a1.5 1.5 0 0 0-1.5-1.5H70.271a1.5 1.5 0 0 0-1.5 1.5V78.86a1.5 1.5 0 0 0 1.5 1.5ZM71.771 69.136h12.585v8.224H71.771ZM10.448 92.064h17.306a1.5 1.5 0 1 0 0-3H10.448A1.45 1.45 0 0 1 9 87.616V76.483h13.546a1.5 1.5 0 0 0 1.5-1.5V50.842a1.5 1.5 0 0 0-1.5-1.5H11.3c5.136-11.833 4.427-17.9 4.2-19.114V12.791a1.857 1.857 0 0 1 1.855-1.855h5.49a1.857 1.857 0 0 1 1.855 1.855v12.2h-4.4a1.5 1.5 0 0 0 0 3h4.4v2.231c-.191.973-.673 4.833 1.616 12.218a1.5 1.5 0 0 0 2.865-.888c-2.279-7.356-1.532-10.781-1.528-10.8a1.511 1.511 0 0 0 .047-.372V12.791a4.861 4.861 0 0 0-4.855-4.855h-5.49a4.861 4.861 0 0 0-4.855 4.855v17.588a1.626 1.626 0 0 0 .043.355c.013.054 1.18 5.487-4 17.417A30.517 30.517 0 0 0 6 60.366v27.25a4.454 4.454 0 0 0 4.448 4.448Zm10.6-18.581H9V60.366a27.4 27.4 0 0 1 1.2-8.024h10.846Z" style="fill: rgb(255, 255, 255); paint-order: stroke;" />
                </g>
            </svg>
            <p class="text-xs">Catalogue des bouteilles</p>
            <!-- </a> -->
        </button>
        
        <!-- ICÔNE CELLIERS -->
        <button class="flex flex-col items-center p-2 w-1/3 " wire:click="redirectToIndex">
            <!-- BLANCHE -->
            <svg viewBox="-20 -7 85 90" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
                <path stroke='#fff' stroke-width='1' d="M23 0c12.702549 0 23 10.297451 23 23v42c0 .552285-.447715 1-1 1H1c-.552285 0-1-.447715-1-1V23C0 10.297451 10.297451 0 23 0Zm21 24v-1c0-11.59798-9.40202-21-21-21S2 11.40202 2 23v31h7v-9c0-.552285.447715-1 1-1h8v-9c0-.552285.447715-1 1-1h8v-9c0-.552285.447715-1 1-1h16ZM2 56v8h42v-8H2Zm9-10v8h33v-8H11Zm9-10v8h24v-8H20Zm9-10v8h15v-8H29Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, -1.7763568394002505e-15)" />
            </svg>
            <p class="text-xs">Vos celliers</p>
        </button>

        <!-- ICÔNE ADDBOTTLE -->
        <button class='hover:bg-pale-pink flex flex-col items-center p-2 w-1/3' wire:click="redirectToAddBottle">
            <svg viewBox="-14 -7 80 80" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
                <path stroke='#fff' stroke-width='0.7' d="M21.087 0H2.913A2.917 2.917 0 0 0 0 2.913v18.174A2.917 2.917 0 0 0 2.913 24h18.174A2.917 2.917 0 0 0 24 21.087V2.913A2.917 2.917 0 0 0 21.087 0ZM22 21.087a.915.915 0 0 1-.913.913H2.913A.915.915 0 0 1 2 21.087V2.913A.915.915 0 0 1 2.913 2h18.174a.915.915 0 0 1 .913.913ZM51.087 0H32.913A2.917 2.917 0 0 0 30 2.913v18.174A2.917 2.917 0 0 0 32.913 24h18.174A2.917 2.917 0 0 0 54 21.087V2.913A2.917 2.917 0 0 0 51.087 0ZM52 21.087a.915.915 0 0 1-.913.913H32.913a.915.915 0 0 1-.913-.913V2.913A.915.915 0 0 1 32.913 2h18.174a.915.915 0 0 1 .913.913ZM21.087 30H2.913A2.917 2.917 0 0 0 0 32.913v18.174A2.917 2.917 0 0 0 2.913 54h18.174A2.917 2.917 0 0 0 24 51.087V32.913A2.917 2.917 0 0 0 21.087 30ZM22 51.087a.915.915 0 0 1-.913.913H2.913A.915.915 0 0 1 2 51.087V32.913A.915.915 0 0 1 2.913 32h18.174a.915.915 0 0 1 .913.913Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="53" cy="48.02" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="31" cy="48.07" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="53" cy="35.92" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="51.05" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="53" cy="41.97" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="31" cy="35.97" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="38.95" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="32.94" cy="53" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="45" cy="31" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <path stroke='#fff' stroke-width='2' d="M32.9 32h.01a1 1 0 1 0-1.01-.99 1 1 0 0 0 1 .99Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="31" cy="42.02" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <path stroke='#fff' stroke-width='2' d="M51.1 52h-.01a1 1 0 0 0 0 2h.1a1 1 0 0 0-.09-2Z" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="45.04" cy="53" r="1" style="fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <circle stroke='#fff' stroke-width='2' cx="38.99" cy="53" r="1" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
                <path stroke='#fff' stroke-width='1' d="M47 41h-4v-4a1 1 0 0 0-2 0v4h-4a1 1 0 0 0 0 2h4v4a1 1 0 0 0 2 0v-4h4a1 1 0 0 0 0-2Z" style="paint-order: stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, 1, 0, 1.7763568394002505e-15)" />
            </svg>
            <p class="text-xs">Rechercher une bouteille</p>
        </button>
    </div>
</footer>