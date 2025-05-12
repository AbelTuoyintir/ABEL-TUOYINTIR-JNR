<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="flex flex-col md:flex-row min-h-screen">
    <!-- Vertical Navigation Bar -->
    <nav class="bg-blue-800 text-white w-full md:w-64 p-6 space-y-6 md:h-auto">
      <div class="text-2xl font-bold text-center md:text-left">GW AssetSys</div>
      <ul class="space-y-4 text-center md:text-left">
        <li><a href="#" class="block hover:text-gray-300">Dashboard</a></li>
        <li><a href="#" class="block hover:text-gray-300">Assets</a></li>
        <li><a href="#" class="block hover:text-gray-300">Maintenance</a></li>
        <li><a href="#" class="block hover:text-gray-300">Reports</a></li>
      </ul>
      <div class="mt-8 md:mt-auto text-sm text-center md:text-left text-gray-300">Welcome, Admin</div>
    </nav>

    <!-- Page Content Wrapper -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        <span class="text-sm text-gray-600">Welcome Admin</span>
      </header>

      <!-- Main Content -->
      <main class="p-4 sm:p-6 space-y-6 w-full">

        <!-- Overview Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-box fa-2x text-blue-600 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Total Assets</h2>
            <p class="text-3xl font-bold text-blue-600">312</p>
          </div>
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-box-open fa-2x text-blue-600 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Total Active Assets</h2>
            <p class="text-3xl font-bold text-blue-600">312</p>
          </div>
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-tools fa-2x text-blue-600 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Total Assets Repaired</h2>
            <p class="text-3xl font-bold text-blue-600">312</p>
          </div>
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-exclamation-triangle fa-2x text-red-500 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Maintenance Alerts</h2>
            <p class="text-3xl font-bold text-red-500">8</p>
          </div>
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-trash-alt fa-2x text-red-500 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Total Damaged Assets</h2>
            <p class="text-3xl font-bold text-red-500">8</p>
          </div>
          <div class="bg-white p-4 rounded shadow text-center">
            <i class="fas fa-chart-line fa-2x text-green-600 mb-2"></i>
            <h2 class="text-lg font-semibold mb-2">Budget Utilization</h2>
            <p class="text-3xl font-bold text-green-600">76%</p>
          </div>
        </section>

        <!-- Recent Asset Activity -->
        <section class="bg-white p-4 rounded shadow">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                    </svg>
                Last 30 days
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow-sm">
                <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                    <li>
                    <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last day</label>
                    </div>
                    </li>
                    <li>
                    <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                        <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last 7 days</label>
                    </div>
                    </li>
                    <li>
                    <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last 30 days</label>
                    </div>
                    </li>
                    <li>
                    <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last month</label>
                    </div>
                    </li>
                    <li>
                    <div class="flex items-center p-2 rounded-sm hover:bg-gray-100">
                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm">Last year</label>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
            </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Apple Watch
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $179
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    iPad
                </th>
                <td class="px-6 py-4">
                    Gold
                </td>
                <td class="px-6 py-4">
                    Tablet
                </td>
                <td class="px-6 py-4">
                    $699
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
                <tr class="bg-white hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Apple iMac 27"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    PC Desktop
                </td>
                <td class="px-6 py-4">
                    $3999
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                </td>
                </tr>
            </tbody>
            </table>
        </div>


        </section>

        <!-- Quick Links -->
        <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="bg-blue-600 text-white p-4 rounded shadow text-center hover:bg-blue-700 transition">
            <h3 class="text-lg font-semibold mb-4">Procurement Requests</h3>
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 border border-gray-200">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 border-b">Request ID</th>
                    <th scope="col" class="px-6 py-3 border-b">Item</th>
                    <th scope="col" class="px-6 py-3 border-b">Quantity</th>
                    <th scope="col" class="px-6 py-3 border-b">Status</th>
                    <th scope="col" class="px-6 py-3 border-b">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">PR001</td>
                    <td class="px-6 py-4">Laptops</td>
                    <td class="px-6 py-4">10</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Approved</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">PR002</td>
                    <td class="px-6 py-4">Printers</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4 text-yellow-600 font-medium">Pending</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                  <tr class="bg-white hover:bg-gray-50">
                    <td class="px-6 py-4">PR003</td>
                    <td class="px-6 py-4">Office Chairs</td>
                    <td class="px-6 py-4">20</td>
                    <td class="px-6 py-4 text-red-600 font-medium">Rejected</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
           <div class="bg-blue-600 text-white p-4 rounded shadow text-center hover:bg-blue-700 transition">
            <h3 class="text-lg font-semibold">Audit Logs</h3>
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 border border-gray-200">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                  <tr>
                    <th scope="col" class="px-6 py-3 border-b">Request ID</th>
                    <th scope="col" class="px-6 py-3 border-b">Item</th>
                    <th scope="col" class="px-6 py-3 border-b">Quantity</th>
                    <th scope="col" class="px-6 py-3 border-b">Status</th>
                    <th scope="col" class="px-6 py-3 border-b">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">PR001</td>
                    <td class="px-6 py-4">Laptops</td>
                    <td class="px-6 py-4">10</td>
                    <td class="px-6 py-4 text-green-600 font-medium">Approved</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">PR002</td>
                    <td class="px-6 py-4">Printers</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4 text-yellow-600 font-medium">Pending</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                  <tr class="bg-white hover:bg-gray-50">
                    <td class="px-6 py-4">PR003</td>
                    <td class="px-6 py-4">Office Chairs</td>
                    <td class="px-6 py-4">20</td>
                    <td class="px-6 py-4 text-red-600 font-medium">Rejected</td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           </div>
        </section>

      </main>
    </div>
  </div>

</body>
</html>
