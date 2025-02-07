<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-4 hidden md:block">
            <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
            <nav>
                <ul class="space-y-4">
                    <li><a href="#" class="block p-2 bg-gray-200 rounded-md">🏠 Home</a></li>
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded-md">📦 Orders</a></li>
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded-md">💳 Payments</a></li>
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded-md">⚙️ Settings</a></li>
                </ul>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Client Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">👤 User Name</span>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Deconnexion</button>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <main class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Cards -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Total Orders</h3>
                    <p class="text-2xl font-bold">120</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Pending Payments</h3>
                    <p class="text-2xl font-bold">$450</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold">Messages</h3>
                    <p class="text-2xl font-bold">5</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>