<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMS - Add Item</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .backdrop-blur {
      backdrop-filter: blur(8px);
      background-color: rgba(255, 255, 255, 0.7);
    }
  </style>
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <aside class="w-56 bg-blue-800 text-white shadow-md flex flex-col justify-between min-h-screen fixed">
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
            <a href="/dashboard" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18M3 7h18M3 11h18M3 15h18M3 19h18" />
              </svg>
              <span>Inventory Overview</span>
            </a>
          </li>
          <li>
            <a href="#" class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2">
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
              </svg>
              <span>Equipment Categories</span>
            </a>
          </li>
          <li>
            <details class="group">
              <summary class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2 cursor-pointer">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
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
          <li>
            <details class="group">
              <summary class="px-5 py-3 hover:bg-blue-700 flex items-center space-x-2 cursor-pointer">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
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
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6h13v6M9 7v-6h13v6M3 7h3v10H3z" />
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
  <main class="ml-56 flex-1 p-8 min-h-screen bg-cover bg-center bg-no-repeat relative" style="background-image: url('/images/dashboard-bg.jpg');">
    <div class="absolute inset-0 bg-white bg-opacity-70 backdrop-blur-sm"></div>

    <div class="relative w-full shadow-lg rounded-lg p-6 bg-white bg-opacity-90 backdrop-blur-sm z-10">
      <h2 class="text-2xl font-semibold text-blue-800 mb-6 text-center">Add Inventory Item</h2>
     
      <form action="{{route ('inventory.store')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @csrf
        <!-- Column 1 -->
        <div class="space-y-4">
          <div>
            <label class="block font-medium">Article</label>
            <input type="text" name="article" class="w-full border rounded p-2" required>
          </div>
          <div>
            <label class="block font-medium">Property Number</label>
            <input type="text" name="property_number" class="w-full border rounded p-2" required>
          </div>
          <div>
            <label class="block font-medium">Model Number</label>
            <input type="text" name="model_number" class="w-full border rounded p-2">
          </div>
          <div>
            <label class="block font-medium">Qty (Property Card)</label>
            <input type="number" name="qty_property_card" class="w-full border rounded p-2" value="0">
          </div>
          <div>
            <label class="block font-medium">Unit Value</label>
            <input type="number" name="unit_value" step="0.01" class="w-full border rounded p-2" value="0.00">
          </div>
        </div>

        <!-- Column 2 -->
        <div class="space-y-4">
          <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="2"></textarea>
          </div>
          <div>
            <label class="block font-medium">Serial Number</label>
            <input type="text" name="serial_number" class="w-full border rounded p-2">
          </div>
          <div>
            <label class="block font-medium">Unit of Measure</label>
            <input type="text" name="unit_of_measure" class="w-full border rounded p-2" required>
          </div>
          <div>
            <label class="block font-medium">Qty (Physical Count)</label>
            <input type="number" name="qty_physical_count" class="w-full border rounded p-2" value="0">
          </div>
          <div>
            <label class="block font-medium">Person Accountable</label>
            <input type="text" name="person_accountable" class="w-full border rounded p-2" required>
          </div>
        </div>

        <!-- Column 3 -->
        <div class="space-y-4">
          <div>
            <label class="block font-medium">Acquisition Date</label>
            <input type="date" name="acquisition_date" class="w-full border rounded p-2">
          </div>
          <div>
            <label class="block font-medium">Shortage</label>
            <input type="number" name="shortage" class="w-full border rounded p-2" value="0">
          </div>
          <div>
            <label class="block font-medium">Category</label>
            <input type="text" name="category" class="w-full border rounded p-2">
          </div>
          <div>
            <label class="block font-medium">Remarks</label>
            <textarea name="remarks" class="w-full border rounded p-2" rows="2"></textarea>
          </div>
          <div>
            <label class="block font-medium">Upload Files (Max 5)</label>
            <input type="file" name="file_path[]" multiple class="w-full border rounded p-2" accept=".jpg,.jpeg,.png,.pdf,.docx,.xlsx,.mp4">
            <p class="text-sm text-gray-500 mt-1">jpg, png, pdf, docx, xlsx, mp4</p>
          </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center pt-6">
          <button type="submit" class="bg-blue-700 text-white px-10 py-3 rounded hover:bg-blue-800">
            Save Item
          </button>
        </div>
      </form>
    </div>
  </main>

</body>
</html>
