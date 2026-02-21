@extends('layouts.app')

@section('title', 'New Statement')
@section('page-title', 'Generate New Statement')

@section('content')

    <!-- Page Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Generate PDF Statement
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Select bank, view existing entries, and add new transactions
        </p>
    </div>

    <!-- Bank Selection Card -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-800">
                    1. Select Bank Statement
                </h2>
                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Phase 1 Supported</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Bank Cards -->
                <div class="border-2 border-blue-500 bg-blue-50 rounded-lg p-4 cursor-pointer relative">
                    <div class="absolute top-2 right-2">
                        <i class="fas fa-check-circle text-blue-500"></i>
                    </div>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-university text-blue-600"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="font-semibold">SBI Bank</h3>
                            <p class="text-xs text-gray-500">v1 Format</p>
                        </div>
                    </div>
                </div>

                <div class="border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-300">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-university text-gray-600"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="font-semibold">HDFC Bank</h3>
                            <p class="text-xs text-gray-500">v1 Format</p>
                        </div>
                    </div>
                </div>

                <div class="border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-300">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-university text-gray-600"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="font-semibold">Kotak Bank</h3>
                            <p class="text-xs text-gray-500">v1 Format</p>
                        </div>
                    </div>
                </div>

                <!-- <div
                        class="border-2 border-dashed border-gray-200 rounded-lg p-4 flex items-center justify-center text-gray-400"
                      >
                        <i class="fas fa-plus mr-2"></i>
                        <span class="text-sm">Add New Bank</span>
                      </div> -->
            </div>

            <!-- PDF Upload Section (shown after bank selection) -->
            <div class="mt-6 pt-6 border-t">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="font-medium text-gray-700">
                            Upload Statement PDF
                        </h3>
                        <p class="text-sm text-gray-500">
                            sbi_statement_march_2024.pdf
                        </p>
                    </div>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600">
                        <i class="fas fa-upload mr-2"></i>Upload New
                    </button>
                </div>

                <!-- PDF Preview Info -->
                <div class="mt-3 bg-gray-50 rounded-lg p-3 flex items-center justify-between">
                    <div class="flex items-center">
                        <i class="fas fa-file-pdf text-red-500 text-xl mr-3"></i>
                        <div>
                            <p class="text-sm font-medium">
                                Current File: sbi_statement_mar2024.pdf
                            </p>
                            <p class="text-xs text-gray-500">
                                Uploaded: 15 Mar 2024 • 2.4 MB
                            </p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Existing Entries Card -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6 border-b flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">
                    2. Existing Statement Entries
                </h2>
                <p class="text-sm text-gray-500">
                    March 2024 - SBI Bank Statement
                </p>
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">
                    <i class="fas fa-filter mr-1"></i>Filter
                </button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">
                    <i class="fas fa-sort mr-1"></i>Sort
                </button>
            </div>
        </div>

        <!-- Entries Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Date
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Description
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Debit
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Credit
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Balance
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-sm">01 Mar 2024</td>
                        <td class="px-6 py-3 text-sm">Opening Balance</td>
                        <td class="px-6 py-3 text-sm text-gray-500">-</td>
                        <td class="px-6 py-3 text-sm text-green-600">₹25,000.00</td>
                        <td class="px-6 py-3 text-sm font-medium">₹25,000.00</td>
                        <td class="px-6 py-3 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-sm">03 Mar 2024</td>
                        <td class="px-6 py-3 text-sm">ATM Withdrawal</td>
                        <td class="px-6 py-3 text-sm text-red-600">₹5,000.00</td>
                        <td class="px-6 py-3 text-sm text-gray-500">-</td>
                        <td class="px-6 py-3 text-sm font-medium">₹20,000.00</td>
                        <td class="px-6 py-3 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-sm">05 Mar 2024</td>
                        <td class="px-6 py-3 text-sm">Salary Credit</td>
                        <td class="px-6 py-3 text-sm text-gray-500">-</td>
                        <td class="px-6 py-3 text-sm text-green-600">₹45,000.00</td>
                        <td class="px-6 py-3 text-sm font-medium">₹65,000.00</td>
                        <td class="px-6 py-3 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-sm">10 Mar 2024</td>
                        <td class="px-6 py-3 text-sm">Electricity Bill</td>
                        <td class="px-6 py-3 text-sm text-red-600">₹3,200.00</td>
                        <td class="px-6 py-3 text-sm text-gray-500">-</td>
                        <td class="px-6 py-3 text-sm font-medium">₹61,800.00</td>
                        <td class="px-6 py-3 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-sm">15 Mar 2024</td>
                        <td class="px-6 py-3 text-sm">Grocery Store</td>
                        <td class="px-6 py-3 text-sm text-red-600">₹2,500.00</td>
                        <td class="px-6 py-3 text-sm text-gray-500">-</td>
                        <td class="px-6 py-3 text-sm font-medium">₹59,300.00</td>
                        <td class="px-6 py-3 text-sm">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="px-6 py-3 border-t bg-gray-50 flex justify-between items-center">
            <p class="text-sm text-gray-500">Showing 5 of 23 entries</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-100">
                    Previous
                </button>
                <button class="px-3 py-1 text-sm bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    1
                </button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-100">
                    2
                </button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-100">
                    3
                </button>
                <button class="px-3 py-1 text-sm border border-gray-300 rounded-lg hover:bg-gray-100">
                    Next
                </button>
            </div>
        </div>
    </div>

    <!-- Date Range Section -->
    <div class="bg-white rounded-lg shadow lg:col-span-2 mb-6">
        <div class="p-6 border-b">
            <h2 class="text-lg font-semibold text-gray-800">
                3. Select Date Range
            </h2>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Begin Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Begin Date
                    </label>
                    <input type="date" name="begin_date"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- End Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        End Date
                    </label>
                    <input type="date" name="end_date"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
            </div>
        </div>
    </div>

    <!-- Create New Entry Card -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6 border-b">
            <h2 class="text-lg font-semibold text-gray-800">
                4. Create New Entry
            </h2>
            <p class="text-sm text-gray-500">
                Add a new transaction to the statement
            </p>
        </div>

        <div class="p-6">
            <!-- Entry Form Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Transaction Date *</label>
                    <input type="date" value="2024-03-20"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                    <input type="text" placeholder="Enter description"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Amount *</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2 text-gray-500">₹</span>
                        <input type="number" placeholder="0.00"
                            class="w-full pl-8 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Transaction Type *</label>
                    <select
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="credit">Credit (+)</option>
                        <option value="debit">Debit (-)</option>
                    </select>
                </div>
            </div>

            <!-- Additional Fields Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Reference/Cheque No.</label>
                    <input type="text" placeholder="Optional"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select category</option>
                        <option value="salary">Salary</option>
                        <option value="utilities">Utilities</option>
                        <option value="shopping">Shopping</option>
                        <option value="food">Food & Dining</option>
                        <option value="transfer">Transfer</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                    <input type="text" placeholder="Additional notes"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
            </div>

            <!-- Recurring Entry Option -->
            <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label class="ml-2 text-sm text-gray-700">Make this a recurring monthly entry</label>
                    </div>
                    <select class="text-sm border border-gray-300 rounded-lg px-3 py-1 bg-white" disabled>
                        <option>Every month on this date</option>
                        <option>Every quarter</option>
                        <option>Every year</option>
                    </select>
                </div>
                <p class="text-xs text-gray-500 mt-2 ml-6">
                    Recurring entries will be automatically added to future
                    statements
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex items-center justify-end space-x-3">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                    Clear Form
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Add Entry to Statement
                </button>
            </div>
        </div>
    </div>

    <!-- Pending New Entries Card -->
    <div class="bg-white rounded-lg shadow mb-6">
        <div class="p-6 border-b flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">
                    Pending New Entries
                </h2>
                <p class="text-sm text-gray-500">
                    Review entries before generating PDF
                </p>
            </div>
            <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">3 entries pending</span>
        </div>

        <!-- Pending Entries List -->
        <div class="p-6">
            <div class="space-y-3">
                <!-- Entry 1 -->
                <div class="flex items-center justify-between bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                    <div class="flex items-center space-x-6">
                        <div class="w-24">
                            <span class="text-sm font-medium">20 Mar 2024</span>
                        </div>
                        <div class="w-24">
                            <span class="text-sm text-green-600 font-medium">+₹15,000</span>
                        </div>
                        <div class="w-64">
                            <span class="text-sm">Consulting Fee - March</span>
                            <p class="text-xs text-gray-500">Ref: INV-2024-015</p>
                        </div>
                        <div>
                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Recurring</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Entry 2 -->
                <div class="flex items-center justify-between bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                    <div class="flex items-center space-x-6">
                        <div class="w-24">
                            <span class="text-sm font-medium">21 Mar 2024</span>
                        </div>
                        <div class="w-24">
                            <span class="text-sm text-red-600 font-medium">-₹4,500</span>
                        </div>
                        <div class="w-64">
                            <span class="text-sm">Office Supplies</span>
                            <p class="text-xs text-gray-500">
                                Category: Business Expense
                            </p>
                        </div>
                        <div>
                            <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded-full">One-time</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Entry 3 -->
                <div class="flex items-center justify-between bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                    <div class="flex items-center space-x-6">
                        <div class="w-24">
                            <span class="text-sm font-medium">22 Mar 2024</span>
                        </div>
                        <div class="w-24">
                            <span class="text-sm text-red-600 font-medium">-₹2,800</span>
                        </div>
                        <div class="w-64">
                            <span class="text-sm">Internet Bill</span>
                            <p class="text-xs text-gray-500">Provider: Airtel</p>
                        </div>
                        <div>
                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Recurring</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Generate PDF Button -->
            <div class="mt-6 flex items-center justify-between bg-blue-50 p-4 rounded-lg">
                <div>
                    <p class="text-sm font-medium text-blue-800">
                        Ready to generate updated statement
                    </p>
                    <p class="text-xs text-blue-600">
                        3 new entries will be added to sbi_statement_mar2024.pdf
                    </p>
                </div>
                <button class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 flex items-center">
                    <i class="fas fa-file-pdf mr-2"></i>
                    Generate Updated PDF
                </button>
            </div>
        </div>
    </div>

    <!-- Preview Modal (Hidden by default) -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center" id="previewModal">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-screen overflow-y-auto">
            <div class="p-6 border-b flex justify-between items-center">
                <h3 class="text-lg font-semibold">PDF Preview</h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="closePreview()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <div class="bg-gray-100 h-96 rounded-lg flex items-center justify-center">
                    <i class="fas fa-file-pdf text-6xl text-gray-400"></i>
                    <p class="text-gray-500 ml-4">PDF Preview Area</p>
                </div>
            </div>
            <div class="p-6 border-t flex justify-end space-x-3">
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    Close
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Download PDF
                </button>
            </div>
        </div>
    </div>

@endsection
