Nova.booting((Vue, router) => {
    Vue.component('index-nova-trumbowyg', require('./components/IndexField'));
    Vue.component('detail-nova-trumbowyg', require('./components/DetailField'));
    Vue.component('form-nova-trumbowyg', require('./components/FormField'));
})
