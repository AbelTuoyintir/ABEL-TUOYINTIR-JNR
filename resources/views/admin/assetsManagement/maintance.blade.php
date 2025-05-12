<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maintenance Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex">

  <!-- Custom Vertical Navigation Bar -->
  <nav class="bg-blue-800 text-white w-64 p-6 space-y-6 h-screen fixed top-0 left-0 flex flex-col justify-between">
    <div>
      <div class="text-2xl font-bold text-center md:text-left">GW AssetSys</div>
      <ul class="mt-8 space-y-4 text-center md:text-left">
        <li><a href="#" class="block hover:text-gray-300">Dashboard</a></li>
        <li><a href="#" class="block hover:text-gray-300">Assets</a></li>
        <li><a href="#" class="block hover:text-gray-300">Maintenance</a></li>
        <li><a href="#" class="block hover:text-gray-300">Reports</a></li>
      </ul>
    </div>
    <div class="text-sm text-center md:text-left text-gray-300">Welcome, Admin</div>
  </nav>

  <!-- Main Content -->
  <main class="ml-64 w-full p-6 space-y-12">

    <!-- Maintenance Calendar -->
    <section id="calendar" class="bg-white p-6 rounded-xl shadow-md">
      <h2 class="text-xl font-bold mb-4">Maintenance Calendar</h2>
      <div class="flex overflow-x-auto gap-6 animate-slide-in">
        <div class="flex-shrink-0 w-60 p-4 border-l-4 border-red-500 bg-red-50 rounded-md shadow-sm transition transform hover:scale-105">
          <h3 class="font-semibold">Server Update</h3>
          <p class="text-sm text-gray-500">Critical - May 15</p>
        </div>
        <div class="flex-shrink-0 w-60 p-4 border-l-4 border-yellow-500 bg-yellow-50 rounded-md shadow-sm transition transform hover:scale-105">
          <h3 class="font-semibold">AC Check</h3>
          <p class="text-sm text-gray-500">Routine - May 20</p>
        </div>
        <div class="flex-shrink-0 w-60 p-4 border-l-4 border-yellow-500 bg-yellow-50 rounded-md shadow-sm transition transform hover:scale-105">
          <h3 class="font-semibold">Network Maintenance</h3>
          <p class="text-sm text-gray-500">Routine - May 25</p>
        </div>
      </div>
    </section>

    <!-- Work Order Page -->
    <section id="workorder" class="bg-white p-6 rounded-xl shadow-md">
      <h2 class="text-xl font-bold mb-4">Create Work Order</h2>
      <form class="space-y-4">
        <div>
          <label class="block text-sm font-medium">Issue Description</label>
          <textarea class="w-full border p-2 rounded-md" placeholder="e.g., Projector not turning on..."></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium">Assign Technician</label>
          <select class="w-full border p-2 rounded-md">
            <option>John Doe</option>
            <option>Mary Smith</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium">Status</label>
          <select class="w-full border p-2 rounded-md">
            <option>Open</option>
            <option>In Progress</option>
            <option>Resolved</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium">Attach Photo</label>
          <input type="file" class="w-full p-2 border rounded-md" />
        </div>
        <div class="flex justify-end">
          <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Submit Ticket</button>
        </div>
      </form>
    </section>

    <!-- Maintenance History -->
    <section id="history" class="bg-white p-6 rounded-xl shadow-md">
      <h2 class="text-xl font-bold mb-4">Maintenance History</h2>
      <input type="text" placeholder="Search by issue or technician..." class="w-full p-2 border mb-4 rounded-md" />

      <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left border border-gray-200">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2">Date</th>
              <th class="px-4 py-2">Issue</th>
              <th class="px-4 py-2">Technician</th>
              <th class="px-4 py-2">Notes</th>
              <th class="px-4 py-2">Resolution Time</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50 border-b">
              <td class="px-4 py-2">2025-04-01</td>
              <td class="px-4 py-2">Printer jam</td>
              <td class="px-4 py-2">Mary Smith</td>
              <td class="px-4 py-2">Cleaned paper tray</td>
              <td class="px-4 py-2">15 mins</td>
            </tr>
            <tr class="hover:bg-gray-50 border-b">
              <td class="px-4 py-2">2025-03-22</td>
              <td class="px-4 py-2">Router offline</td>
              <td class="px-4 py-2">John Doe</td>
              <td class="px-4 py-2">Replaced power supply</td>
              <td class="px-4 py-2">1 hour</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </main>

  <!-- Animation -->
  <style>
    @keyframes slide-in {
      0% { transform: translateX(30px); opacity: 0; }
      100% { transform: translateX(0); opacity: 1; }
    }
    .animate-slide-in {
      animation: slide-in 0.6s ease-out;
    }
  </style>

</body>
</html>
