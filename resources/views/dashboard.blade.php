<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMS Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">

        <!-- Sidebar -->

<aside class="w-56 bg-blue-800 text-white shadow-md flex flex-col justify-between min-h-screen">
    <div>

        
         <div class="p-4 border-b border-blue-700 flex justify-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto">
        </div>
        <div class="p-4 text-xl font-bold border-b border-blue-700">
            IMS Menu
        </div>
        
        
        <nav class="mt-4">

            
            <ul>
                <li>
                    <a href="#" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3h18M3 7h18M3 11h18M3 15h18M3 19h18" />
                        </svg>
                        <span>Inventory Overview</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        <span>Equipment Categories</span>
                    </a>
                </li>
                <!-- Inventory Status Dropdown -->
                <li>
                    <details class="group">
                        <summary class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2 cursor-pointer">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 5l7 7-7 7" />
                            </svg>
                            <span>Inventory Status</span>
                        </summary>
                        <ul class="pl-10">
                            <li><a href="#" class="block py-2 hover:underline">Serviceable</a></li>
                            <li><a href="#" class="block py-2 hover:underline">Unserviceable</a></li>
                            <li><a href="#" class="block py-2 hover:underline">For Repair</a></li>
                            <li><a href="#" class="block py-2 hover:underline">Disposed</a></li>
                        </ul>
                    </details>
                </li>
                <!-- Transactions Dropdown -->
                <li>
                    <details class="group">
                        <summary class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2 cursor-pointer">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 4v16m8-8H4" />
                            </svg>
                            <span>Transactions</span>
                        </summary>
                        <ul class="pl-10">
                            <li><a href="#" class="block py-2 hover:underline">Issuance</a></li>
                            <li><a href="#" class="block py-2 hover:underline">Return</a></li>
                            <li><a href="#" class="block py-2 hover:underline">Transfer</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="#" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 17v-6h13v6M9 7v-6h13v6M3 7h3v10H3z" />
                        </svg>
                        <span>Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3h18M4 6v13a2 2 0 002 2h12a2 2 0 002-2V6M10 10h4v4h-4z" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 11-4 0v-1m0-4v-1a2 2 0 114 0v1" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-100 p-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">OCD MIMAROPA Inventory Management System</h1>


    <!-- Inventory Table -->
   <div class="bg-white p-6 rounded shadow">
    <div class="bg-white p-6 rounded shadow">
    <div class="mb-4">
        <a href="{{route ('inventory.create')}}"
           class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-400 transition">
            + Add Item
        </a>
    </div>


    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border border-gray-200 text-sm text-left">
            <thead class="bg-blue-800 text-white">
                <tr>
                    <th class="px-4 py-2 border">Article</th>
                    <th class="px-4 py-2 border">Description</th>
                    <th class="px-4 py-2 border">Property Number</th>
                    <th class="px-4 py-2 border">Serial Number</th>
                    <th class="px-4 py-2 border">Model Number</th>
                    <th class="px-4 py-2 border">Unit of Measure</th>
                    <th class="px-4 py-2 border">Qty (Property Card)</th>
                    <th class="px-4 py-2 border">Qty (Physical Count)</th>
                    <th class="px-4 py-2 border">Acquisition Date</th>
                    <th class="px-4 py-2 border">Unit Value</th>
                    <th class="px-4 py-2 border">Person Accountable</th>
                    <th class="px-4 py-2 border">Shortage</th>
                    <th class="px-4 py-2 border">Category</th>
                    <th class="px-4 py-2 border">Remarks</th>
                </tr>
            </thead>
            <tbody class="text-gray-800">
                <!-- Sample Row -->
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border">Chair</td>
                    <td class="px-4 py-2 border">Plastic Chair with metal legs</td>
                    <td class="px-4 py-2 border">PC-00123</td>
                    <td class="px-4 py-2 border">NSWEF223</td>
                    <td class="px-4 py-2 border">Model123</td>
                    <td class="px-4 py-2 border">pcs</td>
                    <td class="px-4 py-2 border text-center">10</td>
                    <td class="px-4 py-2 border text-center">9</td>
                    <td class="px-4 py-2 border text-center">September 2023</td>
                    <td class="px-4 py-2 border text-center">47,490.00</td>
                    <td class="px-4 py-2 border text-center">Jervis Lloyd M. Atilano</td>
                    <td class="px-4 py-2 border text-center">1</td>
                    <td class="px-4 py-2 border text-center">ICT Equipment</td>
                    <td class="px-4 py-2 border">Functional</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

</main>


    </div>

</body>
</html>
