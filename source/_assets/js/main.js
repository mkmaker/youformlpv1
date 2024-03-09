import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

window.Alpine = Alpine

Alpine.plugin(intersect)

window.copyToClipboard = function (text) {
    var textarea = document.createElement('textarea');
    textarea.value = text;
    textarea.setAttribute('readonly', '');
    textarea.style.position = 'absolute';
    textarea.style.left = '-9999px';
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
}
 
Alpine.start()