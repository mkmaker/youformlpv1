<div class="mt-6 flex items-center space-x-1">
    <span>Have a Typeform URL?</span>
    <button 
        x-data="{
            prompt_id: parseInt(Math.random()*1000000),
            appUrl: @js($page->appUrl),
            handlePromptClose() {
                if(this.$event.detail.prompt_id == this.prompt_id && this.$event.detail.prompt_text) {
                    let typeform_url = this.$event.detail.prompt_text;
                    const urlWithoutParams = typeform_url.split('?')[0];
                    typeform_url = urlWithoutParams;
                    if(! this.isValidTypeformUrl(typeform_url)) {
                        $dispatch('notify', {
                            type: 'error',
                            message: 'Hmmm... looks like this is not a valid Typeform URL. Please try again.'
                        })
                        return;
                    }

                    let url = this.appUrl + '/typeform-to-youform?typeform_url=' + typeform_url + '&submit=true';
                    
                    window.location.href = url;
                }
            },
            isValidTypeformUrl(url) {
                const pattern = /^https:\/\/[a-zA-Z0-9-]+\.typeform\.com\/to\/[a-zA-Z0-9]+$/;
                return pattern.test(url);
            },
        }" 
        x-on:click.prevent="
            open = false;
            $dispatch('prompt-show', {
                prompt_id: prompt_id,
                title: 'Enter Typeform URL',
                prompt_text: '',
                input_type: 'text',
                prompt_btn_text: 'Convert to Youform',
                placeholder: 'https://myusername.typeform.com/to/ITPUqM',
                danger: false,
            })
        " 
        x-on:prompt-close.window="handlePromptClose" 
        class="underline group transition-all hover:no-underline">
        Import it now
    </button>
</div>