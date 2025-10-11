@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    ID Requirements for Additional Recipients
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Learn about the identification requirements for adding additional recipients to your iMailVault account
                </p>
            </div>

            <!-- Back to FAQs -->
            <div class="mb-8">
                <a href="{{ route('faqs') }}"
                    class="inline-flex items-center text-primary hover:text-blue-800 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Help Center
                </a>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <div class="prose prose-gray max-w-none">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Additional Recipients Overview</h2>

                    <p class="text-lg text-gray-700 mb-6">Additional recipients are people you authorize to receive mail at
                        your virtual address. Each additional recipient must provide proper identification and complete the
                        required documentation.</p>

                    <div class="bg-blue-50 border-l-4 border-blue-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-blue-900 mb-3">Why Additional Recipients Need ID</h3>
                        <p class="text-blue-800">USPS requires Form 1583 to be completed by each person who will receive
                            mail at the virtual address. This is a federal requirement for all virtual mailbox services.</p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Required Documents</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Primary Identification (Choose One)</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-900 mb-2">Government-Issued Photo ID</h4>
                            <ul class="text-green-800 text-sm space-y-1">
                                <li>• Driver's License</li>
                                <li>• State ID Card</li>
                                <li>• Passport</li>
                                <li>• Military ID</li>
                            </ul>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-900 mb-2">Requirements</h4>
                            <ul class="text-blue-800 text-sm space-y-1">
                                <li>• Must be current (not expired)</li>
                                <li>• Clear, legible copy</li>
                                <li>• All corners visible</li>
                                <li>• Color copy preferred</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Secondary Identification (Choose One)</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-yellow-900 mb-2">Acceptable Documents</h4>
                            <ul class="text-yellow-800 text-sm space-y-1">
                                <li>• Social Security Card</li>
                                <li>• Birth Certificate</li>
                                <li>• Utility Bill (recent)</li>
                                <li>• Bank Statement (recent)</li>
                                <li>• Lease Agreement</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-900 mb-2">Not Acceptable</h4>
                            <ul class="text-red-800 text-sm space-y-1">
                                <li>• Expired documents</li>
                                <li>• Photocopies of photocopies</li>
                                <li>• Damaged or unclear copies</li>
                                <li>• Documents older than 3 months</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Form 1583 Requirements</h2>

                    <p class="text-gray-700 mb-4">Each additional recipient must complete Form 1583, which includes:</p>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Personal Information</h4>
                                <p class="text-gray-700">Full name, date of birth, and contact information</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Identification Details</h4>
                                <p class="text-gray-700">ID type, number, and issuing authority</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Notarization</h4>
                                <p class="text-gray-700">Form must be notarized by a certified notary public</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Authorization</h4>
                                <p class="text-gray-700">Permission to receive mail at the virtual address</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Adding Additional Recipients</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Step-by-Step Process</h3>

                    <ol class="list-decimal pl-6 space-y-2 text-gray-700 mb-6">
                        <li>Log into your iMailVault account</li>
                        <li>Go to "Account Settings" → "Additional Recipients"</li>
                        <li>Click "Add New Recipient"</li>
                        <li>Enter the recipient's personal information</li>
                        <li>Upload required identification documents</li>
                        <li>Download and complete Form 1583</li>
                        <li>Have the form notarized</li>
                        <li>Upload the completed and notarized form</li>
                        <li>Submit for verification</li>
                    </ol>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Verification Process</h2>

                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">What Happens Next</h3>
                        <ul class="text-gray-700 space-y-2">
                            <li>• Documents are reviewed within 1-2 business days</li>
                            <li>• Additional information may be requested</li>
                            <li>• Verification email sent upon approval</li>
                            <li>• Recipient can start receiving mail immediately</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Special Circumstances</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Minors (Under 18)</h3>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <ul class="text-yellow-800 space-y-2">
                            <li>• Parent or guardian must complete Form 1583</li>
                            <li>• Minor's birth certificate required</li>
                            <li>• Parent/guardian ID required</li>
                            <li>• Special authorization forms needed</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">International Recipients</h3>
                    <div class="bg-blue-50 border-l-4 border-blue-400 p-6 mb-6">
                        <ul class="text-blue-800 space-y-2">
                            <li>• Passport required as primary ID</li>
                            <li>• Visa or work permit may be needed</li>
                            <li>• Additional documentation may be required</li>
                            <li>• Processing time may be longer</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Common Issues</h2>

                    <div class="space-y-4 mb-6">
                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-900 mb-2">Rejected Applications</h4>
                            <p class="text-red-800 text-sm">Common reasons for rejection include expired IDs, unclear
                                copies, missing notarization, or incomplete forms.</p>
                        </div>

                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-900 mb-2">Quick Approval Tips</h4>
                            <p class="text-green-800 text-sm">Ensure all documents are current, clear, and complete.
                                Double-check that Form 1583 is properly notarized.</p>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Need Help with Additional Recipients?</h3>
                        <p class="text-gray-700 mb-4">Our support team can guide you through the process and help resolve
                            any issues.</p>
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
