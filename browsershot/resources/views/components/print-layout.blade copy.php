<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bg-black {
        background-color: #1e2028;
        }
        .bg-white {
        background-color: #fafbf6;
        }

    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- <header>
    <img class="h-16 " src="https://www.aks-service.de/wp-content/uploads/2022/10/aks_waben.png" alt="">
    <h1 class="-mt-12 ">aks-Service-GmbH</h1>

</header>


    <h1 class="mt-10 bg-red-500 text-xl text-white ">Hello Browsershot</h1>
</section> -->


<section>
    <div class="max-w-5xl mx-auto py-16 bg-white">
     <article class="overflow-hidden">
      <div class="bg-[white] rounded-b-md">
       <div class="p-9">
        <div class="text-slate-700 flex space-x-5 items-center">
         <img class="object-cover h-12" src="https://www.aks-service.de/wp-content/uploads/2022/10/aks_waben.png" />

         <p class="text-xl font-extrabold tracking-tight uppercase font-body">
          aks-Service-GmbH
         </p>
        </div>
       </div>
       <div class="p-9">
        <div class="flex w-full">
         <div class="grid grid-cols-4 gap-12">
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">
            Invoice Detail:
           </p>
           <p>aks-Service-GmbH</p>
           <p>Fake Street 123</p>
           <p>Niedegen</p>
           <p>CA 1234</p>
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Billed To</p>
           <p>The Company</p>
           <p>The Street 007</p>
           <p>Düselldorf</p>
           <p>CA 0000</p>
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Invoice Number</p>
           <p>000000</p>

           <p class="mt-2 text-sm font-normal text-slate-700">
            Date of Issue
           </p>
           <p>00.00.00</p>
          </div>
          <div class="text-sm font-light text-slate-500">
           <p class="text-sm font-normal text-slate-700">Terms</p>
           <p>0 Days</p>

           <p class="mt-2 text-sm font-normal text-slate-700">Due</p>
           <p>00.00.00</p>
          </div>
         </div>
        </div>
       </div>

       <div class="p-9">
        <div class="flex flex-col mx-0 mt-8">
         <table class="min-w-full divide-y divide-slate-500">
          <thead>
           <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
             Description
            </th>
            <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
             Quantity
            </th>
            <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
             Rate
            </th>
            <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-normal text-slate-700 sm:pr-6 md:pr-0">
             Amount
            </th>
           </tr>
          </thead>
          <tbody>
           {{$slot}}

           <!-- Here you can write more products/tasks that you want to charge for-->
          </tbody>
          <tfoot>
           <tr>
            <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
             Subtotal
            </th>
            <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
             Subtotal
            </th>
            <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
             $0.00
            </td>
           </tr>
           <tr>
            <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
             Discount
            </th>
            <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
             Discount
            </th>
            <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
             $0.00
            </td>
           </tr>
           <tr>
            <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
             Tax
            </th>
            <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
             Tax
            </th>
            <td class="pt-4 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
             $0.00
            </td>
           </tr>
           <tr>
            <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-right text-slate-700 sm:table-cell md:pl-0">
             Total
            </th>
            <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-normal text-left text-slate-700 sm:hidden">
             Total
            </th>
            <td class="pt-4 pl-3 pr-4 text-sm font-normal text-right text-slate-700 sm:pr-6 md:pr-0">
             $0.00
            </td>
           </tr>
           <tr class="border-t mt-9 border-slate-200">
            <td>
            <p class="text-sm">Bankkonto usw.....</p>

            </td>
           </tr>
          </tfoot>
         </table>
        </div>
       </div>

       <div>

       </div>

       <div class="mt-48 p-9">
        <div class="border-t pt-9 border-slate-200">
         <div class="text-sm font-light text-slate-700">
          <p>
           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis accusamus, consequatur nulla ratione debitis vero, consequuntur sed molestiae fugiat ullam veritatis facere, at ex optio. Earum, doloribus? Quod laudantium sequi eum eligendi, quae ab voluptas. Molestiae a numquam libero reiciendis, pariatur assumenda ad distinctio aliquid, ipsam, expedita culpa quia voluptas reprehenderit? Neque dolorum harum quae quos officiis odio blanditiis nemo velit perspiciatis animi aliquid quibusdam, ipsum, nam culpa ut excepturi ab accusamus. Non, veniam iusto! Corporis aut tempora saepe excepturi laudantium quis dolore magnam ratione porro natus, veniam nostrum perspiciatis odio quidem perferendis quibusdam minima hic quas vero praesentium quos.
          </p>
         </div>
        </div>
       </div>
      </div>
     </article>
    </div>
   </section>

</body>
</html>
