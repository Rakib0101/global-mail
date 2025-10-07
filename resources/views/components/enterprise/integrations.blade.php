<!-- Integrations Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-sm font-semibold tracking-wide uppercase text-blue-500">Connections</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-4 mb-6">
                Integrate into your workflows
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Send digitized documents to Slack, Dropbox, or your favorite tools. Automatically. Smart integration
                enables triggering, blocking, and automation.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Left Column - Integration Features -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 828 2.828a2 2 0            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Smart Workflow Triggers</h3>
                            <p class="text-gray-600">Automatically route documents based on content, sender, or keywords to the right team members.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" M4 16v1a3 3 0
                                    003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Automated Document Delivery</h3>
                            <p class="text-gray-600">Files are automatically uploaded to your cloud storage and
                                notifications sent to relevant team channels.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728l-12.728-12.728">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Block & Filter Automation</h3>
                            <p class="text-gray-600">Automatically archive junk mail, block spam, and route urgent items
                                to priority queues.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Integration Platform Demo -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">Integration Dashboard</h3>

                    <!-- Integration Cards -->
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/integrations/slack.svg') }}" alt="Slack"
                                        class="w-8 h-8 mr-3">
                                    <div>
                                        <div class="font-medium text-gray-900">Slack</div>
                                        <div class="text-sm text-gray-600">Instant notifications</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-xs text-green-600">Active</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/integrations/dropbox.svg') }}" alt="Dropbox"
                                        class="w-8 h-8 mr-3">
                                    <div>
                                        <div class="font-medium text-gray-900">Dropbox</div>
                                        <div class="text-sm text-gray-600">Auto file upload</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-xs text-green-600">Active</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/integrations/outlook.svg') }}" alt="Outlook"
                                        class="w-8 h-8 mr-3">
                                    <div>
                                        <div class="font-medium text-gray-900">Outlook</div>
                                        <div class="text-sm text-gray-600">Email routing</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                    <span class="text-xs text-yellow-600">Pending</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/integrations/excel.svg') }}" alt="Excel"
                                        class="w-8 h-8 mr-3">
                                    <div>
                                        <div class="font-medium text-gray-900">Excel</div>
                                        <div class="text-sm text-gray-600">Data extraction</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-xs text-green-600">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Webhook Configuration -->
                    <div class="mt-6 pt-6 border-t">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Custom Webhook</h4>
                        <div class="bg-gray-100 rounded-lg p-3">
                            <code class="text-xs text-gray-700">https://your-app.com/webhook/usgm</code>
                        </div>
                        <button class="mt-2 text-sm text-blue-600 hover:text-blue-700">Copy URL</button>
                    </div>
                </div>
            </div>

            <!-- App Integration Grid -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-12">Popular Integrations</h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                    <!-- Slack -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition-shadow duration-300">
                        <img src="{{ asset('assets/images/integrations/slack.svg') }}" alt="Slack"
                            class="w-16 h-16 mx-auto mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Slack</h4>
                        <p class="text-sm text-gray-600">Team notifications & alerts</p>
                    </div>

                    <!-- Microsoft Teams -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition-shadow duration-300">
                        <img src="{{ asset('assets/images/integrations/teams.svg') }}" alt="Microsoft Teams"
                            class="w-16 h-16 mx-auto mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Teams</h4>
                        <p class="text-sm text-gray-600">Office 365 integration</p>
                    </div>

                    <!-- Google Workspace -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition-shadow duration-300">
                        <img src="{{ asset('assets/images/integrations/google.svg') }}" alt="Google Workspace"
                            class="w-16 h-16 mx-auto mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Google Drive</h4>
                        <p class="text-sm text-gray-600">Cloud file storage</p>
                    </div>

                    <!-- Dropbox -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition-shadow duration-300">
                        <img src="{{ asset('assets/images/integrations/dropbox.svg') }}" alt="Dropbox"
                            class="w-16 h-16 mx-auto mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Dropbox</h4>
                        <p class="text-sm text-gray-600">Business file sharing</p>
                    </div>

                    <!-- Outlook -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm text-center hover:shadow-md transition-shadow duration-300">
                        <img src="{{ asset('assets/images/integrations/outlook.svg') }}" alt="Outlook"
                            class="w-16 h-16 mx-auto mb-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Outlook</h4>
                        <p class="text-sm text-gray-600">Email automation</p>
                    </div>
                </div>
            </div>

            <!-- Developer Tools -->
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Developer-Friendly</h3>
                        <p class="text-lg text-gray-600 mb-6">
                            Powerful APIs and webhooks make it easy to integrate iMailVault into your existing
                            workflows and applications.
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                RESTful API with comprehensive documentation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Real-time webhook notifications
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                SDKs for popular programming languages
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h4 class="font-semibold text-gray-900 mb-4">Webhook Example</h4>
                        <pre class="bg-gray-100 rounded-lg p-4 text-sm overflow-x-auto"><code>{
  "event": "mail.received",
  "timestamp": "2024-01-15T10:30:00Z",
  "data": {
    "mail_id": "abc123",
    "sender": "utility@company.com",
    "subject": "Monthly Statement",
    "scanned_url": "https://files.usgm.com/abc123.pdf",
    "priority": "normal"
  }
}</code></pre>
                        <div class="mt-4 flex space-x-3">
                            <button
                                class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                                View API Docs
                            </button>
                            <button
                                class="flex-1 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors duration-200">
                                Get API Key
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
