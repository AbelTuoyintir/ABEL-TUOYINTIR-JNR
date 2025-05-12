<!DOCTYPE html>
<html>
<head>
    <title>Member Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 min-h-screen p-4 fixed">
            <div class="text-white text-xl font-bold mb-8">Admin Panel</div>
            <nav class="space-y-2">
                <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">Dashboard</a>
                <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded bg-gray-700">Members</a>
                <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">Reports</a>
                <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">Settings</a>
            </nav>
            
            <!-- Sidebar Stats -->
            <div class="mt-8 border-t border-gray-700 pt-4">
                <div class="text-white text-sm mb-2">Quick Stats</div>
                <div class="text-white text-xs space-y-2">
                    <div>Total Members: <span id="sidebarTotal" class="font-bold">0</span></div>
                    <div>Positions: <span id="sidebarPositions" class="font-bold">0</span></div>
                    <div>Avg Age: <span id="sidebarAge" class="font-bold">0</span></div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 ml-64">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Member Manager</h1>
                <button onclick="toggleForm()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                    Add Member
                </button>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-gray-500">Total Members</div>
                    <div id="totalMembers" class="text-2xl font-bold">0</div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-gray-500">Positions</div>
                    <div id="totalPositions" class="text-2xl font-bold">0</div>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <div class="text-gray-500">Avg. Age</div>
                    <div id="avgAge" class="text-2xl font-bold">0</div>
                </div>
            </div>

            <!-- Form -->
            <div id="memberForm" class="hidden bg-white p-4 rounded shadow mb-6">
                <input type="hidden" id="memberId">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" id="name" placeholder="Name" class="p-2 border rounded focus:ring-2 focus:ring-blue-500">
                    <input type="text" id="position" placeholder="Position" class="p-2 border rounded focus:ring-2 focus:ring-blue-500">
                    <input type="number" id="age" placeholder="Age" class="p-2 border rounded focus:ring-2 focus:ring-blue-500">
                    <div class="col-span-2 flex gap-2">
                        <button onclick="saveMember()" class="bg-green-500 text-white px-4 py-2 rounded flex-1 hover:bg-green-600">
                            Save
                        </button>
                        <button onclick="toggleForm()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <!-- Member Table -->
            <div class="bg-white rounded shadow overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Position</th>
                            <th class="p-3 text-left">Age</th>
                            <th class="p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="memberList" class="divide-y divide-gray-200">
                        <!-- Members will be populated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        let members = JSON.parse(localStorage.getItem('members')) || [];

        function updateStats() {
            // Update main stats
            document.getElementById('totalMembers').textContent = members.length;
            const positions = [...new Set(members.map(m => m.position))];
            document.getElementById('totalPositions').textContent = positions.length;
            const totalAge = members.reduce((sum, m) => sum + (+m.age), 0);
            const avgAge = members.length ? (totalAge / members.length).toFixed(1) : 0;
            document.getElementById('avgAge').textContent = avgAge;

            // Update sidebar stats
            document.getElementById('sidebarTotal').textContent = members.length;
            document.getElementById('sidebarPositions').textContent = positions.length;
            document.getElementById('sidebarAge').textContent = avgAge;
        }

        function renderMembers() {
            const tbody = document.getElementById('memberList');
            tbody.innerHTML = members.map(member => `
                <tr>
                    <td class="p-3">${member.name}</td>
                    <td class="p-3">${member.position}</td>
                    <td class="p-3">${member.age}</td>
                    <td class="p-3 space-x-2">
                        <button onclick="editMember(${member.id})" 
                                class="text-blue-500 hover:text-blue-700">
                            Edit
                        </button>
                        <button onclick="deleteMember(${member.id})" 
                                class="text-red-500 hover:text-red-700">
                            Delete
                        </button>
                    </td>
                </tr>
            `).join('');
            updateStats();
            localStorage.setItem('members', JSON.stringify(members));
        }

        function toggleForm() {
            const form = document.getElementById('memberForm');
            form.classList.toggle('hidden');
            if (form.classList.contains('hidden')) {
                document.getElementById('memberId').value = '';
                document.getElementById('name').value = '';
                document.getElementById('position').value = '';
                document.getElementById('age').value = '';
            }
        }

        function saveMember() {
            const member = {
                id: document.getElementById('memberId').value || Date.now(),
                name: document.getElementById('name').value,
                position: document.getElementById('position').value,
                age: document.getElementById('age').value
            };

            const index = members.findIndex(m => m.id == member.id);
            if (index > -1) {
                members[index] = member;
            } else {
                members.push(member);
            }
            
            toggleForm();
            renderMembers();
        }

        function editMember(id) {
            const member = members.find(m => m.id == id);
            document.getElementById('memberId').value = member.id;
            document.getElementById('name').value = member.name;
            document.getElementById('position').value = member.position;
            document.getElementById('age').value = member.age;
            toggleForm();
        }

        function deleteMember(id) {
            if (confirm('Delete this member?')) {
                members = members.filter(m => m.id != id);
                renderMembers();
            }
        }

        // Initial render
        renderMembers();
    </script>
</body>
</html>