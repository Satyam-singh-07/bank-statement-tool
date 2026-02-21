@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-file-pdf text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Processed</p>
                    <p class="text-2xl font-semibold">247</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">This Month</p>
                    <p class="text-2xl font-semibold">32</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Pending</p>
                    <p class="text-2xl font-semibold">5</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <i class="fas fa-university text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Banks Supported</p>
                    <p class="text-2xl font-semibold">3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Workflow Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Step 1: Upload PDF -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold flex items-center">
                    <span
                        class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-2">1</span>
                    Upload Statement PDF
                </h3>
            </div>
            <div class="p-6">
                <div
                    class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-500 transition">
                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                    <p class="text-gray-600 mb-2">Drag & drop your PDF here</p>
                    <p class="text-sm text-gray-500 mb-4">or</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Browse Files
                    </button>
                    <p class="text-xs text-gray-400 mt-3">
                        Supported: SBI, HDFC, Kotak PDFs
                    </p>
                </div>

                <!-- Bank Selection -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Select Bank (Optional)</label>
                    <select
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Auto-detect bank</option>
                        <option value="sbi">State Bank of India (SBI)</option>
                        <option value="hdfc">HDFC Bank</option>
                        <option value="kotak">Kotak Mahindra Bank</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Step 2: Add Entries -->
        <div class="bg-white rounded-lg shadow lg:col-span-2">
            <div class="p-6 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold flex items-center">
                    <span
                        class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-2">2</span>
                    Add Transaction Entries
                </h3>
                <button class="text-blue-600 text-sm hover:text-blue-800">
                    <i class="fas fa-plus-circle mr-1"></i> Add Multiple
                </button>
            </div>
            <div class="p-6">
                <!-- Account Details Section -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h4 class="text-md font-semibold mb-4">Account Details</h4>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Customer Name
                            </label>
                            <input type="text" placeholder="Enter customer name"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Account Number
                            </label>
                            <input type="text" placeholder="Enter account number"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                IFSC Code
                            </label>
                            <input type="text" placeholder="Enter IFSC code"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 uppercase focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>
                </div>

                <!-- Date Range -->
                <div class="bg-gray-50 p-4 rounded-lg mb-6">
                    <h4 class="text-md font-semibold mb-4">Date Range</h4>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Begin Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Begin Date
                            </label>
                            <input type="date"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <!-- End Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                End Date
                            </label>
                            <input type="date"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>
                    </div>
                </div>

                <!-- Entry Form -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Entry Date
                        </label>
                        <input type="date"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Amount (₹)
                        </label>
                        <input type="number" placeholder="0.00"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Description
                        </label>
                        <input type="text" placeholder="Transaction description"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Transaction Type
                        </label>
                        <select
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Credit</option>
                            <option>Debit</option>
                        </select>
                    </div>
                </div>

                <!-- Recurring Option -->
                <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label class="ml-2 text-sm text-gray-700">Make this a recurring monthly entry</label>
                    </div>
                    <select class="text-sm border border-gray-300 rounded px-2 py-1" disabled>
                        <option>Every month</option>
                        <option>Every quarter</option>
                    </select>
                </div>

                <!-- Added Entries List -->
                <div class="mt-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">
                        Entries to Add (3)
                    </h4>
                    <div class="space-y-2 max-h-48 overflow-y-auto">
                        <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <span class="text-sm font-medium">15 Mar 2024</span>
                                <span class="text-sm text-green-600">+₹5,000</span>
                                <span class="text-sm text-gray-600">Salary Credit</span>
                            </div>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <span class="text-sm font-medium">15 Mar 2024</span>
                                <span class="text-sm text-red-600">-₹1,200</span>
                                <span class="text-sm text-gray-600">Electricity Bill</span>
                            </div>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <span class="text-sm font-medium">16 Mar 2024</span>
                                <span class="text-sm text-red-600">-₹3,500</span>
                                <span class="text-sm text-gray-600">Grocery Store</span>
                            </div>
                            <button class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step 3 & 4: Generate Output -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold flex items-center">
                <span
                    class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-2">3</span>
                Generate Updated Statement
            </h3>
        </div>
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                        <span>Original: statement_march_2024.pdf</span>
                    </div>
                    <i class="fas fa-arrow-right text-gray-400"></i>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-file-pdf text-green-500 mr-2"></i>
                        <span>Updated: statement_march_2024_updated.pdf</span>
                    </div>
                </div>
                <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 flex items-center">
                    <i class="fas fa-play mr-2"></i>
                    Generate PDF
                </button>
            </div>

            <!-- Processing Status (conditional) -->
            <div class="mt-4 bg-blue-50 p-4 rounded-lg hidden">
                <div class="flex items-center">
                    <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-blue-600 mr-3"></div>
                    <span class="text-sm text-blue-600">Processing your PDF... Please wait</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold">Recent Processing History</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Date
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            File Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Bank
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Entries Added
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm">2024-03-15</td>
                        <td class="px-6 py-4 text-sm">sbi_statement_mar.pdf</td>
                        <td class="px-6 py-4 text-sm">SBI</td>
                        <td class="px-6 py-4 text-sm">3 entries</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm">2024-03-14</td>
                        <td class="px-6 py-4 text-sm">hdfc_statement_mar.pdf</td>
                        <td class="px-6 py-4 text-sm">HDFC</td>
                        <td class="px-6 py-4 text-sm">5 entries</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Completed</span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm">2024-03-13</td>
                        <td class="px-6 py-4 text-sm">kotak_statement_feb.pdf</td>
                        <td class="px-6 py-4 text-sm">Kotak</td>
                        <td class="px-6 py-4 text-sm">2 entries</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded-full">Processing</span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
