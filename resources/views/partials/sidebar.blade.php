{{--
|--------------------------------------------------------------------------
| Sidebar Partial - TripWise TNVS
|--------------------------------------------------------------------------
| Usage: @include('partials.sidebar')
| Requires: $currentPage variable (string) from the parent view
--}}

<aside id="navigia-sidebar" class="fixed top-0 left-0 h-full z-40 flex flex-col transition-all duration-300 w-64 overflow-x-hidden" style="background-color:#1c1c1e;">

    <!-- Sidebar Header: Logo & Brand -->
    <div class="flex items-center gap-3 px-4 py-5 border-b border-white/10 flex-shrink-0 overflow-hidden">
        <a href="{{ url('/') }}" class="flex items-center gap-3 min-w-0">
            <div class="w-9 h-9 overflow-hidden rounded-xl border border-[#F44336]/40 bg-white flex-shrink-0 flex items-center justify-center p-0.5">
                <img src="{{ asset('tripwise_icon.png') }}" alt="TripWise" class="w-full h-full object-contain">
            </div>
            <span class="sidebar-text text-lg font-extrabold text-white tracking-tight truncate" style="font-family:'Outfit',sans-serif;">
                TripWise<span style="color:#F44336;">.</span>
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1" id="sidebar-nav">

        <!-- Overview -->
        <a href="{{ url('/dashboard') }}"
           class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 group {{ (isset($currentPage) && $currentPage === 'dashboard') ? 'bg-[#F44336] text-white' : 'text-white/80 hover:bg-white/10 hover:text-white' }}">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span class="sidebar-text truncate">Dashboard</span>
        </a>

        <!-- Divider Label -->
        <div class="px-3 pt-4 pb-1">
            <span class="sidebar-text text-[10px] font-bold uppercase tracking-widest text-white/30">TNVS Systems</span>
        </div>

        <!-- 1. HRMS -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('hrms-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white {{ (isset($currentPage) && str_starts_with($currentPage, 'hrms')) ? 'bg-white/10 text-white' : '' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Human Resources</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="hrms-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="hrms-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Recruitment & Onboarding</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Shift & Attendance</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Payroll & Benefits</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Performance Management</a>
            </div>
        </div>

        <!-- 2. Financial -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('finance-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white {{ (isset($currentPage) && str_starts_with($currentPage, 'finance')) ? 'bg-white/10 text-white' : '' }}">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Financial Management</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="finance-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="finance-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">General Ledger</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Accounts Payable / AR</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Budget & Cash Management</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Tax Management</a>
            </div>
        </div>

        <!-- 3. Supply Chain -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('supply-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Supply Chain</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="supply-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="supply-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Smart Warehousing</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Procurement & Sourcing</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Supplier Management</a>
            </div>
        </div>

        <!-- 4. Fleet -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('fleet-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Fleet & Transport</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="fleet-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="fleet-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Vehicle Reservation & Dispatch</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Fuel Management</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Route Planning</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Cost Analysis (TCAO)</a>
            </div>
        </div>

        <!-- 5. Facilities -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('facilities-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Facilities & Admin</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="facilities-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="facilities-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Facilities Reservation</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Visitor Management</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Document Archiving</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Legal & Contracts</a>
            </div>
        </div>

        <!-- 6. TNVS Operations -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('operations-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">TNVS Operations</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="operations-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="operations-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Dispatching & Trip Mgmt</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Driver Information</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Driver Wallet & Earnings</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Supplies Management</a>
            </div>
        </div>

        <!-- 7. Booking & CX -->
        <div class="sidebar-group">
            <button onclick="toggleGroup('booking-group')"
                class="sidebar-link w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 text-white/80 hover:bg-white/10 hover:text-white">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                </svg>
                <span class="sidebar-text flex-1 text-left truncate">Booking & CX</span>
                <svg class="sidebar-text w-3 h-3 flex-shrink-0 transition-transform duration-200" id="booking-group-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="booking-group" class="hidden ml-4 mt-1 space-y-0.5 border-l border-white/10 pl-3">
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Booking System</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">Payment & Fare Collection</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">CRM</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">GPS Tracking</a>
                <a href="#" class="block text-xs text-white/60 hover:text-white py-1.5 transition-colors">KPI Analytics</a>
            </div>
        </div>

    </nav>

    <!-- Sidebar Footer -->
    <div class="flex-shrink-0 px-4 py-4 border-t border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-[#F44336]/20 flex items-center justify-center text-[#F44336] text-xs font-bold flex-shrink-0">
                A
            </div>
            <div class="sidebar-text flex-1 min-w-0">
                <p class="text-xs font-bold text-white truncate">Admin User</p>
                <p class="text-[10px] text-white/40 truncate">admin@tripwise.app</p>
            </div>
            <a href="#" class="sidebar-text text-white/40 hover:text-white transition-colors flex-shrink-0" title="Sign out">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
            </a>
        </div>
    </div>

</aside>

<!-- Mobile Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden lg:hidden" onclick="closeMobileSidebar()"></div>
