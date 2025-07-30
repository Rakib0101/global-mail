<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8 md:p-12 shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Left Side - Text Content -->
                <div class="space-y-6">
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-600">
                            Let's leave a greener Earth behind for our children
                        </h3>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                            We plant a tree for every<br>
                            <span class="text-blue-600">new member sign up.</span>
                        </h2>
                    </div>
                    
                    <div class="pt-4">
                        <a href="{{ route('register') }}" 
                           class="inline-flex items-center text-lg font-semibold text-blue-600 hover:text-blue-700 transition-colors duration-200 group">
                            Get started today! 
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Side - Tree Illustration -->
                <div class="relative flex justify-center lg:justify-end">
                    <div class="relative w-80 h-80">
                        <!-- Clouds -->
                        <div class="absolute top-8 left-4 w-24 h-16">
                            <div class="w-full h-full bg-white rounded-full shadow-lg relative">
                                <div class="absolute -bottom-1 left-2 w-16 h-8 bg-blue-100 rounded-full"></div>
                                <div class="absolute -bottom-1 right-2 w-12 h-6 bg-blue-100 rounded-full"></div>
                            </div>
                        </div>
                        
                        <div class="absolute top-16 right-8 w-20 h-14">
                            <div class="w-full h-full bg-white rounded-full shadow-lg relative">
                                <div class="absolute -bottom-1 left-1 w-14 h-7 bg-blue-100 rounded-full"></div>
                                <div class="absolute -bottom-1 right-1 w-10 h-5 bg-blue-100 rounded-full"></div>
                            </div>
                        </div>

                        <!-- Earth -->
                        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 w-64 h-32">
                            <div class="w-full h-full bg-gradient-to-b from-blue-400 to-blue-600 rounded-full relative overflow-hidden">
                                <!-- Land masses -->
                                <div class="absolute top-8 left-8 w-16 h-8 bg-green-300 rounded-full"></div>
                                <div class="absolute top-12 right-12 w-12 h-6 bg-green-300 rounded-full"></div>
                                <div class="absolute bottom-8 left-16 w-20 h-10 bg-green-300 rounded-full"></div>
                            </div>
                        </div>

                        <!-- Tree -->
                        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2">
                            <!-- Trunk -->
                            <div class="w-4 h-20 bg-amber-800 mx-auto rounded-full"></div>
                            
                            <!-- Branches and Leaves -->
                            <div class="relative -top-16">
                                <!-- Main foliage -->
                                <div class="w-24 h-24 bg-green-400 rounded-full mx-auto relative">
                                    <!-- Additional leaf clusters -->
                                    <div class="absolute -top-2 -left-2 w-16 h-16 bg-green-300 rounded-full"></div>
                                    <div class="absolute -top-2 -right-2 w-16 h-16 bg-green-300 rounded-full"></div>
                                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-20 h-20 bg-green-500 rounded-full"></div>
                                </div>
                                
                                <!-- Smaller branches -->
                                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-2 h-8 bg-amber-800 rounded-full"></div>
                                <div class="absolute top-6 -left-2 w-2 h-6 bg-amber-800 rounded-full transform -rotate-12"></div>
                                <div class="absolute top-6 -right-2 w-2 h-6 bg-amber-800 rounded-full transform rotate-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
