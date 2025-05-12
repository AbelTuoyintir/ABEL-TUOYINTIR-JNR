<!DOCTYPE html>
<html lang="en" x-data="{ tab: 'login' }">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Login/Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>

  <!-- Background Wrapper -->
<div class="min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('image/OLC.jfif') }}'); background-size: cover; background-position: center; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: darken;">

    <!-- Tab Container -->
    <div class="max-w-md w-full bg-white bg-opacity-90 backdrop-blur-sm rounded-lg shadow p-6">
      <!-- Tabs -->
      <div class="flex justify-between mb-6">
        <button @click="tab = 'login'" :class="tab === 'login' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600'" class="w-1/2 py-2 font-semibold focus:outline-none">Login</button>
        <button @click="tab = 'register'" :class="tab === 'register' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-600'" class="w-1/2 py-2 font-semibold focus:outline-none">Register</button>
      </div>

      <!-- Login Form -->
      <div x-show="tab === 'login'" x-transition>
        <h4 class="text-center text-gray-700 font-semibold mb-4">Don't have an account? Register on the other tab</h4>
        <form class="space-y-4">
          <input type="text" placeholder="Username or Email" class="w-full border p-2 rounded">
          <input type="password" placeholder="Password" class="w-full border p-2 rounded">
          <button class="bg-blue-600 text-white px-4 py-2 rounded w-full">Login</button>
          <a href="#" class="text-sm text-blue-600 block mt-2 text-center">Forgot Password?</a>
        </form>
      </div>

      <!-- Register Form -->
      <div x-show="tab === 'register'" x-transition>
        <form class="space-y-4">
          <input type="text" placeholder="Full Name" class="w-full border p-2 rounded">
          <input type="email" placeholder="Email" class="w-full border p-2 rounded">
          <input type="text" placeholder="Role (admin, technician, staff)" class="w-full border p-2 rounded">
          <input type="text" placeholder="Department" class="w-full border p-2 rounded">
          <input type="text" placeholder="Ghana Water ID" class="w-full border p-2 rounded">
          <input type="password" placeholder="Password" class="w-full border p-2 rounded">
          <button class="bg-green-600 text-white px-4 py-2 rounded w-full">Register</button>
        </form>
      </div>
    </div>

  </div>

</body>
</html>
