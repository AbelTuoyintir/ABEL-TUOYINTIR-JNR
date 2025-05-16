<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-screen bg-gray-100 font-sans">
  <!-- Sidebar -->
  <x-admin-navbar />

  <!-- Page Wrapper -->
  <div class="flex flex-col flex-1">
    <!-- Top Header -->
    <x-header />
    <!-- Main Content -->
    <main class="flex-1 p-6 space-y-8">
      <!-- Reports & Analytics Title -->
      <div>
        <h2 class="text-3xl font-bold text-gray-900">Reports & Analytics</h2>
      </div>

      <!-- Pre-Built Reports Section -->
      <section class="bg-white rounded-xl shadow-md p-6">
        <h3 class="text-xl font-semibold text-blue-600 mb-4">Pre-Built Reports</h3>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
          <li>Asset depreciation (e.g., 5-year lifecycle cost)</li>
          <li>Downtime analysis by region/equipment type</li>
        </ul>
      </section>

      <!-- Custom Report Generator Section -->
      <section class="bg-white rounded-xl shadow-md p-6">
        <h3 class="text-xl font-semibold text-blue-600 mb-6">Custom Report Generator</h3>
        <form class="space-y-6">
          <!-- Date Range -->
          <div>
            <label class="font-medium block mb-2">Date Range</label>
            <div class="flex flex-col md:flex-row gap-4">
              <input type="date"
                class="w-full md:w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
              <input type="date"
                class="w-full md:w-1/2 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
          </div>

          <!-- Location -->
          <div>
            <label for="location" class="font-medium block mb-2">Location</label>
            <select id="location"
              class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="">Select Location</option>
              <option value="north">North</option>
              <option value="south">South</option>
              <option value="east">East</option>
              <option value="west">West</option>
            </select>
          </div>

          <!-- Asset Category -->
          <div>
            <label for="asset" class="font-medium block mb-2">Asset Category</label>
            <select id="asset"
              class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="">Select Category</option>
              <option value="servers">Servers</option>
              <option value="network">Networking Equipment</option>
              <option value="storage">Storage Devices</option>
            </select>
          </div>

          <!-- Buttons -->
          <div class="flex flex-wrap gap-4 pt-4">
            <button type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-medium">
              Generate Report
            </button>
            <button type="button"
              class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-medium">
              Export PDF
            </button>
            <button type="button"
              class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg font-medium">
              Export Excel
            </button>
          </div>
        </form>
      </section>
    </main>
  </div>
</div>
