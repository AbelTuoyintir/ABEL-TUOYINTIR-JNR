<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ghana Water Asset Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-blue-800 text-white p-4 shadow">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">GWCL Asset Manager</h1>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Dashboard</a>
        <a href="#" class="hover:underline">Assets</a>
        <a href="#" class="hover:underline">Maintenance</a>
        <a href="#" class="hover:underline">Reports</a>
      </div>
    </div>
  </nav>

  <!-- Main Container -->
  <div class="container mx-auto p-4">

    <!-- Login Page -->
    <section id="login" class="max-w-md mx-auto bg-white rounded-lg shadow p-6 my-6">
      <h2 class="text-xl font-semibold mb-4">Login</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Username or Email" class="w-full border p-2 rounded">
        <input type="password" placeholder="Password" class="w-full border p-2 rounded">
        <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">Login</button>
        <a href="#" class="text-sm text-blue-600 block mt-2">Forgot Password?</a>
      </form>
    </section>

    <!-- Registration Page -->
    <section id="register" class="max-w-md mx-auto bg-white rounded-lg shadow p-6 my-6">
      <h2 class="text-xl font-semibold mb-4">Register</h2>
      <form class="space-y-4">
        <input type="text" placeholder="Full Name" class="w-full border p-2 rounded">
        <select class="w-full border p-2 rounded">
          <option>Role</option>
          <option>Admin</option>
          <option>Technician</option>
          <option>Staff</option>
        </select>
        <input type="text" placeholder="Department" class="w-full border p-2 rounded">
        <input type="text" placeholder="Ghana Water ID" class="w-full border p-2 rounded">
        <button class="bg-green-600 text-white px-4 py-2 rounded w-full">Submit</button>
        <p class="text-sm text-gray-500">* Admin approval required</p>
      </form>
    </section>

    <!-- Dashboard Sample -->
    <section id="dashboard" class="grid grid-cols-1 md:grid-cols-3 gap-6 my-6">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold">Total Assets</h3>
        <p class="text-2xl font-bold">1520</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold">Pending Work Orders</h3>
        <p class="text-2xl font-bold">34</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold">Budget Utilization</h3>
        <p class="text-2xl font-bold">75%</p>
      </div>
    </section>

    <!-- Asset Card Example -->
    <section id="asset-tracking" class="bg-white rounded shadow p-6 my-6">
      <h2 class="text-xl font-semibold mb-4">Asset Example</h2>
      <div class="border rounded p-4">
        <p><strong>Asset ID:</strong> GW-ACC-2024-001</p>
        <p><strong>Type:</strong> Server</p>
        <p><strong>Location:</strong> Accra HQ</p>
        <p><strong>Status:</strong> Active</p>
        <p><strong>Warranty:</strong> 12/2025</p>
      </div>
    </section>

    <!-- Work Order Example -->
    <section id="work-order" class="bg-white rounded shadow p-6 my-6">
      <h2 class="text-xl font-semibold mb-4">Work Order Ticket</h2>
      <div class="border p-4 rounded">
        <p><strong>Ticket #:</strong> GW-5678</p>
        <p><strong>Issue:</strong> Server overheating at Accra HQ</p>
        <p><strong>Priority:</strong> <span class="text-red-600 font-bold">High 🔴</span></p>
        <p><strong>Assigned to:</strong> Kwame Mensah (IT Technician)</p>
        <p><strong>Deadline:</strong> 15 Oct 2024</p>
      </div>
    </section>

  </div>

</body>
</html>
