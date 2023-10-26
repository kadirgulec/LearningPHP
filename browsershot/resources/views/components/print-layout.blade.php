<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        tbody tr:nth-child(even){
            background-color: hsla(0, 0%, 90%, 0.815);
        }
    </style>

</head>
<body class="max-w-5xl mx-auto py-16 bg-white bg-[white] rounded-b-md">

    <header>
        <div class="p-9">
            <div class="text-slate-700 flex space-x-5 items-center">
             <img class="object-cover h-12" src="https://www.aks-service.de/wp-content/uploads/2022/10/aks_waben.png" />

             <p class="text-xl font-extrabold tracking-tight uppercase font-body">
              aks-Service-GmbH
             </p>
            </div>
           </div>
    </header>

     <main class="">


       <div class="p-9">
        <div class="flex w-full">

            <!-- starts the address and informations -->
         <div class="grid grid-cols-2 gap-12 w-full">
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">
            Firma
           </p>
           <p>ABC Musterfirma</p>
           <p>Max Müller</p>
           <p>Hauptsraße 110</p>
           <p>52351 Düren</p>
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Lieferadresse:</p>
           <p>ABC Musterfirma</p>
           <p>Max Müller</p>
           <p>Hauptsraße 110</p>
           <p>52351 Düren</p>
          </div>
          <div class="text-sm font-light text-slate-500">
           <!-- left side  -->
          </div>
          <div class="text-sm font-light text-slate-500 border px-1">
            <div class="flex justify-between">
                <p class="text-sm font-normal text-slate-700">Datum</p>
                <p>##.##.####</p>
            </div>

            <div class="flex justify-between">
                <p class="text-sm font-normal text-slate-700">Fälligkeitsdatum</p>
                <p>##.##.####</p>
            </div>

            <div class="flex justify-between">
                <p class="text-sm font-normal text-slate-700">Kunden-Nr</p>
                <p>####</p>
            </div>

            <div class="flex justify-between">
                <p class="text-sm font-normal text-slate-700">Kunden-UID</p>
                <p>DE########</p>
            </div>

            <div class="flex justify-between">
                <p class="text-sm font-normal text-slate-700">Bearbeiter</p>
                <p>Max Musterrman</p>
            </div>
          </div>
         </div>
        </div>
       </div>

       <div class="p-9">
        <div class="flex flex-col mx-0 mt-8">
         <table class="min-w-full divide-y divide-slate-500 border-collapse table-fixed">
          <thead>
           <tr>
            <th scope="col" class="bg-gray-200 py-3.5 pl-4 pr-3 text-left sm:text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
             Position
            </th>
            <th scope="col" class="bg-gray-200 hidden py-3.5 px-3 text-right sm:text-left text-sm font-normal text-slate-700 sm:table-cell">
             Artikel Nr.
            </th>
            <th scope="col" class="bg-gray-200 hidden py-3.5 px-3 text-right sm:text-left text-sm font-normal text-slate-700 sm:table-cell">
             Bezeichnung
            </th>
            <th scope="col" class="bg-gray-200 hidden py-3.5 pl-3 pr-4 text-right sm:text-left text-sm font-normal text-slate-700 sm:table-cell md:pr-0">
             Menge
            </th>
            <th scope="col" class="bg-gray-200 hidden py-3.5 pl-3 pr-4 text-right sm:text-left text-sm font-normal text-slate-700 sm:table-cell md:pr-0">
                Einzelpreis
            </th>
            <th scope="col" class="bg-gray-200 py-3.5 pl-3 pr-4 text-right sm:text-left text-sm font-normal text-slate-700 sm:pr-6 md:pr-0">
                Netto
            </th>
           </tr>
          </thead>

          <tbody>

           {{$slot}}


           <!-- Here you can write more products/tasks that you want to charge for-->
          </tbody>
          <tfoot>
           <tr>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <th scope="row" colspan="2" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-left text-slate-500 sm:table-cell md:pl-0">
             Zwischensumme
            </th>
            <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
             Zwischensumme
            </th>
            <td colspan="6" id="subTotal" class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                0,00 €

            </td>
           </tr>
           <tr>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <th scope="row" colspan="2" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-left text-slate-500 sm:table-cell md:pl-0">
             USt 19%
            </th>
            <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
             USt 19%
            </th>
            <td colspan="6" class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
             0.00 €
            </td>
           </tr>

           <tr>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <td class="hidden sm:table-cell md:pl-0"></td>
            <th scope="row" colspan="2" class="hidden pt-4 pl-6 pr-3 text-sm font-semibold text-left text-slate-700 sm:table-cell md:pl-0">
             Gesamtbetrag
            </th>
            <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-semibold text-left text-slate-700 sm:hidden">
             Gesamtbetrag
            </th>
            <td id="total" class="pt-4 pl-3 pr-4 text-sm font-normal text-right text-slate-700 whitespace-nowrap sm:pr-6 md:pr-0">
                <script>
                    const netPreis = document.querySelectorAll('.netPreis');
                    const totalCell = document.querySelector('#total');

                    let total= 0;

                    netPreis.forEach(cell => {
                        total += parseInt(cell.innerHTML);
                    });
                    totalCell.insertAdjacentHTML('beforeend',`${total}.00 €`)


                </script>
            </td>
           </tr>


          </tfoot>
         </table>
        </div>
       </div>
    </main>
<x-footer></x-footer>
</body>
</html>

