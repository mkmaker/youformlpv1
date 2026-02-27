@php
    // Use custom suggestions if provided, otherwise fall back to pageType defaults
    if (isset($customSuggestions) && !empty($customSuggestions)) {
        $suggestions = $customSuggestions;
    } else {
        $suggestions = [];
        if ($pageType === 'quiz') {
            $suggestions = [
                'Create a 10-question quiz about world geography',
                'Make a personality quiz: What type of leader are you?',
                'Build a product knowledge quiz for new employees',
                'Generate a pop culture trivia quiz',
                'Create a math quiz for 5th graders',
                'Make a lead gen quiz: Which marketing strategy fits your business?',
            ];
        } elseif ($pageType === 'form') {
            $suggestions = [
                'Create a contact form for a consulting business',
                'Build a job application form with resume upload',
                'Make a client intake form for a web design agency',
                'Create an event registration form with meal preferences',
                'Build a feedback form for a SaaS product',
                'Make a booking form for a photography studio',
            ];
        } elseif ($pageType === 'survey') {
            $suggestions = [
                'Create a customer satisfaction survey for an e-commerce store',
                'Build an employee engagement survey with rating scales',
                'Make a market research survey about coffee drinking habits',
                'Create a post-event feedback survey',
                'Build an NPS survey with follow-up questions',
                'Make a product feedback survey for a mobile app',
            ];
        }
    }
@endphp

<div x-data="{
    appUrl: @js($page->aiApiUrl ?? $page->appUrl),
    pageType: '{{ $pageType }}',
    state: 'idle',
    prompt: '',
    loadingMessages: [
        'Thinking...',
        'Understanding your requirements...',
        'Planning your {{ $ctaVerb }}...',
        'Adding questions...',
        'Setting up logic...',
        'Almost there...'
    ],
    currentMessageIndex: 0,
    loadingInterval: null,
    formUrl: '',
    showModal: false,
    errorMessage: '',
    suggestions: @js($suggestions),

    selectSuggestion(text) {
        this.prompt = text;
        this.$nextTick(() => this.$refs.promptTextarea.focus());
    },

    async generate() {
        if (!this.prompt.trim()) return;

        this.state = 'loading';
        this.currentMessageIndex = 0;
        this.errorMessage = '';

        this.loadingInterval = setInterval(() => {
            this.currentMessageIndex = (this.currentMessageIndex + 1) % this.loadingMessages.length;
        }, 2500);

        try {
            const response = await fetch(this.appUrl + '/api/public/ai/forms/generate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ prompt: this.prompt }),
            });

            const data = await response.json();

            if (!response.ok || data.error) {
                let msg = data.error || data.message || 'Something went wrong. Please try again.';
                if (response.status === 429) {
                    msg = 'You have generated too many forms. Please login to generate more :)';
                }
                throw new Error(msg);
            }

            this.formUrl = data.data?.form_url || data.form_url || data.url;
            this.state = 'success';
            this.showModal = true;
        } catch (error) {
            this.state = 'error';
            this.errorMessage = error.message || 'Something went wrong. Please try again.';
        } finally {
            clearInterval(this.loadingInterval);
            this.loadingInterval = null;
        }
    },

    closeModal() {
        this.showModal = false;
    },

    reset() {
        this.state = 'idle';
        this.prompt = '';
        this.formUrl = '';
        this.showModal = false;
        this.errorMessage = '';
    }
}">

    <!-- Hero Text -->
    <div class="text-center max-w-4xl mx-auto">
        <p class="text-xs font-semibold px-4 py-1.5 rounded-full mb-3 lg:mb-4 bg-pale-violet border border-black inline-block">
            {{ $badgeText }}
        </p>
        <h1 class="text-3xl sm:text-5xl xl:text-6xl font-bold xl:leading-tight">
            {{ $heading }}
        </h1>
        <p class="text-base mt-6 max-w-3xl mx-auto">
            {{ $description }}
        </p>
    </div>

    <!-- AI Prompt Card -->
    <div class="mt-8 max-w-2xl mx-auto px-4 sm:px-0">
        <div class="bg-white border-2 border-black rounded-xl drop-shadow-3xl p-4 sm:p-6">

            <!-- Idle / Error State: Textarea + Submit -->
            <div x-show="state === 'idle' || state === 'error'">
                <div class="relative">
                    <textarea
                        x-ref="promptTextarea"
                        x-model="prompt"
                        @keydown.meta.enter="generate()"
                        @keydown.ctrl.enter="generate()"
                        rows="3"
                        placeholder="Describe the {{ $ctaVerb }} you want to create..."
                        class="w-full resize-none border-0 bg-transparent text-base sm:text-lg placeholder-gray-400 focus:ring-0 focus:outline-none p-2"
                    ></textarea>
                </div>

                <!-- Error message inline -->
                <div x-show="state === 'error'" x-cloak class="px-2 pb-2">
                    <p class="text-sm text-red-600" x-text="errorMessage"></p>
                </div>

                <!-- Submit row -->
                <div class="flex items-center justify-between mt-2 pt-3 border-t border-gray-200">
                    <p class="text-xs text-gray-400 hidden sm:block">
                        <kbd class="px-1.5 py-0.5 bg-gray-100 rounded text-gray-500 border border-gray-200 text-[10px]">&#8984;</kbd>
                        +
                        <kbd class="px-1.5 py-0.5 bg-gray-100 rounded text-gray-500 border border-gray-200 text-[10px]">Enter</kbd>
                        to generate
                    </p>
                    <button
                        @click="generate()"
                        :disabled="!prompt.trim()"
                        :class="prompt.trim()
                            ? 'bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl text-black'
                            : 'bg-gray-200 border-2 border-gray-300 cursor-not-allowed text-gray-400'"
                        class="px-6 py-2 rounded-md font-semibold text-sm transition-all"
                    >
                        Generate {{ $ctaVerb }}
                    </button>
                </div>
            </div>

            <!-- Loading State -->
            <div x-show="state === 'loading'" x-cloak class="py-8 text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <span class="ai-dot ai-dot-1 inline-block w-2.5 h-2.5 rounded-full bg-coral"></span>
                    <span class="ai-dot ai-dot-2 inline-block w-2.5 h-2.5 rounded-full bg-coral"></span>
                    <span class="ai-dot ai-dot-3 inline-block w-2.5 h-2.5 rounded-full bg-coral"></span>
                </div>
                <p class="text-gray-600 font-medium text-lg ai-loading-text"
                   x-text="loadingMessages[currentMessageIndex]">
                </p>
            </div>

            <!-- Success State (when modal is closed) -->
            <div x-show="state === 'success' && !showModal" x-cloak class="py-6 text-center">
                <svg class="w-10 h-10 text-green-500 mx-auto mb-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                </svg>
                <p class="text-lg font-semibold text-gray-900">Your {{ $ctaVerb }} is ready!</p>
                <div class="mt-4 flex items-center justify-center space-x-3">
                    <button @click="showModal = true"
                        class="bg-coral border-2 border-black drop-shadow-3xl hover:drop-shadow-4xl px-6 py-2 rounded-md font-semibold text-sm text-black transition-all">
                        View {{ $ctaVerb }}
                    </button>
                    <button @click="reset()"
                        class="text-gray-500 hover:text-gray-700 underline text-sm">
                        Create another
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Suggestion Chips -->
    <div x-show="state === 'idle' || state === 'error'" class="mt-5 max-w-2xl mx-auto px-4 sm:px-0">
        <p class="text-xs text-gray-600 mb-2.5 font-medium text-center">Try one of these:</p>
        <div class="flex flex-wrap gap-2 justify-center">
            <template x-for="(suggestion, index) in suggestions" :key="index">
                <button
                    @click="selectSuggestion(suggestion)"
                    x-text="suggestion"
                    class="text-xs px-3 py-1.5 rounded-full bg-white/80 border border-gray-300 hover:border-black hover:drop-shadow-3xl transition-all text-gray-600 hover:text-black max-w-[300px] truncate"
                ></button>
            </template>
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="text-sm pt-6 font-semibold flex items-center justify-center space-x-4">
        <div class="flex items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
            </svg>
            <span>Unlimited responses</span>
        </div>
        <div class="flex items-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-600">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
            </svg>
            <span>No credit card required</span>
        </div>
    </div>

    <!-- Form Preview Modal -->
    <div x-show="showModal" x-cloak class="fixed inset-0 z-50 overflow-y-auto" @keydown.escape.window="closeModal()">
        <!-- Backdrop -->
        <div x-show="showModal"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-900/80"
             @click="closeModal()">
        </div>

        <!-- Modal Content -->
        <div class="flex items-center justify-center min-h-screen p-4">
            <div x-show="showModal"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 @click.stop
                 class="relative bg-white rounded-xl border-2 border-black drop-shadow-4xl w-full max-w-4xl max-h-[90vh] overflow-hidden z-10">

                <!-- Modal Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                    <h3 class="font-semibold text-lg">Your generated {{ $ctaVerb }}</h3>
                    <div class="flex items-center space-x-4">
                        <a :href="formUrl" target="_blank" class="text-sm text-gray-500 hover:text-black underline">
                            Open in new tab
                        </a>
                        <button @click="closeModal()" class="text-gray-400 hover:text-black transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Iframe -->
                <div class="h-[75vh]">
                    <iframe x-bind:src="showModal ? formUrl : ''"
                            class="w-full h-full border-0"
                            loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
