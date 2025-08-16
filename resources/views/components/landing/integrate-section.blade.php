<style>
    @keyframes scroll-down {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-33.33%);
        }
    }

    @keyframes scroll-up {
        0% {
            transform: translateY(-33.33%);
        }

        100% {
            transform: translateY(0);
        }
    }

    .animate-scroll-down {
        animation: scroll-down 8s linear infinite;
    }

    .animate-scroll-up {
        animation: scroll-up 6s linear infinite;
    }

    .animate-scroll-down-slow {
        animation: scroll-down 10s linear infinite;
    }

    .integration-column {
        will-change: transform;
    }
</style>

<section class="py-24 bg-gray-50">
    <div class="container flex lg:flex-row flex-col lg:items-center">
        <div class="w-full lg:w-1/3">
            <h2 class="text-4xl font-semibold text-gray-900 mb-6">Integrate your favorite software seamlessly</h2>
            <p class="text-gray-600 text-lg">US Global Mail integrates with your favorite tools so you can create
                automations, push documents to Dropbox, get notified in Slack, and more.</p>
        </div>
        <div class="w-full lg:w-2/3 flex justify-center">
            <div class="flex gap-6 h-96 overflow-hidden">
                <!-- Column 1 - Top to Bottom -->
                <div class="flex flex-col gap-6 animate-scroll-down integration-column">
                    <!-- First set -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-original.svg"
                            alt="Trello" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Trello</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/zapier.d7260ce3.png"
                            alt="Zapier" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Zapier</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/airtable.2d16606b.png"
                            alt="Asana" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Airtable</span>
                    </div>
                    <!-- Second set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-original.svg"
                            alt="Trello" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Trello</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/zapier/zapier-original.svg"
                            alt="Zapier" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Zapier</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/airtable.2d16606b.png"
                            alt="Asana" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Airtable</span>
                    </div>
                    <!-- Third set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-original.svg"
                            alt="Trello" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Trello</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/zapier/zapier-original.svg"
                            alt="Zapier" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Zapier</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/airtable.2d16606b.png"
                            alt="Asana" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Airtable</span>
                    </div>
                </div>

                <!-- Column 2 - Bottom to Top -->
                <div class="flex flex-col gap-6 animate-scroll-up integration-column">
                    <!-- First set -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/salesforce/salesforce-original.svg"
                            alt="Salesforce" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Salesforce</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/mailchimp.cb7f3377.png"
                            alt="Mailchimp" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Mailchimp</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src=https://www.usglobalmail.com/wp-content/themes/my-daak/public/images/teams.1ac0f650.png"
                            alt="Teams" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Teams</span>
                    </div>
                    <!-- Second set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/salesforce/salesforce-original.svg"
                            alt="Salesforce" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Salesforce</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mailchimp/mailchimp-original.svg"
                            alt="Mailchimp" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Mailchimp</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftteams/microsoftteams-original.svg"
                            alt="Teams" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Teams</span>
                    </div>
                    <!-- Third set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/salesforce/salesforce-original.svg"
                            alt="Salesforce" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Salesforce</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mailchimp/mailchimp-original.svg"
                            alt="Mailchimp" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Mailchimp</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftteams/microsoftteams-original.svg"
                            alt="Teams" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Teams</span>
                    </div>
                </div>

                <!-- Column 3 - Top to Bottom -->
                <div class="flex flex-col gap-6 animate-scroll-down-slow integration-column">
                    <!-- First set -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/confluence/confluence-original.svg"
                            alt="Confluence" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Confluence</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                            alt="Google Meet" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Google Meet</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg"
                            alt="Slack" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Slack</span>
                    </div>
                    <!-- Second set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/confluence/confluence-original.svg"
                            alt="Confluence" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Confluence</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                            alt="Google Meet" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Google Meet</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg"
                            alt="Slack" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Slack</span>
                    </div>
                    <!-- Third set (duplicate) -->
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/confluence/confluence-original.svg"
                            alt="Confluence" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Confluence</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                            alt="Google Meet" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Google Meet</span>
                    </div>
                    <div
                        class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 min-w-[120px] min-h-[120px]">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg"
                            alt="Slack" class="w-10 h-10 mb-2">
                        <span class="text-gray-700 text-sm font-medium">Slack</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
