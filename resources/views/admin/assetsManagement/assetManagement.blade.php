<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Asset Inventory Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="flex flex-col md:flex-row min-h-screen">
    
    <!-- Sidebar -->
    <nav class="bg-blue-800 text-white w-full md:w-64 p-6 space-y-6">
      <div class="text-2xl font-bold text-center md:text-left">GW AssetSys</div>
      <ul class="space-y-4 text-center md:text-left">
        <li><a href="#" class="block hover:text-gray-300">Dashboard</a></li>
        <li><a href="#" class="block hover:text-gray-300">Assets</a></li>
        <li><a href="#" class="block hover:text-gray-300">Maintenance</a></li>
        <li><a href="#" class="block hover:text-gray-300">Reports</a></li>
      </ul>
      <div class="mt-8 text-sm text-center md:text-left text-gray-300">Welcome, Admin</div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 max-w-7xl mx-auto py-10 px-4 space-y-12">

      <!-- Asset List Page -->
      <section class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold">Asset Inventory</h2>
          <div class="flex gap-2">
            <!-- Fixed button type -->
            <button type="button" id="openModalBtn" class="bg-green-500 text-white px-4 py-2 rounded-md">+ Add Asset</button>
            <button type="button" id="openModalBtn" class="bg-yellow-500 text-white px-4 py-2 rounded-md">+ Add Region</button>
            <button type="button" id="openModalBtn" class="bg-red-400 text-white px-4 py-2 rounded-md">+ Add Office</button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Export CSV</button>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
          <select class="border p-2 rounded-md">
            <option>All Types</option>
            <option>Server</option>
            <option>Laptop</option>
            <option>Router</option>
          </select>
          <select class="border p-2 rounded-md">
            <option>All Locations</option>
            <option>HQ</option>
            <option>Branch A</option>
          </select>
          <select class="border p-2 rounded-md">
            <option>Status</option>
            <option>Active</option>
            <option>Retired</option>
          </select>
          <input type="text" placeholder="Search..." class="border p-2 rounded-md" />
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full table-auto border border-gray-200">
            <thead class="bg-gray-100">
              <tr>
                <th class="px-4 py-2 text-left">Asset Name</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Location</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-50 border-b">
                <td class="px-4 py-2">Dell Laptop</td>
                <td class="px-4 py-2">Laptop</td>
                <td class="px-4 py-2">HQ</td>
                <td class="px-4 py-2 text-green-600 font-semibold">Active</td>
                <td class="px-4 py-2">
                  <button class="text-blue-500 hover:underline mr-2">Edit</button>
                  <button class="text-yellow-500 hover:underline mr-2">Transfer</button>
                  <button class="text-red-500 hover:underline">Retire</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Modal -->
      <div id="addAssetModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white p-6 rounded-xl w-full max-w-md">
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Add New Asset</h3>
            <button onclick="closeModal()" class="text-red-500 text-lg font-bold">&times;</button>
          </div>
          <form onsubmit="event.preventDefault(); closeModal();">
            <div class="mb-4">
              <label class="block text-sm font-medium">Asset Name</label>
              <input type="text" class="w-full border p-2 rounded-md" placeholder="e.g., Dell Laptop">
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium">Type</label>
              <select class="w-full border p-2 rounded-md">
                <option>Laptop</option>
                <option>Server</option>
                <option>Router</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium">Location</label>
              <input type="text" class="w-full border p-2 rounded-md" placeholder="e.g., HQ">
            </div>
            <div class="mb-4">
              <label class="block text-sm font-medium">Status</label>
              <select class="w-full border p-2 rounded-md">
                <option>Active</option>
                <option>Retired</option>
              </select>
            </div>
            <div class="flex justify-end gap-2">
              <button type="button" onclick="closeModal()" class="px-4 py-2 border rounded-md">Cancel</button>
              <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Save</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Asset Detail Page -->
      <section class="bg-white p-6 rounded-xl shadow">
        <div class="mb-6">
          <h2 class="text-2xl font-semibold mb-1">Dell Laptop - #ASSET123</h2>
          <p class="text-sm text-gray-500">Purchased: 2023-01-15 | Warranty Expiry: 2026-01-15</p>
        </div>

        <div class="mb-6">
          <h3 class="text-lg font-bold mb-2">Specifications</h3>
          <ul class="list-disc ml-6 text-sm text-gray-700">
            <li>Serial Number: SN123456789</li>
            <li>Vendor: Dell</li>
            <li>Location: HQ</li>
          </ul>
        </div>

        <div class="mb-6">
          <h3 class="text-lg font-bold mb-2">Maintenance History</h3>
          <ul class="text-sm">
            <li class="mb-1">2024-06-01: Replaced battery - <span class="text-green-600">Resolved</span></li>
            <li class="mb-1">2023-09-12: Screen flicker issue - <span class="text-green-600">Resolved</span></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-bold mb-2">Documents</h3>
          <ul class="text-blue-600 text-sm">
            <li><a href="#" class="hover:underline">Invoice.pdf</a></li>
            <li><a href="#" class="hover:underline">Warranty.pdf</a></li>
          </ul>
        </div>
      </section>

    </main>
  </div>

  <!-- Modal Script -->
  <script>
    const modal = document.getElementById('addAssetModal');
    const openModalBtn = document.getElementById('openModalBtn');

    openModalBtn.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });

    function closeModal() {
      modal.classList.add('hidden');
    }
  </script>
</body>
</html>
