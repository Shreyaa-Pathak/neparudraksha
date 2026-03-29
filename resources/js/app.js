import './bootstrap';
import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
Alpine.plugin(intersect)
Alpine.start()
window.Alpine = Alpine